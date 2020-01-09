<?php
/////////////////////////////////////////// Raw ////////////////////////////////////////////////////
class XHEProxySwitcher extends XHEBaseObject
{
	//////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ ////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "ProxySwitcher";
	}
	////////////////////////////////////////////////////////////////////////////////////////////
  	
	////////////////////////////////////////////////////////////////////////////////////////////

	// инициализировать
   	function init($folder)
	{
		$params = array( "folder" => $folder);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// очистить
   	function clear()
	{
		$params = array( );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// добавить прокси
   	function add_proxies($proxies)
	{
		$params = array( "proxies" => $proxies);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// добавить прокси из файла
   	function add_proxies_from_file($path)
	{
		$params = array( "path" => $path);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// добавить прокси из урла
   	function add_proxies_from_url($url)
	{
		$params = array( "url" => $url);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// задать режим ротации
   	function set_random_rotate_mode($mode)
	{
		$params = array( "mode" => $mode);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

	// обновить
   	function update()
	{
		$params = array( );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// задать путь обновления прокси
	function set_update_path($path)
	{
	   	$params = array( "path" => $path);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// задать урл обновления прокси
	function set_update_url($url)
	{
	   	$params = array( "url" => $url);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// задать период обновления прокси
	function set_update_period($minutes)
	{
	   	$params = array( "minutes" => $minutes);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// задать минимальное число прокси 
	function set_update_proxy_count($count)
	{
	   	$params = array( "count" => $count);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

	// получить следующий прокси
        function get_next_proxy($delete=false)
	{
		$params = array( "delete" => $delete);
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// получить все прокси
        function get_all_proxies()
	{
		$params = array(  );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// получить текущее число прокси
        function get_proxy_count()
	{
		$params = array(  );
	    	return $this->call_get(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////
};
?>