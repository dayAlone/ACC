<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->IncludeComponent("bitrix:news.detail","detail",Array(
	"IBLOCK_ID"     => "1",
	"ELEMENT_CODE"  => $_REQUEST['ELEMENT_CODE'],
	"CHECK_DATES"   => "N",
	"IBLOCK_TYPE"   => "content_russian",
	"SET_TITLE"     => "N",
	"PROPERTY_CODE" => Array("GALLERY", "DATE"),
	"CACHE_TYPE"    => "A",
	"CACHE_TIME"    => "3600",
));
?>