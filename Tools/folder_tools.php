<?php

// создать папку для хранения хтмл файлов
function create_folder_for_html($OutFolder)
{
     global $folder;

     $backup_folder=$OutFolder.date("y_m_d")."\\";
     $folder->create_folder($OutFolder);
     $folder->create_folder($OutFolder.date("y_m_d")."\\");	     
     return $backup_folder;
}

// зархивируем папку раром
function rar_folder($folder_path,$folder_name)
{  
  // глобальное
  global $app;

  // проверка парметров
  if ($folder_path=="" || $folder_name=="")
  {
    echo "empty params for raring folder";
    $app->quit();
  }
 
  // чистое имя папки
  $folder_name=str_replace("\\","",$folder_name);

  // содержимое bat файла
  $sStart="cd $folder_path\n";
  $sStart=$sStart."rar.exe u -m5 -mdE -s -r -ed -df -ep1 ".$folder_name.".rar ".$folder_name."\n";
  $sStart=$sStart."del ".$folder_path."rar_me.bat";   

  // выполним
  $app->run_as_bat($sStart,$folder_path."rar_me.bat",true);
}

?>