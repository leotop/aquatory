<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Акватория");
$APPLICATION->SetPageProperty("title", "Магазин аквариумов juwel-aquarium.ru");
$APPLICATION->SetPageProperty("keywords", "аквариумы, аквариумы Juwel");
$APPLICATION->SetPageProperty("description", "Аквариумы и вся аквариумистика в магазине аквариумов juwel-aquarium.ru. Выставочный зал, интернет-магазин. Аквариумное оборудование, декорации, рыбки, растения");


$APPLICATION->SetPageProperty("body_classes", "index_page");

$products_iblock_id = iblock_getIblockId("products");
$GLOBALS['CONFIGURATOR_SECTIONS_FILTER'] = array(
  "UF_IN_CATALOG" => 1,
);

$equipment_iblock = iblock_getIblockInfo("equipment");
$GLOBALS['POPULAR_FILTER'] = array(
  "PROPERTY_POPULAR" => iblock_enumXmlIdToValue($equipment_iblock['ID'], "POPULAR", "Y"),
);

$banner_iblock = iblock_getIblockInfo("bottom-banner");

$portfolio_iblock = iblock_getIblockInfo("portfolio");
$GLOBALS['PORTFOLIO_FILTER'] = array(
  "PROPERTY_ON_HOME" => iblock_enumXmlIdToValue($portfolio_iblock['ID'], "ON_HOME", "Y"),
);


//require_once $_SERVER["DOCUMENT_ROOT"] . '/bitrix/php_interface/include/migrations_lib.php';
//echo "<pre>" . var_export(migrations_exportSettings_form_element(iblock_getIblockId('products', SITE_ID)), true) . "</pre>";

?>



<section class="u_can_container shadow_bottom_container">
    <div class="inner inner_opportunities">
        <p class="section_title">
          <? $APPLICATION->IncludeFile(
              $APPLICATION->GetTemplatePath("/includes/index_promo_title.php"),
              Array(),
              Array("MODE"=>"html")
            );?>  
        </p>
        <ul class="opportunities_container clearfix">
            <li>
                <h3>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/index_c1_title.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?> 
                </h3>
                <p>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/index_c1_contents.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?> 
                </p>
            </li>
            <li>
                <h3>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/index_c2_title.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?> 
                </h3>
                <p>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/index_c2_contents.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?> 
                </p>
            </li>
            <li>
                <h3>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/index_c3_title.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?> 
                </h3>
                <p>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/index_c3_contents.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?> 
                </p>
            </li>
            <li>
                <h3>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/index_c4_title.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?> 
                </h3>
                <p>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/index_c4_contents.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?> 
                </p>
            </li>
        </ul>
    </div>
</section>
<section class="choose_product_container">
    <div class="inner">
        <p class="section_title">
          <? $APPLICATION->IncludeFile(
              $APPLICATION->GetTemplatePath("/includes/index_configurator_title.php"),
              Array(),
              Array("MODE"=>"html")
            );?>  
        </p>
        <?$default_section_id = $APPLICATION->IncludeComponent("aqua:top.sections", ".default", array(
          	"CACHE_TYPE" => "A",
          	"CACHE_TIME" => "36000000",
          	"CACHE_GROUPS" => "N",
        	 ), false
         );?>
       
        <?$APPLICATION->IncludeComponent("aqua:sections", "configurator", array(
            "SORT_FIELD1" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SORT_FIELD2" => "NAME",
            "SORT_ORDER2" => "ASC",
            "IBLOCK_ID"   => $products_iblock_id,
            "FILTER_NAME" => "CONFIGURATOR_SECTIONS_FILTER",
            "DEPTH_LEVEL" => AQUA_PRODUCTS_SECTION_LEVEL,
            "PARENT_SECTION" => $default_section_id,
          	"CACHE_TYPE" => "A",
          	"CACHE_TIME" => "36000000",
          	"CACHE_GROUPS" => "N",
            "AJAX_MODE" => "Y",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
        	 ), false
         );?>


    </div>
</section>


