<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Подбор и комплектация аквариума");
$APPLICATION->SetPageProperty("title", "Подбор и комплектация аквариума. Магазин аквариумов juwel-aquarium.ru");

if(!$_REQUEST['product'] && !$_REQUEST['ORDER_ID'])
{
//  LocalRedirect("/kupit-akvarium/");
}

?><section class="shadow_bottom_container">
    <h1><?$APPLICATION->ShowTitle(false);?></h1>
</section><?

$product_id = $APPLICATION->IncludeComponent(
    "aqua:configurator.order",
    ".default",
    Array(
        "PRODUCT_ID" => $_REQUEST['product'],
        "PRODUCT_CODE" => $_REQUEST['product_code'],
        "ORDER_CONTENTS_VAR" => "CONFIGURATOR_DATA",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "REDIRECT_URL" => "/kupit-akvarium/",
        "SET_TITLE" => 'N',
        "SET_BROWSER_TITLE" => 'Y',
        "SET_META_KEYWORDS" => 'Y',
        "SET_META_DESCRIPTION" => 'Y',
    ),
    false,
    array("HIDE_ICONS" => "Y")
); ?>


<? $APPLICATION->IncludeComponent("aqua:sale.order.ajax", "", array(
    "PAY_FROM_ACCOUNT" => "N",
    "COUNT_DELIVERY_TAX" => "N",
    "COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
    "ONLY_FULL_PAY_FROM_ACCOUNT" => "N",
    "ALLOW_AUTO_REGISTER" => "N",
    "SEND_NEW_USER_NOTIFY" => "Y",
    "DELIVERY_NO_AJAX" => "N",
    "TEMPLATE_LOCATION" => "popup",
    "PROP_1" => array(),
    "PATH_TO_BASKET" => "/personal/cart/",
    "PATH_TO_PERSONAL" => "/personal/order/",
    "PATH_TO_PAYMENT" => "/personal/order/payment/",
    "PATH_TO_ORDER" => "/personal/order/make/",
    "SET_TITLE" => "Y",
    "DELIVERY2PAY_SYSTEM" => Array(),
    "SHOW_ACCOUNT_NUMBER" => "Y",
    "ALLOW_ANONYMOUS_ORDERS" => "Y",
    "FORCE_ANONYMOUS_ORDERS" => "Y",
    "TARGET_PRODUCTS" => AQUA_ORDER_TARGET_CONFIGURATOR,
    "ORDER_CONTENTS_VAR" => "CONFIGURATOR_DATA",
),
    false
); ?>

<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
