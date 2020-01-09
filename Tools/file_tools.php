<?php

// записать файл с нуля
function file_write($path,$lines) 
{ 
	$file=fopen($path,"w+"); 
	fputs($file,$lines); 
	fclose($file); 
}

// добавить строки к файлу
function file_add($path,$lines) 
{ 
	$file=fopen($path,"a+"); 
	fputs($file,$lines); 
	fclose($file); 
}

?>