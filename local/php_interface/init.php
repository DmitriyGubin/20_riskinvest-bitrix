<?php 

function debug($data)
{
	echo '<pre>'.print_r($data, 1).'</pre>';
}

function Return_All_Fields_Props($Filter,$Select,$Sort)
{
	if(CModule::IncludeModule("iblock"))
	{ 
		$res = CIBlockElement::GetList(
	            $Sort, //сортировка данных
	            $Filter, //фильтр данных
	            false, //группировка данных
	            false, // постраничная навигация
	            $Select
	        );

		$result = [];
		$j=0;
		while($ob = $res->GetNextElement())
		{
			$result[$j]['fields'] = $ob->GetFields();
			$result[$j]['props'] = $ob->GetProperties();
			$j++;
		}
		return $result;
	}
	else
	{
		return 'Error';
	}
}

// $inserts = Return_All(
// 	Array("IBLOCK_ID"=>12, "ACTIVE"=>"Y"),
// 	Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE","PREVIEW_TEXT")
// );

//CFile::GetPath()

function Return_All($Filter,$Select,$Sort)
{
	if(CModule::IncludeModule("iblock"))
	{ 
		$res = CIBlockElement::GetList(
	            $Sort, //сортировка данных
	            $Filter, //фильтр данных
	            false, //группировка данных
	            false, // постраничная навигация
	            $Select
	        );

		$result = [];
		while($ob = $res->GetNextElement())
		{
			$result[] = $ob->GetFields();
		}
		return $result;
	}
	else
	{
		return 'Error';
	}
}

function Сut_Text($text, $number_letters)
{
	if(mb_strlen($text,"UTF-8") > $number_letters)
	{
		return mb_substr($text, 0, $number_letters, "UTF-8").'...';
	}
	else
	{
		return $text;
	}
}

function Next_News_Check($iblock_id,$news_date)
{
	if(CModule::IncludeModule("iblock"))
	{
		$arFilter = Array(
			"IBLOCK_ID"=>$iblock_id,
			"<DATE_ACTIVE_FROM"=>$news_date,
		);
		$res = CIBlockElement::GetList(
	            Array("DATE_ACTIVE_FROM"=>"DESC"), //сортировка данных
	            $arFilter, //фильтр данных
	            false, //группировка данных
	            false, // постраничная навигация
	            Array('ID','DETAIL_PAGE_URL')
	        );

		if ($ar_fields = $res->GetNext())
		{
			return $ar_fields['DETAIL_PAGE_URL'];
		}
		else
		{
			return 'no';
		}
	}
	else
	{
		return 'Error';
	}
}

function Date_Converter($date)
{
	$date_mas = explode(".", $date);
	return $date_mas[1].'/'.$date_mas[2];
}


?>