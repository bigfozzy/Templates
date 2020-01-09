<?php

// получить текст в префиксах
function get_text_in_prefix($html,$prefix1,$prefix2,$bFailIfNotFound=true)
{
	// объекты хумана. что используем в функции
	global $app;

	// результат
	$res="###@ формат изменен @###";

	// поиск строки между заданных префиксов
	$index1=strpos($html,$prefix1);
	if ($index1!==false)
	{
		$index2=strpos($html,$prefix2,$index1+strlen($prefix1));
		if ($index2!==false)
			$res=substr($html, $index1+strlen($prefix1), $index2-$index1-strlen($prefix1));
	}

	// проверим что что-то получили
	if ($res=="###@ формат изменен @###")
	{
		if (!$bFailIfNotFound)
		{
			$res="ОШИБКА ФОРМАТА ".$prefix1." ".$prefix2;
		}
		else
		{
			echo "ОШИБКА ФОРМАТА ".$prefix1." ".$prefix2." ".$html;
			$app->quit();      
		}
	}
   return $res;
}

// перевести число в строку с заданным числом знаков
function ToStringWithZerros($num,$length)
{
  $strRes="$num";
  while(strlen(strRes)<$length)
    $strRes="0".$strRes;

  return $strRes;
}

// сравниваем строки
function compare_string($exactly,$string_1,$string_2)
{
	if ($exactly==true)
	{
		if ($string_1==$string_2)
			return true;
	}
	else if ($exactly==false)
	{
		if (strpos($string_1,$string_2)===false)
			return false;
		else
			return true;
	}
	return false;
}
?>