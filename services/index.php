<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Услуги РискИнвест");
$APPLICATION->SetPageProperty("keywords", "Услуги РискИнвест");
$APPLICATION->SetPageProperty("description", "Услуги РискИнвест");
$APPLICATION->SetPageProperty("title", "Услуги РискИнвест");
$APPLICATION->SetTitle("Услуги РискИнвест");
?>

<link href="css/styles.css" rel="stylesheet">
<link href="css/media.css" rel="stylesheet">

<?php
	$serv = Return_All_Fields_Props(
		Array("IBLOCK_ID"=>6, "ACTIVE"=>"Y"),
		Array(),
		Array("SORT"=>"ASC")
	);

	//debug($serv);
?>

<section class="serv wrap">
<?php foreach ($serv as $item): ?>
	<div class="items_box <?= ($item['props']['INVERT']['VALUE']=='YES') ? 'reverse': null; ?>" id="<?= $item['props']['REFF']['VALUE']; ?>">
		<div class="lett_box">
			<h2 class="title"><?= $item['fields']['NAME']; ?></h2>
			<img class="img_serv" src="<?= CFile::GetPath($item['props']['LETTER']['VALUE']); ?>">
		</div>

		<?php foreach ($item['props']['SUB_SERVICES']['~VALUE'] as $sub_item): ?>
		<?php 
			$arr = explode('%%%', $sub_item['TEXT']);
		?>
		<div class="serv_item">
			<h2 class="serv_title"><?= $arr[0]; ?></h2>
			<div class="serv_text"> 
				<?= $arr[1]; ?> 
			</div>
		</div>
		<?php endforeach; ?>
	</div>
<?php endforeach; ?>
</section>


<?
require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/includes/trust.php");
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>