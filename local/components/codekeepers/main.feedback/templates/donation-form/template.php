<?
	require_once 'YooKassa/lib/autoload.php';
	use YooKassa\Client;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	$mailto = 'info@moy-hram.ru';
	

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




<section class="contact py-100 donation">
	<div class="container" style="max-width: 800px;">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="sec-title sec-title-2 text-center">
					<h2><?=$arParams["NAME"]?></h2>
					<h3><?=$arParams["TITLE"];?></h3>
					<p><?=$arParams["SUBTITLE"]?></p>
				</div>
			</div>
		</div>

		<ul class="services-sections-list">
			<li><a href="#" class="btn-1 services-section-button donate-block__button" data-number="1" >Записки</a></li>
			<li><a href="#" class="btn-1 services-section-button donate-block__button" data-number="2" >Помочь храму</a></li>
		</ul>

		<p class="donate-block__text">
			Братья и сестры, просим внимательно относиться к заказу поминовений!<br />
			Общие правила:<br />
			Принимаются имена только крещеных христиан православного вероисповедания.<br />
			
			1. Если вы точно знаете, что человек не крещен в православии, то его имя нельзя подавать на поминовение.<br />
			2. Если у вас возникли какие-либо сомнения относительно людей, имена которых вы бы хотели подать для поминовения в храме, в окне примечаний обязательно кратко опишите ситуацию.<br />
			3. Поминания не подают за тех, кто не является членом Православной Церкви: за некрещеных, инославных, иноверных, за самоубийц, за убежденных атеистов и богоборцев, даже если они были крещены.<br />
		</p>

		<div class="row donate active" data-number-row="1">
			<div class="col-md-10 offset-md-1">
				<form action="" method="POST" id="donation-form1" name="donate1">
					<div class="row quote">
						<div class="col-md-12">
							<div class="quote-item">
								<select class="donate-block__select" name="name1" id="note">
									<?$APPLICATION->IncludeComponent(
										"codekeepers:news.list",
										"notes",
										Array(
											"ACTIVE_DATE_FORMAT" => "d.m.Y",
											"ADD_SECTIONS_CHAIN" => "Y",
											"AJAX_MODE" => "N",
											"AJAX_OPTION_ADDITIONAL" => "",
											"AJAX_OPTION_HISTORY" => "N",
											"AJAX_OPTION_JUMP" => "N",
											"AJAX_OPTION_STYLE" => "Y",
											"CACHE_FILTER" => "N",
											"CACHE_GROUPS" => "Y",
											"CACHE_TIME" => "36000000",
											"CACHE_TYPE" => "A",
											"CHECK_DATES" => "Y",
											"DETAIL_URL" => "",
											"DISPLAY_BOTTOM_PAGER" => "Y",
											"DISPLAY_TOP_PAGER" => "N",
											"FIELD_CODE" => array("",""),
											"FILTER_NAME" => "",
											"HIDE_LINK_WHEN_NO_DETAIL" => "N",
											"IBLOCK_ID" => "29",
											"IBLOCK_TYPE" => "donations",
											"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
											"INCLUDE_SUBSECTIONS" => "Y",
											"MESSAGE_404" => "",
											"NAME" => "",
											"NEWS_COUNT" => "20",
											"PAGER_BASE_LINK_ENABLE" => "N",
											"PAGER_DESC_NUMBERING" => "N",
											"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
											"PAGER_SHOW_ALL" => "N",
											"PAGER_SHOW_ALWAYS" => "N",
											"PAGER_TEMPLATE" => ".default",
											"PAGER_TITLE" => "Новости",
											"PARENT_SECTION" => "",
											"PARENT_SECTION_CODE" => "",
											"PREVIEW_TRUNCATE_LEN" => "",
											"PROPERTY_CODE" => array("",""),
											"SET_BROWSER_TITLE" => "Y",
											"SET_LAST_MODIFIED" => "N",
											"SET_META_DESCRIPTION" => "Y",
											"SET_META_KEYWORDS" => "Y",
											"SET_STATUS_404" => "N",
											"SET_TITLE" => "Y",
											"SHOW_404" => "N",
											"SORT_BY1" => "ACTIVE_FROM",
											"SORT_BY2" => "SORT",
											"SORT_ORDER1" => "DESC",
											"SORT_ORDER2" => "ASC",
											"STRICT_SECTION_CHECK" => "N",
											"SUBTITLE" => "",
											"TITLE" => ""
										)
									);?>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="quote-item">
								<input style="padding-top: 0;" type="number" name="sum1" value="" class="email donate-block__input" placeholder="<?=$arParams["PLACEHOLDER_PHONE"]?>" required>
							</div>
						</div>

						<div class="col-md-12">
							<div class="quote-item">
								
								<textarea style="padding-top: 0;" name="names1" cols="40" rows="10" class="message donate-block__input" placeholder="<?=$arParams["PLACEHOLDER_MESSAGE"]?>" required></textarea>
							</div>

							<?if($GLOBALS['global_info']['captcha_show']):?>
								<div class="captcha-wrap">
									<div class="g-recaptcha" id="recaptcha_mainform"></div>
								</div>
							<?endif;?>
						</div>
						<div class="col-md-4">
							<input type="submit" value="<?=$arParams['SUBMIT_TEXT']?>" class="form-submit-button">
						</div>
					</div>
				</form>

				
			</div>
		</div>


		<div class="row donate" data-number-row="2">
			<div class="col-md-10 offset-md-1">
				<form action="" method="POST" id="donation-form2" name="donate2">
					<div class="row quote">
						<div class="col-md-12">
							<div class="quote-item">
								<input style="padding-top: 0;" type="number" name="sum2" value="" class="email donate-block__input" placeholder="<?=$arParams["PLACEHOLDER_PHONE"]?>" required>
							</div>
						</div>

						<div class="col-md-12">
							<div class="quote-item">
								
								<textarea style="padding-top: 0;" name="names2" cols="40" rows="10" class="message donate-block__input" placeholder="<?=$arParams["PLACEHOLDER_MESSAGE"]?>" required></textarea>
							</div>

							<?if($GLOBALS['global_info']['captcha_show']):?>
								<div class="captcha-wrap">
									<div class="g-recaptcha" id="recaptcha_mainform"></div>
								</div>
							<?endif;?>
						</div>
						<div class="col-md-4">
							<input type="submit" name="submit" value="<?=$arParams['SUBMIT_TEXT']?>" class="form-submit-button">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<?if($_POST["name1"] or $_POST["sum1"] or $_POST["names1"]):?>

	<?
	$name1 = "не определено";
	$sum1 = "не определен";
	$names1 = "не определен";
	
	if (isset($_POST["name1"])) $name1 = $_POST["name1"];
	if (isset($_POST["sum1"])) $sum1 = $_POST["sum1"];
	if (isset($_POST["names1"])) $names1 = $_POST["names1"];
	
	$mail = new PHPMailer;
	$mail->CharSet = 'UTF-8';
	
	// Настройки SMTP
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPDebug = 0;
	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);
	$mail->Host = 'ssl://smtp.yandex.ru';
	$mail->Port = 465;
	$mail->Username = 'codekeepers.studio@yandex.ru';
	$mail->Password = 'BZWD5ZAH^biz*51A';
	
	// От кого
	$mail->setFrom('codekeepers.studio@yandex.ru', 'Cайт moy-hram.ru');
	// Кому
	$mail->addAddress($mailto, 'Смертин Игорь Васильевич');
	// Тема письма
	$mail->Subject = "Новое пожертвование";
	// Тело письма
	$body = '<p><strong>Новое пожертвование на сайте moy-hram.ru </strong></p>';
	$body = $body . "<br>Записка: " . $name1;
	$body = $body . "<br>Сумма: " . $sum1;
	$body = $body . "<br>Имена поминаемых: " . $names1;
	
	$mail->msgHTML($body);
	
	$mail->send();
	?>

	<?
	$client = new Client();
	$client->setAuth('780285', 'live_gWlIBwIamZdOYCO7nkQtjD4dZUGiPwNCRAkqCbHfeu4');
	$idempotenceKey = uniqid('', true);
	$number1 = number_format($_POST["sum1"], 2, '.', '');
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"/*. "?success=Y" . "&name1=".$_POST["name1"] . "&sum1=".$number1 . "&names1=".$_POST["names1"]*/;
	$description = $_POST["name1"].' '.$_POST["names1"];
	$response = $client->createPayment(
		array(
			'amount' => array(
				'value' => 	$number1,
				'currency' => 'RUB',
			),
			'payment_method_data' => array(
					'type' => 'bank_card',
			),
			'confirmation' => array(
					'type' => 'redirect',
				'return_url' => $actual_link,
			),
			'description' => $description,
		),
		$idempotenceKey
	);
	$confirmationUrl = $response->getConfirmation()->getConfirmationUrl();
	$_POST = '';
	if ($confirmationUrl) {
		header("Location: ".$confirmationUrl);
		die();
	}
	?>

