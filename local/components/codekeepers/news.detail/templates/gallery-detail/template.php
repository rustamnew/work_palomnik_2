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
		<div class="sec-title sec-title-2 text-center">
			<?if($arResult["PROPERTIES"]["name"]["VALUE"]):?><h2><?=$arResult["PROPERTIES"]["name"]["VALUE"]?></h2><?endif;?>
			<?if($arResult["PROPERTIES"]["title"]["VALUE"]):?><h3><?=$arResult["PROPERTIES"]["title"]["VALUE"]?></h3><?endif;?>
			<?if($arResult["PROPERTIES"]["subtitle"]["VALUE"]):?><p><?=$arResult["PROPERTIES"]["subtitle"]["VALUE"]?></p><?endif;?>
		</div>

		<div class="licence-list-grid">
			<?foreach($arResult["PROPERTIES"]["images"]["VALUE"] as $arItem):?>
				<a data-fancybox="gallery" data-src="<?echo CFile::GetPath($arItem);?>" data-caption="<?=$arItem["NAME"]?>" class="gallery-gridify-item">
					<img id="<?=$this->GetEditAreaId($arItem['ID']);?>" src="<?echo CFile::GetPath($arItem);?>" alt="image" loading="lazy">
				</a>
			<?endforeach;?>
		</div>
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