<div class="services">
  <div class="row">
  <?foreach ($arResult['ITEMS'] as $item):?>
  <div class="col-lg-6">
  <? if(strlen($item['DETAIL_TEXT'])>0):?>
    <a data-toggle="modal" data-target="#servicesDetail" href="#servicesDetail" class="services__item" data-url="<?=$item['DETAIL_PAGE_URL']?>">
  <?else:?>
    <div class="services__item">
  <?endif;?>
    <div class="row">
      <?if(isset($item['PREVIEW_PICTURE']['SRC'])):?>
      <div class="col-xs-5 col-sm-4 col-md-3">
        <div style="background-image: url(<?=$item['PREVIEW_PICTURE']['SRC']?>)" class="services__image"></div>
      </div>
      <div class="col-xs-7 col-sm-8 col-md-9">
      <?else:?>
      <div class="col-xs-12">
      <?endif;?>
        <div class="services__title"><?=$item['NAME']?></div>
      </div>
    </div>
  
  <? if(strlen($item['DETAIL_TEXT'])>0):?>
    </a>
  <?else:?>
    </div>
  <?endif;?>
  </div>
  <?endforeach;?>
  </div>
</div>
<?$this->SetViewTarget('footer');?>
   <div id="servicesDetail" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-content--white">
      <a data-dismiss="modal" href="#" class="close"><?=svg('close')?></a>
      <div class="text">
        
      </div>
    </div>
  </div>
</div>
<?$this->EndViewTarget();?> 