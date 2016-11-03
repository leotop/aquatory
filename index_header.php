<?
  $banner_iblock = iblock_getIblockInfo("front-banner");


?>
<div class="banner_container clearfix">
    <h1 class="banner_title">
      <? $APPLICATION->IncludeFile(
          $APPLICATION->GetTemplatePath("/includes/index_banner_title.php"),
          Array(),
          Array("MODE"=>"text")
        );?>  
    </h1>

    <?$APPLICATION->IncludeComponent(
      "bitrix:news.list",
      "front_banner",
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

    <div class="banner_info_container">
        <h2>
          <? $APPLICATION->IncludeFile(
              $APPLICATION->GetTemplatePath("/includes/index_advantages_title.php"),
              Array(),
              Array("MODE"=>"text")
            );?>  
        </h2>
        <dl class="saloon_features clearfix">
            <dt><i class="ic ic_stock"></i></dt>
            <dd>
              <? $APPLICATION->IncludeFile(
                  $APPLICATION->GetTemplatePath("/includes/index_advantages_block1.php"),
                  Array(),
                  Array("MODE"=>"html")
                );?>  
            </dd>
        </dl>
        <dl class="saloon_features clearfix">
            <dt><i class="ic ic_quality_service"></i></dt>
            <dd>
              <? $APPLICATION->IncludeFile(
                  $APPLICATION->GetTemplatePath("/includes/index_advantages_block2.php"),
                  Array(),
                  Array("MODE"=>"html")
                );?>  
            </dd>
        </dl>
        <dl class="saloon_features clearfix">
            <dt><i class="ic ic_rich_decor"></i></dt>
            <dd>
              <? $APPLICATION->IncludeFile(
                  $APPLICATION->GetTemplatePath("/includes/index_advantages_block3.php"),
                  Array(),
                  Array("MODE"=>"html")
                );?>                
            </dd>
        </dl>
        <dl class="saloon_features clearfix">
            <dt><i class="ic ic_exp"></i></dt>
            <dd>
              <? $APPLICATION->IncludeFile(
                  $APPLICATION->GetTemplatePath("/includes/index_advantages_block4.php"),
                  Array(),
                  Array("MODE"=>"html")
                );?>  
            </dd>
        </dl>
    </div>
    <div class="shadow_container sh_banner">
        <div class="sh_left"></div>
        <div class="sh_middle"></div>
        <div class="sh_right"></div>
    </div>
</div>