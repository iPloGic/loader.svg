<? if( !defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true ) {
	die();
}

use \Bitrix\Main\Config\Option,
	\Bitrix\Main\Localization\Loc,
	\Bitrix\Main\Loader;

$arComponentParameters = [

	"PARAMETERS" => [

		"TYPE" => [
			"PARENT"            => "BASE",
			"NAME"              => Loc::getMessage("PARAMETER_TYPE"),
			"TYPE"              => "LIST",
			"VALUES"            => [
				"1" => Loc::getMessage("PARAMETER_TYPE_OPT") . " 1",
				"2" => Loc::getMessage("PARAMETER_TYPE_OPT") . " 2",
				"3" => Loc::getMessage("PARAMETER_TYPE_OPT") . " 3",
				"4" => Loc::getMessage("PARAMETER_TYPE_OPT") . " 4",
				"5" => Loc::getMessage("PARAMETER_TYPE_OPT") . " 5",
				"6" => Loc::getMessage("PARAMETER_TYPE_OPT") . " 6",
				"7" => Loc::getMessage("PARAMETER_TYPE_OPT") . " 7",
				"8" => Loc::getMessage("PARAMETER_TYPE_OPT") . " 8",
				"9" => Loc::getMessage("PARAMETER_TYPE_OPT") . " 9",
				"10" => Loc::getMessage("PARAMETER_TYPE_OPT") . " 10",
				"11" => Loc::getMessage("PARAMETER_TYPE_OPT") . " 11",
				"12" => Loc::getMessage("PARAMETER_TYPE_OPT") . " 12",
			],
			"DEFAULT"           => "1",
			"ADDITIONAL_VALUES" => "N",
			"REFRESH"           => "N"
		],

		"COLOR" => [
			"PARENT"  => "BASE",
			"NAME"    => Loc::getMessage("PARAMETER_COLOR"),
			"TYPE"    => "STRING",
			"DEFAULT" => '#cccccc',
		],

		"WIDTH" => [
			"PARENT"  => "BASE",
			"NAME"    => Loc::getMessage("PARAMETER_WIDTH"),
			"TYPE"    => "STRING",
			"DEFAULT" => '100',
		],

		"CACHE_TIME" => [
			"DEFAULT" => 3600000,
			"PARENT"  => "CACHE_SETTINGS",
		],
		"CACHE_TYPE" => [
			"PARENT"            => "CACHE_SETTINGS",
			"NAME"              => Loc::getMessage("COMP_PROP_CACHE_TYPE"),
			"TYPE"              => "LIST",
			"VALUES"            => [
				"A" => Loc::getMessage("COMP_PROP_CACHE_TYPE_AUTO") . " " . Loc::getMessage("COMP_PARAM_CACHE_MAN"),
				"Y" => Loc::getMessage("COMP_PROP_CACHE_TYPE_YES"),
				"N" => Loc::getMessage("COMP_PROP_CACHE_TYPE_NO"),
			],
			"DEFAULT"           => "Y",
			"ADDITIONAL_VALUES" => "N",
			"REFRESH"           => "Y"
		],
	],
];

//}

?>