<? $APPLICATION->IncludeComponent(
    "bitrix:catalog.section",
    "popular",
    Array(
      "IBLOCK_TYPE" => $equipment_iblock['IBLOCK_TYPE_ID'],
      "IBLOCK_ID" => $equipment_iblock['ID'],
      //"ELEMENT_SORT_FIELD" => $sort['FIELD'],
      //"ELEMENT_SORT_ORDER" => $sort['ORDER'],
      "PROPERTY_CODE" => array(
      ),
      "META_KEYWORDS" => "UF_PAGE_KEYWORDS",
      "META_DESCRIPTION" => "UF_PAGE_DESC",
      "BROWSER_TITLE" => "UF_PAGE_TITLE",
      "INCLUDE_SUBSECTIONS" => "N",
      "BASKET_URL" => "/personal/cart/",
      "ACTION_VARIABLE" => "action",
      "PRODUCT_ID_VARIABLE" => "id",
      "SECTION_ID_VARIABLE" => "SECTION_ID",
      "FILTER_NAME" => "POPULAR_FILTER",
      "CACHE_TYPE" => "A",
      "CACHE_TIME" => "36000000",
      "CACHE_FILTER" => "Y",
      "CACHE_GROUPS" => "N",
      "SET_TITLE" => "N",
      "SET_STATUS_404" => "N",
      "PAGE_ELEMENT_COUNT" => "30",
      "LINE_ELEMENT_COUNT" => "3",
      "PRICE_CODE" => array($price['NAME']),
      "USE_PRICE_COUNT" => "Y",
      "SHOW_PRICE_COUNT" => "1",
      "PRICE_VAT_INCLUDE" => "Y",
      "PRICE_VAT_SHOW_VALUE" => "N",
      "DISPLAY_TOP_PAGER" => "N",
      "DISPLAY_BOTTOM_PAGER" => "Y",
      "PAGER_TITLE" => "Товары",
      "PAGER_SHOW_ALWAYS" => "N",
      "PAGER_TEMPLATE" => "arrows",
      "PAGER_DESC_NUMBERING" => "N",
      "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
      "PAGER_SHOW_ALL" => "N",
      "SHOW_ALL_WO_SECTION" => 'Y',
      "SECTION_URL" => "/magazin/#SECTION_CODE_PATH#/",
      "DETAIL_URL"  => "/magazin/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
      //Template parameters
      "LINK_IBLOCK_ID" => "",
      "LINK_PROPERTY_SID" => "",
      "BLOCK_HEADER" => "Популярные товары в магазине",
    ),
    false,
    array("HIDE_ICONS" => "Y")
  );
  ?>


<?$APPLICATION->IncludeComponent(
  "bitrix:news.list",
  "bottom_banner",
  Array(
    "DISPLAY_DATE" => "N",
    "DISPLAY_NAME" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "AJAX_MODE" => "N",
    "IBLOCK_TYPE" => $banner_iblock['IBLOCK_TYPE_ID'],
    "IBLOCK_ID" => $banner_iblock['ID'],
    "NEWS_COUNT" => "100",
    "SORT_BY1" => "SORT",
    "SORT_ORDER1" => "ASC",
    "SORT_BY2" => "NAME",
    "SORT_ORDER2" => "ASC",
    "FILTER_NAME" => "",
    "FIELD_CODE" => array("DETAIL_PICTURE"),
    "PROPERTY_CODE" => array("LINK"),
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


<?$APPLICATION->IncludeComponent(
  "bitrix:news.list",
  "portfolio_front",
  Array(
    "DISPLAY_DATE" => "N",
    "DISPLAY_NAME" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "AJAX_MODE" => "N",
    "IBLOCK_TYPE" => $portfolio_iblock['IBLOCK_TYPE_ID'],
    "IBLOCK_ID" => $portfolio_iblock['ID'],
    "NEWS_COUNT" => "100",
    "SORT_BY1" => "SORT",
    "SORT_ORDER1" => "ASC",
    "SORT_BY2" => "NAME",
    "SORT_ORDER2" => "ASC",
    "FILTER_NAME" => "PORTFOLIO_FILTER",
    "FIELD_CODE" => array("DETAIL_PICTURE"),
    "PROPERTY_CODE" => array(),
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
    "BLOCK_HEADER" => "Новинки в портфолио",
  ),
false
);?>

<?
/*/
$APPLICATION->IncludeComponent("bitrix:map.yandex.view", ".default", array(
	"INIT_MAP_TYPE" => "MAP",
	"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.733269999993745;s:10:\"yandex_lon\";d:37.70560999999999;s:12:\"yandex_scale\";i:12;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.70560999999999;s:3:\"LAT\";d:55.733269999993745;s:4:\"TEXT\";s:18:\"Акватория\";}}}",
	"MAP_WIDTH" => "1200",
	"MAP_HEIGHT" => "500",
	"CONTROLS" => array(
		0 => "ZOOM",
		1 => "MINIMAP",
		2 => "TYPECONTROL",
		3 => "SCALELINE",
		4 => "SEARCH",
	),
	"OPTIONS" => array(
//		0 => "ENABLE_SCROLL_ZOOM",
		1 => "ENABLE_DBLCLICK_ZOOM",
		2 => "ENABLE_DRAGGING",
	),
	"MAP_ID" => ""
	),
	false
);
/**/
$APPLICATION->IncludeComponent(
    "aqua:ymap",
    "main",
    Array(
        "LAT" => "55.733359",
        "LNG" => "37.705116",
    ),
    false
);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
