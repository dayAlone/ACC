<div class="news <?=$arProps['CLASS']?>">
	<?foreach ($arResult['ITEMS'] as $item):?>
	  <div class="news__item">
	    <div class="news__date"><?=$item['ACTIVE_FROM']?></div>
	    <a href="<?=$item['DETAIL_PAGE_URL']?>" class="news__title"><?=$item['NAME']?></a>
	  </div>
	<?endforeach;?>
  <a href="/news/" class="news__more">еще новости</a>
</div>