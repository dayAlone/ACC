<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('body_class', "services");
$APPLICATION->SetPageProperty('popup', "auditProcess");
$APPLICATION->SetTitle("Наши услуги'");
$APPLICATION->SetPageProperty('popup_content', COption::GetOptionString("grain.customsettings","popup_audit"));
?> 
<h1 class="page__title">Наши услуги</h1>
<div class="page__divider"></div>
<h2>Аргус Свар Сервис выполняет широкий спектр работ, связанных с обслуживанием трубопроводов:</h2>
<?
$APPLICATION->IncludeComponent(
"bitrix:news.list", 
"services", 
array(
  "IBLOCK_ID"   => 8,
  "NEWS_COUNT"  => "9999999",
  "SORT_BY1"    => "SORT",
  "SORT_ORDER1" => "ASC",
  "FIELD_CODE"  => array('DETAIL_TEXT'),
  "DETAIL_URL"  => "/services/#ELEMENT_CODE#/",
  "CACHE_TYPE"  => "A",
  "SET_TITLE"   => "N",
   ),
   false
);
?>
<?/*
<div class="page__divider"></div>

<big class="l-line-height s-margin-bottom">Одновременно с предоставлением персонала мы имеем возможность и осуществляем аудит, имеющейся тех.вооруженности,  разработку технологий сварки с внедрением, сваркой КСС, предоставлением процедур, обучением персонала заказчика на оборудовании заказчика, что предпочтительнее для заказчика, т.к. обучение проходит непосредственно на оборудовании и объекте заказчика перед началом сварки.</big>
<? if(strlen(COption::GetOptionString("grain.customsettings","popup_audit"))>0):?>
  <div class="center"><a data-toggle="modal" data-target="#auditProcess" href="#auditProcess" class="button button--white">как проходит аудит?</a></div>
<?endif;?>
<?
*/
if(strlen($_REQUEST['ELEMENT_CODE'])>0)
{?>
<script type="text/javascript" charset="utf-8" async defer>
  $(function(){
    $.openModal('/services/<?=$_REQUEST['ELEMENT_CODE']?>/', '#servicesDetail', true);
  })
</script>
<?}
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>