<?php

// ������� ����� ��� �������� ���� ������
function create_folder_for_html($OutFolder)
{
     global $folder;

     $backup_folder=$OutFolder.date("y_m_d")."\\";
     $folder->create_folder($OutFolder);
     $folder->create_folder($OutFolder.date("y_m_d")."\\");	     
     return $backup_folder;
}

// ����������� ����� �����
function rar_folder($folder_path,$folder_name)
{  
  // ����������
  global $app;

  // �������� ���������
  if ($folder_path=="" || $folder_name=="")
  {
    echo "empty params for raring folder";
    $app->quit();
  }
 
  // ������ ��� �����
  $folder_name=str_replace("\\","",$folder_name);

  // ���������� bat �����
  $sStart="cd $folder_path\n";
  $sStart=$sStart."rar.exe u -m5 -mdE -s -r -ed -df -ep1 ".$folder_name.".rar ".$folder_name."\n";
  $sStart=$sStart."del ".$folder_path."rar_me.bat";   

  // ��������
  $app->run_as_bat($sStart,$folder_path."rar_me.bat",true);
}

?>