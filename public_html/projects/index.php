<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('body_class', "map");
?> 
<h1 data-more="Для получения подробной информации о проекте нажмите на соответствующий маркер на карте." class="inline-block page__title">наши проекты</h1>
<?
$APPLICATION->IncludeComponent(
"bitrix:news.list", 
"projects_map", 
array(
  "IBLOCK_ID"   => 5,
  "NEWS_COUNT"  => "9999999",
  "SORT_BY1"    => "SORT",
  "SORT_ORDER1" => "ASC",
  "DETAIL_URL"  => "/projects/#ELEMENT_CODE#/",
  "CACHE_TYPE"  => "A",
  "SET_TITLE"   => "N",
  "PROPERTIES_CODE" =>array('GEO'),
  "FIELD_CODE"  => array("SORT","PREVIEW_PICTURE"),
  "PROPERTY_CODE"  => array("LINK"),
   ),
   false
);
if(strlen($_REQUEST['ELEMENT_CODE'])>0)
{?>
<script type="text/javascript" charset="utf-8" async defer>
  $(function(){
    $.openModal('/projects/<?=$_REQUEST['ELEMENT_CODE']?>/', '#markerDetail', true);
  })
</script>
<?}
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>