<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('body_class', "news");
require_once($_SERVER['DOCUMENT_ROOT'].'/include/news_list.php');
?>
<div class="row">
  <div class="col-xs-7">
    <h1 class="page__title">Новости</h1>
  </div>
  <div class="col-xs-5 right">
  	<?
    $APPLICATION->IncludeComponent("bitrix:catalog.section.list", "years_list", array(
        "IBLOCK_TYPE"  => "news",
        "IBLOCK_ID"    => "1",
        "TOP_DEPTH"    => "1",
        "CACHE_TYPE"   => "A",
        "CACHE_NOTES"  => $_GLOBALS['currentNewsSection']
    ),
    false
		);?>
    
  </div>
</div>
<div class="page__divider m-margin-top"></div>
<?
$APPLICATION->IncludeComponent("bitrix:news.list", "news", 
array(
		"IBLOCK_ID"      => 1,
		"NEWS_COUNT"     => "10",
		"PARENT_SECTION" => $_GLOBALS['currentNewsSection'],
		"SORT_BY1"       => "ACTIVE_FROM",
		"SORT_ORDER1"    => "DESC",
		"DETAIL_URL"     => "/news/#ELEMENT_CODE#/",
		"CACHE_TYPE"     => "A",
		"SET_TITLE"      => "N"
   ),
   false
);
if(strlen($_REQUEST['ELEMENT_CODE'])>0 && !isset($_GLOBALS['currentNewsSection']))
{?>
<script type="text/javascript" charset="utf-8" async defer>
  $(function(){
    $.openModal('/news/<?=$_REQUEST['ELEMENT_CODE']?>/', '#newsDetail', true);
  })
</script>
<?}
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>