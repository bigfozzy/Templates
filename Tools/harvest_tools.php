<?php

// вывести лог
function log_event($event,$path="")
{
  // глобальные
  global $log_path,$app,$script_name;
  
  // вывод
  $out="[".date("H:i:s")."] ".$event;
  
  // в консоль
  echo $out."<br>";

  // в локальный лог
  if ($path!="")
    file_add($path,$out."\n");

  // в глобальный лог
  if ($log_path!="")
    file_add($log_path,$out."\n");

  $app->set_title($app->get_port().": $script_name: $out");
}

// пауза перед новой попыткой восстановления сбора
function sleep_before_new_try($num_try)
{
  // глобальные
  global $app;

  // 20 сек пауза
  sleep(20);

  // на 5 попытке спим 1 минуту
  if ($num_try%5==0)
    sleep(60);   

  // на 20 попытке спим 10 минут
  if ($num_try%20==0)
    sleep(600);   

  // на 100 попытке спим 60 минут
  if ($num_try%100==0)
    sleep(3600);   

  // на 200 попытке - остановить 
  if ($num_try==200)
    $app->quit();   
}

// проверка памяти и выдача предупреждения
function check_memory($show_mess)
{ 
  // глобальные
  global $debug;

  // получим размер памяти
  $mem_size=$debug->get_cur_mem_size();
  log_event("Size of used memory : ".$mem_size);
  if ($mem_size>1000000000)
  { 
    if ($show_mess)
      $debug->message_box("used memory = ".$mem_size);
    return false;
  }

  return true;
}

?>