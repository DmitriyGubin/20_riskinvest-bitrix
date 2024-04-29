<?php 
	$items = Return_All_Fields_Props(
		Array("IBLOCK_ID"=>7, "ACTIVE"=>"Y"),
		Array(),Array()
	);
	//debug($items);

	$ids = [];
	foreach ($items as $item) 
	{
		$id = $item['props']['NEWS_REF']['VALUE'];
		if($id != '')
		{
			$ids[] = $id;
		}
	}

	$news = Return_All(
		Array("IBLOCK_ID"=>3, "ACTIVE"=>"Y", "ID" => $ids),
		Array("ID", "IBLOCK_ID", "NAME", "DETAIL_PAGE_URL"),
		Array()
	);

	//debug($news);
?>

<section class="conf wrap">
	<h2 class="title">Рейтинги и достижения</h2>
	<div class="conf_slider">
	<?php foreach ($items as $item): ?>
	<?php
		$ref = '';
		$id_news = $item['props']['NEWS_REF']['VALUE'];
		if($id_news != '')
		{
			foreach ($news as $news_item) 
			{
				if($news_item['ID'] == $id_news)
				{
					$ref = $news_item['DETAIL_PAGE_URL'];
					break;
				}
			}
		} 
	?>
		
			<?php if($ref == ''): ?>
				<a class="conf_item conf_slide">
			<?php else: ?>
				<a href="<?= $ref; ?>" class="conf_item conf_slide" target="_blank">
			<?php endif; ?>

				<img class="conf_img" src="<?= CFile::GetPath($item['fields']['PREVIEW_PICTURE']); ?>">
				<div class="conf_text">
					<?= $item['fields']['NAME']; ?>
				</div>
			</a>
	<?php endforeach; ?>
	</div>
</section>

<script type="text/javascript">
	$('.conf .conf_slider').slick({
		dots: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 10000,
		slidesToScroll: 1,
		variableWidth: true,
		responsive: [
		{
			breakpoint: 750,
			settings: {
				slidesToShow: 1,
				variableWidth: false
			}
		}
		],
		prevArrow: '<div class="prev-photo"><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 6.5H1.5M1.5 6.5L7 12M1.5 6.5L7 1" stroke="white" stroke-width="2"/></svg></div>',
		nextArrow: '<div class="next-photo"><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 6.5H16.5M16.5 6.5L11 12M16.5 6.5L11 1" stroke="white" stroke-width="2"/></svg></div>'
	});
</script>