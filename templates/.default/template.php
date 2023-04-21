<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var customComponent $component */

use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Application;

$this->addExternalCss( $templateFolder."/css/style" . $arParams["TYPE"] . ".css");

$rand = randString(7, [
	"abcdefghijklnmopqrstuvwxyz",
	"ABCDEFGHIJKLNMOPQRSTUVWXYZ",
	"0123456789",
]);

$loader =
	file_get_contents($_SERVER["DOCUMENT_ROOT"] . $templateFolder . "/img/loader" . $arParams["TYPE"] . ".svg");
$loader = str_replace(
		["##width##", "##color##", "##rgb##", "##rand##"],
		[$arParams["WIDTH"], $arParams["COLOR"], $arParams["RGB"], $rand],
		$loader
);

?>
<div class="ipl-loader-svg">
	<?=$loader?>
</div>