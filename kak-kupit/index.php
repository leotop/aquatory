<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Как купить");
$APPLICATION->SetPageProperty("title", "Как купить. Магазин аквариумов juwel-aquarium.ru");
$APPLICATION->SetPageProperty("keywords", "Как купить, аквариумы, аквариумы Juwel");
$APPLICATION->SetPageProperty("description", "Как купить. Аквариумы и вся аквариумистика в магазине аквариумов juwel-aquarium.ru. Выставочный зал, интернет-магазин. Аквариумное оборудование, декорации, рыбки, растения");

?>
            

<section class="shadow_bottom_container">
    <h1><?$APPLICATION->ShowTitle(false);?></h1>
</section>
<section class="how_to_buy_scheme_container section_content">
    <div class="inner">
        <p class="section_title">
          <? $APPLICATION->IncludeFile(
              $APPLICATION->GetTemplatePath("/includes/howto_make_order_title.php"),
              Array(),
              Array("MODE"=>"text")
            );?>  
        </p>
        <div class="order_scheme_top">
            <ul class="order_how_info">
                <li>
                    <div class="icon_container">
                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-howorder1.png?1" alt="" width="120" height="60">
                    </div>
                    <p>
                      <? $APPLICATION->IncludeFile(
                          $APPLICATION->GetTemplatePath("/includes/howto_make_order_c1.php"),
                          Array(),
                          Array("MODE"=>"html")
                        );?>  
                    </p>
                </li>
                <li>
                    <div class="icon_container">
                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-howorder2.png?1" alt="" width="86" height="68">
                    </div>
                    <p>
                      <? $APPLICATION->IncludeFile(
                          $APPLICATION->GetTemplatePath("/includes/howto_make_order_c2.php"),
                          Array(),
                          Array("MODE"=>"html")
                        );?>  
                    </p>
                </li>
                <li>
                    <div class="icon_container">
                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-howorder3.png?1" alt="" width="83" height="63">
                    </div>
                    <p>
                      <? $APPLICATION->IncludeFile(
                          $APPLICATION->GetTemplatePath("/includes/howto_make_order_c3.php"),
                          Array(),
                          Array("MODE"=>"html")
                        );?>  
                    </p>
                </li>
                <li>
                    <div class="icon_container">
                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-howorder4.png" alt="" width="100" height="51">
                    </div>
                    <p>
                      <? $APPLICATION->IncludeFile(
                          $APPLICATION->GetTemplatePath("/includes/howto_make_order_c4.php"),
                          Array(),
                          Array("MODE"=>"html")
                        );?>  
                    </p>
                </li>
                <li>
                    <div class="icon_container">
                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-howorder5.png?1" alt="" width="126" height="66">
                    </div>
                    <p>
                      <? $APPLICATION->IncludeFile(
                          $APPLICATION->GetTemplatePath("/includes/howto_make_order_c5.php"),
                          Array(),
                          Array("MODE"=>"html")
                        );?>  
                    </p>
                </li>
            </ul>
        </div>
        <p class="section_title">
          <? $APPLICATION->IncludeFile(
              $APPLICATION->GetTemplatePath("/includes/howto_payment_title.php"),
              Array(),
              Array("MODE"=>"text")
            );?>  
        </p>
        <div class="order_scheme_bottom">
            <ul class="order_how_info">
                <li>
                    <div class="icon_container">
                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-howorder6.png" alt="" width="48" height="93">
                    </div>
                    <p>                                                            
                      <? $APPLICATION->IncludeFile(
                          $APPLICATION->GetTemplatePath("/includes/howto_payment_c1.php"),
                          Array(),
                          Array("MODE"=>"html")
                        );?>  
                    </p>
                </li>
                <li>
                    <div class="icon_container">
                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-howorder7.png" alt="" width="144" height="55">
                    </div>
                    <p>
                      <? $APPLICATION->IncludeFile(
                          $APPLICATION->GetTemplatePath("/includes/howto_payment_c2.php"),
                          Array(),
                          Array("MODE"=>"html")
                        );?>  
                    </p>
                </li>
                <li>
                    <div class="icon_container">
                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-howorder8.png" alt="" width="119" height="73">
                    </div>
                    <p>
                      <? $APPLICATION->IncludeFile(
                          $APPLICATION->GetTemplatePath("/includes/howto_payment_c3.php"),
                          Array(),
                          Array("MODE"=>"html")
                        );?>  
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="gradient_container order_terms_container">
    <div class="inner clearfix">
        <div class="float_left col2">
            <h3>
              <? $APPLICATION->IncludeFile(
                  $APPLICATION->GetTemplatePath("/includes/howto_left_title.php"),
                  Array(),
                  Array("MODE"=>"html")
                );?>  
            </h3>
            <? $APPLICATION->IncludeFile(
                $APPLICATION->GetTemplatePath("/includes/howto_left_contents.php"),
                Array(),
                Array("MODE"=>"html")
              );?>  
        </div>
        <div class="float_right col2">
            <h3>
              <? $APPLICATION->IncludeFile(
                  $APPLICATION->GetTemplatePath("/includes/howto_right_title.php"),
                  Array(),
                  Array("MODE"=>"html")
                );?>  
            </h3>
            <? $APPLICATION->IncludeFile(
                $APPLICATION->GetTemplatePath("/includes/howto_right_contents.php"),
                Array(),
                Array("MODE"=>"html")
              );?>  
        </div>
    </div>
</section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>