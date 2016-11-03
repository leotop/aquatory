<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оборудование");


$catalog_iblock = iblock_getIblockInfo("equipment");
$price = catalog_getBasePrice();


?>

<? $APPLICATION->IncludeComponent("bitrix:catalog", "equipment", array(
    "IBLOCK_TYPE" => $catalog_iblock['IBLOCK_TYPE_ID'],
    "IBLOCK_ID" => $catalog_iblock['ID'],
    "BASKET_URL" => "/personal/cart/",
    "ACTION_VARIABLE" => "action",
    "PRODUCT_ID_VARIABLE" => "id",
    "SECTION_ID_VARIABLE" => "SECTION_ID",
    "PRODUCT_QUANTITY_VARIABLE" => "quantity",
    "PRODUCT_PROPS_VARIABLE" => "prop",
    "SEF_MODE" => "Y",
    "SEF_FOLDER" => "/magazin/",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "AJAX_OPTION_HISTORY" => "N",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "36000000",
    "CACHE_FILTER" => "Y",
    "CACHE_GROUPS" => "N",

    "ADD_SECTIONS_CHAIN" => "Y",
    "SET_TITLE" => "Y",
    "SET_STATUS_404" => "Y",
    "USE_ELEMENT_COUNTER" => "Y",
    "USE_FILTER" => "Y",
    "USE_REVIEW" => "N",
    "USE_COMPARE" => "N",
    "PRICE_CODE" => array($price['NAME']),
    "USE_PRICE_COUNT" => "Y",
    "SHOW_PRICE_COUNT" => "1",
    "PRICE_VAT_INCLUDE" => "Y",
    "PRICE_VAT_SHOW_VALUE" => "N",
    "PRODUCT_PROPERTIES" => array(
    ),
    "USE_PRODUCT_QUANTITY" => "N",
    "CONVERT_CURRENCY" => "N",
    "OFFERS_CART_PROPERTIES" => array(
    ),
    "SHOW_TOP_ELEMENTS" => "N",
    "TOP_ELEMENT_COUNT" => "8",
    "TOP_LINE_ELEMENT_COUNT" => "3",
    "TOP_ELEMENT_SORT_FIELD" => "sort",
    "TOP_ELEMENT_SORT_ORDER" => "asc",
    "TOP_PROPERTY_CODE" => array(
      0 => "",
      1 => "",
    ),
    "TOP_OFFERS_FIELD_CODE" => array(
      0 => "",
      1 => "",
    ),
    "TOP_OFFERS_PROPERTY_CODE" => array(
      0 => "",
      1 => "",
    ),
    "TOP_OFFERS_LIMIT" => "5",
    "SECTION_COUNT_ELEMENTS" => "N",
    "SECTION_TOP_DEPTH" => "1",
    "PAGE_ELEMENT_COUNT" => "12",
    "LINE_ELEMENT_COUNT" => "3",
    "ELEMENT_SORT_FIELD" => "NAME",
    "ELEMENT_SORT_ORDER" => "ASC",
    "LIST_PROPERTY_CODE" => array(
    // Почему свойства товара вытаскиваются через result_modifier, а не здесь?
    // Потому что по непонятной причине компонент начинает жутко тормозить (не из-за БД!)
    /*
      0 => "CML2_ARTICLE",
      1 => "MIN_PRICE",
      2 => "PRODUCT_TYPE",
      3 => "CML2_ARTICLE",
    */
    ),
    "INCLUDE_SUBSECTIONS" => "Y",
    "LIST_META_KEYWORDS" => "UF_PAGE_KEYWORDS",
    "LIST_META_DESCRIPTION" => "UF_PAGE_DESC",
    "LIST_BROWSER_TITLE" => "UF_PAGE_TITLE",
    "LIST_OFFERS_FIELD_CODE" => array(
      0 => "",
      1 => "",
    ),
    "LIST_OFFERS_PROPERTY_CODE" => array(
      0 => "SIZE",
      1 => "",
    ),
    "LIST_OFFERS_LIMIT" => "5",
    "DETAIL_PROPERTY_CODE" => array(
      0 => "",
      1 => "",
    ),
    "DETAIL_META_KEYWORDS" => "PAGE_KEYWORDS",
    "DETAIL_META_DESCRIPTION" => "PAGE_DESC",
    "DETAIL_BROWSER_TITLE" => "PAGE_TITLE",
    "DETAIL_OFFERS_FIELD_CODE" => array(
      0 => "NAME",
    ),
    "DETAIL_OFFERS_PROPERTY_CODE" => array(
      0 => "SIZE",
    ),
    "LINK_IBLOCK_TYPE" => "",
    "LINK_IBLOCK_ID" => "",
    "LINK_PROPERTY_SID" => "",
    "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
    "USE_ALSO_BUY" => "N",
    "USE_STORE" => "N",
    "OFFERS_SORT_FIELD" => "sort",
    "OFFERS_SORT_ORDER" => "asc",
    "DISPLAY_TOP_PAGER" => "N",
    "DISPLAY_BOTTOM_PAGER" => "Y",
    "PAGER_TITLE" => "Товары",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => "arrows",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "N",
    "PATH_TO_SHIPPING" => "#SITE_DIR#o-nas/delivery/",
    "DISPLAY_IMG_WIDTH" => "225",
    "DISPLAY_IMG_HEIGHT" => "225",
    /*"DISPLAY_DETAIL_IMG_WIDTH" => "350",
    "DISPLAY_DETAIL_IMG_HEIGHT" => "1000",*/
    "DISPLAY_DETAIL_IMG_WIDTH" => "250",
    "DISPLAY_DETAIL_IMG_HEIGHT" => "250",
    "DISPLAY_MORE_PHOTO_WIDTH" => "90",
    "DISPLAY_MORE_PHOTO_HEIGHT" => "90",
    "SHARPEN" => "30",
    "AJAX_OPTION_ADDITIONAL" => "",
    "SEF_URL_TEMPLATES" => array(
      "sections" => "",
      "section" => "#SECTION_CODE_PATH#/",
      "element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
    ),
    "VARIABLE_ALIASES" => array(
      "compare" => array(
        "ACTION_CODE" => "action",
      ),
    ),

    "FILTER_NAME" => "CATALOG_FILTER",
//    "SECTIONS_ADDITIONAL_FILTER_NAME" => "SECTIONS_FILTER",
    //"CATALOG_SECTION_ID" => $BOYS_SECTION_ID,
    ),
    false
  );
?>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
