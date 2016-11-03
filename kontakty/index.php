<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
$APPLICATION->SetPageProperty("title", "Контакты. Магазин аквариумов juwel-aquarium.ru");
$APPLICATION->SetPageProperty("keywords", "Контакты, аквариумы, аквариумы Juwel");
$APPLICATION->SetPageProperty("description", "Контакты. Аквариумы и вся аквариумистика в магазине аквариумов juwel-aquarium.ru. Выставочный зал, интернет-магазин. Аквариумное оборудование, декорации, рыбки, растения");


?>
            
<section class="shadow_bottom_container">
    <h1>Контакты</h1>
</section>
<section class="section_content">
    <div class="inner">
        <p class="section_title">
          <? $APPLICATION->IncludeFile(
              $APPLICATION->GetTemplatePath("/includes/contacts_title.php"),
              Array(),
              Array("MODE"=>"html")
            );?>  
        </p>
        <ul class="col3 color_blue contacts_info clearfix">
            <li>
                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-contact-map.png" alt="" width="57" height="57">
                <h3>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/contacts_store_title.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?>  
                </h3>
                <br>
                <p><i class="ic ic_phone"></i> 
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/contacts_store_phone1.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?>  
                </p>
				<?/*<p><i class="ic ic_phone"></i>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/contacts_store_phone2.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?>  
				</p>*/?>
                <p><i class="ic ic_map"></i>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/contacts_store_address.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?>  
                </p>
                <p><i class="ic ic_email"></i>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/contacts_store_email.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?>  
                </p>
            </li>
            <li>
                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icons/ic-week.png" alt="" width="57" height="57">
                <h3>
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/contacts_duty_title.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?>  
                </h3>
                <br>
                <? $APPLICATION->IncludeFile(
                    $APPLICATION->GetTemplatePath("/includes/contacts_duty_contents.php"),
                    Array(),
                    Array("MODE"=>"html")
                  );?>  
            </li>
        </ul>
    </div>
</section>
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
    "contacts",
    Array(
        "LAT" => "55.733359",
        "LNG" => "37.705116",
    ),
    false
);

?>

<section class="gradient_container gradient_container_alt">
    <div class="inner">
        <p class="section_title">
          <? $APPLICATION->IncludeFile(
              $APPLICATION->GetTemplatePath("/includes/contacts_routes_title.php"),
              Array(),
              Array("MODE"=>"html")
            );?>  
        </p>
        <ul class="switcher">
            <li class="active">
                <a href="#man" class="switcher_link"><?
                    $APPLICATION->IncludeFile(
                        $APPLICATION->GetTemplatePath("/includes/contacts_route_walking.php"),
                        Array(),
                        Array("MODE" => "html")
                    );
                ?></a>
            </li>
            <li>
                <a href="#car" class="switcher_link"><?
                    $APPLICATION->IncludeFile(
                        $APPLICATION->GetTemplatePath("/includes/contacts_route_bycar.php"),
                        Array(),
                        Array("MODE" => "html")
                    );
                ?></a>
            </li>
        </ul>
        <div class="switcher_content_container color_blue">
            <div class="switcher_content clearfix" style="display: block" id="man">
                <div class="col2 float_left">
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/contacts_route_walking_left.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?>  
                </div>
                <div class="col2 float_right">
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/contacts_route_walking_right.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?>  
                </div>
            </div>
            <div class="switcher_content clearfix" id="car">
                <div class="col2 float_left">
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/contacts_route_bycar_left.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?>  
                </div>
                <div class="col2 float_right">
                  <? $APPLICATION->IncludeFile(
                      $APPLICATION->GetTemplatePath("/includes/contacts_route_bycar_right.php"),
                      Array(),
                      Array("MODE"=>"html")
                    );?>  
                </div>
            </div>
        </div>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
