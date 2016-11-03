<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обслуживание аквариума");
$APPLICATION->SetPageProperty("title", "Обслуживание аквариума. Магазин аквариумов juwel-aquarium.ru");
$APPLICATION->SetPageProperty("keywords", "Обслуживание аквариума, аквариумы, аквариумы Juwel");
$APPLICATION->SetPageProperty("description", "Обслуживание аквариума. Аквариумы и вся аквариумистика в магазине аквариумов juwel-aquarium.ru. Выставочный зал, интернет-магазин. Аквариумное оборудование, декорации, рыбки, растения");



$service_options_iblock = iblock_getIblockInfo('service-options');
$maint_sets_iblock = iblock_getIblockInfo('maintenance-sets');
$equipment_iblock = iblock_getIblockInfo('equipment');
$other_services_iblock = iblock_getIblockInfo('other-services');

$m = main_getUserFieldEnumValuesXmlIds('UF_MAINTENANCE');

$GLOBALS['MAINT_SECTIONS_FILTER'] = array(
  "UF_MAINTENANCE" => $m['Y']
);

?>

<section class="shadow_bottom_container">
    <h1><?$APPLICATION->ShowTitle(false);?></h1>
</section>
<section class="section_content">
    <div class="inner inner-service">
      <? $APPLICATION->IncludeFile(
          $APPLICATION->GetTemplatePath("/includes/services_why.php"),
          Array(),
          Array("MODE"=>"html")
        );?>  
    </div>
</section>
<section class="gradient_container">
    <div class="inner inner-service">
      <? $APPLICATION->IncludeFile(
          $APPLICATION->GetTemplatePath("/includes/services_why_aquatoria.php"),
          Array(),
          Array("MODE"=>"html")
        );?>  
    </div>
</section>

<section class="section_content">
    <div class="inner">
        <? $APPLICATION->IncludeFile(
            $APPLICATION->GetTemplatePath("/includes/services_price.php"),
            Array(),
            Array("MODE"=>"html")
          );?>  

        <?$APPLICATION->IncludeComponent(
          "bitrix:news.list",
          "service_options",
          Array(
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_MODE" => "N",
            "IBLOCK_TYPE" => $service_options_iblock['IBLOCK_TYPE_ID'],
            "IBLOCK_ID" => $service_options_iblock['ID'],
            "NEWS_COUNT" => "100",
            "SORT_BY1" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SORT_BY2" => "NAME",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => array(),
            "PROPERTY_CODE" => array("PRICE", "DETAIL_TEXT"),
            "CHECK_DATES" => "N",
            "DETAIL_URL" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "N",
            "SET_STATUS_404" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "N",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
            "PAGER_SHOW_ALL" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "BLOCK_TITLE"  => "Варианты обслуживания",  
          ),
        false
        );?>
    </div>

    <?$APPLICATION->IncludeComponent("aqua:sections", "maintenance_sections", array(
        "SORT_FIELD1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_FIELD2" => "NAME",
        "SORT_ORDER2" => "ASC",
        "IBLOCK_ID"   => $equipment_iblock['ID'],
        "FILTER_NAME" => "MAINT_SECTIONS_FILTER",
      	"CACHE_TYPE" => "A",
      	"CACHE_TIME" => "36000000",
      	"CACHE_GROUPS" => "N",
        "AJAX_MODE" => "Y",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
    	 ), false
     );?>

</section>

<?$APPLICATION->IncludeComponent(
  "bitrix:news.list",
  "maintenance_sets",
  Array(
    "DISPLAY_DATE" => "N",
    "DISPLAY_NAME" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "AJAX_MODE" => "N",
    "IBLOCK_TYPE" => $maint_sets_iblock['IBLOCK_TYPE_ID'],
    "IBLOCK_ID" => $maint_sets_iblock['ID'],
    "NEWS_COUNT" => "100",
    "SORT_BY1" => "SORT",
    "SORT_ORDER1" => "ASC",
    "SORT_BY2" => "NAME",
    "SORT_ORDER2" => "ASC",
    "FILTER_NAME" => "",
    "FIELD_CODE" => array("DETAIL_PICTURE"),
    "PROPERTY_CODE" => array("ACCESSORIES"),
    "CHECK_DATES" => "N",
    "DETAIL_URL" => "",
    "PREVIEW_TRUNCATE_LEN" => "",
    "ACTIVE_DATE_FORMAT" => "d.m.Y",
    "SET_TITLE" => "N",
    "SET_STATUS_404" => "N",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "ADD_SECTIONS_CHAIN" => "N",
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
    "PARENT_SECTION" => "",
    "PARENT_SECTION_CODE" => "",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "36000000",
    "CACHE_FILTER" => "Y",
    "CACHE_GROUPS" => "N",
    "DISPLAY_TOP_PAGER" => "N",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "PAGER_TITLE" => "Новости",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => "",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
    "PAGER_SHOW_ALL" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "AJAX_OPTION_HISTORY" => "N",
  ),
false
);?>


<section class="section_content">
    <div class="inner">
        <?$APPLICATION->IncludeComponent(
          "bitrix:news.list",
          "service_options",
          Array(
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_MODE" => "N",
            "IBLOCK_TYPE" => $other_services_iblock['IBLOCK_TYPE_ID'],
            "IBLOCK_ID" => $other_services_iblock['ID'],
            "NEWS_COUNT" => "100",
            "SORT_BY1" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SORT_BY2" => "NAME",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => array(),
            "PROPERTY_CODE" => array("PRICE", "DETAIL_TEXT"),
            "CHECK_DATES" => "N",
            "DETAIL_URL" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "N",
            "SET_STATUS_404" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "N",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
            "PAGER_SHOW_ALL" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "BLOCK_TITLE"  => "Дополнительные услуги в&nbsp;&laquo;Акватории&raquo;",
          ),
        false
        );?>

    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
