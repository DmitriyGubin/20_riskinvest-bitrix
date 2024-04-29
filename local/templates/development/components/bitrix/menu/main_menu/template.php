<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<?foreach($arResult as $arItem): ?>
<li>
	<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
</li>
<?endforeach?>

<li class="social">
	<a href="<?= $GLOBALS['contacts']['VK_REF']['VALUE']; ?>">
		<img class="menu_img" src="<?= SITE_TEMPLATE_PATH ?>/img/vk.svg">
		<span>Вконтакте</span>
	</a>
</li>
<li class="social">
	<a href="<?= $GLOBALS['contacts']['TELEGA']['VALUE']; ?>">
		<img class="menu_img" src="<?= SITE_TEMPLATE_PATH ?>/img/telega.svg">
		<span>Telegram-канал</span>
	</a>
</li>

<?endif?>