<?php
/////////////////////////////////////// Connection ////////////////////////////////////////////////////
class XHEConnection extends XHEBaseObject
{
	////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ /////////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Connection";
	}
	///////////////////////////////////////////////////////////////////////////////////////////////
  	
	///////////////////////////////////////////////////////////////////////////////////////////////

	// соединить RAS соединение
        function dial_ras($name,$login,$password) 
	{
	   	$params = array( "name" => $name , "login" => $login , "password" => $password );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// разорвать RAS соединение
        function hang_up_ras()
	{
	   	$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// создать VPN соединение
        function create_vpn($name,$server,$user,$password,$psk,$type)
	{
	   	$params = array( "name" => $name , "server" => $server , "user" => $user , "password" => $password , "psk" => $psk , "type" => $type );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// получить имя RAS соединения по его номеру
        function get_name_by_number_ras($number)
	{
	   	$params = array( "number" => $number );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// получить имена всех RAS соединений (разделитель - "<br>" )
        function get_all_connection_ras()
        {
	   	$params = array( );
	    	return $this->call_get(__FUNCTION__,$params);
        }

	///////////////////////////////////////////////////////////////////////////////////////////////

	// перезапустить LAN соединение по имени
        function restart_lan_by_name($name)
	{
	   	$params = array( "name" => $name );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// перезапустить LAN соединение по номеру
        function restart_lan_by_number($number)
	{
	   	$params = array( "number" => $number );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////

	// установить текущий локальный ай-пи адрес
	function set_local_ip($number,$ip,$subnetMask="",$gateway="",$defaultDNS="",$subDNS="")
	{
	   	$params = array( "number" => $number , "ip" => $ip , "subnetMask" => $subnetMask , "gateway" => $gateway , "defaultDNS" => $defaultDNS, "subDNS" => $subDNS);
	    	$res = $this->call_boolean(__FUNCTION__,$params);
		sleep(5);
		return $res;
	}
	// получить текущий локальный ай-пи адрес
	function get_local_ip($number=0)
	{
	   	$params = array( );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// получить текущий внешний ай-пи адрес
	function get_real_ip()
	{
	   	$params = array( );
	    	return $this->call_get(__FUNCTION__,$params);
	}

	// получить мак адрес
	function get_mac_address_by_number($number)
	{
	   	$params = array( "number" => $number );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// задать мак адрес
	function set_mac_address_by_number($number, $mac)
	{
	   	$params = array( "number" => $number , "mac" => $mac);
	    	$res = $this->call_boolean(__FUNCTION__,$params);
		sleep(3);
		return $res;
	}
        // пропинговать заданный сайт
        function check_ping_site($site)
        {
	   	$params = array( "site" => $site );
	    	return $this->call_boolean(__FUNCTION__,$params);
        }
	// проверка соединения с интернетом
	function is_connect_to_internet()
	{
	   	$params = array( );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// получить параметры соединения с интернетом
	function get_connection_parameters()
	{
	   	$params = array( );
	    	return $this->call_get(__FUNCTION__,$params);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////

	// задать прокси на заданное соединение
	function enable_proxy($connection,$proxy)
	{
	   	$params = array( "connection" => $connection , "proxy" => $proxy );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// убрать прокси с заданного соединения
	function disable_proxy($connection)
	{
	   	$params = array( "connection" => $connection );
	    	return $this->call_boolean(__FUNCTION__,$params);
  	}	
	// получить текущий прокси
	function get_current_proxy($connection)
	{
	   	$params = array( "connection" => $connection );
	    	return $this->call_get(__FUNCTION__,$params);
  	}	

	///////////////////////////////////////////////////////////////////////////////////////////////
};	
?>