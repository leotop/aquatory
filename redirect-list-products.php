<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(isset($_GET['rid']))
{
  switch (intval($_GET['rid'])) {
    case 17:
      LocalRedirect('/magazin/akvariumy/?section[]=16', false, '301 Moved Permanently');
      break;
    case 18:
      LocalRedirect('/magazin/akvariumy/?section[]=19', false, '301 Moved Permanently');
      break;
    case 19:
      LocalRedirect('/magazin/akvariumy/?section[]=20', false, '301 Moved Permanently');
      break;
    case 20:
      LocalRedirect('/magazin/akvariumy/?section[]=18', false, '301 Moved Permanently');
      break;
    case 23:
      LocalRedirect('/magazin/akvariumy/?section[]=17', false, '301 Moved Permanently');
      break;
    case 30:
      LocalRedirect('/magazin/akvariumy/?section[]=80', false, '301 Moved Permanently');
      break;
    
    default:
      LocalRedirect('/magazin/akvariumy/', false, '301 Moved Permanently');
      break;
  }
}

else
{
  LocalRedirect('/', false, '301 Moved Permanently');
}


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_before.php");
?>
