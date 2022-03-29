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

<section class="case-study case-study-page py-100">
	<div class="container">
		<div class="sec-title">
			<div class="row">
				<div class="col-lg-5">
					<h2><?=$arParams["NAME"]?></h2>
					<h3><?=$arParams["TITLE"]?></h3>
				</div>
				<div class="col-lg-5 d-flex align-items-center">
					<p><?=$arParams["SUBTITLE"]?></p>
				</div>
			</div>
		</div>
		<div class="licence-list">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="col-md-6 col-lg-4 mb20">
					<div class="case-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" data-fancybox="gallery" data-src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" data-caption="<?=$arItem["NAME"]?>">
						<img class="img-fluid gallery-item-img" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 Case Study">
						<div class="text-box d-flex align-content-between flex-wrap">
							<div class="content-text">
								<h4><a href="#"><?=$arItem["NAME"]?></a></h4>
							</div>
						</div>
					</div>
				</div>
			<?endforeach;?>
		</div>

		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<div class="col-md-12">
				<?=$arResult["NAV_STRING"]?>
			</div>
		<?endif;?>
	</div>
</section>