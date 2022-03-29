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



<section class="pricing pricing-2 py-100-70">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="sec-title sec-title-2 text-center">
					<h2><?=$arParams["NAME"]?></h2>
					<h3><?=$arParams["TITLE"];?></h3>
					<p><?=$arParams["SUBTITLE"]?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

				<div class="col-md-6 col-lg-4">
					<div class="pricing-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="item-top">
							<h4 style="color: <?=$arItem["PROPERTIES"]["color"]["VALUE"];?>"><?=$arItem["NAME"]?></h4>
							<div class="price-number">
								<h5><?=$arItem["PROPERTIES"]["cost"]["VALUE"];?></h5>
								<span><?=$arItem["PROPERTIES"]["currency"]["VALUE"];?><?=$arItem["PROPERTIES"]["period"]["VALUE"];?></span>
							</div>
							<p><?=$arItem["PROPERTIES"]["subtitle"]["VALUE"];?></p>
						</div>
						<div class="item-last">
							<ul>
								<?if($arItem["PROPERTIES"]["feature1"]["VALUE"]):?><li><i class="fas fa-arrow-right"></i> <?=$arItem["PROPERTIES"]["feature1"]["VALUE"];?></li><?endif;?>
								<?if($arItem["PROPERTIES"]["feature2"]["VALUE"]):?><li><i class="fas fa-arrow-right"></i> <?=$arItem["PROPERTIES"]["feature2"]["VALUE"];?></li><?endif;?>
								<?if($arItem["PROPERTIES"]["feature3"]["VALUE"]):?><li><i class="fas fa-arrow-right"></i> <?=$arItem["PROPERTIES"]["feature3"]["VALUE"];?></li><?endif;?>
								<?if($arItem["PROPERTIES"]["feature4"]["VALUE"]):?><li><i class="fas fa-arrow-right"></i> <?=$arItem["PROPERTIES"]["feature4"]["VALUE"];?></li><?endif;?>
								<?if($arItem["PROPERTIES"]["feature5"]["VALUE"]):?><li><i class="fas fa-arrow-right"></i> <?=$arItem["PROPERTIES"]["feature5"]["VALUE"];?></li><?endif;?>
							</ul>
							<a href="#" class="summonFormButton btn-1"><?echo GetMessage("DETAIL")?></a>
						</div>
					</div>
				</div>
			<?endforeach;?>	
		</div>
	</div>
</section>