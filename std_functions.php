<?
// пишем файл
function write_file($path,$content)
{   
  $file=fopen($path,"w");	
  fwrite($file,$content);      
  
  // close out file   
  fclose($file);
}

// читаем файл
function read_file($path)
{  
  $handle = fopen($path, "r+");  
  $content ="";
  while (!feof($handle))   
  {
     $buffer = fgets($handle, 4096);
     $content=$content.$buffer;
  }
  fclose($handle); 

  return $content;
}
?>

