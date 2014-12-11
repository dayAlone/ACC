<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('body_class', "contacts");
$APPLICATION->SetTitle("Contacts");
?> 
<h1 class="page__title">Contacts</h1>
<div class="page__divider"></div>
<div class="row">
  <div class="col-sm-8">
    <big><strong>Address: </strong>Moscow, Russia, <nobr>Usacheva Street, 35A</nobr> <br><strong>Phone: </strong><a href="tel:88005553136">8 800 555 31 36 <br></a><strong>E-mail: </strong><a href="mailto:info@argusweld.ru">info@argusweld.ru</a></big><br>
    <div class="xs-center"><a data-toggle="modal" data-target="#contactsMap" href="#contactsMap" class="button button--big button--white">map</a></div>
  </div>
  <div class="col-sm-4 right">
    <div class="xs-center"><a data-toggle="modal" data-target="#Feedback" href="#Feedback" class="no-margin-top button button--big button--white">Write to us</a></div>
  </div>
</div>
<?$APPLICATION->AddViewContent('footer', '
<div id="contactsMap" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"><a data-dismiss="modal" href="#" class="close">'.svg('close').'</a>
      <div id="map"></div>
    </div>
  </div>
</div>
<script src="http://api-maps.yandex.ru/2.1/?lang=en-US&amp;load=package.full" type="text/javascript"></script>
');
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>