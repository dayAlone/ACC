<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('body_class', "search");
$APPLICATION->SetTitle("Карта сайта");
?> 
<h1 class="inline-block page__title">Карта сайта</h1>
<div class="page__divider"></div>
<?
$APPLICATION->IncludeComponent(
	"bitrix:main.map", 
	".default", 
	array(
		"LEVEL" => "4",
		"COL_NUM" => "2",
		"SHOW_DESCRIPTION" => "Y",
		"SET_TITLE" => "N",
		"CACHE_TIME" => "36000",
		"CACHE_TYPE" => "A"
	),
	false
);
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>