<div class="partners-list">
  <div class="row">
  	<?foreach ($arResult['ITEMS'] as $item):?>
    <div class="col-xs-3 col-sm-2 col-lg-2">
    	<?if(strlen($item['LINK'])>0):?>
    	<a target="_blank" href="<?=$item['LINK']?>" class="partners-list__item">
    	<?else:?>
    	<span class="partners-list__item">
    	<?endif:?>
    		<img src="<?=$item['IMAGE']?>">
    	<?if(strlen($item['LINK'])>0):?>
    	</a>
    	<?else:?>
    	</span>
    	<?endif:?>
    </div>
    <?endforeach;?>
  </div>
</div>