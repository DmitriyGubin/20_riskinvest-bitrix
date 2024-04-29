<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "РИСКИНВЕСТ, банкротство и реструктуризация, арбитражные споры, топ-3 юридических компаний Росии банкротство, юридическая фирма услуги банкротство");
$APPLICATION->SetPageProperty("keywords", "РИСКИНВЕСТ, банкротство и реструктуризация, арбитражные споры, топ-3 юридических компаний Росии банкротство, юридическая фирма услуги банкротство");
$APPLICATION->SetPageProperty("title", "Главная - РИСКИНВЕСТ | Сопровождение процедур банкротства, работа с проблемными активы");
$APPLICATION->SetPageProperty("description", "РИСКИНВЕСТ, банкротство и реструктуризация, арбитражные споры, топ-3 юридических компаний Росии банкротство, юридическая фирма услуги банкротство");
$APPLICATION->SetTitle("Главная - РИСКИНВЕСТ | Сопровождение процедур банкротства, работа с проблемными активы");
?>

<style type="text/css">
	.top_delimeter
	{
		margin-bottom: 0px !important;
	}
</style>

<section class="head_ban">
	<img class="back_img" src="<?= SITE_TEMPLATE_PATH ?>/img/main_page_back.jpg">
	<!-- <video playsinline autoplay muted loop class="ban_video">
		<source src="<?= SITE_TEMPLATE_PATH ?>/img/video.mp4" type="video/mp4">
	</video> -->
		<div class="layer">
			<div class="wrap">
				<div class="big_text">
					<span>МЫ НЕ КОНСУЛЬТИРУЕМ,</span> <br>
					МЫ ДЕЛАЕМ ПРОЕКТЫ <br>
					СВОИМИ РУКАМИ
				</div>

				<div>
					<div class="logo_text">
						<!-- <img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.svg">
						<h1>РИСКИНВЕСТ</h1> -->
						<img src="<?= SITE_TEMPLATE_PATH ?>/img/head_logoo.svg">
					</div>
					<div class="bottom_text">
						Это команда, имеющая опыт работы с проблемными активами с 2000 года, профессиональный участник рынка банкротства с 2014 года
					</div>
				</div>
			</div>
		</div>
</section>

<?php

$serv = Return_All_Fields_Props(
	Array("IBLOCK_ID"=>6, "ACTIVE"=>"Y"),
	Array(),
	Array("SORT"=>"ASC")
);

?>

<section class="main_serv wrap">
<?php foreach ($serv as $item): ?>
	<a href="<?= '/services/#'.$item['props']['REFF']['VALUE']; ?>" class="serv_item hover_box">
		<h2 class="serv_title"><?= $item['fields']['NAME']; ?></h2>
		<p class="serv_text">
			<?= $item['fields']['PREVIEW_TEXT']; ?>
		</p>
		<div class="more_box">
			<div class="text_arrow">
				<div>Подробнее</div>
				<svg class="little_arrow" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0 7H16.5M16.5 7L11 12.5M16.5 7L11 1.5" stroke="white" stroke-width="2"/>
				</svg>
			</div>

			<svg class="big_arrow hide" width="79" height="14" viewBox="0 0 79 14" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M0 7H77.5M77.5 7L71 12.5M77.5 7L72 1.5" stroke="white" stroke-width="2"/>
			</svg>
		</div>		
	</a>
<?php endforeach; ?>
</section>

<?
require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/includes/about.php");
require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/includes/number.php");
?>

<?php 
$news = Return_All_Fields_Props(
	Array("IBLOCK_ID"=>3, "ACTIVE"=>"Y"),
	Array(),Array()
);
	//debug($news);
?>

<section class="news wrap">
	<h2 class="title">Новости компании</h2>
	<div class="news_slider">
	<?php foreach ($news as $item): ?>
		<a href="<?= $item['fields']['DETAIL_PAGE_URL']; ?>" class="news_item hover_box">
			<div class="news_date"><?= strtolower(FormatDate("d F Y", MakeTimeStamp($item['fields']['ACTIVE_FROM']))); ?></div>
			<p class="news_text">
				<?= $item['fields']['NAME']; ?>
			</p>
			<div class="more_box">
				<div class="text_arrow">
					<div>Читать полностью</div>
					<svg class="little_arrow" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 7H16.5M16.5 7L11 12.5M16.5 7L11 1.5" stroke="white" stroke-width="2"/>
					</svg>
				</div>

				<svg class="big_arrow hide" width="79" height="14" viewBox="0 0 79 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0 7H77.5M77.5 7L71 12.5M77.5 7L72 1.5" stroke="white" stroke-width="2"/>
				</svg>
			</div>		
		</a>
	<?php endforeach; ?>
	</div>
</section>

<?
  require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/includes/main_jobs.php");
?>

<?
require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/includes/trust.php");
?>

<script type="text/javascript" src="<?= SITE_TEMPLATE_PATH.'/js/main.js' ?>"></script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>