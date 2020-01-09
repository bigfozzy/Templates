<?php
/////////////////////////////////////////// Raw ////////////////////////////////////////////////////
class XHERaw extends XHEBaseObject
{
	//////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ ////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Raw";
	}
	////////////////////////////////////////////////////////////////////////////////////////////

	////////////////////////////////////////////////////////////////////////////////////////////

     	// включить логирование всех RAW потоков (http и https)
	function enable_all_streams($enable=true)
	{
	   	$params = array( "enable" => $enable );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// включить логирование RAW потока http
	function enable_http_stream($enable=true)
	{
	   	$params = array( "enable" => $enable );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// включить логирование RAW потока https
	function enable_https_stream($enable=true)
	{
	   	$params = array( "enable" => $enable );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

     	// сохранять информацию приходящую с сервера в окно RAW лога
	function save_server_log_to_window()
	{
	   	$params = array( );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// сохранять информацию отдаваемую браузером в окно RAW лога
	function save_browser_log_to_window()
	{
	   	$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// сохранять информацию приходящую с сервера в заданный файл
	function save_server_log_to_file($path)
	{
	   	$params = array( "path" => $path );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// сохранять информацию отдаваемую браузером в заданный файл
	function save_browser_log_to_file($path)
	{
	   	$params = array( "path" => $path );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

     	// получить последний запрошенный урл по номеру в массиве последних запросов
	function get_last_request_url($num=-1)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_get(__FUNCTION__,$params);
	}
     	// получить последний запрошенный заголовок по номеру в массиве последних запросов
	function get_last_request_header($num=-1)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_get(__FUNCTION__,$params);
	}

     	// получить последний отвеченный урл по номеру в массиве последних ответов
	function get_last_response_url($num=-1)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_get(__FUNCTION__,$params);
	}
     	// получить последний отвеченный буффер по номеру в массиве последних ответов
	function get_last_response_buffer($num=1)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_get(__FUNCTION__,$params);
	}
     	// получить последний отвеченный заголовок по номеру в массиве последних ответов
	function get_last_response_header($num=1)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_get(__FUNCTION__,$params);
	}

     	// получить последний урл редиректа по номеру в массиве последних ответов
	function get_last_redirect_url($num=-1)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_get(__FUNCTION__,$params);
	}
     	// получить последний заголовок редиректа по номеру в массиве последних ответов
	function get_last_redirect_header($num=-1)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	
     	// получить последний прочитанный буффер
	function get_last_readed($num=-1)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_get(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

     	// задать число хранимых запросов в массивах
	function set_arrays_count($num)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// очистить массив последних запросов
	function clear_last_requests_array()
	{
	   	$params = array( );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// очистить массив последних ответов
	function clear_last_responses_array()
	{
	   	$params = array( );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

     	// задать хук на начало запроса информации браузером у севрера
	function set_hook_on_begin_transaction($php_script_path)
	{
	   	$params = array( "php_script_path" => $php_script_path );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// задать хук на начало приема информации браузером от сервера
	function set_hook_on_response($php_script_path)
	{
	   	$params = array( "php_script_path" => $php_script_path );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// задать хук на загрузку контента в барузер
	function set_hook_on_readed($php_script_path)
	{
	   	$params = array( "php_script_path" => $php_script_path );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////

     	// добавить урл с которого запрещено запрашивать информаию
	function add_disabled_request_url($url,$exactly=false)
	{
	   	$params = array( "url" => $url , "exactly" => $exactly );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// очистить запрещенные для запроса урлы
	function clear_disabled_request_urls_array()
	{
	   	$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// добавить урл с на который запрещено отдавать информацию
	function add_disabled_response_url($url,$exactly=false)
	{
	   	$params = array( "url" => $url , "exactly" => $exactly );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// очистить запрещенные для отдачи урлы
	function clear_disabled_response_urls_array()
	{
	   	$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

     	// задать правило замены
	function add_replace_rule($url, $exactly_url, $find, $replace)
	{
	   	$params = array( "url" => $url , "exactly_url" => $exactly_url , "find" => $find , "replace" => $replace );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// очистить правила замены
	function clear_replace_rules($url, $exactly_url=false)
	{
	   	$params = array( "url" => $url , "exactly_url" => $exactly_url );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////

     	// задать дополнительный заголовок, котрый будет отправляться браузером при запросах
	function set_additional_request_header($header="")
	{
	   	$params = array( "header" => $header );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

};
?>