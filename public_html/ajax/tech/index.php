<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->IncludeComponent("bitrix:news.detail","detail".(isset($_REQUEST['a'])?"_".$_REQUEST['a']:""),Array(
	"IBLOCK_ID"     => "4",
	"ELEMENT_CODE"  => $_REQUEST['ELEMENT_CODE'],
	"CHECK_DATES"   => "N",
	"IBLOCK_TYPE"   => "content_russian",
	"SET_TITLE"     => "N",
	"PROPERTY_CODE" => Array("IMAGES", "VIDEO"),
	"CACHE_TYPE"    => "N",
	"CACHE_TIME"    => "3600",
));
?>