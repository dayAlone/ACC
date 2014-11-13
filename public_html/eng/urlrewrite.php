<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/news/([\w-_]+)/.*#",
		"RULE" => "&ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/news/index.php",
	),
	array(
		"CONDITION" => "#^/ajax/news/([\w-_]+)/.*#",
		"RULE" => "&ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/ajax/news/index.php",
	),
	array(
		"CONDITION" => "#^/services/([\w-_]+)/.*#",
		"RULE" => "&ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/services/index.php",
	),
	array(
		"CONDITION" => "#^/ajax/services/([\w-_]+)/.*#",
		"RULE" => "&ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/ajax/services/index.php",
	),
	array(
		"CONDITION" => "#^/projects/([\w-_]+)/.*#",
		"RULE" => "&ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/projects/index.php",
	),
	array(
		"CONDITION" => "#^/ajax/projects/([\w-_]+)/.*#",
		"RULE" => "&ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/ajax/projects/index.php",
	),
	array(
		"CONDITION" => "#^/tech/([\w-_]+)/.*#",
		"RULE" => "&ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/tech/index.php",
	),
	array(
		"CONDITION" => "#^/ajax/tech/([\w-_]+)/.*#",
		"RULE" => "&ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/ajax/tech/index.php",
	),
);

?>