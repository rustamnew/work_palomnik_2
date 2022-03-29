<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="single-practice-areas-box career-detail-page">
	<h3 class="career-detail-title"><?=$arResult["NAME"]?></h3>
	<ul class="career-detail-tags">
		<li class="active"><?=$arResult["PROPERTIES"]["employment"]["VALUE"];?></li>
		<li><?=$arResult["PROPERTIES"]["city"]["VALUE"];?></li>
	</ul>
	<p><?=$arResult["DETAIL_TEXT"]?></p>

	<a class="summonFormButton btn-1" href="<?=SITE_DIR?>"><?=GetMessage("SEND_RESPONSE")?></a>
</div>