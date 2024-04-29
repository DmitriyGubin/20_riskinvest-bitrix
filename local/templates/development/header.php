<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
    use Bitrix\Main\Page\Asset;

    $GLOBALS['contacts'] = Return_All_Fields_Props(
		Array("IBLOCK_ID"=>9, "ACTIVE"=>"Y"),
		Array(),Array()
	)[0]['props'];
?>

<!DOCTYPE html> 
<html lang="ru">
<head>
	<?php $APPLICATION->ShowHead() ?>
	<title><?php $APPLICATION->ShowTitle() ?></title>
	<?php
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/styles.css');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libraries/jquery-3.6.0.js');
       
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libraries/fancybox/jquery.fancybox.min.css');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libraries/fancybox/jquery.fancybox.min.js');

        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libraries/slick/slick.min.js');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libraries/slick/slick.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libraries/slick/slick-theme.css');

        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
    ?>

    <!-- Микроразметка Open Graph -->
	<meta property="og:type" content="website">
	<meta property="og:image" content="<?= SITE_TEMPLATE_PATH ?>/img/main_page_back.jpg">
	<!-- <meta property="og:url" content="">
	<meta property="og:title" content="">
	<meta property="og:description" content=""> -->
	<!-- Микроразметка Open Graph -->
</head>
<body>
<div class="main_wrap">
<div class="header_content">
	<div id="panel" style="position: absolute; width: 100%; z-index: 9999; top: 0px;"><?php $APPLICATION->ShowPanel(); ?></div>
	<header>
		<div class="wrap">
			<a href="/"><img class="head_logo" src="<?= SITE_TEMPLATE_PATH ?>/img/head_logoo.svg"></a>
			<ul class="head_menu">
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"main_menu",
					Array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(""),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "main",
						"USE_EXT" => "N"
					)
				);?>
			</ul>

			<div class="burger">
				<div class="top"></div>
				<div class="middle"></div>
				<div class="bottom"></div>
			</div>
		</div>

		<div class="menu_hide" style="display: none;">
			<ul class="hide_menu_list">
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"main_menu",
					Array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(""),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "main",
						"USE_EXT" => "N"
					)
				);?>
			</ul>

			<?php
				$mail = $GLOBALS['contacts']['MAIL_MAIN']['VALUE'];
				$phone = $GLOBALS['contacts']['PHONE']['VALUE'];
			?>

			<div class="phone_mail">
				<div class="cont_item">
					<img src="<?= SITE_TEMPLATE_PATH ?>/img/phone.svg">
					<a href="tel:<?= $phone ?>" class="cont_text"><?= $phone ?></a>
				</div>

				<div class="cont_item">
					<img src="<?= SITE_TEMPLATE_PATH ?>/img/mail.svg">
					<a href="mailto:<?= $mail; ?>" class="cont_text"><?= $mail; ?></a>
				</div>
			</div>
		</div>
	</header>
	<div class="top_delimeter"></div>