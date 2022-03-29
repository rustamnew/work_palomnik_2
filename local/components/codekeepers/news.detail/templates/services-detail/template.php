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


<div class="single-services-box">
	<div class="img-box">
		<img class="img-fluid" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="01 Blog">
		<span class="price-detail"><?=$arResult["PROPERTIES"]["price"]["VALUE"]?></span>
		
	</div>
	<h3><?=$arResult["NAME"]?></h3>
	<p class="services-detail-text"><?=$arResult["DETAIL_TEXT"]?></p>

	<a class="summonFormButton btn-1" href="<?=SITE_DIR?>">Заказать звонок</a>
</div>



<div class="service-linked-items">
	<?if(!CModule::IncludeModule("iblock"))
	return;?>

	<?if($arResult["PROPERTIES"]["reviews"]["VALUE"]):?>
		<?
		$i = 0;
		?>
		<h4 class="linked-items-title"><?=GetMessage("REVIEWS_TITLE")?></h4>
		<div class="row">
			<div class="owl-testimonial-2 owl-carousel owl-theme">
				<?foreach($arResult["PROPERTIES"]["reviews"]["VALUE"] as $itemId):?>

				<?
				$res = CIBlockElement::GetByID($itemId);
				if($ar_res = $res->GetNext()) {?>

					<?
					$db_props = CIBlockElement::GetProperty($ar_res["IBLOCK_ID"], $ar_res["ID"], "sort", "asc", array());
					while ($ar_props = $db_props->Fetch())
					{?>

						<div class="box-item">
							<div class="text-box">
								<div class="text-box-quote">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"/></svg>
								</div>
								
								<p><?=$ar_res["PREVIEW_TEXT"]?></p>

								<a class="testimonial-expand-button" data-fancybox data-src="#hidden-content-reviews<?=$i?>" href="javascript:;">
									<?=GetMessage("BUTTON_DETAIL");?>
								</a>
							</div>
							<div class="clients-talk">
								<?if($ar_res["PREVIEW_PICTURE"]):?>
									<div class="img-box">
										<img class="img-fluid" src="<?echo CFile::GetPath($ar_res["PREVIEW_PICTURE"]);?>" alt="01 Testimonials">
									</div>
								<?endif;?>
								
								<div class="info">
									<h5><?=$ar_res["NAME"]?></h5>
									<span><?=$ar_props["VALUE"];?></span>
								</div>
							</div>

							<div class="testimonial_popup content_fancybox_modal" style="display: none;" id="hidden-content-reviews<?=$i?>">
								<div class="text-box">
									<p><?=$ar_res["PREVIEW_TEXT"]?></p>
								</div>
								<div class="clients-talk">
									<?if($ar_res["PREVIEW_PICTURE"]):?>
										<div class="img-box">
											<img class="img-fluid" src="<?echo CFile::GetPath($ar_res["PREVIEW_PICTURE"]);?>" alt="01 Testimonials">
										</div>
									<?endif;?>
									
									<div class="info">
										<h5><?=$ar_res["NAME"]?></h5>
										<span><?=$ar_props["VALUE"];?></span>
									</div>
								</div>
							</div>
						</div>
						<?$i = $i + 1;?>
					<?}?>
				<?}?>
				<?endforeach;?>
			</div>
		</div>
	<?endif;?>

	<?if($arResult["PROPERTIES"]["promo"]["VALUE"]):?>
		<?
		$n = 0;
		?>
		<h4 class="linked-items-title"><?=GetMessage("PROMO_TITLE")?></h4>
		<div class="row">
			<div class="owl-promo-2 owl-carousel owl-theme">
				<?foreach($arResult["PROPERTIES"]["promo"]["VALUE"] as $itemId):?>

				<?
				$res = CIBlockElement::GetByID($itemId);
				if($ar_res = $res->GetNext()) {?>

					<?
					$db_props = CIBlockElement::GetProperty($ar_res["IBLOCK_ID"], $ar_res["ID"], "sort", "asc", array());
					while ($ar_props = $db_props->Fetch())
					{?>

						<div class="col">
							<div class="item-careers">
								<h4><a><?=$ar_res["NAME"]?></a></h4>
								<ul>
									<li class="active"><?echo FormatDateFromDB($ar_res["DATE_ACTIVE_TO"], 'SHORT');?></li>
									<li><?=$ar_props["VALUE"];?></li>
								</ul>

								<?if($ar_res["PREVIEW_PICTURE"]):?>
									<div class="discounts-image">
										<img src="<?echo CFile::GetPath($ar_res["PREVIEW_PICTURE"]);?>" alt="image">
									</div>
								<?endif;?>

								<p><?=$ar_res["PREVIEW_TEXT"]?></p>

								<a class="testimonial-expand-button" data-fancybox data-src="#hidden-content-discounts<?=$n?>" href="javascript:;">
									<?=GetMessage("BUTTON_DETAIL");?>
								</a>

								<a href="#" class="summonFormButton btn-1 discounts__button"><?echo GetMessage("REQUEST_CALL")?></a>

								<div class="item-careers_popup content_fancybox_modal" style="display: none;" id="hidden-content-discounts<?=$n?>">
									<h4><a><?=$ar_res["NAME"]?></a></h4>
									<ul>
										<li class="active"><?echo FormatDateFromDB($ar_res["DATE_ACTIVE_TO"], 'SHORT');?></li>
										<li><?=$ar_props["VALUE"];?></li>
									</ul>

									<?if($ar_res["PREVIEW_PICTURE"]):?>
										<div class="discounts-image">
											<img src="<?echo CFile::GetPath($ar_res["PREVIEW_PICTURE"]);?>" alt="image">
										</div>
									<?endif;?>

									<p><?=$ar_res["PREVIEW_TEXT"]?></p>

									<a href="#" class="summonFormButton btn-1 discounts__button"><?echo GetMessage("REQUEST_CALL")?></a>
								</div>

							</div>
						</div>
						<?$n = $n + 1;?>
					<?}?>
				<?}?>
				<?endforeach;?>
			</div>
		</div>
	<?endif;?>

	<?if($arResult["PROPERTIES"]["team"]["VALUE"]):?>
		<h4 class="linked-items-title"><?=GetMessage("TEAM_TITLE")?></h4>
		<div class="row">
			<div class="owl-advisors-2 owl-carousel owl-theme">
				<?foreach($arResult["PROPERTIES"]["team"]["VALUE"] as $itemId):?>
					<?
					$res = CIBlockElement::GetByID($itemId);
					if($item = $res->GetNext()) {
					$props = CIBlockElement::GetByID($itemId)->GetNextElement()->GetProperties();?>
						<div class="team-item">
								<div class="img-box">
									<img class="img-fluid" src="<?echo CFile::GetPath($item["PREVIEW_PICTURE"]);?>" alt="01 Team">
								</div>
								<div class="text-box text-center">
									<a href="<?=$ar_res["DETAIL_PAGE_URL"]?>"><h5><?=$item["NAME"]?></h5></a>
									<span>
										<?$res = CIBlockSection::GetByID($item['IBLOCK_SECTION_ID']);
										if($ar_res = $res->GetNext()):?>
										<a href="<?echo $ar_res['SECTION_PAGE_URL'];?>"><?echo $ar_res['NAME'];?></a>
										<?endif;?>
									</span>
									<ul>
										<?if($props["social1_icon"]["VALUE"]):?>
											<li><a href="<?=$props["social1_url"]["VALUE"];?>">
												<?$path = CFile::GetPath($props['social1_icon']['VALUE']);?>
												<?if (stristr($path, '.svg')):?>
													<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
													<?print_r($svg_file);?>
												<?else:?>
													<img src=<?$path?>>
												<?endif;?>
											</a></li>
										<?endif;?>

										<?if($props["social2_icon"]["VALUE"]):?>
											<li><a href="<?=$props["social2_url"]["VALUE"];?>">
												<?$path = CFile::GetPath($props['social2_icon']['VALUE']);?>
												<?if (stristr($path, '.svg')):?>
													<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
													<?print_r($svg_file);?>
												<?else:?>
													<img src=<?$path?>>
												<?endif;?>
											</a></li>
										<?endif;?>

										<?if($props["social3_icon"]["VALUE"]):?>
											<li><a href="<?=$props["social3_url"]["VALUE"];?>">
												<?$path = CFile::GetPath($props['social3_icon']['VALUE']);?>
												<?if (stristr($path, '.svg')):?>
													<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
													<?print_r($svg_file);?>
												<?else:?>
													<img src=<?$path?>>
												<?endif;?>
											</a></li>
										<?endif;?>

										<?if($props["social4_icon"]["VALUE"]):?>
											<li><a href="<?=$props["social4_url"]["VALUE"];?>">
												<?$path = CFile::GetPath($props['social4_icon']['VALUE']);?>
												<?if (stristr($path, '.svg')):?>
													<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
													<?print_r($svg_file);?>
												<?else:?>
													<img src=<?$path?>>
												<?endif;?>
											</a></li>
										<?endif;?>

										<?if($props["social5_icon"]["VALUE"]):?>
											<li><a href="<?=$props["social5_url"]["VALUE"];?>">
												<?$path = CFile::GetPath($props['social5_icon']['VALUE']);?>
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

						<?};?>
				<?endforeach;?>
			</div>
		</div>
	<?endif;?>
</div>