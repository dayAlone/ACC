<div class="tech">
  <div class="row">
  <?foreach ($arResult['ITEMS'] as $item):?>
  
    <div class="col-xs-12 col-sm-4 col-lg-3">
      <div class="tech__item">
        <div class="row">
          <?if(isset($item['PREVIEW_PICTURE']['SRC'])):?>
          <div class="col-xs-5 col-sm-12">
            <a data-toggle="modal" data-target="#techDetail" href="#techDetail" data-url="<?=$item['DETAIL_PAGE_URL']?>">
              <div style="background-image: url(<?=$item['PREVIEW_PICTURE']['SRC']?>)" class="tech__image"></div>
            </a>
          </div>
          <?endif;?>

          <div class="col-xs-7 col-sm-12 tech__icons-frame">
            <a data-toggle="modal" data-target="#techDetail" href="#techDetail" data-url="<?=$item['DETAIL_PAGE_URL']?>" class="tech__title"><?=$item['NAME']?></a>
            <div class="tech__icons">
              <div class="row">
                <?if(strlen($item['VIDEO'])>0):?>
                  <div class="col-xs-6 col-sm-5"><a data-toggle="modal" data-target="#techMedia" href="#techMedia" class="tech__link tech__video"  data-url="<?=$item['DETAIL_PAGE_URL']?>?a=video"><?=svg('video')?>Видео</a></div>
                <?endif;?>
                <?if(count($item['IMAGES'])>0):?>
                  <div class="col-xs-6 col-sm-7"><a data-toggle="modal" data-target="#techMedia" href="#techMedia" class="tech__link tech__photos"  data-url="<?=$item['DETAIL_PAGE_URL']?>?a=photo"><?=svg('photos')?>Фотогалерея</a></div>
                <?endif;?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  <?endforeach;?>
  </div>
</div>
<?$this->SetViewTarget('footer');?>
<div id="techDetail" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-content--white">
      <a data-dismiss="modal" href="#" class="close"><?=svg('close')?></a>
      <div class="text">
        
      </div>
    </div>
  </div>
</div>
<div id="techMedia" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <a data-dismiss="modal" href="#" class="close"><?=svg('close')?></a>
      <div class="text">
        
      </div>
    </div>
  </div>
</div>
<?$this->EndViewTarget();?> 