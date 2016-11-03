<?php

require ($_SERVER["DOCUMENT_ROOT"] . '/bitrix/modules/main/include/prolog_before.php');
$output['RESULT'] = array();

if (isset($_POST['products']) && is_array($_POST['products'])) {
  if (CModule::IncludeModule("sale") && CModule::IncludeModule("catalog")) {
    foreach ($_POST['products'] as $product_id => $qty) {
      $product_id = intval($product_id);
      $qty = intval($qty);
      $output['RESULT'][$product_id] = Add2BasketByProductID($product_id, $qty);
    }

    if ($output['NUM_PRODUCTS'] = $_SESSION["SALE_BASKET_NUM_PRODUCTS"][SITE_ID]) {
      $fUserID = IntVal(CSaleBasket::GetBasketUserID(True));
      if ($fUserID) {
        $arFilter = array(
          "FUSER_ID" => $fUserID, 
          "LID"      => SITE_ID, 
          "ORDER_ID" => "NULL",
          "CAN_BUY" => "Y",
        );
        /*
        $arSelect = array(
          "ID", "NAME", "QUANTITY", "PRICE",
        );
         * 
         */
        $res = CSaleBasket::GetList(false, $arFilter, false, false, $arSelect);
        $total_price = 0;
        $items = array();
        while ($row = $res->Fetch()) {
          $items[] = $row;
          $total_price += $row['PRICE'] * $row['QUANTITY'];
        }
      }

      $output['NUM_PRODUCTS_LABEL'] = formatPlural($output['NUM_PRODUCTS'], array('товаров', 'товар', 'товара'));
      $output['TOTAL_PRICE'] = $total_price;
      $output['TOTAL_PRICE_FORMATTED'] = number_format($total_price, 0, '.', ' ');
      //$output['ITEMS'] = $items;
    }
  }
}

echo json_encode($output);

require ($_SERVER["DOCUMENT_ROOT"] . '/bitrix/modules/main/include/epilog_after.php');
