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

<section class="case-study case-study-page gallery-page py-100">
	<div class="container">
		<?if($arParams["NAME"] || $arParams["TITLE"] || $arParams["SUBTITLE"]):?>
			<div class="sec-title">
				<div class="row">
					<div class="col-lg-5">
						<?if($arParams["NAME"]):?><h2><?=$arParams["NAME"]?></h2><?endif;?>
						<?if($arParams["TITLE"]):?><h3><?=$arParams["TITLE"]?></h3><?endif;?>
					</div>
					<div class="col-lg-5 d-flex align-items-center">
						<?if($arParams["SUBTITLE"]):?><p><?=$arParams["SUBTITLE"]?></p><?endif;?>
					</div>
				</div>
			</div>
		<?endif;?>
		<div class="licence-list<?if($arParams["SHOW_MODE"] == 'one' || !$arParams["SHOW_MODE"]):?>-grid<?endif;?>">
			<?if($arParams["SHOW_MODE"] == 'one' || !$arParams["SHOW_MODE"]):?>
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<a data-fancybox="gallery" data-src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" data-caption="<?=$arItem["NAME"]?>" class="gallery-gridify-item">
						<img id="<?=$this->GetEditAreaId($arItem['ID']);?>" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="image">
					</a>
				<?endforeach;?>

			<?elseif($arParams["SHOW_MODE"] == 'two'):?>
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<div class="col-md-6 col-lg-4 mb20">
						<div class="case-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" data-fancybox="gallery" data-src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" data-caption="<?=$arItem["NAME"]?>">
							<img class="img-fluid gallery-item-img" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 Case Study">
							<div class="text-box d-flex align-content-between flex-wrap">
								<div class="content-text">
									<h4><a href="#"><?=$arItem["NAME"]?></a></h4>
								</div>
							</div>
						</div>
					</div>
				<?endforeach;?>
			<?endif;?>
		</div>

		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<div class="col-md-12">
				<?=$arResult["NAV_STRING"]?>
			</div>
		<?endif;?>
	</div>
</section>



<script>
	
'use strict';
Element.prototype.imagesLoaded = function (cb){
    var images = this.querySelectorAll('img');
    var count = images.length;
    if (count == 0) cb();
    for (var i= 0, length = images.length; i < length; i++)
    {
        var image = new Image();
        image.onload = image.onerror = function(e){
            count --;
            if (count == 0) cb()
        }
        image.src = images[i].getAttribute('src');
    }
}
Element.prototype.gridify = function (options)
{
    var self = this,
        options = options || {},
        indexOfSmallest = function (a) {
            var lowest = 0;
            for (var i = 1, length = a.length; i < length; i++) {
                if (a[i] < a[lowest]) lowest = i;
            }
            return lowest;
        },
        highestColumn = function (cols) {
            var highest = 0;
            for (var i = 0, length = cols.length; i < length; i++) {
                if (cols[i] > highest) highest = cols[i];
            }
            return highest;
        },
        attachEvent = function(node, event, cb)
        {
            if (node.attachEvent)
                node.attachEvent('on'+event, cb);
            else if (node.addEventListener)
                node.addEventListener(event, cb);
        },
        detachEvent = function(node, event, cb)
        {
            if(node.detachEvent) {
                node.detachEvent('on'+event, cb);
            }
            else if(node.removeEventListener) {
                node.removeEventListener(event, render);
            }
        },
        render = function()
        {
            self.style.position = 'relative';
            var items = self.querySelectorAll(options.srcNode),
                transition = (options.transition || 'all 0.5s ease') + ', height 0, width 0',
                width = self.clientWidth,
                item_margin = parseInt(options.margin || 0),
                item_width = parseInt(options.max_width || options.width || 220),
                column_count = Math.max(Math.floor(width/(item_width + item_margin)),1),
                left = column_count == 1 ? item_margin/2 : (width % (item_width + item_margin)) / 2,
                columns = [];
            if (options.max_width)
            {
                column_count = Math.ceil(width/(item_width + item_margin));
                item_width = (width - column_count * item_margin - item_margin)/column_count;
                left = item_margin/2;
            }
            for (var i = 0; i < column_count; i++)
            {
                columns.push(0);
            }
            for (var i= 0, length = items.length; i < length; i++)
            {
                var idx = indexOfSmallest(columns);
                items[i].setAttribute('style', 'width: ' + item_width + 'px; ' +
                    'position: absolute; ' +
                    'margin: ' + item_margin/2 + 'px; ' +
                    'top: ' + (columns[idx] + item_margin/2) +'px; ' +
                    'left: ' + ((item_width + item_margin) * idx + left) + 'px; ' +
                    'transition: ' + transition);

                columns[idx] += items[i].clientHeight + item_margin;
            }
            self.style.height = highestColumn(columns)+'px';
        };
    this.imagesLoaded(render);
    if (options.resizable)
    {
        attachEvent(window, 'resize', render);
        attachEvent(self, 'DOMNodeRemoved', function(){
            detachEvent(window, 'resize', render);
        })
    }
}
let gallery = (width = '300px', margin = '10px') => {
    let options = {
        srcNode: 'img',
        margin: margin,
        width: width,
        max_width: '',
        resizable: true,
        transition: 'all 0.5s ease'
    }
    
    document.querySelector('.licence-list-grid').gridify(options)
}

let width = "<?=$arParams["WIDTH"]?>"
let margin = "<?=$arParams["MARGIN"]?>"

if (!width) {
	width = "300px"
}
if (!margin) {
	margin = "10px"
}

gallery(width, margin)
	
</script>

