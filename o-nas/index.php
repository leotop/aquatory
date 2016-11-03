<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Всё о Juwel");
$APPLICATION->SetPageProperty("title", "Всё о Juwel. Магазин аквариумов juwel-aquarium.ru");
$APPLICATION->SetPageProperty("keywords", "Всё о Juwel, аквариумы, аквариумы Juwel");
$APPLICATION->SetPageProperty("description", "Всё о Juwel. Аквариумы и вся аквариумистика в магазине аквариумов juwel-aquarium.ru. Выставочный зал, интернет-магазин. Аквариумное оборудование, декорации, рыбки, растения");


$feedback_iblock = iblock_getIblockInfo('feedback');

$prop_ids['CONTACT_NAME'] =  iblock_getIblockPropertyId($feedback_iblock['ID'], "CONTACT_NAME");
$prop_ids['EMAIL'] = iblock_getIblockPropertyId($feedback_iblock['ID'], "EMAIL");
$prop_ids['PHONE'] = iblock_getIblockPropertyId($feedback_iblock['ID'], "PHONE");
$prop_ids['COMMENTS'] = iblock_getIblockPropertyId($feedback_iblock['ID'], "COMMENTS");

$history_iblock = iblock_getIblockInfo("history");


?>
<section class="shadow_bottom_container">
    <h1><?$APPLICATION->ShowTitle(false);?></h1>
