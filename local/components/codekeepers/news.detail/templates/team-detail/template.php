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
		<div class="row">
			<div class="col-md-4">
				<div class="team-item">
					<div class="img-box">
						<img class="img-fluid" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="01 advisors">
					</div>
					<div class="text-box text-center">
						<h5><?=$arResult["NAME"]?></h5>

						<span>
							<?$res = CIBlockSection::GetByID($arResult['IBLOCK_SECTION_ID']);
							if($ar_res = $res->GetNext()):?>
							<a href="<?echo $ar_res['SECTION_PAGE_URL'];?>"><?echo $ar_res['NAME'];?></a>
							<?endif;?>
						</span>

						<ul>
							<?if($arResult["PROPERTIES"]["social1_icon"]["VALUE"]):?>
								<li><a href="<?=$arResult["PROPERTIES"]["social1_url"]["VALUE"];?>">
									<?$path = CFile::GetPath($arResult['PROPERTIES']['social1_icon']['VALUE']);?>
									<?if (stristr($path, '.svg')):?>
										<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
										<?print_r($svg_file);?>
									<?else:?>
										<img src=<?$path?>>
									<?endif;?>
								</a></li>
							<?endif;?>

							<?if($arResult["PROPERTIES"]["social2_icon"]["VALUE"]):?>
								<li><a href="<?=$arResult["PROPERTIES"]["social2_url"]["VALUE"];?>">
									<?$path = CFile::GetPath($arResult['PROPERTIES']['social2_icon']['VALUE']);?>
									<?if (stristr($path, '.svg')):?>
										<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
										<?print_r($svg_file);?>
									<?else:?>
										<img src=<?$path?>>
									<?endif;?>
								</a></li>
							<?endif;?>

							<?if($arResult["PROPERTIES"]["social3_icon"]["VALUE"]):?>
								<li><a href="<?=$arResult["PROPERTIES"]["social3_url"]["VALUE"];?>">
									<?$path = CFile::GetPath($arResult['PROPERTIES']['social3_icon']['VALUE']);?>
									<?if (stristr($path, '.svg')):?>
										<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
										<?print_r($svg_file);?>
									<?else:?>
										<img src=<?$path?>>
									<?endif;?>
								</a></li>
							<?endif;?>

							<?if($arResult["PROPERTIES"]["social4_icon"]["VALUE"]):?>
								<li><a href="<?=$arResult["PROPERTIES"]["social4_url"]["VALUE"];?>">
									<?$path = CFile::GetPath($arResult['PROPERTIES']['social4_icon']['VALUE']);?>
									<?if (stristr($path, '.svg')):?>
										<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
										<?print_r($svg_file);?>
									<?else:?>
										<img src=<?$path?>>
									<?endif;?>
								</a></li>
							<?endif;?>

							<?if($arResult["PROPERTIES"]["social5_icon"]["VALUE"]):?>
								<li><a href="<?=$arResult["PROPERTIES"]["social5_url"]["VALUE"];?>">
									<?$path = CFile::GetPath($arResult['PROPERTIES']['social5_icon']['VALUE']);?>
									<?if (stristr($path, '.svg')):?>
										<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
										<?print_r($svg_file);?>
									<?else:?>
										<img src=<?$path?>>
									<?endif;?>
								</a></li>
							<?endif;?>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="introduction-advisors">
					<div class="detail-item-content"><?=$arResult["PREVIEW_TEXT"]?></div>

					<div class="detail-item-content"><?=$arResult["DETAIL_TEXT"]?></div>

					<?if($arResult["PROPERTIES"]["skill_show"]["VALUE"] == 'Y'):?>
						<div class="skills">
							<h3><?=$arResult["PROPERTIES"]["skill_title"]["VALUE"];?></h3>

							<?if($arResult["PROPERTIES"]["skill1name"]["VALUE"]):?>
								<div class="skill-box">
									<div class="skill-top">
										<span class="name"><?=$arResult["PROPERTIES"]["skill1name"]["VALUE"];?></span>
										<span class="number"><?=$arResult["PROPERTIES"]["skill1value"]["VALUE"];?>%</span>
									</div>
									<div class="skill-line">
										<div class="line" data-value="<?=$arResult["PROPERTIES"]["skill1value"]["VALUE"];?>%"></div>
									</div>
								</div>
							<?endif;?>

							<?if($arResult["PROPERTIES"]["skill2name"]["VALUE"]):?>
								<div class="skill-box">
									<div class="skill-top">
										<span class="name"><?=$arResult["PROPERTIES"]["skill2name"]["VALUE"];?></span>
										<span class="number"><?=$arResult["PROPERTIES"]["skill2value"]["VALUE"];?>%</span>
									</div>
									<div class="skill-line">
										<div class="line" data-value="<?=$arResult["PROPERTIES"]["skill2value"]["VALUE"];?>%"></div>
									</div>
								</div>
							<?endif;?>

							<?if($arResult["PROPERTIES"]["skill3name"]["VALUE"]):?>
								<div class="skill-box">
									<div class="skill-top">
										<span class="name"><?=$arResult["PROPERTIES"]["skill3name"]["VALUE"];?></span>
										<span class="number"><?=$arResult["PROPERTIES"]["skill3value"]["VALUE"];?>%</span>
									</div>
									<div class="skill-line">
										<div class="line" data-value="<?=$arResult["PROPERTIES"]["skill3value"]["VALUE"];?>%"></div>
									</div>
								</div>
							<?endif;?>

							<?if($arResult["PROPERTIES"]["skill4name"]["VALUE"]):?>
								<div class="skill-box">
									<div class="skill-top">
										<span class="name"><?=$arResult["PROPERTIES"]["skill4name"]["VALUE"];?></span>
										<span class="number"><?=$arResult["PROPERTIES"]["skill4value"]["VALUE"];?>%</span>
									</div>
									<div class="skill-line">
										<div class="line" data-value="<?=$arResult["PROPERTIES"]["skill4value"]["VALUE"];?>%"></div>
									</div>
								</div>
							<?endif;?>

							<?if($arResult["PROPERTIES"]["skill5name"]["VALUE"]):?>
								<div class="skill-box">
									<div class="skill-top">
										<span class="name"><?=$arResult["PROPERTIES"]["skill5name"]["VALUE"];?></span>
										<span class="number"><?=$arResult["PROPERTIES"]["skill5value"]["VALUE"];?>%</span>
									</div>
									<div class="skill-line">
										<div class="line" data-value="<?=$arResult["PROPERTIES"]["skill5value"]["VALUE"];?>%"></div>
									</div>
								</div>
							<?endif;?>
						</div>
					<?endif;?>
				</div>
			</div>
		</div>
	</div>
</section>
