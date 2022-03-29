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

<header class="header" id="page">
    <div class="header-owl owl-carousel owl-theme">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?if($arItem["PROPERTIES"]["center"]["VALUE"] == "N" || !$arItem["PROPERTIES"]["center"]["VALUE"]):?>
                <div class="sec-hero display-table" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
                    <div class="table-cell">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col" <?if($arItem["PROPERTIES"]["teasers_show"]["VALUE"]):?>style="display: flex;"<?endif;?>>
                                    <div class="banner">
                                        <?if($arItem["PROPERTIES"]["subtitle"]["VALUE"]):?>
                                            <div class="headline-top"><?=$arItem["PROPERTIES"]["subtitle"]["VALUE"]?></div>
                                        <?endif;?>

                                        <?if($arItem["PREVIEW_TEXT"]):?>
                                            <h1 class="handline"><?=$arItem["PREVIEW_TEXT"]?></h1>
                                        <?endif;?>

                                        <?if($arItem["DETAIL_TEXT"]):?>
                                            <p class="about-site"><?=$arItem["DETAIL_TEXT"]?></p>
                                        <?endif;?>

                                        <?if($arItem["PROPERTIES"]["text1"]["VALUE"] || $arItem["PROPERTIES"]["text2"]["VALUE"]):?>
                                            <div class="buttons">
                                                <?if($arItem["PROPERTIES"]["text1"]["VALUE"]):?>
                                                    <a href="<?=$arItem["PROPERTIES"]["url1"]["VALUE"];?>" class="<?if(!$arItem["PROPERTIES"]["url1"]["VALUE"]):?>summonFormButton <?endif;?>btn-1"><?=$arItem["PROPERTIES"]["text1"]["VALUE"];?></a>
                                                <?endif;?>
                                                <?if($arItem["PROPERTIES"]["text2"]["VALUE"]):?>
                                                    <a href="<?=$arItem["PROPERTIES"]["url2"]["VALUE"];?>" class="<?if(!$arItem["PROPERTIES"]["url2"]["VALUE"]):?>summonFormButton <?endif;?>btn-1 btn-2"><?=$arItem["PROPERTIES"]["text2"]["VALUE"];?></a>
                                                <?endif;?>
                                            </div>
                                        <?endif;?>
                                    </div>

                                    <?if($arItem["PROPERTIES"]["teasers_show"]["VALUE"]):?>
                                        <div class="services-header text-right">
                                            <div class="line">
                                                <?if($arItem["PROPERTIES"]["teaser1_show"]["VALUE"]):?>
                                                    <a href="<?=$arItem["PROPERTIES"]["teaser1_url"]["VALUE"]?>">
                                                        <div class="services-item">
                                                            <?if($arItem["PROPERTIES"]["teaser1_icon"]["VALUE"]):?>
                                                                <?$path = CFile::GetPath($arItem['PROPERTIES']['teaser1_icon']['VALUE']);?>
                                                                <?if (stristr($path, '.svg')):?>
                                                                    <div class="services-item-icon">
                                                                        <?
                                                                        $img_file = CFile::GetPath($arItem['PROPERTIES']['teaser1_icon']['VALUE']);
                                                                        $svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
                                                                        if($svg['id']){
                                                                            $img_grup = $img_file.'#'.$svg['id'];
                                                                        }
                                                                        $svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
                                                                        print_r($svg_file);
                                                                        ?>
                                                                    </div>
                                                                <?else:?>
                                                                    <div class="services-item-icon">
                                                                        <img src=<?echo CFile::GetPath($arItem["PROPERTIES"]["teaser1_icon"]["VALUE"]);?> style="width: unset;">
                                                                    </div>
                                                                <?endif;?>
                                                            <?endif;?>
                                                            <span><?=$arItem["PROPERTIES"]["teaser1_title"]["VALUE"];?></span>
                                                        </div>
                                                    </a>
                                                <?endif;?>

                                                <?if($arItem["PROPERTIES"]["teaser2_show"]["VALUE"]):?>
                                                    <a href="<?=$arItem["PROPERTIES"]["teaser2_url"]["VALUE"]?>">
                                                        <div class="services-item">
                                                            <?if($arItem["PROPERTIES"]["teaser2_icon"]["VALUE"]):?>
                                                                <?$path = CFile::GetPath($arItem['PROPERTIES']['teaser2_icon']['VALUE']);?>
                                                                <?if (stristr($path, '.svg')):?>
                                                                    <div class="services-item-icon">
                                                                        <?
                                                                        $img_file = CFile::GetPath($arItem['PROPERTIES']['teaser2_icon']['VALUE']);
                                                                        $svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
                                                                        if($svg['id']){
                                                                            $img_grup = $img_file.'#'.$svg['id'];
                                                                        }
                                                                        $svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
                                                                        print_r($svg_file);
                                                                        ?>
                                                                    </div>
                                                                <?else:?>
                                                                    <div class="services-item-icon">
                                                                        <img src=<?echo CFile::GetPath($arItem["PROPERTIES"]["teaser2_icon"]["VALUE"]);?> style="width: unset;">
                                                                    </div>
                                                                <?endif;?>
                                                            <?endif;?>
                                                            <span><?=$arItem["PROPERTIES"]["teaser2_title"]["VALUE"];?></span>
                                                        </div>
                                                    </a>
                                                <?endif;?>
                                            </div>
                                            <div class="line">
                                                <?if($arItem["PROPERTIES"]["teaser3_show"]["VALUE"]):?>
                                                    <a href="<?=$arItem["PROPERTIES"]["teaser3_url"]["VALUE"]?>">
                                                        <div class="services-item">
                                                            <?if($arItem["PROPERTIES"]["teaser3_icon"]["VALUE"]):?>
                                                                <?$path = CFile::GetPath($arItem['PROPERTIES']['teaser3_icon']['VALUE']);?>
                                                                <?if (stristr($path, '.svg')):?>
                                                                    <div class="services-item-icon">
                                                                        <?
                                                                        $img_file = CFile::GetPath($arItem['PROPERTIES']['teaser3_icon']['VALUE']);
                                                                        $svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
                                                                        if($svg['id']){
                                                                            $img_grup = $img_file.'#'.$svg['id'];
                                                                        }
                                                                        $svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
                                                                        print_r($svg_file);
                                                                        ?>
                                                                    </div>
                                                                <?else:?>
                                                                    <div class="services-item-icon">
                                                                        <img src=<?echo CFile::GetPath($arItem["PROPERTIES"]["teaser3_icon"]["VALUE"]);?> style="width: unset;">
                                                                    </div>
                                                                <?endif;?>
                                                            <?endif;?>
                                                            <span><?=$arItem["PROPERTIES"]["teaser3_title"]["VALUE"];?></span>
                                                        </div>
                                                    </a>
                                                <?endif;?>

                                                <?if($arItem["PROPERTIES"]["teaser4_show"]["VALUE"]):?>
                                                    <a href="<?=$arItem["PROPERTIES"]["teaser4_url"]["VALUE"]?>">
                                                        <div class="services-item">
                                                            <?if($arItem["PROPERTIES"]["teaser4_icon"]["VALUE"]):?>
                                                                <?$path = CFile::GetPath($arItem['PROPERTIES']['teaser4_icon']['VALUE']);?>
                                                                <?if (stristr($path, '.svg')):?>
                                                                    <div class="services-item-icon">
                                                                        <?
                                                                        $img_file = CFile::GetPath($arItem['PROPERTIES']['teaser4_icon']['VALUE']);
                                                                        $svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
                                                                        if($svg['id']){
                                                                            $img_grup = $img_file.'#'.$svg['id'];
                                                                        }
                                                                        $svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
                                                                        print_r($svg_file);
                                                                        ?>
                                                                    </div>
                                                                <?else:?>
                                                                    <div class="services-item-icon">
                                                                        <img src=<?echo CFile::GetPath($arItem["PROPERTIES"]["teaser4_icon"]["VALUE"]);?> style="width: unset;">
                                                                    </div>
                                                                <?endif;?>
                                                            <?endif;?>
                                                            <span><?=$arItem["PROPERTIES"]["teaser4_title"]["VALUE"];?></span>
                                                        </div>
                                                    </a>
                                                <?endif;?>
                                            </div>
                                        </div>
                                    <?endif;?>
                                </div>
                            </div>
                        </div>
                        
                        <?if($arItem["DETAIL_PICTURE"]["SRC"]):?>
                            <div class="header-banner-addition-image" style="background-image: url(<?=$arItem["DETAIL_PICTURE"]["SRC"]?>)"></div>
                        <?endif;?>
                    </div>
                </div>
            <?elseif($arItem["PROPERTIES"]["center"]["VALUE"] == "Y"):?>
                <div class="sec-hero display-table" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
                    <div class="table-cell">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1 main-slider-col">
                                    <div class="box-hero">
                                        <div class="banner banner-3 text-center">
                                            <div class="headline-top"><?=$arItem["PROPERTIES"]["subtitle"]["VALUE"]?></div>
                                            <h1 class="handline"><?=$arItem["PREVIEW_TEXT"]?></h1>
                                            <p class="about-site"><?=$arItem["DETAIL_TEXT"]?></p>

                                            <?if($arItem["PROPERTIES"]["text1"]["VALUE"] || $arItem["PROPERTIES"]["text2"]["VALUE"]):?>
                                                <div class="buttons">
                                                    <?if($arItem["PROPERTIES"]["text1"]["VALUE"]):?>
                                                        <a href="<?=$arItem["PROPERTIES"]["url1"]["VALUE"];?>" class="<?if(!$arItem["PROPERTIES"]["url1"]["VALUE"]):?>summonFormButton <?endif;?>btn-1"><?=$arItem["PROPERTIES"]["text1"]["VALUE"];?></a>
                                                    <?endif;?>
                                                    <?if($arItem["PROPERTIES"]["text2"]["VALUE"]):?>
                                                        <a href="<?=$arItem["PROPERTIES"]["url2"]["VALUE"];?>" class="<?if(!$arItem["PROPERTIES"]["url2"]["VALUE"]):?>summonFormButton <?endif;?>btn-1 btn-2"><?=$arItem["PROPERTIES"]["text2"]["VALUE"];?></a>
                                                    <?endif;?>
                                                </div>
                                            <?endif;?>
                                            <a class="<?if(!$arItem["PROPERTIES"]["url"]["VALUE"]):?>summonFormButton <?endif;?>btn-1 btn-2" href="<?=$arItem["PROPERTIES"]["url"]["VALUE"];?>"><?=$arItem["PROPERTIES"]["text"]["VALUE"];?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?endif;?>
        <?endforeach;?>	
    </div>
</header>