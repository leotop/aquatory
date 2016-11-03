<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Магазин аквариумов и аквариумного оборудования");
$APPLICATION->SetPageProperty("title", "Магазин juwel-aquarium.ru: аквариумы, аквариумное оборудование,  декорации");



$iblock = iblock_getIblockInfo('equipment');
?>

<section class="shadow_bottom_container">
    <h1>
      <? $APPLICATION->IncludeFile(
          $APPLICATION->GetTemplatePath("/includes/catalog_header.php"),
          Array(),
          Array("MODE"=>"html")
        );?>
    </h1>
</section>

<? $APPLICATION->IncludeComponent("bitrix:catalog.section.list", "catalog.top", array(
  	"IBLOCK_TYPE" => $iblock['IBLOCK_TYPE_ID'],
  	"IBLOCK_ID" => $iblock['ID'],
  	"SECTION_ID" => "",
  	"SECTION_CODE" => "",
  	"COUNT_ELEMENTS" => "N",
  	"TOP_DEPTH" => "2",
  	"SECTION_FIELDS" => array(
  		0 => "",
  		1 => "",
  	),
  	"SECTION_USER_FIELDS" => array(
  		0 => "",
  		1 => "",
  	),
  	"SECTION_URL" => "",
  	"CACHE_TYPE" => "A",
  	"CACHE_TIME" => "36000000",
  	"CACHE_GROUPS" => "Y",
  	"ADD_SECTIONS_CHAIN" => "N",
  	"VIEW_MODE" => "LIST",
  	"SHOW_PARENT_NAME" => "Y"
  	),
  	false
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>