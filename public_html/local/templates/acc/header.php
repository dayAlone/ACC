<!DOCTYPE html><html lang='ru'>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimal-ui">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link href="/layout/css/frontend.css" rel="stylesheet">
  <script type="text/javascript" src="/layout/js/frontend.js"></script>
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
      <div class="row">
        <div class="col-lg-4 col-sm-3 col-xs-4">
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
        <div class="col-sm-2 col-xs-3">
          <a data-toggle="modal" data-target="#Contacts" href="#Contacts" class="popup-trigger"><?=svg('phone')?></a>
          <a data-toggle="modal" data-target="#Search" href="#Search" class="popup-trigger"><?=svg('seach')?></a>
          <div data-variant="russian,english" class="lang-trigger lang-trigger--lang_russian"><span class="lang-trigger__label">RU</span><span class="lang-trigger__carriage"></span><span class="lang-trigger__label">EN</span></div>
        </div>
        <div class="col-xs-3 col-md-3 col-lg-2"><a href="tel:88002005001" class="phone"><?=svg('phone')?></svg>8 800 200 500 1</a></div>
        <div class="col-xs-2"><a data-toggle="modal" data-target="#Feedback" href="#Feedback" class="feedback">Обратная связь</a><a data-toggle="modal" data-target="#Nav" href="#Nav" class="nav-trigger"><span>Меню</span><?=svg('nav')?></a></div>
        <div class="col-xs-2">
          <form class="search">
            <input type="text" name="q" class="search__input">
            <button type="submit" value="" class="search__submit"><?=svg('seach')?></button>
          </form>
        </div>
      </div>
    </div>
  </header>
  <main class="page">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-4">
          <aside class="sidebar">
          <a href="/" class="logo"><?=svg('logo')?></a>
            
            <?php
              $APPLICATION->IncludeComponent("bitrix:menu", "left", 
              array(
                  "ALLOW_MULTI_SELECT" => "Y",
                  "MENU_CACHE_TYPE"    => "A",
                  "ROOT_MENU_TYPE"     => "left",
                  "MAX_LEVEL"          => "1",
                  ),
              false);
              if($APPLICATION->GetCurDir()=='/'):
                $APPLICATION->IncludeComponent("bitrix:news.list", "news_index", 
                array(
                  "IBLOCK_ID"   => 1,
                  "NEWS_COUNT"  => "1",
                  "SORT_BY1"    => "ACTIVE_FROM",
                  "SORT_ORDER1" => "DESC",
                  "DETAIL_URL"  => "/news/#ELEMENT_CODE#/",
                  "CACHE_TYPE"  => "A",
                  "SET_TITLE"   => "N"
                   ),
                   false
                );
              endif;?>
          </aside>
        </div>
        <div class="col-sm-9 col-md-8">
          <article class="<?=$APPLICATION->AddBufferContent("article_class");?>">
            