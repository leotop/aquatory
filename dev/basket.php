<?php
/**@global CMain $APPLICATION */
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Title');
if(!$USER->IsAdmin())
{
    @define('ERROR_404', 'Y');
}
    ?><a href="#" class="js-clear-cart">Очистить корзину</a><?

?><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