</section>
<section class="choose_product_container">
    <div class="inner">
        <ul class="tabs_list clearfix">
            <li class="tab_one">
                <a href="#" class="tab_link" data-id="tab1">
                    <? /*span class="tab_icon">
                        <span class="tab_icon_inner">
                            <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-cat1.png" alt="" width="19" height="29" class="normal_icon">
                            <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-cat1-a.png" alt="" width="19" height="29" class="active_icon">
                        </span>
                    </span */ ?>
                    <span class="tab_name">
                      <? $APPLICATION->IncludeFile(
                          $APPLICATION->GetTemplatePath("/includes/about_b1_title.php"),
                          Array(),
                          Array("MODE"=>"html")
                      );?>  
                    </span>
                </a>
            </li>
            <li class="tab_one tab_one_active">
                <a href="#" class="tab_link" data-id="tab2">
                    <? /*span class="tab_icon">
                        <span class="tab_icon_inner">
                            <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-cat2.png" alt="" width="28" height="29" class="normal_icon">
                            <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-cat2-a.png" alt="" width="28" height="29" class="active_icon">
                        </span>
                    </span */ ?>
                    <span class="tab_name">
                      <? $APPLICATION->IncludeFile(
                          $APPLICATION->GetTemplatePath("/includes/about_b2_title.php"),
                          Array(),
                          Array("MODE"=>"html")
                      );?>  
                    </span>
                </a>
            </li>
            <li class="tab_one">
                <a href="#" class="tab_link" data-id="tab3">
                    <? /*span class="tab_icon">
                        <span class="tab_icon_inner">
                            <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-cat3.png" alt="" width="26" height="29" class="normal_icon">
                            <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-cat3-a.png" alt="" width="26" height="29" class="active_icon">
                        </span>
                    </span */ ?>
                    <span class="tab_name">
                      <? $APPLICATION->IncludeFile(
                          $APPLICATION->GetTemplatePath("/includes/about_b3_title.php"),
                          Array(),
                          Array("MODE"=>"html")
                      );?>  
                    </span>
                </a>
            </li>
            <li class="tab_one">
                <a href="#" class="tab_link" data-id="tab4">
                    <? /*span class="tab_icon">
                        <span class="tab_icon_inner">
                            <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-cat4.png" alt="" width="25" height="28" class="normal_icon">
                            <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-cat4-a.png" alt="" width="25" height="28" class="active_icon">
                        </span>
                    </span */ ?>
                    <span class="tab_name">
                      <? $APPLICATION->IncludeFile(
                          $APPLICATION->GetTemplatePath("/includes/about_b4_title.php"),
                          Array(),
                          Array("MODE"=>"html")
                      );?>  
                    </span>
                </a>
            </li>
        </ul>
        <div class="tabs_text_container with_inner">
            <div class="inner tab_one_text tab1">
              <? $APPLICATION->IncludeFile(
                  $APPLICATION->GetTemplatePath("/includes/about_b1_content.php"),
                  Array(),
                  Array("MODE"=>"html")
              );?>
            </div>

            <?$APPLICATION->IncludeComponent(
              "bitrix:news.list",
              "history",
              Array(
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "AJAX_MODE" => "N",
                "IBLOCK_TYPE" =>  $history_iblock['IBLOCK_TYPE_ID'],
                "IBLOCK_ID" =>  $history_iblock['ID'],
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

            <div class="tab_one_text tab3 inner">
              <? $APPLICATION->IncludeFile(
                  $APPLICATION->GetTemplatePath("/includes/about_b3_content.php"),
                  Array(),
                  Array("MODE"=>"html")
              );?>
            </div>
            <div class="tab_one_text tab4 inner">
              <? $APPLICATION->IncludeFile(
                  $APPLICATION->GetTemplatePath("/includes/about_b4_content.php"),
                  Array(),
                  Array("MODE"=>"html")
              );?>
            </div>
        </div>

    </div>
</section>

<section class="gradient_container">
    <div class="inner">
        <p class="section_title">
          <? $APPLICATION->IncludeFile(
              $APPLICATION->GetTemplatePath("/includes/about_feedback_title.php"),
              Array(),
              Array("MODE"=>"html")
          );?>
        </p>
        <div class="feedback_form_container">
          <? $APPLICATION->IncludeFile(
              $APPLICATION->GetTemplatePath("/includes/about_feedback_subtitle.php"),
              Array(),
              Array("MODE"=>"html")
          );?>

          <?$APPLICATION->IncludeComponent(
            "aqua:iblock.element.add.form",
            "request", //
            Array(
              "SEF_MODE" => "Y",
              "IBLOCK_TYPE" => $feedback_iblock['IBLOCK_TYPE_ID'],
              "IBLOCK_ID" => $feedback_iblock['ID'],
              "PROPERTY_CODES" => array($prop_ids['CONTACT_NAME'], $prop_ids['EMAIL'], $prop_ids['PHONE'], $prop_ids['COMMENTS']),
              "PROPERTY_CODES_REQUIRED" => array($prop_ids['CONTACT_NAME'], $prop_ids['EMAIL'], $prop_ids['PHONE'], $prop_ids['COMMENTS']),
              "GROUPS" => array("2"),
              "STATUS" => "ANY",
              "STATUS_NEW" => "N",
              "ALLOW_EDIT" => "N",
              "ALLOW_DELETE" => "N",
              "ELEMENT_ASSOC" => "CREATED_BY",
              "NAV_ON_PAGE" => "10",
              "MAX_USER_ENTRIES" => "100000",
              "MAX_LEVELS" => "100000",
              "LEVEL_LAST" => "Y",
              "USE_CAPTCHA" => "N",
              "USER_MESSAGE_ADD" => "",
              "USER_MESSAGE_EDIT" => "",
              "DEFAULT_INPUT_SIZE" => "30",
              "RESIZE_IMAGES" => "N",
              "MAX_FILE_SIZE" => "0",
              "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
              "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
              "CUSTOM_TITLE_NAME" => "",
              "CUSTOM_TITLE_TAGS" => "",
              "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
              "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
              "CUSTOM_TITLE_IBLOCK_SECTION" => "",
              "CUSTOM_TITLE_PREVIEW_TEXT" => "",
              "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
              "CUSTOM_TITLE_DETAIL_TEXT" => "",
              "CUSTOM_TITLE_DETAIL_PICTURE" => "",
              "SEF_FOLDER" => "/o-nas/",
              "AJAX_MODE" => "Y",
              "AJAX_OPTION_JUMP" => "N",
              "AJAX_OPTION_STYLE" => "Y",
              "AJAX_OPTION_HISTORY" => "N",
              "VARIABLE_ALIASES" => Array(
              ),
            ),
          false
          );?>
        </div>
    </div>
</section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
