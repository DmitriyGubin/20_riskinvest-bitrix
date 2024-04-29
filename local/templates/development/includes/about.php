<?php 
$inserts = Return_All_Fields_Props(
	Array("IBLOCK_ID"=>10, "ACTIVE"=>"Y"),
	Array(),Array()
)[0]['props'];
//debug($inserts);
?>

 <section class="about wrap">
 	<div class="about_img">
 		<div class="left_box"></div>
 		<div class="right_box"></div>
 		<div class="top_box"></div>
 		<div class="bottom_box"></div>
 		<img class="left_img" src="<?= CFile::GetPath($inserts['ABOUT_COMPANY_IMG']['VALUE']); ?>">
 	</div>

 	<div class="text_box">
 		<h2 class="title">О компании</h2>
 		<div class="about_text">
 			<?= $inserts['ABOUT_COMPANY_TEXT']['~VALUE']['TEXT']; ?>
 		</div>

 		<div class="more_box">
			<a href="/about/" class="text_arrow">
				<div>Подробнее</div>
				<svg class="little_arrow" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0 7H16.5M16.5 7L11 12.5M16.5 7L11 1.5" stroke="white" stroke-width="2"></path>
				</svg>
			</a>
		</div>
 	</div>
 </section>