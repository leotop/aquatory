<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оформление аквариумов.");
$APPLICATION->SetPageProperty("title", "Оформление аквариумов. Магазин аквариумов juwel-aquarium.ru");
$APPLICATION->SetPageProperty("keywords", "Оформление аквариумов, аквариумы, аквариумы Juwel");
$APPLICATION->SetPageProperty("description", "Оформление аквариумов. Аквариумы и вся аквариумистика в магазине аквариумов juwel-aquarium.ru. Выставочный зал, интернет-магазин. Аквариумное оборудование, декорации, рыбки, растения");


$advantages_iblock = iblock_getIblockInfo('advantages');
$styles_iblock = iblock_getIblockInfo('styles');
$decoration_banner_iblock = iblock_getIblockInfo('decoration-banner');

?>

<section class="shadow_bottom_container">
    <h1><?$APPLICATION->ShowTitle(false);?></h1>
</section>
<section class="section_content">
    <div class="inner">
        <p class="section_title">
          <? $APPLICATION->IncludeFile(
              $APPLICATION->GetTemplatePath("/includes/decoration_why_header.php"),
              Array(),
              Array("MODE"=>"html")
            );?>  
        </p>
        <?$APPLICATION->IncludeComponent(
          "bitrix:news.list",
          "advantages",
          Array(
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_MODE" => "N",
            "IBLOCK_TYPE" => $advantages_iblock['IBLOCK_TYPE_ID'],
            "IBLOCK_ID" => $advantages_iblock['ID'],
            "NEWS_COUNT" => "100",
            "SORT_BY1" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SORT_BY2" => "NAME",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => array(),
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
          ),
        false
        );?>
    </div>
</section>

<section class="gradient_container">
  <div class="inner">
    <p class="section_title">
      <? $APPLICATION->IncludeFile(
          $APPLICATION->GetTemplatePath("/includes/decoration_variants_header.php"),
          Array(),
          Array("MODE"=>"html")
        );?>  
    </p>
    <?$APPLICATION->IncludeComponent(
      "bitrix:news.list",
      "styles",
      Array(
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => $styles_iblock['IBLOCK_TYPE_ID'],
        "IBLOCK_ID" => $styles_iblock['ID'],
        "NEWS_COUNT" => "100",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "NAME",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array("DETAIL_PICTURE", "DETAIL_TEXT"),
        "PROPERTY_CODE" => array("PRICE"),
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
  </div>
</section>

<section class="section_content">
    <div class="inner">
        <p class="section_title">
          <? $APPLICATION->IncludeFile(
              $APPLICATION->GetTemplatePath("/includes/decoration_included_services_title.php"),
              Array(),
              Array("MODE"=>"text")
            );?>
        </p>
        <? $APPLICATION->IncludeFile(
            $APPLICATION->GetTemplatePath("/includes/decoration_included_services.php"),
            Array(),
            Array("MODE"=>"html")
          );?>         
    </div>
</section>
<section class="want_your_self">
    <p class="section_title">
      <? $APPLICATION->IncludeFile(
          $APPLICATION->GetTemplatePath("/includes/decoration_banner_title.php"),
          Array(),
          Array("MODE"=>"text")
        );?>
    </p>
    <a href="#" class="btn btn_pause"></a>
    <a href="#" class="btn btn_play"></a>

    <?$APPLICATION->IncludeComponent(
      "bitrix:news.list",
      "decoration_banner",
      Array(
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => $decoration_banner_iblock['IBLOCK_TYPE_ID'],
        "IBLOCK_ID" => $decoration_banner_iblock['ID'],
        "NEWS_COUNT" => "100",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "NAME",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
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
      ),
    false
    );?>
    
</section>

<section class="gradient_container gradient_container_top">
  <div class="inner">
    <p class="section_title">
     <? $APPLICATION->IncludeFile(
         $APPLICATION->GetTemplatePath("/includes/decoration_sets_title.php"),
         Array(),
         Array("MODE"=>"html")
       );?>
    </p>

    <?$APPLICATION->IncludeComponent(
      "bitrix:news.list",
      "decoration_sets",
      Array(
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => $styles_iblock['IBLOCK_TYPE_ID'],
        "IBLOCK_ID" => $styles_iblock['ID'],
        "NEWS_COUNT" => "100",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "NAME",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array("DETAIL_PICTURE", "PREVIEW_PICTURE"),
        "PROPERTY_CODE" => array("DECORATION_SET_TITLE"),
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
  </div>
</section>


<section class="express_order">
    <div class="inner">
        <p class="section_title">
          <? $APPLICATION->IncludeFile(
              $APPLICATION->GetTemplatePath("/includes/decoration_self_title.php"),
              Array(),
              Array("MODE"=>"html")
            );?>
        </p>
        <p class="section_title">
          <? $APPLICATION->IncludeFile(
              $APPLICATION->GetTemplatePath("/includes/decoration_self_subtitle.php"),
              Array(),
              Array("MODE"=>"html")
            );?>
        </p>
        <br>
        <h3>
          <? $APPLICATION->IncludeFile(
              $APPLICATION->GetTemplatePath("/includes/decoration_self_content.php"),
              Array(),
              Array("MODE"=>"html")
            );?>
        </h3>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>