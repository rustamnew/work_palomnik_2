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
<?
$i = 0;
?>
<?if($arParams["SHOW_MODE"] == 'one' || !$arParams["SHOW_MODE"]):?>
	<section class="testimonial py-100">
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
			<div class="testimonial-grid">
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<div class="col-md-6 col-lg-4">
						<div class="box-item">
							<div class="text-box">
								<div class="text-box-quote">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"/></svg>
								</div>
								
								<p><?=$arItem["PREVIEW_TEXT"]?></p>

								<a class="testimonial-expand-button" data-fancybox data-src="#hidden-content-reviews<?=$i?>" href="javascript:;">
									<?=GetMessage("BUTTON_DETAIL");?>
								</a>
							</div>
							<div class="clients-talk">
								<?if($arItem["PREVIEW_PICTURE"]["SRC"]):?>
									<div class="img-box">
										<img class="img-fluid" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 Testimonials">
									</div>
								<?endif;?>
								
								<div class="info">
									<h5><?=$arItem["NAME"]?></h5>
									<span><?=$arItem["PROPERTIES"]["subtitle"]["VALUE"];?></span>
								</div>
							</div>

							<div class="testimonial_popup content_fancybox_modal" style="display: none;" id="hidden-content-reviews<?=$i?>">
								<div class="text-box">
									<p><?=$arItem["DETAIL_TEXT"]?></p>
								</div>
								<div class="clients-talk">
									<?if($arItem["PREVIEW_PICTURE"]["SRC"]):?>
										<div class="img-box">
											<img class="img-fluid" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 Testimonials">
										</div>
									<?endif;?>
									
									<div class="info">
										<h5><?=$arItem["NAME"]?></h5>
										<span><?=$arItem["PROPERTIES"]["subtitle"]["VALUE"];?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?$i = $i + 1;?>
				<?endforeach;?>	
			</div>
		</div>
	</section>
<?elseif($arParams["SHOW_MODE"] == 'two'):?>
	<section class="testimonial py-100">
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
			<div class="owl-testimonial-3 owl-carousel owl-theme">
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<div class="box-item">
						<div class="text-box">
							<div class="text-box-quote">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"/></svg>
							</div>
							<p><?=$arItem["PREVIEW_TEXT"]?></p>

							<a class="testimonial-expand-button" data-fancybox data-src="#hidden-content-reviews<?=$i?>" href="javascript:;">
								<?=GetMessage("BUTTON_DETAIL");?>
							</a>
						</div>
						<div class="clients-talk">
							<?if($arItem["PREVIEW_PICTURE"]["SRC"]):?>
								<div class="img-box">
									<img class="img-fluid" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 Testimonials">
								</div>
							<?endif;?>
							
							<div class="info">
								<h5><?=$arItem["NAME"]?></h5>
								<span><?=$arItem["PROPERTIES"]["subtitle"]["VALUE"];?></span>
							</div>
						</div>

						<div class="testimonial_popup content_fancybox_modal" style="display: none;" id="hidden-content-reviews<?=$i?>">
							<div class="text-box">
								<p><?=$arItem["DETAIL_TEXT"]?></p>
							</div>
							<div class="clients-talk">
								<?if($arItem["PREVIEW_PICTURE"]["SRC"]):?>
									<div class="img-box">
										<img class="img-fluid" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 Testimonials">
									</div>
								<?endif;?>
								
								<div class="info">
									<h5><?=$arItem["NAME"]?></h5>
									<span><?=$arItem["PROPERTIES"]["subtitle"]["VALUE"];?></span>
								</div>
							</div>
						</div>
					</div>
					<?$i = $i + 1;?>
				<?endforeach;?>	
			</div>
		</div>
	</section>
<?elseif($arParams["SHOW_MODE"] == 'three'):?>
	<section class="testimonial testimonial-2 py-100-70">
		<div class="container">
			<div class="icon-quote">
				<i class="flaticon-quote"></i>
			</div>
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<div class="owl-testimonial owl-carousel owl-theme">
						<?foreach($arResult["ITEMS"] as $arItem):?>
						
							<div class="testimonial-item">
								<div class="text-box"><?=$arItem["PREVIEW_TEXT"]?></div>
								<a class="testimonial-expand-button" data-fancybox data-src="#hidden-content-reviews<?=$i?>" href="javascript:;">
									<?=GetMessage("BUTTON_DETAIL");?>
								</a>
								<div class="item-name">
									<img class="img-fluid" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 Testimonial">
									<h5><?=$arItem["NAME"]?></h5>
									<span><?=$arItem["PROPERTIES"]["subtitle"]["VALUE"];?></span>
								</div>

								<div class="testimonial_popup content_fancybox_modal" style="display: none;" id="hidden-content-reviews<?=$i?>">
									<div class="text-box">
										<p><?=$arItem["DETAIL_TEXT"]?></p>
									</div>
									<div class="clients-talk">
										<?if($arItem["PREVIEW_PICTURE"]["SRC"]):?>
											<div class="img-box">
												<img class="img-fluid" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 Testimonials">
											</div>
										<?endif;?>
										
										<div class="info">
											<h5><?=$arItem["NAME"]?></h5>
											<span><?=$arItem["PROPERTIES"]["subtitle"]["VALUE"];?></span>
										</div>
									</div>
								</div>
							</div>
							<?$i = $i + 1;?>
						<?endforeach;?>	
					</div>
				</div>
			</div>
		</div>
	</section>
<?endif;?>

