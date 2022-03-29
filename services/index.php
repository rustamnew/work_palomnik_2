<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("image", "/assets/images/header/04_header.jpg");
$APPLICATION->SetTitle("Услуги");
?>

<section class="single-practice-areas">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="single-practice-areas-head">
					<h3>
						<?=$GLOBALS["global_info"]["services_sidebar_title"];?>
					</h3>
				</div>
				<?$APPLICATION->IncludeComponent(
	"codekeepers:catalog.section.list", 
	"sidebar-section-list", 
	array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => $GLOBALS["codekeepers_block_id"]["content_services_id"],
		"IBLOCK_TYPE" => "content",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "N",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => "sidebar-section-list",
		"TITLE" => "Разделы"
	),
	false
);?>
				<?$APPLICATION->IncludeComponent("codekeepers:news.list", "sidebar-contacts", Array(
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
						"IBLOCK_ID" => $GLOBALS["codekeepers_block_id"]["widgets_sidebar-contacts_id"],	
						"IBLOCK_TYPE" => "content",	
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	
						"INCLUDE_SUBSECTIONS" => "N",	
						"MESSAGE_404" => "",	
						"NEWS_COUNT" => "1",	
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
							1 => "phone_show",
							2 => "email_show",
							3 => "address_show",
							4 => "phone_title",
							5 => "email_title",
							6 => "address_title",
							7 => "text",
							8 => "url",
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
						"COMPONENT_TEMPLATE" => ".default"
					),
					false
				);?>
			</div>
			<div class="col-lg-8">
				<?$APPLICATION->IncludeComponent(
	"codekeepers:news", 
	"services", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "promo",
			1 => "reviews",
			2 => "team",
			3 => "price",
			4 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => $GLOBALS["codekeepers_block_id"]["content_services_id"],
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "price",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "services",
		"SEF_FOLDER" => "/services/",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE#/",
			"detail" => "#SECTION_CODE#/#ELEMENT_CODE#/",
		)
	),
	false
);?>
			</div>
		</div>
	</div>
</section>

<?$APPLICATION->IncludeComponent(
	"codekeepers:news.list",
	"blog-feed",
	Array(
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
		"COMPONENT_TEMPLATE" => "blog-feed",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"DATE_CREATE",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => $GLOBALS["codekeepers_block_id"]["content_news_id"],
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NAME" => "Новости",
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
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "date_create",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"SUBTITLE" => "Решения принимаются профессионалами. Мы гарантируем высокое качество оказания услуг.",
		"TITLE" => "Лента новостей"
	)
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>