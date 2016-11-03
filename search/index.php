<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск. Магазин аквариумов juwel-aquarium.ru");

$APPLICATION->IncludeComponent(
	"bitrix:search.page",
	".default",
	array(
		"RESTART" => "N",
		"NO_WORD_LOGIC" => "N",
		"CHECK_DATES" => "Y",
		"USE_TITLE_RANK" => "Y",
		"DEFAULT_SORT" => "rank",
		"FILTER_NAME" => "",
		"arrFILTER_main" => array(),
		"SHOW_WHERE" => "N",
		"SHOW_WHEN" => "N",
		"PAGE_RESULT_COUNT" => "20",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "arrows",
		"USE_LANGUAGE_GUESS" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"arrFILTER" => array(
			0 => "main",
			1 => "iblock_catalog",
		),
		"arrFILTER_iblock_catalog" => array(
			0 => "all",
		)
	),
	false
);

/*/
$products_iblock = iblock_getIblockInfo('products');
$equipment_iblock = iblock_getIblockInfo('equipment');

$iblock_types = array();
$iblock_types[$products_iblock['IBLOCK_TYPE_ID']][] = $products_iblock['ID'];
$iblock_types[$equipment_iblock['IBLOCK_TYPE_ID']][] = $equipment_iblock['ID'];

$extra_params = array();
$extra_params['arrFilter'] = array("main");
foreach ($iblock_types as $iblock_type_id => $iblock_ids)  {
  $extra_params['arrFilter'][] = "iblock_" . $iblock_type_id;
  $extra_params['arrFILTER_iblock_' . $iblock_type_id] = $iblock_ids;
}

$APPLICATION->IncludeComponent("bitrix:search.page", ".default", array(
	"RESTART" => "N",
	"NO_WORD_LOGIC" => "N",
	"CHECK_DATES" => "Y",
	"USE_TITLE_RANK" => "Y",
	"DEFAULT_SORT" => "rank",
	"FILTER_NAME" => "",
//	"arrFILTER" => array(
//		0 => "main",
//  	1 => "iblock_" . $products_iblock['IBLOCK_TYPE_ID'],
//    2 => "iblock_" . $equipment_iblock['IBLOCK_TYPE_ID'],
//	),
	"arrFILTER_main" => array(
	),
//	"arrFILTER_iblock_" . $products_iblock['IBLOCK_TYPE_ID'] => array(
//		0 => $print['ID'],
//	),
//  "arrFILTER_iblock_" . $products_iblock['IBLOCK_TYPE_ID'] => array(
//		0 => $print['ID'],
//	),

	"SHOW_WHERE" => "N",
	"SHOW_WHEN" => "N",
	"PAGE_RESULT_COUNT" => "20",
	"AJAX_MODE" => "Y",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"DISPLAY_TOP_PAGER" => "Y",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Результаты поиска",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_TEMPLATE" => "arrows",
	"USE_LANGUAGE_GUESS" => "N",
	"AJAX_OPTION_ADDITIONAL" => ""
	) + $extra_params,
	false
);
/**/
?><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
