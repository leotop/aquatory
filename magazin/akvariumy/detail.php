<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Аквариумы");



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

    <?$section_id = $APPLICATION->IncludeComponent(
        "aqua:section.detail",
        ".default",
        array(
          "SECTION_CODE" => $_REQUEST['SECTION_CODE'],
          "SET_STATUS_404" => "Y",
          "CACHE_TYPE" => "A",
          "CACHE_TIME" => "36000000",
          "CACHE_GROUPS" => "N",
          ),
        false
     );?>        

  </div>  
</section>

<?
  $related = array();
  if ($section_id) {
    $related = aqua_getRelatedProducts_aquarium($section_id);
  }
  
  global $RELATED_FILTER;
  $RELATED_FILTER = array(
    '=ID' => $related,
    'PROPERTY_IN_CATALOG' => 1,        
  );
  $equipment_iblock = iblock_getIblockInfo("equipment");
  $price = catalog_getBasePrice();
?>

<? if ($related) : ?>
  <? $APPLICATION->IncludeComponent(
      "bitrix:catalog.section",
      "related",
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
        "FILTER_NAME" => "RELATED_FILTER",
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
        "DETAIL_URL" => "/magazin/#SECTION_CODE_PATH#/#ELEMENT_ID#/",
        //Template parameters
        "LINK_IBLOCK_ID" => "",
        "LINK_PROPERTY_SID" => "",
        "BLOCK_HEADER" => "Связанные товары",
      ),
      false
    );
    ?>
<? endif; ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
