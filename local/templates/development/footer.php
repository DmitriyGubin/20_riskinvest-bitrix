<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

</div>
<footer class="wrap">
	<ul class="footer_menu">
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

	<div class="logo_text">
		<!-- <img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.svg">
		<h2>РИСКИНВЕСТ</h2> -->
		<img src="<?= SITE_TEMPLATE_PATH ?>/img/head_logoo.svg">
	</div>

	<?php
		$mail = $GLOBALS['contacts']['MAIL_MAIN']['VALUE'];
		$phone = $GLOBALS['contacts']['PHONE']['VALUE'];
		$adress = $GLOBALS['contacts']['ADRESS']['VALUE'];
	?>

	<div class="cont_box">
		<div class="cont_item">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/map_point.svg">
			<div class="cont_text"><?= $adress ?></div>
		</div>

		<div class="cont_item">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/phone.svg">
			<a href="tel:<?= $phone ?>" class="cont_text"><?= $phone ?></a>
		</div>

		<div class="cont_item">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/mail.svg">
			<a href="mailto:<?= $mail ?>" class="cont_text"><?= $mail ?></a>
		</div>
	</div>

	<a class="polite" href="<?= SITE_TEMPLATE_PATH ?>/docs/policyy.pdf" target="_blank">
		Политика конфиденциальности
	</a>
</footer>
</div>
<script type="text/javascript" src="<?= SITE_TEMPLATE_PATH.'/js/site_template.js' ?>"></script>

</body>
</html> 