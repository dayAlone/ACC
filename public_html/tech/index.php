<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('body_class', "tech");
$APPLICATION->SetPageProperty('popup', "workProcess");
$APPLICATION->SetPageProperty('popup_content', COption::GetOptionString("grain.customsettings","popup_work"));
?> 
<h1 class="page__title">Технологии</h1>
<div class="page__divider"></div>
<h2>В нашей работы мы используем:</h2>
<?
$APPLICATION->IncludeComponent(
"bitrix:news.list", 
"tech", 
array(
  "IBLOCK_ID"   => 4,
  "NEWS_COUNT"  => "9999999",
  "SORT_BY1"    => "SORT",
  "SORT_ORDER1" => "ASC",
  "DETAIL_URL"  => "/tech/#ELEMENT_CODE#/",
  "PROPERTY_CODE" => Array("IMAGES", "VIDEO"),
  "CACHE_TYPE"  => "A",
  "SET_TITLE"   => "N",
   ),
   false
);
?>
<div class="page__divider"></div>
<big class="l-line-height s-margin-bottom">Одновременно с предоставлением персонала мы имеем возможность и осуществляем аудит, имеющейся тех.вооруженности,  разработку технологий сварки с внедрением, сваркой КСС, предоставлением процедур, обучением персонала заказчика на оборудовании заказчика, что предпочтительнее для заказчика, т.к. обучение проходит непосредственно на оборудовании и объекте заказчика перед началом сварки.</big>
<? if(strlen(COption::GetOptionString("grain.customsettings","popup_work"))>0):?>
  <div class="center"><a data-toggle="modal" data-target="#workProcess" href="#workProcess"  class="button button--white">как проходит рабочий процесс</a></div>
<?endif;?>
<?
if(strlen($_REQUEST['ELEMENT_CODE'])>0)
{?>
<script type="text/javascript" charset="utf-8" async defer>
  $(function(){
    $.openModal('/tech/<?=$_REQUEST['ELEMENT_CODE']?>/', '#techDetail', true);
  })
</script>
<?}
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>