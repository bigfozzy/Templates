<?php

class XHEBaseObject
{
	///////////////////////////////////////////////////////// SERVICVE VARIABLES /////////////////////////////////////////////////////////////

	// server address and port
	var $server;
	// server password
	var $password;
	// command prefix
	var $prefix;

	// default timeout for execute command (seconds)
	static $COMMAND_TIME=100;
	// default count of try execute command
	static $COMMAND_TRY_COUNT=3;
	public static $server_tab=-1;

	///////////////////////////////////////////////////////// пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅ /////////////////////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
	}
	// call a command on the server
	function call($command,$timeout=-1)
	{
		// пїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅ
		if ($timeout==-1)
			$timeout=XHEBaseObject::$COMMAND_TIME;

		// call server and return its answer
		$url = "http://".$this->server."/".$command;

		if($this->password!="")
		{
			if(strstr($url,"&")!=false || strstr($url,"?")!=false)
				$url .= "&password=".base64_encode($this->password);
			else
				$url .= "?password=".base64_encode($this->password);
		}
		if(XHEBaseObject::$server_tab!=-1)
		{
			if(strstr($url,"&")!=false || strstr($url,"?")!=false)
				$url = $url."&server_tab=".base64_encode(XHEBaseObject::$server_tab);
			else
				$url = $url."?server_tab=".base64_encode(XHEBaseObject::$server_tab);
		}
		$postvars="";
		if(strstr($url,"?"))
      		{
         		$indexPost=strpos($url,"?",0);
			$postvars=substr($url,$indexPost+1,strlen($url)-$indexPost);
			$url=substr($url,0,$indexPost);
	   	}      		

      		for ($i=0;$i<XHEBaseObject::$COMMAND_TRY_COUNT;$i++)
		{
					$headers = array("Content-Type:application/x-www-form-urlencoded");
	      		$cUrl = curl_init();
      			curl_setopt($cUrl, CURLOPT_URL, $url);
      			curl_setopt($cUrl, CURLOPT_POST, 1);      
	      		curl_setopt($cUrl, CURLOPT_POSTFIELDS, $postvars);
					curl_setopt($cUrl, CURLOPT_HTTPHEADER, $headers);
					curl_setopt($cUrl, CURLINFO_HEADER_OUT, TRUE);
      			curl_setopt($cUrl, CURLOPT_RETURNTRANSFER, 1);
      			curl_setopt($cUrl, CURLOPT_TIMEOUT, $timeout);
					$html=curl_exec($cUrl);
						curl_close($cUrl);
			if ($html===false)
				continue;
			else
				break;
		}
			
		// close php if not connect to XHE
		global $bClosePHPIfNotConnected;
		global $bWarningPHPIfNotConnected;
		if ($bClosePHPIfNotConnected===true && $html===false)
		{
  			echo("\nКомманда $url?$postvars не выполнена.Нет соединения с хуман эмулятором, проверьте совпадение портов и их доступность а также что програма запущена и не зависла.\n");			
			die("XWeb@exit");
		}
                if ($bWarningPHPIfNotConnected===true && $html===false)
  			echo("Connect from PHP to XHE not found. Check XHE and PHP port and connection to xhe.\nCommand $url?$postvars not runned.\n");
    		
	        $html = trim($html);
		usleep(10000); 
		return $html;
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// call a command on the server
	function call_boolean($command,$params,$timeout=-1)
	{
		// call
		if ($this->call($this->get_command_string($command,$params),$timeout)=="true")
			return true;
		else
			return false;
	}
	// call a command on the server
	function call_get($command,$params,$timeout=-1)
	{
		// call
		$res = $this->call($this->get_command_string($command,$params),$timeout);
		if ($res=="false")
			return false;
		else
		{
			if ($res=="-1")
				return -1;
			else
				return $res;
		}
	}
	// get command string
	function get_command_string($command,$params)
	{
		if ($this->prefix!="")
			$send_command=$this->prefix.".".$command;
		else
			$send_command=$command;
		$func_params=array_keys($params);		
		$func_param_values=array_values($params);
		$params="";		
		for ($i=0;$i<count($func_params);$i++)
		{
			if ($i==0)
				$params=$params."?";
			else
				$params=$params."&";			
			$params=$params.$func_params[$i]."=".base64_encode($func_param_values[$i]);
		}
		$send_command=$send_command.$params;
		return $send_command;

	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
?>