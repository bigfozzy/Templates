<?php

// проверить файл на обновление и обновить с сервера если надо
function check_and_update_file($local_path,$remote_path) 
{ 
  $cur_ver=file_get_contents("$local_path.ver");
  $check_ver=file_get_contents("$remote_path.ver");
  if ($cur_ver!=$check_ver && $check_ver!="")
  { 
    $rcontent=file_get_contents("$remote_path.vvv");
    if ($rcontent!="")
    {
      file_put_contents("$local_path.php",$rcontent);
      file_put_contents("$local_path.ver",$check_ver);
      echo("finish update $local_path ( $cur_ver  ->  $check_ver )<br>");  
    }
  }
}

?>