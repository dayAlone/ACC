<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('body_class', "partners");
?> 
<h1 class="page__title">Партнеры</h1>
<div class="page__divider"></div>
<?
$APPLICATION->IncludeComponent(
"bitrix:news.list", 
"partners", 
array(
  "IBLOCK_ID"   => 2,
  "NEWS_COUNT"  => "9999999",
  "SORT_BY1"    => "SORT",
  "SORT_ORDER1" => "ASC",
  "DETAIL_URL"  => "/partners/",
  "CACHE_TYPE"  => "A",
  "SET_TITLE"   => "N",
  "FIELD_CODE"  => array("SORT","PREVIEW_PICTURE"),
  "PROPERTY_CODE"  => array("LINK"),
   ),
   false
);
?>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>