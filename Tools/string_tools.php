<?php

// �������� ����� � ���������
function get_text_in_prefix($html,$prefix1,$prefix2,$bFailIfNotFound=true)
{
	// ������� ������. ��� ���������� � �������
	global $app;

	// ���������
	$res="###@ ������ ������� @###";

	// ����� ������ ����� �������� ���������
	$index1=strpos($html,$prefix1);
	if ($index1!==false)
	{
		$index2=strpos($html,$prefix2,$index1+strlen($prefix1));
		if ($index2!==false)
			$res=substr($html, $index1+strlen($prefix1), $index2-$index1-strlen($prefix1));
	}

	// �������� ��� ���-�� ��������
	if ($res=="###@ ������ ������� @###")
	{
		if (!$bFailIfNotFound)
		{
			$res="������ ������� ".$prefix1." ".$prefix2;
		}
		else
		{
			echo "������ ������� ".$prefix1." ".$prefix2." ".$html;
			$app->quit();      
		}
	}
   return $res;
}

// ��������� ����� � ������ � �������� ������ ������
function ToStringWithZerros($num,$length)
{
  $strRes="$num";
  while(strlen(strRes)<$length)
    $strRes="0".$strRes;

  return $strRes;
}

// ���������� ������
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