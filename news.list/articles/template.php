<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="barba-wrapper">

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<div class="article-list">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<a class="article-item article-list__item" href="<?=$arItem["DETAIL_PAGE_URL"]?>" data-anim="anim-3">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div class="article-item__background">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["NAME"]?>">
			</div>
		<?endif?>

		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<div class="article-item__wrapper">
				<div class="article-item__title"><?echo $arItem["NAME"]?></div>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
				<div class="article-item__content"><?echo $arItem["PREVIEW_TEXT"];?></div>
		<?endif;?>
			</div>

		
	</a>
<?endforeach;?>

</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

</div>
