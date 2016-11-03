<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(isset($_GET['rid']) && isset($_GET['pid']))
{
  $_GET['rid'] = intval($_GET['rid']);
  $_GET['pid'] = intval($_GET['pid']);
  if($_GET['rid'] == 20 && $_GET['pid'] == 9) {
    LocalRedirect('/magazin/akvariumy/Akvarium-Juwel-Rio-180/', false, '301 Moved Permanently');
  }
  else if($_GET['rid'] == 17 && $_GET['pid'] == 3) {
    LocalRedirect('/magazin/akvariumy/rekord-700/', false, '301 Moved Permanently');
  }
  else if($_GET['rid'] == 17 && $_GET['pid'] == 48) {
    LocalRedirect('/magazin/akvariumy/Akvarium-Juwel-Rekord-600/', false, '301 Moved Permanently');
  }
  else if($_GET['rid'] == 18 && $_GET['pid'] == 14) {
    LocalRedirect('/magazin/akvariumy/Akvarium-Juwel-Vision-260/', false, '301 Moved Permanently');
  }
  else if($_GET['rid'] == 20 && $_GET['pid'] == 7) {
    LocalRedirect('/magazin/akvariumy/Akvarium-Juwel-Vision-260/', false, '301 Moved Permanently');
  }
  else if($_GET['rid'] == 23 && $_GET['pid'] == 116) {
    LocalRedirect('/magazin/akvariumy/Akvarium-Juwel-Lido-120/', false, '301 Moved Permanently');
  }
  else if($_GET['rid'] == 23 && $_GET['pid'] == 52) {
    LocalRedirect('/magazin/akvariumy/Akvarium-Juwel-Lido-200/', false, '301 Moved Permanently');
  }
  else if($_GET['rid'] == 30 && $_GET['pid'] == 115) {
    LocalRedirect('/magazin/akvariumy/Akvarium-Juwel-Vio-40/', false, '301 Moved Permanently');
  }
  else {
    LocalRedirect('/magazin/akvariumy/', false, '301 Moved Permanently');
  }
}

else
{
  LocalRedirect('/', false, '301 Moved Permanently');
}


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_before.php");
?>
