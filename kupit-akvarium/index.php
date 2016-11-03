<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Подбор и комплектация аквариума");
$APPLICATION->SetPageProperty("title", "Подбор и комплектация аквариума. Магазин аквариумов juwel-aquarium.ru");



$products_iblock_id = iblock_getIblockId("products");
$GLOBALS['CONFIGURATOR_SECTIONS_FILTER'] = array(
  "UF_IN_CATALOG" => 1,
);

$banner_iblock = iblock_getIblockInfo("bottom-banner");

?>

<section class="shadow_bottom_container">
    <h1><?$APPLICATION->ShowTitle(false);?></h1>
</section>
<section class="configurator_brif">
    <div class="inner">
        <p class="section_title">
          <? $APPLICATION->IncludeFile(
              $APPLICATION->GetTemplatePath("/includes/configurator1_desc_title.php"),
              Array(),
              Array("MODE"=>"html")
            );?>  
        </p>
        <h3>
          <? $APPLICATION->IncludeFile(
              $APPLICATION->GetTemplatePath("/includes/configurator1_desc_subtitle.php"),
              Array(),
              Array("MODE"=>"html")
            );?>  
        </h3>
    </div>
</section>
<section class="configurator_steps_container gradient_container">
    <div class="inner">
        <ul class="configurator_steps clearfix">
            <li>
                <span class="configurator_step">1</span>
                <h3>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/configurator1_steps_c1_title.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?>  
                </h3>
                <p>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/configurator1_steps_c1_contents.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?>  
                </p>
            </li>
            <li>
                <span class="configurator_step">2</span>
                <h3>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/configurator1_steps_c2_title.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?>  
                </h3>
                <p>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/configurator1_steps_c2_contents.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?>  
                </p>
            </li>
            <li>
                <span class="configurator_step">3</span>
                <h3>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/configurator1_steps_c3_title.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?>  
                </h3>
                <p>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/configurator1_steps_c3_contents.php"),
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
              $APPLICATION->GetTemplatePath("/includes/configurator1_select_title.php"),
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
); ?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>