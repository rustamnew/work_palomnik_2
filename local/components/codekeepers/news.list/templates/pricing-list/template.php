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




<div class="row faq faq-page" id="faqSite">
	<div class="col">
		<?$i = 0;?>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>

			<div class="faq-box" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<h5 class="question-header" id="faq_01">
					<button class="click collapsed" type="button" data-toggle="collapse" data-target="#faq<?=$i;?>" aria-expanded="false" aria-controls="faqOne">
						<span><?=$arItem["NAME"]?></span>
						<a class="summonFormButton btn-1 btn-smaller" href="/"><?=$arParams["BUTTON_TEXT"]?></a>
						<a class="btn-service-price"><?=$arItem["PROPERTIES"]["price"]["VALUE"];?></a>
						<i class="fas fa-plus"></i>
					</button>
				</h5>
				<div id="faq<?=$i;?>" class="answer collapse" aria-labelledby="faq_01" data-parent="#faqSite">
					<p class="about-text"><?=$arItem["PREVIEW_TEXT"]?></p>
				</div>
			</div>
			<?$i++;?>
		<?endforeach;?>	
	</div>
</div>
