<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('body_class', "news");
$APPLICATION->SetTitle("News");
$APPLICATION->SetPageProperty('section', array('IBLOCK'=>6, 'CODE'=>'news_eng'));
require_once($_SERVER['DOCUMENT_ROOT'].'/include/news_list.php');
?>
<div class="row">
  <div class="col-xs-7">
    <h1 class="page__title">News</h1>
  </div>
  <div class="col-xs-5 right">
  	<?
    $APPLICATION->IncludeComponent("bitrix:catalog.section.list", "years_list", array(
        "IBLOCK_TYPE"  => "news",
        "IBLOCK_ID"    => "6",
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
$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news", 
	array(
		"IBLOCK_ID" => "6",
		"NEWS_COUNT" => "10",
		"PARENT_SECTION" => $_GLOBALS["currentNewsSection"],
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"DETAIL_URL" => "/news/#ELEMENT_CODE#/",
		"CACHE_TYPE" => "A",
		"SET_TITLE" => "N",
		"IBLOCK_TYPE" => "content_eng",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"AJAX_OPTION_ADDITIONAL" => ""
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