<?
if (!defined("ERROR_404")) {
  include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
}

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Страница не найдена");

$APPLICATION->SetPageProperty("body_classes", "page_404");

?>

<div class="page_404_content">
  <h1>Ошибка 404</h1>
  <h2>Этой страницы не существует</h2>
  <a href="/" class="btn_green">Вернуться на главную</a>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>