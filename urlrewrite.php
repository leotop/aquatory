<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/magazin/akvariumy/([a-zA-Z01-9_-]+)/[^/]*#",
		"RULE" => "SECTION_CODE=\$1",
		"ID" => "",
		"PATH" => "/magazin/akvariumy/detail.php",
	),
	array(
		"CONDITION" => "#^/magazin/([a-zA-Z01-9_-]+)/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/magazin/oborudovanie/index.php",
	),
	array(
		"CONDITION" => "#^/personal/order/#",
		"RULE" => "",
		"ID" => "bitrix:sale.personal.order",
		"PATH" => "/personal/order/index.php",
	),
	array(
		"CONDITION" => "#^/portfolio/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/portfolio/index.php",
	),
	array(
		"CONDITION" => "#^/o-nas/#",
		"RULE" => "",
		"ID" => "aqua:iblock.element.add.form",
		"PATH" => "/o-nas/index.php",
	),
	array(
		"CONDITION" => "#^/kupit-akvarium/([a-zA-Z01-9_-]+)/[^/]*#",
		"RULE" => "product_code=\$1",
		"ID" => "",
		"PATH" => "/kupit-akvarium/order.php",
	),
	array(
		"CONDITION" => "#^/kupit-akvarium/([a-zA-Z01-9_-]+)/([\\d]+)/[^/]*#",
		"RULE" => "product_code=\$1&color=\$2",
		"ID" => "",
		"PATH" => "/kupit-akvarium/order.php",
	),
);

?>
