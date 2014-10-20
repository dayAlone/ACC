<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("О компании");
$APPLICATION->SetPageProperty('body_class', "about");
$APPLICATION->SetPageProperty('popup', "aboutVideo");
$APPLICATION->SetPageProperty('popup_content', COption::GetOptionString("grain.customsettings","popup_about"));
?> 
<h1 class="page__title">О компании</h1>
<div class="page__divider"></div>
<h2 class="page__blue-title">Аргус СварСервис – компания экспертов  в области сварочно-монтажных работы при строительстве и ремонте трубопроводов мирового уровня.</h2>
<div class="row">
  <div class="col-md-4 col-sm-6">
    <ul class="list">
      <li>Организация работы колонн автоматической сварки</li>
      <li>Организация мероприятий для вывода сварочных потоков на требуемую производительность и качество;</li>
      <li>Производство анализ причин возникновения дефектов и разработка мероприятий по их устранению;</li>
      
    </ul>
  </div>
  <div class="col-md-4 col-sm-6">
    <ul class="list">
      <li>Обеспечение технической исправность оборудования и его бесперебойной работы; </li>
      <li>Осуществление технологической поддержки автоматической сварки на этапе аттестации и на протяжении всего проекта;</li>
      <li>Разработка технологических карт и сварочных процедур;</li>
    </ul>
  </div>
  <div class="col-md-4 col-sm-6">
    <ul class="list">
      <li>Разработка и внедрение новых сварочных технологий к существующим условиям и задачам на объектах строительства;</li>
      <li>Предоставляем комплексы автоматической сварки в аренду с техническим персоналом и сварщиками;</li>
      <li>Осуществляем сварочно-монтажные работы на участках строительств магистральных трубопроводов различных диаметров и протяженностей, различных категорий.</li>
    </ul>
  </div>
</div>
<div class="page__divider"></div>
<div class="row">
  <div class="col-sm-6">
    <h4>Опыт работы в различных регионах и странах мира:</h4>
    <p>Россия, Казахстан, Узбекистан, Азербайджан, Туркменистан, Белоруссия, Украина, Алжир, Ирак, ОАЭ, Китай, Индия</p>
    <? if(strlen(COption::GetOptionString("grain.customsettings","popup_about"))>0):?>
      <div class="xs-center"><a data-toggle="modal" data-target="#aboutVideo" href="#aboutVideo" class="button">смотрите видео о компании</a></div>
    <?endif;?>
  </div>
  <div class="col-sm-6 center"><img src="/layout/images/map.png" class="map"></div>
</div>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>