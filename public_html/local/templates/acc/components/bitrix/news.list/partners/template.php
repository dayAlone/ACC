<div class="partners-list">
  <div class="row">
  	<?foreach ($arResult['ITEMS'] as $item):?>
    <div class="col-xs-4 col-sm-3 col-lg-2"><a target="_blank" href="<?=$item['LINK']?>" class="partners-list__item"><img src="<?=$item['IMAGE']?>"></a></div>
    <?endforeach;?>
  </div>
</div>