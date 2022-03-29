<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Политика конфиденциальности");
?>

<section class="py-100">
	<div class="container">
		<?$APPLICATION->IncludeFile(SITE_DIR."include/privacy.php", 
			array(), 
			array("MODE" => "html"));?>
	</div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>