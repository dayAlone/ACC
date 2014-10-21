<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("О компании");
$APPLICATION->SetPageProperty('body_class', "about");
$APPLICATION->SetPageProperty('popup', "aboutVideo");
$APPLICATION->SetPageProperty('popup_content', COption::GetOptionString("grain.customsettings","popup_about"));
?> 
<h1 class="page__title">О компании</h1>
<div class="page__divider"></div>
<h2 class="page__blue-title">«Аргус Свар Сервис» (АСС) – ведущая международная команда экспертов автоматической сварки трубопроводов.</h2>

<div class="row">
  <div class="col-md-4 col-sm-12">
    <h3>Что мы делаем</h3>
    <ul class="list">
      <li>Предоставляем комплексы автоматической сварки и персонал в аренду.</li>
      <li>Разрабатываем решения по повышению производительности и качества сварочных работ.</li>
      <li>Адаптируем новые сварочные технологии и продукты к существующим на конкретном объекте условиям.</li>
    </ul>
  </div>
  <div class="col-md-8 col-sm-12">
    <h3>Почему мы</h3>
    <div class="row">
      <div class="col-sm-6">
        <ul class="list">
          <li>Обеспечение технической исправность оборудования и его бесперебойной работы; </li>
          <li>Осуществление технологической поддержки автоматической сварки на этапе аттестации и на протяжении всего проекта;</li>
          <li>Разработка технологических карт и сварочных процедур;</li>
        </ul>
      </div>
      <div class="col-sm-6">
        <ul class="list">
          <li>Разработка и внедрение новых сварочных технологий к существующим условиям и задачам на объектах строительства;</li>
          <li>Предоставляем комплексы автоматической сварки в аренду с техническим персоналом и сварщиками;</li>
          <li>Осуществляем сварочно-монтажные работы на участках строительств магистральных трубопроводов различных диаметров и протяженностей, различных категорий.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<h3>Доверяя нам, вы можете не беспокоиться за качество сварки.<br>
«Аргус СварСервис». Наш профессионализм – ваш успех.</h3>
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