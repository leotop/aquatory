<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Аквариумы");
$APPLICATION->SetPageProperty("title", "Аквариумы. Продажа в магазине аквариумов juwel-aquarium.ru");
$APPLICATION->SetPageProperty("keywords", "аквариумы, оборудование для аквариума, аквариумы, juwel-aquarium, Juwel");
$APPLICATION->SetPageProperty("description", "Аквариумы и другие аквариумные товары: аквариумы, аквариумное оборудование, декорации, рыбки и растения в магазине аквариумов juwel-aquarium.ru. Продажа и консультации");


$products_iblock_id = iblock_getIblockId("products");
$GLOBALS['CATALOG_FILTER'] = array(
  "UF_IN_CATALOG" => 1,
);

$sort = aqua_getCurrentProductsSort();

$banner_iblock = iblock_getIblockInfo("bottom-banner");

?>

<section class="shadow_bottom_container">
    <div class="h1">
      <? $APPLICATION->IncludeFile(
          $APPLICATION->GetTemplatePath("/includes/catalog_header.php"),
          Array(),
          Array("MODE"=>"html")
        );?>
    </div>
</section>
<section class="equipment_content">
    <div class="inner">
        <? 
         $APPLICATION->IncludeComponent("bitrix:breadcrumb", "catalog", array(
            "START_FROM" => "1",
            "PATH" => "",
            "SITE_ID" => "-"
            ),
            false,
            Array('HIDE_ICONS' => 'Y')
          ); 
          ?>
		<div class="section_title"><h1><?$APPLICATION->ShowTitle(false);?></h1></div>

        <div class="clearfix">
            <div class="col2 float_left">
              <? $APPLICATION->IncludeFile(
                  $APPLICATION->GetTemplatePath("/includes/catalog_aquariums_desc_left.php"),
                  Array(),
                  Array("MODE"=>"html")
                );?>  
            </div>
            <div class="col2 float_right">
              <? $APPLICATION->IncludeFile(
                  $APPLICATION->GetTemplatePath("/includes/catalog_aquariums_desc_right.php"),
                  Array(),
                  Array("MODE"=>"html")
                );?>
            </div>
        </div>
        <div class="filter_container">
            <?$APPLICATION->IncludeComponent("aqua:sections.filter", ".default", array(
                "FILTER_NAME"=> "CATALOG_FILTER",
                "SLIDER_PROPS" => array(
                  "UF_CAPACITY",
                  "UF_LENGTH",
                ),
                // максимально допустимое отклонение при поиске, в процентах
                "SLIDER_PROPS_VARIATION" => array(
                  "UF_CAPACITY" => "10",
                  "UF_LENGTH" => "5",
                ),

              	"CACHE_TYPE" => "A",
              	"CACHE_TIME" => "36000000",
              	"CACHE_GROUPS" => "N",

            	 ), false
             );?>
        </div>

        <?$APPLICATION->IncludeComponent("aqua:sections", "catalog", array(
            "SORT_FIELD1" => $sort["FIELD"],
            "SORT_ORDER1" => $sort["ORDER"],
            "SORT_FIELD2" => "",
            "SORT_ORDER2" => "",
            "IBLOCK_ID"   => $products_iblock_id,
            "DEPTH_LEVEL" => AQUA_PRODUCTS_SECTION_LEVEL,

            "PAGER_TITLE" =>  "Страницы",
            "PAGER_TEMPLATE" => "",
            "ITEMS_COUNT" => "12",
            "FILTER_NAME" => "CATALOG_FILTER",
            "AUTOLOAD_PAGENAV" => "Y",
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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>