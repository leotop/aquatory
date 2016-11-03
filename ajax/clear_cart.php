<?php
require ($_SERVER["DOCUMENT_ROOT"] . '/bitrix/modules/main/include/prolog_before.php');
if ($_POST['clear'] != 'Y')
    return;
CModule::IncludeModule('catalog');
CModule::IncludeModule('sale');

$res = CSaleBasket::DeleteAll(CSaleBasket::GetBasketUserID());
die(json_encode($res));
