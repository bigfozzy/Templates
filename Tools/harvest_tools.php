<?php

// ������� ���
function log_event($event,$path="")
{
  // ����������
  global $log_path,$app,$script_name;
  
  // �����
  $out="[".date("H:i:s")."] ".$event;
  
  // � �������
  echo $out."<br>";

  // � ��������� ���
  if ($path!="")
    file_add($path,$out."\n");

  // � ���������� ���
  if ($log_path!="")
    file_add($log_path,$out."\n");

  $app->set_title($app->get_port().": $script_name: $out");
}

// ����� ����� ����� �������� �������������� �����
function sleep_before_new_try($num_try)
{
  // ����������
  global $app;

  // 20 ��� �����
  sleep(20);

  // �� 5 ������� ���� 1 ������
  if ($num_try%5==0)
    sleep(60);   

  // �� 20 ������� ���� 10 �����
  if ($num_try%20==0)
    sleep(600);   

  // �� 100 ������� ���� 60 �����
  if ($num_try%100==0)
    sleep(3600);   

  // �� 200 ������� - ���������� 
  if ($num_try==200)
    $app->quit();   
}

// �������� ������ � ������ ��������������
function check_memory($show_mess)
{ 
  // ����������
  global $debug;

  // ������� ������ ������
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