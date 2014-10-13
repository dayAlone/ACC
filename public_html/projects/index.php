<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('body_class', "map");
?> 
<h1 data-more="Для получения подробной информации о проекте нажмите на соответствующий маркер на карте." class="inline-block page__title">наши проекты</h1>
<div class="filter">
  <div class="row">
    <div class="col-xs-12 visible-xs"><span class="dropdown"><a href="#" class="dropdown__trigger"><span class="dropdown__text">Все проекты</span><svg width="7" height="6" viewBox="0 0 7 6" xmlns="http://www.w3.org/2000/svg"><title>arrow</title><desc>Created with Sketch.</desc><path d="M7.03 0L3.514 6.026 0 0h7.03z" id="Imported-Layers" fill="#0045D2" fill-rule="evenodd"/></svg></a><span class="dropdown__frame"><a href="#" style="display:none" class="dropdown__item">Все проекты</a><a href="#" class="dropdown__item">Текущие</a><a href="#" class="dropdown__item">Завершенные</a></span></span></div>
    <div class="col-sm-9 no-mobile"><a href="#" class="filter__item filter__item--active">все проекты</a><a href="#" class="filter__item filter__item--yellow">текущие<span>проекты</span></a><a href="#" class="filter__item filter__item--blue">ЗАВЕРШЕННЫЕ<span>проекты</span></a></div>
    <div class="col-sm-3 right no-mobile">Вид: <span class="dropdown type"><a href="#" class="dropdown__trigger"><span class="dropdown__text">Карта</span><svg width="7" height="6" viewBox="0 0 7 6" xmlns="http://www.w3.org/2000/svg"><title>arrow</title><desc>Created with Sketch.</desc><path d="M7.03 0L3.514 6.026 0 0h7.03z" id="Imported-Layers" fill="#0045D2" fill-rule="evenodd"/></svg></a><span class="dropdown__frame"><a href="#list" class="dropdown__item">Список</a><a href="#bg_map" class="dropdown__item">Карта</a></span></span></div>
  </div>
</div>
<?/*
<div id="list" class="services"><a data-toggle="modal" data-target="#markerDetail" href="#markerDetail" class="services__item">
    <div class="row">
      <div class="col-xs-5 col-sm-4 col-md-3">
        <div style="background-image: url(./layout/images/s-1.jpg)" class="services__image"></div>
      </div>
      <div class="col-xs-7 col-sm-8 col-md-9">
        <div class="services__title">Организация работы колонн автоматической сварки</div>
      </div>
    </div></a><a data-toggle="modal" data-target="#markerDetail" href="#markerDetail" class="services__item">
    <div class="row">
      <div class="col-xs-5 col-sm-4 col-md-3">
        <div style="background-image: url(./layout/images/s-2.jpg)" class="services__image"></div>
      </div>
      <div class="col-xs-7 col-sm-8 col-md-9">
        <div class="services__title">Организация мероприятий для вывода сварочных потоков на требуемую роизводительность и качество</div>
      </div>
    </div></a><a data-toggle="modal" data-target="#markerDetail" href="#markerDetail" class="services__item">
    <div class="row">
      <div class="col-xs-5 col-sm-4 col-md-3">
        <div style="background-image: url(./layout/images/s-3.jpg)" class="services__image"></div>
      </div>
      <div class="col-xs-7 col-sm-8 col-md-9">
        <div class="services__title">Производство и анализ причин возникновения дефектов и разработка мероприятий по их устранению</div>
      </div>
    </div></a><a data-toggle="modal" data-target="#markerDetail" href="#markerDetail" class="services__item">
    <div class="row">
      <div class="col-xs-5 col-sm-4 col-md-3">
        <div style="background-image: url(./layout/images/s-4.jpg)" class="services__image"></div>
      </div>
      <div class="col-xs-7 col-sm-8 col-md-9">
        <div class="services__title">Обеспечение технической исправность оборудования и его бесперебойной работы</div>
      </div>
    </div></a><a data-toggle="modal" data-target="#markerDetail" href="#markerDetail" class="services__item">
    <div class="row">
      <div class="col-xs-5 col-sm-4 col-md-3">
        <div style="background-image: url(./layout/images/s-6.jpg)" class="services__image"></div>
      </div>
      <div class="col-xs-7 col-sm-8 col-md-9">
        <div class="services__title">Осуществление технологической поддержки автоматической сварки на этапе аттестации и на протяжении всего проекта</div>
      </div>
    </div></a><a data-toggle="modal" data-target="#markerDetail" href="#markerDetail" class="services__item">
    <div class="row">
      <div class="col-xs-5 col-sm-4 col-md-3">
        <div style="background-image: url(./layout/images/s-7.jpg)" class="services__image"></div>
      </div>
      <div class="col-xs-7 col-sm-8 col-md-9">
        <div class="services__title">Разработка технологических карт и сварочных процедур</div>
      </div>
    </div></a><a data-toggle="modal" data-target="#markerDetail" href="#markerDetail" class="services__item">
    <div class="row">
      <div class="col-xs-5 col-sm-4 col-md-3">
        <div style="background-image: url(./layout/images/s-8.jpg)" class="services__image"></div>
      </div>
      <div class="col-xs-7 col-sm-8 col-md-9">
        <div class="services__title">Разработка и внедрение новых сварочных технологий к существующим условиям и задачам на объектах строительства</div>
      </div>
    </div></a><a data-toggle="modal" data-target="#markerDetail" href="#markerDetail" class="services__item">
    <div class="row">
      <div class="col-xs-5 col-sm-4 col-md-3">
        <div style="background-image: url(./layout/images/s-9.jpg)" class="services__image"></div>
      </div>
      <div class="col-xs-7 col-sm-8 col-md-9">
        <div class="services__title">Предоставляем комплексы автоматической сварки в аренду с техническим персоналом и сварщиками</div>
      </div>
    </div></a><a data-toggle="modal" data-target="#markerDetail" href="#markerDetail" class="services__item">
    <div class="row">
      <div class="col-xs-5 col-sm-4 col-md-3">
        <div style="background-image: url(./layout/images/s-10.jpg)" class="services__image"></div>
      </div>
      <div class="col-xs-7 col-sm-8 col-md-9">
        <div class="services__title">Осуществляем сварочно-монтажные работы на участках строительства магистральных трубопроводов различных диаметров и протяженностей, различных категорий</div>
      </div>
    </div></a></div>
<?
$APPLICATION->IncludeComponent(
"bitrix:news.list", 
"projects_list", 
array(
  "IBLOCK_ID"   => 2,
  "NEWS_COUNT"  => "9999999",
  "SORT_BY1"    => "SORT",
  "SORT_ORDER1" => "ASC",
  "DETAIL_URL"  => "/partners/",
  "CACHE_TYPE"  => "A",
  "SET_TITLE"   => "N",
  "FIELD_CODE"  => array("SORT","PREVIEW_PICTURE"),
  "PROPERTY_CODE"  => array("LINK"),
   ),
   false
);*/
$APPLICATION->IncludeComponent(
"bitrix:news.list", 
"projects_map", 
array(
  "IBLOCK_ID"   => 5,
  "NEWS_COUNT"  => "9999999",
  "SORT_BY1"    => "SORT",
  "SORT_ORDER1" => "ASC",
  "DETAIL_URL"  => "/partners/",
  "CACHE_TYPE"  => "A",
  "SET_TITLE"   => "N",
  "FIELD_CODE"  => array("GALLERY", "SORT","PREVIEW_PICTURE"),
  "PROPERTY_CODE"  => array("LINK"),
   ),
   false
);
?>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>