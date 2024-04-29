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

//debug($arResult);
$APPLICATION->SetPageProperty("title", $arResult['NAME']);
?>

<section class="detail wrap">
	<h1 class="detail_title">
		<?= $arResult['NAME']; ?>
	</h1>

	<div class="about_box">
		<div class="text_box">
			<div class="main_text">
				<?= $arResult['~DETAIL_TEXT']; ?>
			</div>

			<?php $next_ref = Next_News_Check(3,$arResult['ACTIVE_FROM']); ?>

			<?php if($next_ref != 'no'): ?>
			<a class="another_item" href="<?= $next_ref; ?>">
				<div>Следующая статья</div>
				<svg class="icon" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="25" cy="25" r="25" fill="white"/>
					<path d="M16 25.5H32.5M32.5 25.5L27 31M32.5 25.5L27 20" stroke="#0D0732" stroke-width="2"/>
				</svg>
			</a>
			<?php endif ?>
		</div>

<?php 
	$id = $arResult['ID'];
	$another = Return_All(
		Array("IBLOCK_ID"=>3, "ACTIVE"=>"Y", "!ID" => $id),
		Array("ID", "IBLOCK_ID", "NAME","DETAIL_TEXT","DETAIL_PAGE_URL"),
		Array("ACTIVE_FROM" => 'DESC')
	);
?>

		<div class="another">
			<div class="another_title">Другие материалы</div>

			<div class="another_slider">
			<?php $j = 0; ?>
			<?php foreach ($another as $item): ?>
			<?php 
				$j++;
				if($j == 3) break;
			?>
			<?php $ref = $item['DETAIL_PAGE_URL']; ?>
			<div class="anoth_slide">
				<a class="anoth_item hover_box" href="<?= $ref; ?>">
					<h2 class="anoth_title">
						<?= $item['NAME']; ?>
					</h2>
	
					<div class="anoth_text">
						<?= Сut_Text(strip_tags($item['DETAIL_TEXT']), 146); ?>
					</div>

					<div class="more_box">
						<div class="text_arrow">
							<div>Читать полностью</div>
							<svg class="little_arrow" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 7H16.5M16.5 7L11 12.5M16.5 7L11 1.5" stroke="white" stroke-width="2"></path>
							</svg>
						</div>

						<svg class="big_arrow hide" width="79" height="14" viewBox="0 0 79 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 7H77.5M77.5 7L71 12.5M77.5 7L72 1.5" stroke="white" stroke-width="2"></path>
						</svg>
					</div>
				</a>
			</div>
			<?php endforeach; ?>
			</div>
		</div>

	</div>
</section>

<?
require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/includes/trust.php");
?>

<script type="text/javascript">
	if(screen.width < 1000)
	{
		$('.another_slider').slick({
			dots: false,
			infinite: true,
			slidesToScroll: 1,
			slidesToShow: 2,
			responsive: [
			{
				breakpoint: 750,
				settings: {
					slidesToShow: 1
				}
			}
			],
			prevArrow: '<div class="prev-photo"><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 6.5H1.5M1.5 6.5L7 12M1.5 6.5L7 1" stroke="white" stroke-width="2"/></svg></div>',
			nextArrow: '<div class="next-photo"><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 6.5H16.5M16.5 6.5L11 12M16.5 6.5L11 1" stroke="white" stroke-width="2"/></svg></div>'
		});
	}
</script>

<?php
/*  
<div class="news-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && ($arResult["FIELDS"]["PREVIEW_TEXT"] ?? '')):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif($arResult["DETAIL_TEXT"] <> ''):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>
*/
?> 