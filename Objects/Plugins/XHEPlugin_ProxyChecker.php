<?php
/////////////////////////////////////////// proxy checker plugin /////////////////////////////////////////////////////////
class XHEProxyCheckerPlugin extends XHEBaseObject
{
	//////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ /////////////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "XWebProxyCheckerObject";
	}
        /////////////////////////////////////////////////////////////////////////////////////////////////////
   	
	////////////////////////////////////////////////////////////////////////////////////////////

	// запустить тестирование
   	function run($is_wait=false)
	{
	   	$params = array(  );
	    	$res = $this->call_boolean(__FUNCTION__,$params);

		// ждать окончания тестирования
		while($is_wait && $this->is_running())
			sleep(1);

		return $res;
	}
	// остановить тестирование
        function stop()
	{
	   	$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	// проверить запущено ли сейчас тестирование
	function is_running()
	{
	   	$params = array( );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	// задать скорость тестирования
        function set_speed_testing($speed)
	{
		$params = array( "speed" => $speed );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// задать качество тестирования
        function set_quality_testing($quality)
	{
		$params = array( "quality" => $quality );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

	// добавить прокси в список
        function add_proxy($str_proxy)
	{
		$params = array( "str_proxy" => $str_proxy );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// добавить прокси в список из файла
        function add_proxy_from_file($path)
	{
		$params = array( "path" => $path );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// добавить прокси из урла в список
        function add_proxy_from_url($url)
	{
		$params = array( "url" => $url );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	// удалить прокси заданного типа из списка
        function delete_proxy($param_proxy="all")
	{
		$params = array( "param_proxy" => $param_proxy );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	// sсохранить прокси заданного типа в файл
        function save_proxy($path,$param_proxy="all")
	{
		$params = array( "path" => $path , "param_proxy" => $param_proxy );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	        
	// убрать дубликаты из спсика прокси
        function dedupe_proxy()
	{
		$params = array( );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

	// получить количество прокси заданного типа
        function get_count_proxy($param_proxy="all")
	{
		$params = array( "param_proxy" => $param_proxy );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// получить прокси заданного типа
        function get_proxy($n,$param_proxy="all")
	{
		$params = array( "n" => $n , "param_proxy" => $param_proxy );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// получить самый быстрый прокси заданного типа
        function get_fastest_proxy($param_proxy="all")
	{
		$params = array( "param_proxy" => $param_proxy );
	    	return $this->call_get(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
};	
$proxycheckerplugin = new XHEProxyCheckerPlugin($xhe_host,$server_password);	
?>