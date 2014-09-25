<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('body_class', "about");
?> 
<h1 class="page__title">О компании</h1>
<div class="page__divider"></div>
<h2 class="page__blue-title">Аргус СварСервис – компания экспертов  в области сварочно-монтажных работы при строительстве и ремонте трубопроводов мирового уровня.</h2>
<div class="row">
  <div class="col-sm-6">
    <ul class="list">
      <li>Организация работы колонн автоматической сварки</li>
      <li>Организация мероприятий для вывода сварочных потоков на требуемую производительность и качество;</li>
      <li>Производство анализ причин возникновения дефектов и разработка мероприятий по их устранению;</li>
      <li>Обеспечение технической исправность оборудования и его бесперебойной работы; </li>
      <li>Осуществление технологической поддержки автоматической сварки на этапе аттестации и на протяжении всего проекта;</li>
    </ul>
  </div>
  <div class="col-sm-6">
    <ul class="list">
      <li>Разработка технологических карт и сварочных процедур;</li>
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
    <div class="xs-center"><a data-toggle="modal" data-target="#aboutVideo" href="#aboutVideo" class="button">смотрите видео о компании</a></div>
  </div>
  <div class="col-sm-6"><img src="/layout/images/map.png" class="map"></div>
</div>
<?$APPLICATION->AddViewContent('footer', '
<div id="contactsMap" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"><a data-dismiss="modal" href="#" class="close">'.svg('close').'</a>
      <iframe src="//player.vimeo.com/video/105264011?title=0&amp;byline=0&amp;badge=0&amp;color=0075cb" width="858" height="483" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div>
</div>');
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>