<?endif;?>



<?if($_POST["sum2"] or $_POST["names2"]):?>
	<?
	$sum2 = "не определен";
	$names2 = "не определен";
	
	if (isset($_POST["sum2"])) $sum2 = $_POST["sum2"];
	if (isset($_POST["names2"])) $names2 = $_POST["names2"];

	$mail = new PHPMailer;
	$mail->CharSet = 'UTF-8';
	
	// Настройки SMTP
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPDebug = 0;
	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);
	$mail->Host = 'ssl://smtp.yandex.ru';
	$mail->Port = 465;
	$mail->Username = 'codekeepers.studio@yandex.ru';
	$mail->Password = 'BZWD5ZAH^biz*51A';
	
	// От кого
	$mail->setFrom('codekeepers.studio@yandex.ru', 'Cайт moy-hram.ru');
	// Кому
	$mail->addAddress($mailto, 'Смертин Игорь Васильевич');
	// Тема письма
	$mail->Subject = "Новое пожертвование";
	// Тело письма
	$body = '<p><strong>Новое пожертвование на сайте moy-hram.ru </strong></p>';
	$body = $body . "<br>Помощь храму";
	$body = $body . "<br>Сумма: " . $sum2;
	$body = $body . "<br>Имена поминаемых: " . $names2;

	$mail->msgHTML($body);
	$mail->send();
	?>




	<?
	$client = new Client();
	$client->setAuth('780285', 'live_gWlIBwIamZdOYCO7nkQtjD4dZUGiPwNCRAkqCbHfeu4');

	$idempotenceKey = uniqid('', true);

	$number2 = number_format($_POST["sum2"], 2, '.', '');

	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	$description = 'Помощь храму '.$_POST["names2"];


	$response = $client->createPayment(
		array(
			'amount' => array(
				'value' => 	$number2,
				'currency' => 'RUB',
			),
			'payment_method_data' => array(
					'type' => 'bank_card',
			),
			'confirmation' => array(
					'type' => 'redirect',
				'return_url' => $actual_link,
			),
			'description' => $description,
		),
		$idempotenceKey
	);

	$confirmationUrl = $response->getConfirmation()->getConfirmationUrl();
	$_POST = '';
	if ($confirmationUrl) {
		
		header("Location: ".$confirmationUrl);
		die();
	}
	?>
<?endif;?>