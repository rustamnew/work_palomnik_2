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


<section class="py-100">
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
		<div class="">
			<table border="1" bordercolor="#ccc" cellpadding="5" cellspacing="0" style="border-collapse:collapse;" width="657">
				<tbody>
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>

					<tr id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<td class="table_item">
							<p style="text-align: center;">
								<?=$arItem["PROPERTIES"]["date"]["VALUE"];?>
							</p>
			
							<p style="text-align: center;">
								<?echo FormatDate("l", MakeTimeStamp($arItem["PROPERTIES"]["date"]["VALUE"]));?>
							</p>
						</td>
			
						<td class="table_item">
							<p style="text-align: center;">
								<?=$arItem["PROPERTIES"]["title"]["~VALUE"]["TEXT"];?>
							</p>
						</td>
			
						<td class="table_item">	
							<p style="text-align: center;">
								<span><?=$arItem["PROPERTIES"]["time"]["VALUE"];?></span>
							</p>
						</td>
					</tr>
				<?endforeach;?>
				</tbody>
			</table>
		</div>

		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<div class="col-md-12">
				<?=$arResult["NAV_STRING"]?>
			</div>
		<?endif;?>
	</div>
</section>