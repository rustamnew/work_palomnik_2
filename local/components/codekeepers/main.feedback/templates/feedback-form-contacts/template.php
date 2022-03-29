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
$subjectReq;
$messageReq;
foreach($arParams["REQUIRED_FIELDS"] as $item):?>
	<?if($item === "NAME") {
		$nameReq = true;
	}?>

	<?if($item === "PHONE") {
		$phoneReq = true;
	}?>

	<?if($item === "SUBJECT") {
		$subjectReq = true;
	}?>

	<?if($item === "MESSAGE") {
		$messageReq = true;
	}?>
<?endforeach;?>



<div class="quote">
	<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="form-submit contact-form" id="feedback-form-contacts" name="form_contacts">
		<?=bitrix_sessid_post()?>
		<div class="sec-title">
			<h3><?=$arParams["FORM_TITLE"]?></h3>
		</div>
		<div class="quote-item">
			<label><?=$arParams["LABEL_NAME"]?></label>
			<input type="text" name="user_name" value="" class="name" placeholder="<?=$arParams["PLACEHOLDER_NAME"]?>" <?if($nameReq):?>required<?endif;?>>

		</div>
		<div class="quote-item">
			<label><?=$arParams["LABEL_PHONE"]?></label>
			<input type="text" name="user_phone" value="" class="email" placeholder="<?=$arParams["PLACEHOLDER_PHONE"]?>" <?if($phoneReq):?>required<?endif;?>>
		</div>
		<div class="quote-item">
			<label><?=$arParams["LABEL_SUBJECT"]?></label>
			<input type="text" name="user_subject" placeholder="<?=$arParams["PLACEHOLDER_SUBJECT"]?>">

		</div>
		<div class="quote-item">
			<label><?=$arParams["LABEL_MESSAGE"]?></label>
			<textarea name="MESSAGE" cols="40" rows="10" class="message" placeholder="<?=$arParams["PLACEHOLDER_MESSAGE"]?>" <?if($messageReq):?>required<?endif;?>></textarea>
		</div>
		<?if($GLOBALS['global_info']['captcha_show']):?>
			<div class="captcha-wrap">
				<div class="g-recaptcha" id="recaptcha_contacts"></div>
			</div>
		<?endif;?>
		<div class="quote-item">
			<input type="hidden" name="FORM_PAGE" value="<?=$arParams["FORM_PAGE"]?>">
			<input type="hidden" name="FORM_SECTION" value="<?=$arParams["FORM_SECTION"]?>">
			<input type="hidden" name="FORM_TYPE" value="<?=$arParams["FORM_TYPE"]?>">
			
			<input type="submit" name="submit" class="form-submit-button" value="<?=$arParams['SUBMIT_TEXT']?>"></input>
		</div>
	</form>
</div>
       

