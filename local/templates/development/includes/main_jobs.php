<?php 
	$inserts = Return_All_Fields_Props(
		Array("IBLOCK_ID"=>10, "ACTIVE"=>"Y"),
		Array(),Array()
	)[0]['props'];
	//debug($inserts);

	$jobs = Return_All_Fields_Props(
			Array("IBLOCK_ID"=>4, "ACTIVE"=>"Y","PROPERTY_MAIN_JOB_VALUE"=>"YES"),
			Array(),Array()
		);
	//debug($jobs);
?>

<section class="works">
	<div class="top_box"></div>
	<div class="bottom_box"></div>
	<img src="<?= CFile::GetPath($inserts['MAIN_JOB_IMG']['VALUE']); ?>" class="fon">
<div class="wrap">
	<!-- <img class="back_img" src="<?= CFile::GetPath($inserts['MAIN_JOB_IMG']['VALUE']); ?>"> -->
	<h2 class="title">Кейсы</h2>
	<div class="works_slider">
	<?php foreach ($jobs as $item): ?>
		<a href="<?= $item['fields']['DETAIL_PAGE_URL']; ?>" class="works_item hover_box">
			<h2 class="work_totle">
				<?= $item['fields']['NAME']; ?>
			</h2>
			<div class="work_text">
				<?= Сut_Text(strip_tags($item['fields']['DETAIL_TEXT']), 136); ?>
			</div>
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
</div>
</section> 

<script type="text/javascript">
	$('.works_slider').slick({
		dots: false,
		// infinite: false,
		autoplay: true,
		autoplaySpeed: 10000,
		slidesToScroll: 1,
		variableWidth: true,
		responsive: [
		{
			breakpoint: 750,
			settings: {
				variableWidth: false,
				slidesToShow: 1
			}
		}
		],
		prevArrow: '<div class="prev-photo"><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 6.5H1.5M1.5 6.5L7 12M1.5 6.5L7 1" stroke="white" stroke-width="2"/></svg></div>',
		nextArrow: '<div class="next-photo"><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 6.5H16.5M16.5 6.5L11 12M16.5 6.5L11 1" stroke="white" stroke-width="2"/></svg></div>'
	});
</script>