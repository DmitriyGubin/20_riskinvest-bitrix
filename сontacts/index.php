<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Контакты РискИнвест");
$APPLICATION->SetPageProperty("keywords", "Контакты РискИнвест");
$APPLICATION->SetPageProperty("description", "Контакты РискИнвест");
$APPLICATION->SetPageProperty("title", "Контакты РискИнвест");
$APPLICATION->SetTitle("Контакты РискИнвест");
?>

<link href="css/styles.css" rel="stylesheet">
<link href="css/media.css" rel="stylesheet">

<?php 
	$mail = $GLOBALS['contacts']['MAIL_MAIN']['VALUE'];
	$phone = $GLOBALS['contacts']['PHONE']['VALUE'];
	$mail_coopr = $GLOBALS['contacts']['MAIL_COOPER']['VALUE'];
	$adress = $GLOBALS['contacts']['ADRESS']['VALUE'];
?>

<div style="display: none;">
	<div id="lat_off"><?= $GLOBALS['contacts']['LAT']['VALUE'] ?></div>
	<div id="long_off"><?= $GLOBALS['contacts']['LONG']['VALUE'] ?></div>
	<div id="addr_off"><?= $adress; ?></div>
</div>

<section class="wrap">
	<h1 class="title">Контакты</h1>
	<div class="map_box">
		<div id="contacts_map"></div>

		<div class="contacts_box">
			<div class="adress"><?= $adress ?></div>
			<div class="cont_item">
				<img src="img/phone.svg">
				<a href="tel:<?= $phone ?>" class="tel"><?= $phone ?></a>
			</div>

			<div class="cont_item">
				<img src="img/mail.svg">
				<a href="mailto:<?= $mail; ?>" class="email"><?= $mail; ?></a>
			</div>

			<div class="sotr">По вопросам сотрудничества обращайтесь 
				<a href="mailto:<?= $mail_coopr; ?>" class="email"><?= $mail_coopr; ?></a>
			</div>
		</div>
	</div>
</section>

<?
$title = 'Есть сложные задачи?';
require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/includes/big_mail_line.php");
?>

<script src="https://api-maps.yandex.ru/2.1/?apikey=e5df13fe-7b6a-4037-9699-cddff13aa624&amp;lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript" src="js/main.js"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>