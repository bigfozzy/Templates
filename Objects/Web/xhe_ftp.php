<?php
////////////////////////////////////////////// Ftp //////////////////////////////////////////////////////
class XHEFTP extends XHEFTPCompatible
{
	/////////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ //////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "FTP";
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////
  	
	/////////////////////////////////////////////////////////////////////////////////////////////////

	// соединится с фтп сервером
        function connect($server,$user="",$password="",$iport="",$flag_passive=false,$timeout=-1)
	{
                if ($iport=="");
			$iport=21;
	   	$params = array( "iport" => $iport , "flag_passive" => $flag_passive , "server" => $server , "user" => $user , "password" => $password  , "timeout" => $timeout);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// отсоединится от фтп сервера
	function disconnect($server)
	{
	   	$params = array( "server" => $server );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}        
	// отсоединится от всех подключеннных фтп серверов
	function disconnect_all()
	{
	   	$params = array( );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////

	// создать папку на сервере
	function create_directory($server,$dir_name)
	{
	   	$params = array( "server" => $server , "dir_name" => $dir_name );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// удалить папку с сервера
	function remove_directory($server,$dir_name)
	{
	   	$params = array( "server" => $server , "dir_name" => $dir_name );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////

	// получить файл с сервера
        function get_file($server,$remote_file,$local_file,$flag_fail_exist="true",$file_attributes="128",$transfer_attributes="2",$context="1")
	{
	   	$params = array( "server" => $server , "remote_file" => $remote_file , "local_file" => $local_file , "flag_fail_exist" => $flag_fail_exist , "file_attributes" => $file_attributes , "transfer_attributes" => $transfer_attributes , "context" => $context  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// залить файл на сервер
        function put_file($server,$local_file,$remote_file,$flag_fail_exist="true",$transfer_attributes="2",$context="1")
	{
	   	$params = array( "server" => $server , "local_file" => $local_file , "remote_file" => $remote_file , "flag_fail_exist" => $flag_fail_exist , "transfer_attributes" => $transfer_attributes , "context" => $context  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// удалить файл с севрера
	function remove_file($server,$file_name)
	{
	   	$params = array( "server" => $server , "file_name" => $file_name );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

        /////////////////////////////////////////////////////////////////////////////////////////////////

	// переименовать файл/папку на сервере
	function rename($server,$exist_file_name,$new_file_name)
	{
	   	$params = array( "server" => $server , "exist_file" => $exist_file_name , "new_file_name" => $new_file_name );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}  
	// послать фтп комманду на севрер
	function command($server,$command,$response="2",$transfer_attributes="1",$context="1")
	{
	   	$params = array( "server" => $server , "command" => $command , "response" => $response ,"transfer_attributes" => $transfer_attributes , "context" => $context  );
	    	return $this->call_get(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////
};	
?>