<nav class="nav-left no-mobile">
	<?foreach ($arResult as $key=>$item):?>
		<a href="<?=$item['LINK']?>" class="nav-left__item <?=($item['SELECTED']?'nav-left__item--active':'')?>"><?=$item['TEXT']?></a>
	<?endforeach;?>
</nav>