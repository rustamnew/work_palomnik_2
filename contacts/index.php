<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
$APPLICATION->SetPageProperty("image", "/assets/images/header/04_header.jpg");
?>


<section class="contacts-quote">
    <div class="bg-section" style="background-image: url(<?echo CFile::GetPath($GLOBALS['global_info']['contacts_block_background']);?>)">
        <div class="overlay"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
				<div class="sec-title">
					<h2><?=$GLOBALS['global_info']['contacts_block_name']?></h2>
					<h3><?=$GLOBALS['global_info']['contacts_block_title']?></h3>
					<p><?=$GLOBALS['global_info']['contacts_block_subtitle']?></p>
				</div>

				<div class="text-box">
					<?if($GLOBALS['global_info']['contacts_phone_show']):?>
						<div class="contacts-item">
							<div class="wrap-icon">
								<?$path = CFile::GetPath($GLOBALS['global_info']['icon_phone']);?>

								<?if (stristr($path, '.svg')):?>
									<?
									$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);
									print_r($svg_file);?>
								<?else:?>
									<img src=<?=$path?>>
								<?endif;?>
							</div>
							<div class="wrap-info">
								<h4><?=$GLOBALS['global_info']['contacts_title_phone'];?></h4>

								<?if(gettype($GLOBALS['global_info']['contacts_phone']) == 'array'):?>
									<?foreach($GLOBALS['global_info']['contacts_phone'] as $item):?>
										<a href="tel:<?=$item;?>">
											<p><?=$item;?></p>
										</a>
									<?endforeach;?>
								<?else:?>
									<a href="tel:<?=$GLOBALS['global_info']['contacts_phone'];?>">
										<p><?=$GLOBALS['global_info']['contacts_phone'];?></p>
									</a>
								<?endif;?>
							</div>
						</div>
					<?endif;?>

					<?if($GLOBALS['global_info']['contacts_email_show']):?>
						<div class="contacts-item">
							<div class="wrap-icon">
								<?$path = CFile::GetPath($GLOBALS['global_info']['icon_email']);?>

								<?if (stristr($path, '.svg')):?>
									<?
									$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);
									print_r($svg_file);?>
								<?else:?>
									<img src=<?=$path?>>
								<?endif;?>
							</div>
							<div class="wrap-info">
								<h4><?=$GLOBALS['global_info']['contacts_title_email'];?></h4>
								
								<?if(gettype($GLOBALS['global_info']['contacts_email']) == 'array'):?>
									<?foreach($GLOBALS['global_info']['contacts_email'] as $item):?>
										<a href="mailto:<?=$item;?>">
											<p><?=$item;?></p>
										</a>
									<?endforeach;?>
								<?else:?>
									<a href="mailto:<?=$GLOBALS['global_info']['contacts_email'];?>">
										<p><?=$GLOBALS['global_info']['contacts_email'];?></p>
									</a>
								<?endif;?>

							</div>
						</div>
					<?endif;?>

					<?if($GLOBALS['global_info']['contacts_address_show']):?>
						<div class="contacts-item">
							<div class="wrap-icon">
								<?$path = CFile::GetPath($GLOBALS['global_info']['icon_address']);?>

								<?if (stristr($path, '.svg')):?>
									<?
									$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);
									print_r($svg_file);?>
								<?else:?>
									<img src=<?=$path?>>
								<?endif;?>
							</div>
							<div class="wrap-info">
								<h4><?=$GLOBALS['global_info']['contacts_title_address'];?></h4>

								<?if(gettype($GLOBALS['global_info']['contacts_address']) == 'array'):?>
									<?foreach($GLOBALS['global_info']['contacts_address'] as $item):?>
										<p><?=$item;?></p>
									<?endforeach;?>
								<?else:?>
									<p><?=$GLOBALS['global_info']['contacts_address'];?></p>
								<?endif;?>
							</div>
						</div>
					<?endif;?>
				</div>
            </div>
            <div class="col-lg-6">
                <?$APPLICATION->IncludeComponent(
	"codekeepers:main.feedback", 
	"feedback-form-contacts", 
	array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_SHADOW" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "PHONE",
			2 => "SUBJECT",
			3 => "MESSAGE",
		),
		"EVENT_MESSAGE_ID" => array(
			0 => "11"
		),
		"FORM_PAGE" => "Контакты",
		"FORM_TYPE" => "Форма на странице контактов",
		"NAME" => "Форма обратной связи",
		"TITLE" => "Миссия нашей компании предоставить лучший сервис для клиентов",
		"SUBTITLE" => "Решения принимаются профессионалами. Мы гарантируем высокое качество оказания услуг.",
		"FORM_TITLE" => "Оставьте заявку",
		"LABEL_NAME" => "Имя",
		"LABEL_PHONE" => "Телефон",
		"LABEL_SUBJECT" => "Тема",
		"LABEL_MESSAGE" => "Сообщение",
		"PLACEHOLDER_NAME" => "Ваше имя",
		"PLACEHOLDER_PHONE" => "Ваш телефон",
		"PLACEHOLDER_SUBJECT" => "Тема сообщения",
		"PLACEHOLDER_MESSAGE" => "Ваше сообщение",
		"COMPONENT_TEMPLATE" => "feedback-form-contacts",
		"USE_CAPTCHA" => "Y",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"EMAIL_TO" => "1rustamnew1@gmail.com",
		"SUBMIT_TEXT" => "Отправить"
	),
	false
);?>

            </div>
        </div>
    </div>
</section>

<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"",
	Array(
		"API_KEY" => "",
		"CONTROLS" => array("ZOOM","MINIMAP","TYPECONTROL","SCALELINE"),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:3:{s:10:\"yandex_lat\";s:7:\"55.7383\";s:10:\"yandex_lon\";s:7:\"37.5946\";s:12:\"yandex_scale\";i:10;}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(
			0 => "ENABLE_DBLCLICK_ZOOM",
			1 => "ENABLE_RIGHT_MAGNIFIER",
			2 => "ENABLE_DRAGGING",
		)
	)
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>