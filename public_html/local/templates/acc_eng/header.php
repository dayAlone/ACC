<!DOCTYPE html><html lang='ru'>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimal-ui">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <?
  $APPLICATION->SetAdditionalCSS("/layout/css/frontend.css", true);
  $APPLICATION->AddHeadScript('/layout/js/frontend.js');
  $APPLICATION->ShowViewContent('header');?>
  <title><?php 
    $APPLICATION->ShowTitle();
    if($APPLICATION->GetCurDir()!='/') {
      $rsSites = CSite::GetByID(SITE_ID);
      $arSite = $rsSites->Fetch();
      echo ' | ' . $arSite['NAME'];
    }
    ?></title>
  <?
    $APPLICATION->ShowHead();
  ?>
</head>
<body class="<?=$APPLICATION->AddBufferContent("body_class");?>">
<div class="wrap">
  <div id="panel"><?$APPLICATION->ShowPanel();?></div>
  <header class="toolbar">
    <div class="container">
      <div class="row no-gutter-md">
        <div class="col-xs-3 visible-md visible-lg">
          <a href="/" class="logo"><?=svg('logo')?></a>
          <div class="shield shield--big-left">
            <div class="shield__right"><?=svg('shield-r')?></div>
          </div>
        </div>
        <div class="col-xs-12 col-md-9 no-padding-right-md">
          <div class="row">
            <div class="col-xs-3 col-md-2">
              <?php
              $APPLICATION->IncludeComponent("bitrix:menu", "sites", 
              array(
                  "ALLOW_MULTI_SELECT" => "Y",
                  "MENU_CACHE_TYPE"    => "A",
                  "ROOT_MENU_TYPE"     => "sites",
                  "MAX_LEVEL"          => "1",
                  ),
              false);
              ?>
              
            </div>
            <div class="col-xs-2 col-lg-3">
              <a data-toggle="modal" data-target="#Contacts" href="#Contacts" class="popup-trigger"><?=svg('phone')?></a>
              <a data-toggle="modal" data-target="#Search" href="#Search" class="popup-trigger"><?=svg('seach')?></a>
              <div data-variant="russian,english" class="lang-trigger lang-trigger--lang_english"><span class="lang-trigger__label">RU</span><span class="lang-trigger__carriage"></span><span class="lang-trigger__label">EN</span></div>
            </div>
            <div class="col-xs-3 md-right"><a href="tel:<?=str_replace(' ', '', COption::GetOptionString("grain.customsettings","toolbar_phone"))?>" class="phone"><?=svg('phone')?></svg><?=COption::GetOptionString("grain.customsettings","toolbar_phone")?></a></div>
            <div class="col-xs-4 col-md-5 col-lg-4 right">
              <?/*<a href="#" class="filials visible-md-inline visible-lg-inline"><?=svg('pin')?>Филиальная сеть</a>*/?>
              <a data-toggle="modal" data-target="#Feedback" href="#Feedback" class="feedback visible-md-inline visible-lg-inline">Feedback</a>
              <a data-toggle="modal" data-target="#Nav" href="#Nav" class="nav-trigger"><span>Menu</span><?=svg('nav')?></a>
              <form action="/search/" class="search-form">
                <input type="text" name="q" class="search-form__text" placeholder="">
                <button type="submit" class="search-form__button"><?=svg('seach')?></button>
              </form>
              <a href="#" class="search-trigger"><?=svg('seach')?></a></div>
          </div>
          <div class="row visible-md visible-lg">
            <div class="col-xs-12">
              <?
              $APPLICATION->IncludeComponent("bitrix:menu", "top", 
              array(
                  "ALLOW_MULTI_SELECT" => "Y",
                  "MENU_CACHE_TYPE"    => "A",
                  "ROOT_MENU_TYPE"     => "left",
                  "MAX_LEVEL"          => "1",
                  ),
              false);
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main class="page">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 <?=($APPLICATION->GetCurDir()=='/'?'col-md-4':'')?> no-position">
          <aside class="sidebar">
          <a href="/" class="logo"><?=svg('logo')?></a>
            
            <?php
              if($APPLICATION->GetCurDir()=='/'):
                ?>
                <div class="bages">
                  <div class="bages__item"><img src="./layout/images/icon-2.png" class="bages__image">
                    <div class="bages__title">Ассоциированный член росснгс</div>
                  </div>
                  <div class="bages__item"><img src="./layout/images/icon-3.png" class="bages__image">
                    <div class="bages__title">Сертификация по стандарту ISO</div>
                  </div>
                  <div class="bages__item"><img src="./layout/images/icon-4.png" class="bages__image">
                    <div class="bages__title">Сертификация в системе ГАЗСЕРТ</div>
                  </div>
                </div>
                <?
                $APPLICATION->IncludeComponent("bitrix:news.list", "news_index", 
                array(
                  "IBLOCK_ID"   => 6,
                  "NEWS_COUNT"  => "1",
                  "SORT_BY1"    => "ACTIVE_FROM",
                  "SORT_ORDER1" => "DESC",
                  "DETAIL_URL"  => "/news/#ELEMENT_CODE#/",
                  "CACHE_TYPE"  => "A",
                  "SET_TITLE"   => "N",
                  "CLASS"       => "no-mobile"
                   ),
                   false
                );
              endif;?>
          </aside>
        </div>
        <div class="col-sm-12 <?=($APPLICATION->GetCurDir()=='/'?'col-md-8':'')?> no-position">
          <article class="<?=$APPLICATION->AddBufferContent("article_class");?>">
            