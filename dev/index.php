<?php
/**@global CMain $APPLICATION */
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Title');
if(!$USER->IsAdmin())
{
    @define('ERROR_404', 'Y');
}
    $r = aqua_getConfigProductsUsages();
/**/
?>$r:<br/><?
?><pre><?var_dump($r)?></pre><?
/**/

?><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
