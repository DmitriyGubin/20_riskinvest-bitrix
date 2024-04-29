<?php 
	$inserts = Return_All_Fields_Props(
		Array("IBLOCK_ID"=>10, "ACTIVE"=>"Y"),
		Array(),Array()
	)[0]['props'];

	//debug($inserts);
?>

<section class="numbers wrap">
	<?php foreach ($inserts['NUMBERS']['~VALUE'] as $item): ?>
	<?php $arr = explode('%%%', $item['TEXT']); ?>
	<div class="numb_item">
		<div class="big_text">
			<?= $arr[0]; ?>
		</div>

		<div class="descr">
			<?= $arr[1]; ?>
		</div>
	</div>
	<?php endforeach; ?>
</section> 