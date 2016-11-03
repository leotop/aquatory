<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
$iblock = iblock_getIblockInfo("portfolio");

 $aMenuLinksExt = $APPLICATION->IncludeComponent("bitrix:menu.sections", "", array(
    "IBLOCK_TYPE_ID" => $iblock["IBLOCK_TYPE_ID"],
		"IBLOCK_ID" => $iblock["ID"],
		"IS_SEF" => "Y",
		"SEF_BASE_URL" => "/portfolio/",
		"SECTION_PAGE_URL" => "#SECTION_CODE#/",
		"DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#",
		"DEPTH_LEVEL" => "5",
  	"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000"
	), false, Array('HIDE_ICONS' => 'Y'));

	$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);

?>

