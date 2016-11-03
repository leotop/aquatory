<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оформление заказа");

//$anonymous_orders_user = tmg_getAnonymousOrdersUser();
?>


<section class="shadow_bottom_container">
  <h3 class="back_link"><a class="link_with_arrow" href="/personal/cart/"><span>Корзина</span></a></h3>
  <h1><?$APPLICATION->ShowTitle(false);?></h1>
</section>

<?$APPLICATION->IncludeComponent("aqua:sale.order.ajax", ".default", array(
  "PAY_FROM_ACCOUNT" => "Y",
  "ONLY_FULL_PAY_FROM_ACCOUNT" => "N",
  "COUNT_DELIVERY_TAX" => "N",
  "ALLOW_AUTO_REGISTER" => "N",
  "SEND_NEW_USER_NOTIFY" => "Y",
  "DELIVERY_NO_AJAX" => "N",
  "DELIVERY_NO_SESSION" => "N",
  "TEMPLATE_LOCATION" => "popup",
  "DELIVERY_TO_PAYSYSTEM" => "d2p",
  "USE_PREPAYMENT" => "N",
  "ALLOW_ANONYMOUS_ORDERS" => "Y",
  //"ANONYMOUS_ORDERS_USER_ID" => $anonymous_orders_user['ID'],
  "PROP_1" => array(
  ),
  "PROP_2" => array(
  ),
  "PATH_TO_BASKET" => "/personal/cart/",
  "PATH_TO_PERSONAL" => "/personal/order/",
  "PATH_TO_PAYMENT" => "/personal/order/payment/",
  "PATH_TO_AUTH" => "/auth/",
  "SET_TITLE" => "Y",
  "PRODUCT_COLUMNS" => array(
  ),
  "DISABLE_BASKET_REDIRECT" => "N",

  "ALLOW_ANONYMOUS_ORDERS" => "Y",
  "FORCE_ANONYMOUS_ORDERS" => "Y",
  "TARGET_PRODUCTS" => AQUA_ORDER_TARGET_BASKET,
  ),
  false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>