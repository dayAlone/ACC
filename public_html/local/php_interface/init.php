<?
function svg($value='')
{
	$path = $_SERVER["DOCUMENT_ROOT"]."/layout/images/svg/".$value.".svg";
	return file_get_contents($path);
}
function body_class()
{
	global $APPLICATION;
	if($APPLICATION->GetPageProperty('body_class')) {
		return $APPLICATION->GetPageProperty('body_class');
	}
}
function article_class()
{
	global $APPLICATION;
	if($APPLICATION->GetPageProperty('article_class')) {
		return $APPLICATION->GetPageProperty('article_class');
	}
}
?>