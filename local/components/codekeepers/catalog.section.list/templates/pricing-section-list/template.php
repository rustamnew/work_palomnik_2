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
$this->setFrameMode(true);?>

<div class="pricing-section-list">
	<?foreach($arResult["SECTIONS"] as $arItem):?>
		
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strSectionEdit);
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
	?>
			
					
	<div class="col-md-6 col-lg-6">
		<div class="item-careers" id="<? echo $this->GetEditAreaId($arItem['ID']); ?>">
			<h4>
				<a href="<?=SITE_DIR?>pricing/<?=$arItem["CODE"]?>/">
					<?=$arItem["NAME"]?>
					<div class="item-careers-arrow">
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
						</svg>
					</div>
				</a>


			</h4>

			<ul class="submenu">
				<?
				$arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL");
				$arFilter = Array("IBLOCK_ID" =>$arItem["IBLOCK_ID"], "IBLOCK_SECTION_ID"=> $arItem["ID"], "GLOBAL_ACTIVE"=>"Y");
				$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect);
			
				while($ob = $res->GetNextElement()) {
					$arFields = $ob->GetFields();?>
					<li><a href="<?=$arFields["DETAIL_PAGE_URL"]?>"><?=$arFields["NAME"]?></a></li>
				<?}?>
			</ul>

		</div>
	</div>

	<?endforeach;?>
</div>
