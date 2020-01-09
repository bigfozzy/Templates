<?php
//////////////////////////////////////////////////// Scheduler /////////////////////////////////////////////////
class XHEScheduler extends XHEBaseObject
{
	////////////////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ //////////////////////////////////////////
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Scheduler";
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////

	////////////////////////////////////////////////////////////////////////////////////////////////////

   	// добавить задачу
	function add($path,$type=0,$date="",$time="",$count=-1,$active=true,$comments="",$add_params="")
	{		
		$datetime = "$date $time";
		$arr = date_parse($datetime);
		if ($arr==false)
			return false;
			
		$params = array( "path" => $path , "type" => $type , "year" => $arr["year"] , "month" => $arr["month"] ,"day" => $arr["day"] , "hour" => $arr["hour"], "minute" => $arr["minute"], "second" => $arr["second"] , "count" => $count , "active" => $active, "comments" => $comments, "add_params" => $add_params);
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// удалить задачу
	function delete($num_task)
	{
		$params = array( "num_task" => $num_task );
		return $this->call_boolean(__FUNCTION__,$params);
	}

   	// редактировать задачу
	function edit($num_task,$path,$type=0,$date="",$time="",$count=-1,$active=true,$comments="",$add_params="")
	{
		$datetime = "$date $time";
		$arr = date_parse($datetime);
		if ($arr==false)
			return false;

		$params = array( "num_task" => $num_task , "path" => $path , "type" => $type , "year" => $arr["year"] , "month" => $arr["month"] ,"day" => $arr["day"] , "hour" => $arr["hour"], "minute" => $arr["minute"], "second" => $arr["second"] , "count" => $count , "active" => $active, "comments" => $comments, "add_params" => $add_params);
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// активировать задачу
	function activate($num_task,$activate=true)
	{
		$params = array( "num_task" => $num_task , "activate" => $activate );
		return $this->call_boolean(__FUNCTION__,$params);
	}

   	// получить задачу
	function get($num_task,&$path_,&$type,&$date,&$time,&$count,&$active,&$comments,&$add_params)
	{
		$params = array( "num_task" => $num_task );
		$res=$this->call_get(__FUNCTION__,$params);
		if ($res=="false" || $res=="")
			return false;
		else
		{
			$task=explode(" \v ",$res);
			if (count($task)>0)
			{
				$path_=trim($task[0]);
				$type=trim($task[1]);
				$date=trim($task[2]);
				$time=trim($task[3]);
				$count=trim($task[4]);
				$active=trim($task[5]);
				$comments=trim($task[6]);
				$add_params=trim($task[7]);
				return true;

			}
			return false;
		}
	}

	////////////////////////////////////////////////////////////////////////////////////////////////////

   	// получить число задач
	function get_count()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}

   	// удалить все задачи
	function delete_all()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}

   	// активировать все задчи
	function activate_all($activate=true)
	{
		$params = array( "activate" => $activate );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////////////

   	// принудительно завершать текущий скрипт
	function kill_current_script($kill=true)
	{
		$params = array( "kill" => $kill  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
};	
?>