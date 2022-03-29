<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<?$isMainPage = $APPLICATION->GetCurPage(false) === SITE_DIR;?>
<?require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."include/iblock_id_link.php");?>

<?
global $searchTags;
$searchTags["%TAGS"] = $_REQUEST["tags"];
?>


<?
$GLOBALS += CUnisiteMain::MainProperty($GLOBALS["codekeepers_block_id"]["settings_main_id"], $GLOBALS["codekeepers_block_id"]["settings_main_element_id"]);
?>



<!DOCTYPE html>
<html lang="ru">
    <head>
        <!-- :: Required Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width; initial-scale=1">

		<title><?$APPLICATION->ShowTitle(false);?></title>

		<!-- :: Favicon -->
		<link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/assets/images/favicon.png">

		<!-- :: Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

		<?
        CModule::IncludeModule("codekeepers.unisite"){CUnisiteMain::MainHeaderAssets()};
        $APPLICATION->ShowHead();
        ?>
    </head>
    <body>
		<?$APPLICATION->ShowPanel();?>
		<div class="page-wrapper">
			<!-- :: Loading -->
			<div class="loading">
				<div class="loading-box">
					<div class="lds-ring">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
				</div>
			</div>
			
			<!-- :: Navbar -->
            <?
            $headertype = $GLOBALS['global_info']['header_type'];
            $property_enums = CIBlockPropertyEnum::GetList(Array(), Array("IBLOCK_ID"=> 1, "PROPERTY_ID"=> 53));
            while($enum_fields = $property_enums->GetNext())
            {
                if($headertype == $enum_fields["ID"]) {
                    $headertype = trim($enum_fields["VALUE"]);
                }
            
            }
            ?>

            <header class="navs <?if($headertype == 'Вариант 2'):?>navs-2<?elseif($headertype == 'Вариант 3'):?>navs-3<?endif;?>">
                <div class="nav-top">
                    <div class="container">
                        <div class="nav-top-box d-flex align-items-center justify-content-between">
                            <ul class="info">
                                <?if($GLOBALS['global_info']['contacts_email'] and $GLOBALS['global_info']['contacts_email_show']):?>
                                    <li <?if(gettype($GLOBALS['global_info']['contacts_email']) == 'array'):?>class="has-dropdown"<?endif;?>>

                                        <?if(gettype($GLOBALS['global_info']['contacts_email']) == 'array'):?>
                                            <a href="mailto:<?=$GLOBALS['global_info']['contacts_email'][0];?>">
                                                <?=GetMessage("HEADER_EMAIL_TITLE");?><?=$GLOBALS['global_info']['contacts_email'][0];?>
                                            </a>
                                        <?else:?>
                                            <a href="mailto:<?=$GLOBALS['global_info']['contacts_email'];?>">
                                                <?=GetMessage("HEADER_EMAIL_TITLE");?><?=$GLOBALS['global_info']['contacts_email'];?>
                                            </a>
                                        <?endif;?>

                                        <?if(gettype($GLOBALS['global_info']['contacts_email']) == 'array'):?>
                                            <ul>
                                                <?foreach($GLOBALS['global_info']['contacts_email'] as $item):?>
                                                    <li>
                                                        <a href="mailto:<?=$item;?>">
                                                            <?=$item;?>
                                                        </a>
                                                    </li>
                                                <?endforeach;?>
                                            </ul>
                                        <?endif;?>
                                    </li>
                                <?endif;?>

                                <?if($GLOBALS['global_info']['contacts_phone'] and $GLOBALS['global_info']['contacts_phone_show']):?>
                                    <li <?if(gettype($GLOBALS['global_info']['contacts_phone']) == 'array'):?>class="has-dropdown"<?endif;?>>

                                        <?if(gettype($GLOBALS['global_info']['contacts_phone']) == 'array'):?>
                                            <a href="mailto:<?=$GLOBALS['global_info']['contacts_phone'][0];?>">
                                                <?=GetMessage("HEADER_PHONE_TITLE");?><?=$GLOBALS['global_info']['contacts_phone'][0];?>
                                            </a>
                                        <?else:?>
                                            <a href="mailto:<?=$GLOBALS['global_info']['contacts_phone'];?>">
                                                <?=GetMessage("HEADER_PHONE_TITLE");?><?=$GLOBALS['global_info']['contacts_phone'];?>
                                            </a>
                                        <?endif;?>

                                        <?if(gettype($GLOBALS['global_info']['contacts_phone']) == 'array'):?>
                                            <ul>
                                                <?foreach($GLOBALS['global_info']['contacts_phone'] as $item):?>
                                                    <li>
                                                        <a href="mailto:<?=$item;?>">
                                                            <?=$item;?>
                                                        </a>
                                                    </li>
                                                <?endforeach;?>
                                            </ul>
                                        <?endif;?>
                                    </li>
                                <?endif;?>
                            </ul>
                            <ul class="header-buttons">
                                <li><a class="icon open-search-box" href="#"><i class="fas fa-search"></i></a></li>

                                <?if($GLOBALS['global_info']['header_extra_show']):?>
                                    <li><a class="icon open-menu" href="#"><i class="fas fa-th"></i></a></li>
                                <?endif;?>

                                <?if($GLOBALS['global_info']['header_shop_show']):?>
                                    <li><a class="icon" href="<?=SITE_DIR?>shop"><i class="fas fa-shopping-cart"></i></a></li>
                                <?endif;?>

                                <?if($GLOBALS['global_info']['header_button_show']):?>
                                    <li>
                                        <a class="summonFormButton btn-1" href="<?=SITE_DIR?>">
                                            <?=$GLOBALS['global_info']['header_button_text'];?>
                                        </a>
                                    </li>
                                <?endif;?>
                            </ul>
                        </div>
                    </div>
                </div>

                <nav class="nav-bar">
                    <div class="container">
                        <div class="box-content d-flex align-items-center justify-content-between">
                            <div class="logo">
                                <a <?if(!$isMainPage):?> href="<?=SITE_DIR?>" <?endif;?> class="logo-nav">
                                    <?$path = CFile::GetPath($GLOBALS['global_info']['header_logo1']);?>
                                    <?if (stristr($path, '.svg')):?>
                                        <?
                                        $img_file = $path;

                                        $svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
                                        if($svg['id']){
                                            $img_grup = $img_file.'#'.$svg['id'];
                                        }

                                        $svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
                                        print_r($svg_file);
                                        ?>
                                    <?else:?>
                                        <img class="img-fluid one" src=<?=$path?> alt="01 Logo">
                                    <?endif;?>



                                    <?$path = CFile::GetPath($GLOBALS['global_info']['header_logo2']);?>
                                    <?if (stristr($path, '.svg')):?>
                                        <?
                                        $img_file = $path;

                                        $svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
                                        if($svg['id']){
                                            $img_grup = $img_file.'#'.$svg['id'];
                                        }

                                        $svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
                                        print_r($svg_file);
                                        ?>
                                    <?else:?>
                                        <img class="img-fluid two" src=<?=$path?> alt="02 Logo">
                                    <?endif;?>
                                </a>

                                <a href="#open-nav-bar-menu" class="open-nav-bar" id="open-nav-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>

                            <?$APPLICATION->IncludeComponent(
                                "codekeepers:menu", 
                                "menu_header", 
                                array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "subtop",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "2",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "top",
                                    "USE_EXT" => "N",
                                    "COMPONENT_TEMPLATE" => "menu"
                                ),
                                false
                            );?>

                            
                            <?if($GLOBALS["global_info"]["header_calltoaction_show"]):?>
                                <a href="tel:<?=$GLOBALS["global_info"]["header_calltoaction_phone"];?>" class="info-nav">
                                    <div class="info-nav-image">
                                        <?$path = CFile::GetPath($GLOBALS["global_info"]["header_calltoaction_icon"]);?>
                                        <?if (stristr($path, '.svg')):?>
                                            <?
                                            $img_file = $path;
                                            $svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
                                            if($svg['id']){
                                                $img_grup = $img_file.'#'.$svg['id'];
                                            }
                                            $svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
                                            print_r($svg_file);?>
                                        <?else:?>
                                            <img src=<?=$path?>>
                                        <?endif;?>
                                    </div>
                                    <div class="contact-nav">
                                        <p><?=$GLOBALS["global_info"]["header_calltoaction_phone"];?></p>
                                        <p><?=$GLOBALS["global_info"]["header_calltoaction_description"];?></p>
                                    </div>
                                </a>
							<?else:?>
								<div></div>
                            <?endif;?>
                        </div>
                    </div>
                </nav>
                
                <!-- :: Search Box -->
                <?$APPLICATION->IncludeComponent("codekeepers:search.form", "header_search", Array(
                    "PAGE" => "#SITE_DIR#search/index.php",
                        "USE_SUGGEST" => "N",
                    ),
                    false
                );?>
            </header>
			

			
			<!-- :: Menu Box -->
			
            <?if($GLOBALS['global_info']['header_extra_show']):?>
            <div class="menu-box">
                <div class="inner-menu">
                    <div class="website-info">
                        <a href="<?=SITE_DIR?>" class="logo">
                            <?$path = CFile::GetPath($GLOBALS['global_info']['header_logo2']);?>
                            <?if (stristr($path, '.svg')):?>
                                <?
                                $img_file = $path;

                                $svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
                                if($svg['id']){
                                    $img_grup = $img_file.'#'.$svg['id'];
                                }

                                $svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
                                print_r($svg_file);
                                ?>
                            <?else:?>
                                <img class="img-fluid two" src=<?=$path?> alt="02 Logo">
                            <?endif;?>

                        </a>
                        
                        <p><?=$GLOBALS["global_info"]["header_extra_description"];?></p>    
                    </div>
                    <div class="contact-info">
                        <?if($GLOBALS['global_info']['contacts_phone_show'] or $GLOBALS['global_info']['contacts_email_show'] or $GLOBALS['global_info']['contacts_address_show']):?>
                            <h4>
                                <?=$GLOBALS["global_info"]["header_extra_title_contacts"];?>
                            </h4>
                        <?endif;?>

                        <?if($GLOBALS['global_info']['contacts_phone'] and $GLOBALS['global_info']['contacts_phone_show']):?>
                            <div class="contact-box">
                                <div class="contact-box-icon">
                                    <?$path = CFile::GetPath($GLOBALS['global_info']['icon_phone']);?>
                                    <?if (stristr($path, '.svg')):?>
                                        <?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
                                        <?print_r($svg_file);?>
                                    <?else:?>
                                        <img src=<?$path?>>
                                    <?endif;?>
                                </div>
                                <div class="box">
                                    <?if(gettype($GLOBALS['global_info']['contacts_phone']) == 'array'):?>
                                        <?foreach($GLOBALS['global_info']['contacts_phone'] as $item):?>
                                            <p>
                                                <a href="tel:<?=$item;?>">
                                                    <?=$item;?>
                                                </a>
                                            </p>
                                        <?endforeach;?>
                                    <?else:?>
                                        <p>
                                            <a href="tel:<?=$GLOBALS['global_info']['contacts_phone'];?>">
                                                <?=$GLOBALS['global_info']['contacts_phone'];?>
                                            </a>
                                        </p>
                                    <?endif;?>
                                </div>
                            </div>
                        <?endif;?>

                        <?if($GLOBALS['global_info']['contacts_email'] and $GLOBALS['global_info']['contacts_email_show']):?>
                            <div class="contact-box">
                                <div class="contact-box-icon">
                                    <?$path = CFile::GetPath($GLOBALS['global_info']['icon_email']);?>
                                    <?if (stristr($path, '.svg')):?>
                                        <?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
                                        <?print_r($svg_file);?>
                                    <?else:?>
                                        <img src=<?$path?>>
                                    <?endif;?>
                                </div>
                                <div class="box">
                                    <?if(gettype($GLOBALS['global_info']['contacts_email']) == 'array'):?>
                                        <?foreach($GLOBALS['global_info']['contacts_email'] as $item):?>
                                            <p>
                                                <a href="mailto:<?=$item;?>">
                                                    <?=$item;?>
                                                </a>
                                            </p>
                                        <?endforeach;?>
                                    <?else:?>
                                        <p>
                                            <a href="mailto:<?=$GLOBALS['global_info']['contacts_email'];?>">
                                                <?=$GLOBALS['global_info']['contacts_email'];?>
                                            </a>
                                        </p>
                                    <?endif;?>
                                </div>
                            </div>
                        <?endif;?>

                        <?if($GLOBALS['global_info']['contacts_address'] and $GLOBALS['global_info']['contacts_address_show']):?>
                            <div class="contact-box">
                                <div class="contact-box-icon">
                                    <?$path = CFile::GetPath($GLOBALS['global_info']['icon_address']);?>
                                    <?if (stristr($path, '.svg')):?>
                                        <?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
                                        <?print_r($svg_file);?>
                                    <?else:?>
                                        <img src=<?$path?>>
                                    <?endif;?>
                                </div>
                                <div class="box">
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
                    <div class="follow-us">
                        <h4>
                            <?=$GLOBALS["global_info"]["header_extra_title_socials"];?>
                        </h4>
                        
						<?$APPLICATION->IncludeComponent(
							"codekeepers:news.list", 
							"social", 
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
								"IBLOCK_TYPE" => "content",
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
									0 => "icon"
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
								"COMPONENT_TEMPLATE" => "social"
							),
							false
						);?>
                    </div>
                    <div class="exit-menu-box">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </div>
            <?endif;?> 
			
			
			<?if($isMainPage):?>
				<?$APPLICATION->IncludeComponent(
					"codekeepers:news.list", 
					"banner_main", 
					array(
						"COMPONENT_TEMPLATE" => "banner_main",
						"IBLOCK_TYPE" => "banners",
						"IBLOCK_ID" => $GLOBALS["codekeepers_block_id"]["banners_banner_main_id"],
						"NEWS_COUNT" => "20",
						"SORT_BY1" => "ACTIVE_FROM",
						"SORT_ORDER1" => "DESC",
						"SORT_BY2" => "SORT",
						"SORT_ORDER2" => "ASC",
						"FILTER_NAME" => "",
						"FIELD_CODE" => array(
							0 => "DETAIL_PICTURE",
							1 => "",
						),
						"PROPERTY_CODE" => array(
							0 => "teasers_show",
							1 => "subtitle",
							2 => "url1",
							3 => "url2",
							4 => "text1",
							5 => "text2",
							6 => "center",
							7 => "teaser1_title",
							8 => "teaser1_show",
							9 => "teaser1_url",
							10 => "teaser2_title",
							11 => "teaser2_show",
							12 => "teaser2_url",
							13 => "teaser3_title",
							14 => "teaser3_show",
							15 => "teaser3_url",
							16 => "teaser4_title",
							17 => "teaser4_show",
							18 => "teaser4_url",
							19 => "",
						),
						"CHECK_DATES" => "Y",
						"DETAIL_URL" => "",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "Y",
						"AJAX_OPTION_HISTORY" => "N",
						"AJAX_OPTION_ADDITIONAL" => "",
						"CACHE_TYPE" => "A",
						"CACHE_TIME" => "36000000",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"PREVIEW_TRUNCATE_LEN" => "",
						"ACTIVE_DATE_FORMAT" => "d.m.Y",
						"SET_TITLE" => "Y",
						"SET_BROWSER_TITLE" => "Y",
						"SET_META_KEYWORDS" => "Y",
						"SET_META_DESCRIPTION" => "Y",
						"SET_LAST_MODIFIED" => "N",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
						"ADD_SECTIONS_CHAIN" => "Y",
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",
						"PARENT_SECTION" => "",
						"PARENT_SECTION_CODE" => "",
						"INCLUDE_SUBSECTIONS" => "Y",
						"STRICT_SECTION_CHECK" => "N",
						"PAGER_TEMPLATE" => ".default",
						"DISPLAY_TOP_PAGER" => "N",
						"DISPLAY_BOTTOM_PAGER" => "Y",
						"PAGER_TITLE" => "Новости",
						"PAGER_SHOW_ALWAYS" => "N",
						"PAGER_DESC_NUMBERING" => "N",
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						"PAGER_SHOW_ALL" => "N",
						"PAGER_BASE_LINK_ENABLE" => "N",
						"SET_STATUS_404" => "N",
						"SHOW_404" => "N",
						"MESSAGE_404" => ""
					),
					false
				);?>
			<?else:?>
				<section class="breadcrumb-header" id="page" style="background-image: url(<?echo SITE_TEMPLATE_PATH;?><?echo $APPLICATION->ShowProperty("image");?>)">
					<div class="overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="banner">
									<h1><?$APPLICATION->ShowTitle(false);?></h1>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:breadcrumb",
                                        "",
                                    Array()
                                    );?>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?endif;?>
			

	
						