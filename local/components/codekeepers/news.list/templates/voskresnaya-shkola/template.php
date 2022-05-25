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


<section class="team py-100-70">
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

		<?if($arParams["SHOW_MODE"] == "normal"):?>
			<div class="row">
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<div class="col-md-6 col-lg-4">
						<div class="team-item school" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<div class="icon">
								<?$path = CFile::GetPath($arItem['PROPERTIES']['icon']['VALUE']);?>

								<?if (stristr($path, '.svg')):?>
									<?
									$img_file = $path;
									$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
									if($svg['id']){
										$img_grup = $img_file.'#'.$svg['id'];
									}
									$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
									print_r($svg_file);?>
								<?else:?>
									<img src=<?=$path?>>
								<?endif;?>
							</div>
							<div class="text-box">
								<h5><?=$arItem["PROPERTIES"]["subtitle"]["VALUE"];?></h5>
								<h4><?=$arItem["PROPERTIES"]["title"]["VALUE"];?></h4>
								<p><?=$arItem["PREVIEW_TEXT"]?></p>
							</div>
						</div>
					</div>
				<?endforeach;?>	
			</div>
		<?elseif ($arParams["SHOW_MODE"] == "slider"):?>
			<div class="owl-advisors owl-carousel owl-theme">
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>

					<div class="team-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="img-box">
							<img class="img-fluid" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 Team">
						</div>
						<div class="text-box text-center">
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><h5><?=$arItem["NAME"]?></h5></a>
							<span>
								<a><?=$arItem["PROPERTIES"]["subtitle"]["VALUE"];?></a>
							</span>
						</div>
					</div>
				<?endforeach;?>	
			</div>
		<?endif;?>
	</div>
</section>



