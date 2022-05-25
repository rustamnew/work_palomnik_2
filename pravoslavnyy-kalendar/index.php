<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Православный календарь");
?>


<section class="py-100-70 calendar-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<?$APPLICATION->IncludeComponent(
					"codekeepers:news.list", 
					"sidebar-social", 
					array(
						"ACTIVE_DATE_FORMAT" => "d.m.Y",
						"ADD_SECTIONS_CHAIN" => "N",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_ADDITIONAL" => "",
						"AJAX_OPTION_HISTORY" => "N",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "N",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"CACHE_TIME" => "36000000",
						"CACHE_TYPE" => "A",
						"CHECK_DATES" => "Y",
						"DETAIL_URL" => "",
						"DISPLAY_BOTTOM_PAGER" => "N",
						"DISPLAY_DATE" => "N",
						"DISPLAY_NAME" => "N",
						"DISPLAY_PICTURE" => "N",
						"DISPLAY_PREVIEW_TEXT" => "N",
						"DISPLAY_TOP_PAGER" => "N",
						"FIELD_CODE" => array(
							0 => "",
							1 => "",
						),
						"FILTER_NAME" => "",
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",
						"IBLOCK_ID" => $GLOBALS["codekeepers_block_id"]["settings_social_id"],
						"IBLOCK_TYPE" => "settings",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						"INCLUDE_SUBSECTIONS" => "N",
						"MESSAGE_404" => "",
						"NEWS_COUNT" => "10",
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
						"PROPERTY_CODE" => array(
							0 => "link_Facebook",
							1 => "link_Instagram",
							2 => "link_Twitter",
							3 => "link_Youtube",
							4 => "link_Vk",
							5 => "",
						),
						"SET_BROWSER_TITLE" => "N",
						"SET_LAST_MODIFIED" => "N",
						"SET_META_DESCRIPTION" => "N",
						"SET_META_KEYWORDS" => "N",
						"SET_STATUS_404" => "N",
						"SET_TITLE" => "N",
						"SHOW_404" => "N",
						"SORT_BY1" => "SORT",
						"SORT_BY2" => "",
						"SORT_ORDER1" => "ASC",
						"SORT_ORDER2" => "",
						"STRICT_SECTION_CHECK" => "N",
						"COMPONENT_TEMPLATE" => "social-sidebar",
						"TITLE" => "Социальные сети"
					),
					false
				);?>


				<?$APPLICATION->IncludeComponent(
                    "codekeepers:news.list", 
                    "blog-feed-sidebar", 
                    array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
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
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "N",
                        "DISPLAY_PICTURE" => "N",
                        "DISPLAY_PREVIEW_TEXT" => "N",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(
                            0 => "DATE_CREATE",
                            1 => "DATE_CREATE",
                        ),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => $GLOBALS["codekeepers_block_id"]["content_news_id"],
                        "IBLOCK_TYPE" => "content",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "N",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "3",
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
                        "PROPERTY_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "created_date",
                        "SORT_BY2" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "DESC",
                        "STRICT_SECTION_CHECK" => "N",
                        "COMPONENT_TEMPLATE" => "blog-feed-sidebar",
                        "TITLE" => "Лента новостей"
                    ),
                    false
                );?>
			</div>

			<div class="col-lg-8">
				<div class="azbyka-saints"></div>
			</div>
		</div>
	</div>
</section>


<!--Поместите этот код в конец страницы, перед закрывающим тегом body-->

<!--<script>
window.___azcfg = {api: 'https://azbyka.ru/days/widgets',
css: 'https://azbyka.ru/days/css/api.min.css',
image: 1};
(function() {
var el = document.createElement('script'); el.type = 'text/javascript'; el.async = true;
    el.src = 'https://azbyka.ru/days/js/api.min.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(el, s);
})();
</script>-->

<script>
window.___azcfg = {api: 'https://azbyka.ru/days/widgets',
css: 'https://azbyka.ru/days/css/api.min.css',
image: 1};
(function() {
var el = document.createElement('script'); el.type = 'text/javascript'; el.async = true;
    el.src = 'api.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(el, s);
})();
</script>


<style>

</style>

<!------------------------------------>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>