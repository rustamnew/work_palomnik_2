<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<?
$nameReq;
$phoneReq;
$messageReq;
foreach($arParams["REQUIRED_FIELDS"] as $item):?>
	<?if($item === "NAME") {
		$nameReq = true;
	}?>

	<?if($item === "PHONE") {
		$phoneReq = true;
	}?>

	<?if($item === "MESSAGE") {
		$messageReq = true;
	}?>
<?endforeach;?>



<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}?>


<section class="contact py-100">
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
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<form action="<?=POST_FORM_ACTION_URI?>" method="POST" id="feedback-form" name="form">
					<?=bitrix_sessid_post()?>
					<div class="row quote">
						<div class="col-md-6">
							<div class="quote-item">
								<label><?=$arParams["LABEL_NAME"]?></label>
								<input type="text" name="user_name" value="" class="name" placeholder="<?=$arParams["PLACEHOLDER_NAME"]?>" <?if($nameReq):?>required<?endif;?>>
							</div>
						</div>
						<div class="col-md-6">
							<div class="quote-item">
								<label><?=$arParams["LABEL_PHONE"]?></label>
								<input type="text" name="user_phone" value="" class="email" placeholder="<?=$arParams["PLACEHOLDER_PHONE"]?>" <?if($phoneReq):?>required<?endif;?>>
							</div>
						</div>
						<div class="col-md-12">
							<div class="quote-item">
								<label><?=$arParams["LABEL_SUBJECT"]?></label>
								<input type="text" name="user_subject" placeholder="<?=$arParams["PLACEHOLDER_SUBJECT"]?>">
							</div>
						</div>
						<div class="col-md-12">
							<div class="quote-item">
								<label><?=$arParams["LABEL_MESSAGE"]?></label>
								<textarea name="MESSAGE" cols="40" rows="10" class="message" placeholder="<?=$arParams["PLACEHOLDER_MESSAGE"]?>" <?if($messageReq):?>required<?endif;?>></textarea>
							</div>

							<?if($GLOBALS['global_info']['captcha_show']):?>
								<div class="captcha-wrap">
									<div class="g-recaptcha" id="recaptcha_mainform"></div>
								</div>
							<?endif;?>
						</div>
						<div class="col-md-4">
							<input type="hidden" name="FORM_PAGE" value="<?=$arParams["FORM_PAGE"]?>">
							<input type="hidden" name="FORM_SECTION" value="<?=$arParams["FORM_SECTION"]?>">
							<input type="hidden" name="FORM_TYPE" value="<?=$arParams["FORM_TYPE"]?>">
							
							<input type="submit" name="submit" value="<?=$arParams['SUBMIT_TEXT']?>" class="form-submit-button">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>