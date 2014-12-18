<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("About the Company");
$APPLICATION->SetPageProperty('body_class', "about");
$APPLICATION->SetPageProperty('popup', "aboutVideo");
$APPLICATION->SetPageProperty('popup_content', COption::GetOptionString("grain.customsettings","popup_about"));
?> 
<h1 class="page__title">About the Company</h1>
<div class="page__divider"></div>
<h2 class="page__blue-title">Argus Welding Services (AWS) - a leading international team of experts in automatic welding of pipelines.</h2>

<div class="row">
  <div class="col-md-4 col-sm-12">
    <h3>Our expertise</h3>
    <ul class="list">
      <li>We provide Automatic Welding Systems and Stuff on lease.</li>
      <li>We develop solutions on improvement of productivity and welding works quality.</li>
      <li>We develop new welding technologies and products to match existing conditions and requirements at the production site.</li>
    </ul>
  </div>
  <div class="col-md-8 col-sm-12">
    <h3>Why AWS?</h3>
    <p>We started our business from a small group of technicians and now we are one of the leading companies in the industry. Today, Argus Welding Services Argus Welding Servicehas got:</p>
    <div class="row">
      <div class="col-sm-6">
        <ul class="list">
          <li>its own automatic welding technologies;</li>
          <li>world-wide experience;</li>
          <li>a big portfolio of successfully implemented projects;</li>
        </ul>
      </div>
      <div class="col-sm-6">
        <ul class="list">
          <li>highly-skilled technicians with a long standing experience for decades;</li>
          <li>an approach of cooperation with a Client for optimal solution of the problem;</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<h3>Putting trust in us, you may not worry about the quality of welding.<br>Argus Welding Service (AWS). Our competence is your success.</h3>
<div class="page__divider"></div>
<div class="row">
  <div class="col-sm-6 center"><a href="/projects/"><img src="/layout/images/map.png" class="map"></a></div>
  <div class="col-sm-6">
    <h4>Global expertise:</h4>
    <p>Russia, Kazakhstan, Uzbekistan, Azerbaijan, Turkmenistan, Belarus, Ukraine, Israel, France, Algeria, Iraq, UAE, China, India</p>
    <? if(strlen(COption::GetOptionString("grain.customsettings","popup_about"))>0):?>
      <div class="xs-center"><a data-toggle="modal" data-target="#aboutVideo" href="#aboutVideo" class="button">смотрите видео о компании</a></div>
    <?endif;?>
  </div>
  
</div>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>