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


<section class="case-study py-100">
	<div class="container">
		<div class="sec-title">
			<div class="row">
				<div class="col-lg-5">
					<h2><?=$arParams["NAME"]?></h2>
					<h3><?=$arParams["TITLE"];?></h3>
				</div>
				<div class="col-lg-5 d-flex align-items-center">
					<p><?=$arParams["SUBTITLE"]?></p>
				</div>
			</div>
		</div>
		<div class="owl-case-study owl-carousel owl-theme">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="case-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<img class="img-fluid gallery-item-img" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 Case Study">
					<div class="text-box d-flex align-content-between flex-wrap">
						<ul class="tags">
							<?
							$res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
							if($ar_res = $res->GetNext()) {?>
								<li><a href="<?=$ar_res["SECTION_PAGE_URL"]?>"><?=$ar_res["NAME"];?></a></li>
							
							<?}?>
						</ul>
						<div class="content-text">
							<h4><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h4>
							<p><?=$arItem["PREVIEW_TEXT"]?></p>
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="more"><span class="fas fa-arrow-right"></span> Читать далее</a>
						</div>
					</div>
				</div>
			<?endforeach;?>
		</div>
	</div>
</section>