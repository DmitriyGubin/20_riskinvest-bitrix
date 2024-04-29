<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

foreach ($_POST as $key => $value) 
{
	$_POST[$key] = trim($value);
}

$arResult = array('status' => false);

$PROP = array();
$PROP['QUEST'] = $_POST['quest'];
$PROP['CONTACT'] = $_POST['contact'];
$PROP['HTTP_REFERER'] = $_SERVER['HTTP_REFERER'];

if(CEvent::Send("SEND_MAIN_FORM", "s1", $PROP))
{
	$arResult['status'] = true;
}

echo json_encode($arResult);
?>