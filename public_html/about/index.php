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
    <p>Мы прошли долгий путь от небольшой группы техников до одного из ведущих предприятий отрасли. Сегодня «Аргус Свар Сервис» – это:</p>
    <div class="row">
      <div class="col-sm-6">
        <ul class="list">
          <li>собственные технологии автоматической сварки;</li>
          <li>опыт работы по всему миру;</li>
          <li>большое портфолио успешно реализованных крупных проектов;</li>
        </ul>
      </div>
      <div class="col-sm-6">
        <ul class="list">
          <li>высококвалифицированный технический персонал, специализирующийся на автоматической сварке не один десяток лет;</li>
          <li>взаимодействие с заказчиком в поиске оптимальных решений проблем.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<h3>Доверяя нам, вы можете не беспокоиться за качество сварки.<br>«Аргус Свар Сервис». Наш профессионализм – ваш успех.</h3>
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