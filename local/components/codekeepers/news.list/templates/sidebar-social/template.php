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


<div class="widget">
	<?if($arParams["TITLE"]):?>
		<div class="widget-title">
			<h3><?=$arParams["TITLE"]?></h3>
		</div>
	<?endif;?>
	<div class="widget-body">
		<div class="follow">
			<ul class="icon">
				<?foreach($arResult["ITEMS"] as $arItem):?>

				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

				<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<a href="<?=$arItem["PROPERTIES"]["url"]["VALUE"];?>">
						<?$path = CFile::GetPath($arItem['PROPERTIES']['icon']['VALUE']);?>

						<?if (stristr($path, '.svg')):?>
							<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
							<?print_r($svg_file);?>
						<?else:?>
							<img src=<?$path?>>
						<?endif;?>
					</a>
				</li>
				<?endforeach;?>
			</ul> 
		</div>
	</div>
</div>


