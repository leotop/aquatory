<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
if($USER->IsAuthorized())
{

    /**/
    ?>BX_CRONTAB_SUPPORT:<br/><?
    ?><pre><?var_dump(BX_CRONTAB_SUPPORT)?></pre><?
    /**/

/*/
    CModule::IncludeModule('iblock');
    $arRes = aqua_getConfigProductsUsages();
    ?>aqua_getConfigProductsUsages:<br/><?
    ?><pre><?var_dump($arRes)?></pre><?
/**/
}
?><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
