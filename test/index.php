<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест");
?>

<div style="display: none;">
	<div id="lat">55.052572</div>
	<div id="long">82.904332</div>
	<div id="address">г. Новосибирск, ул. Галущака 4, офис 16</div>
</div>

<div id="map" style="height: 600px"></div>

<script src="https://api-maps.yandex.ru/2.1/?apikey=e5df13fe-7b6a-4037-9699-cddff13aa624&amp;lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript" src="map.js"></script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>