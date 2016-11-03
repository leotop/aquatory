<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(isset($_GET['id']))
{
  switch (intval($_GET['id'])) {
    case 1:
      LocalRedirect('/kontakty/', false, '301 Moved Permanently');
      break;
    case 4:
      LocalRedirect('/kak-kupit/', false, '301 Moved Permanently');
      break;
    case 5:
      LocalRedirect('/oformlenie-akvariumov/', false, '301 Moved Permanently');
      break;
    case 7:
      LocalRedirect('/magazin/otdelno-produktsiya-juwel/', false, '301 Moved Permanently');
      break;
    case 9:
      LocalRedirect('/magazin/otdelno-produktsiya-juwel/filtry-i-pompy-juwel/', false, '301 Moved Permanently');
      break;
    case 10:
      LocalRedirect('/magazin/otdelno-produktsiya-juwel/filtruyushchie-materialy-juwel/', false, '301 Moved Permanently');
      break;
    case 11:
      LocalRedirect('/magazin/otdelno-produktsiya-juwel/nagrevateli-juwel/', false, '301 Moved Permanently');
      break;
    case 12:
      LocalRedirect('/magazin/otdelno-produktsiya-juwel/svetilniki-juwel/', false, '301 Moved Permanently');
      break;
    case 14:
      LocalRedirect('/magazin/otdelno-produktsiya-juwel/fony-juwel/', false, '301 Moved Permanently');
      break;
    case 21:
      LocalRedirect('/kupit-akvarium/', false, '301 Moved Permanently');
      break;
    case 22:
      LocalRedirect('/magazin/tekhnicheskoe-osnashchenie-akvariuma/', false, '301 Moved Permanently');
      break;
    
    default:
      LocalRedirect('/magazin/', false, '301 Moved Permanently');
      break;
  }
}

else
{
  LocalRedirect('/', false, '301 Moved Permanently');
}


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_before.php");
?>
