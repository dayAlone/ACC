<?foreach ($arResult['ITEMS'] as &$item):
	preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $item['PROPERTIES']['VIDEO']['VALUE'], $matches);
	$item['VIDEO'] = $matches[0];
	$item['IMAGES'] = $item['PROPERTIES']['IMAGES']['VALUE'];
endforeach;?>