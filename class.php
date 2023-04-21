<?
if( !defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true ) {
	die();
}

use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Loader;


class iplogicLoaderSvf extends \CBitrixComponent
{
	function __construct($component = null)
	{
		parent::__construct($component);
	}

	public function configureActions()
	{
		//fill it, or use default
		return [];
	}

	public function onPrepareComponentParams($arParams)
	{

		if(substr($arParams["COLOR"],0,1) != "#") {
			$arParams["COLOR"] = "#" . $arParams["COLOR"];
		}
		$color = preg_replace("/[^0-9A-Fa-f]/", '', $arParams["COLOR"]);
		if (strlen($color) == 6) {
			$arParams["RGB"] =
				hexdec(substr($color, 0, 2)) . "," .
				hexdec(substr($color, 2, 2)) . "," .
				hexdec(substr($color, 4, 2));
		} elseif (strlen($color) == 3) {
			$arParams["RGB"] =
				hexdec(str_repeat(substr($color, 0, 1), 2)) . "," .
				hexdec(str_repeat(substr($color, 1, 1), 2)) . "," .
				hexdec(str_repeat(substr($color, 2, 1), 2));
		} else {
			$arParams["COLOR"] = "#000";
			$arParams["RGB"] = "0,0,0";
		}

		$arParams["WIDTH"] = intval(trim($arParams["WIDTH"]));
		if($arParams["WIDTH"] <= 0) {
			$arParams["WIDTH"] = 100;
		}

		return $arParams;
	}

	function executeComponent()
	{
		$this->includeComponentTemplate();
	}
}