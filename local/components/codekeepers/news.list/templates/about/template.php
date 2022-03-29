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


<?$arItem = $arResult["ITEMS"][0];?>


<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>


<?if($arParams["SHOW_MODE"] == 'one' || !$arParams["SHOW_MODE"]):?>

	<section class="about" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="container" >       
			<div class="row">
				<div class="col-lg-6">
					<div class="text-box">
						<div class="sec-title">
							<h2><?=$arItem["PROPERTIES"]["name"]["VALUE"];?></h2>
							<h3><?=$arItem["PROPERTIES"]["title"]["VALUE"];?></h3>
							<p><?=$arItem["PROPERTIES"]["subtitle"]["VALUE"];?></p>
						</div>
						<ul>
							<?if($arItem["PROPERTIES"]["url1_name"]["VALUE"]):?>
								<li><a href="<?=$arItem["PROPERTIES"]["url1_value"]["VALUE"];?>"><i class="fas fa-arrow-right"></i> <?=$arItem["PROPERTIES"]["url1_name"]["VALUE"];?></a></li>
							<?endif;?>

							<?if($arItem["PROPERTIES"]["url2_name"]["VALUE"]):?>
								<li><a href="<?=$arItem["PROPERTIES"]["url2_value"]["VALUE"];?>"><i class="fas fa-arrow-right"></i> <?=$arItem["PROPERTIES"]["url2_name"]["VALUE"];?></a></li>
							<?endif;?>

							<?if($arItem["PROPERTIES"]["url3_name"]["VALUE"]):?>
								<li><a href="<?=$arItem["PROPERTIES"]["url3_value"]["VALUE"];?>"><i class="fas fa-arrow-right"></i> <?=$arItem["PROPERTIES"]["url3_name"]["VALUE"];?></a></li>
							<?endif;?>

							<?if($arItem["PROPERTIES"]["url4_name"]["VALUE"]):?>
								<li><a href="<?=$arItem["PROPERTIES"]["url4_value"]["VALUE"];?>"><i class="fas fa-arrow-right"></i> <?=$arItem["PROPERTIES"]["url4_name"]["VALUE"];?></a></li>
							<?endif;?>
							
							<?if($arItem["PROPERTIES"]["url5_name"]["VALUE"]):?>
								<li><a href="<?=$arItem["PROPERTIES"]["url5_value"]["VALUE"];?>"><i class="fas fa-arrow-right"></i> <?=$arItem["PROPERTIES"]["url5_name"]["VALUE"];?></a></li>
							<?endif;?>
							
							<?if($arItem["PROPERTIES"]["url6_name"]["VALUE"]):?>
								<li><a href="<?=$arItem["PROPERTIES"]["url6_value"]["VALUE"];?>"><i class="fas fa-arrow-right"></i> <?=$arItem["PROPERTIES"]["url6_name"]["VALUE"];?></a></li>
							<?endif;?>
						</ul>

						<?if($arParams["SHOW_BUTTON"] == 'Y' || !$arParams["SHOW_BUTTON"]):?>
							<a href="<?=SITE_DIR?>about/" class="btn-1 btn-3"><?=$arItem["PROPERTIES"]["text"]["VALUE"];?></a>
						<?endif;?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="row img-box">
						<div class="col">
							<div class="one">
								<img class="img-fluid" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 About">
							</div>
						</div>
						<div class="col">
							<div class="two">
								<img class="img-fluid" src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="02 About">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?elseif($arParams["SHOW_MODE"] == 'two'):?>
	<section class="about about-2 py-100">
		<div class="container" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="row">
				<div class="col-lg-6">
					<div class="img-box">
						<div class="about-img">
							<img class="img-fluid" src="<?echo CFile::GetPath($arItem["PROPERTIES"]["image"]["VALUE"]);?>" alt="03 About">
						</div>
						<div class="statistic-item">
							<div class="statistic-item-image">
								<?$path = CFile::GetPath($arItem['PROPERTIES']['counter_icon']['VALUE']);?>

								<?if (stristr($path, '.svg')):?>
									<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
									<?print_r($svg_file);?>
								<?else:?>
									<img src=<?$path?>>
								<?endif;?>
							</div>
							<div class="content">
								<div class="counter"><?=$arItem["PROPERTIES"]["counter_value"]["VALUE"];?></div>
								<div class="counter-name"><?=$arItem["PROPERTIES"]["counter_title"]["VALUE"];?></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="text-box">
						<div class="sec-title">
							<h2><?=$arItem["PROPERTIES"]["name"]["VALUE"];?></h2>
							<h3><?=$arItem["PROPERTIES"]["title"]["VALUE"];?></h3>
							<p><?=$arItem["PROPERTIES"]["subtitle"]["VALUE"];?></p>
						</div>
						<p><?=$arItem["PREVIEW_TEXT"]?></p>

						<?if($arParams["SHOW_BUTTON"] == 'Y' || !$arParams["SHOW_BUTTON"]):?>
							<a href="<?=SITE_DIR?>about/" class="btn-1 btn-3"><?=$arItem["PROPERTIES"]["text"]["VALUE"];?></a>
						<?endif;?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?endif;?>