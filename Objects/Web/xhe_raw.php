<?php
/////////////////////////////////////////// Raw ////////////////////////////////////////////////////
class XHERaw extends XHEBaseObject
{
	//////////////////////////// ��������� ������� ////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Raw";
	}
	////////////////////////////////////////////////////////////////////////////////////////////

	////////////////////////////////////////////////////////////////////////////////////////////

     	// �������� ����������� ���� RAW ������� (http � https)
	function enable_all_streams($enable=true)
	{
	   	$params = array( "enable" => $enable );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// �������� ����������� RAW ������ http
	function enable_http_stream($enable=true)
	{
	   	$params = array( "enable" => $enable );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// �������� ����������� RAW ������ https
	function enable_https_stream($enable=true)
	{
	   	$params = array( "enable" => $enable );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

     	// ��������� ���������� ���������� � ������� � ���� RAW ����
	function save_server_log_to_window()
	{
	   	$params = array( );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// ��������� ���������� ���������� ��������� � ���� RAW ����
	function save_browser_log_to_window()
	{
	   	$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// ��������� ���������� ���������� � ������� � �������� ����
	function save_server_log_to_file($path)
	{
	   	$params = array( "path" => $path );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// ��������� ���������� ���������� ��������� � �������� ����
	function save_browser_log_to_file($path)
	{
	   	$params = array( "path" => $path );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

     	// �������� ��������� ����������� ��� �� ������ � ������� ��������� ��������
	function get_last_request_url($num=-1)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_get(__FUNCTION__,$params);
	}
     	// �������� ��������� ����������� ��������� �� ������ � ������� ��������� ��������
	function get_last_request_header($num=-1)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_get(__FUNCTION__,$params);
	}

     	// �������� ��������� ���������� ��� �� ������ � ������� ��������� �������
	function get_last_response_url($num=-1)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_get(__FUNCTION__,$params);
	}
     	// �������� ��������� ���������� ������ �� ������ � ������� ��������� �������
	function get_last_response_buffer($num=1)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_get(__FUNCTION__,$params);
	}
     	// �������� ��������� ���������� ��������� �� ������ � ������� ��������� �������
	function get_last_response_header($num=1)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_get(__FUNCTION__,$params);
	}

     	// �������� ��������� ��� ��������� �� ������ � ������� ��������� �������
	function get_last_redirect_url($num=-1)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_get(__FUNCTION__,$params);
	}
     	// �������� ��������� ��������� ��������� �� ������ � ������� ��������� �������
	function get_last_redirect_header($num=-1)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	
     	// �������� ��������� ����������� ������
	function get_last_readed($num=-1)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_get(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

     	// ������ ����� �������� �������� � ��������
	function set_arrays_count($num)
	{
	   	$params = array( "num" => $num );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// �������� ������ ��������� ��������
	function clear_last_requests_array()
	{
	   	$params = array( );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// �������� ������ ��������� �������
	function clear_last_responses_array()
	{
	   	$params = array( );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

     	// ������ ��� �� ������ ������� ���������� ��������� � �������
	function set_hook_on_begin_transaction($php_script_path)
	{
	   	$params = array( "php_script_path" => $php_script_path );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// ������ ��� �� ������ ������ ���������� ��������� �� �������
	function set_hook_on_response($php_script_path)
	{
	   	$params = array( "php_script_path" => $php_script_path );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// ������ ��� �� �������� �������� � �������
	function set_hook_on_readed($php_script_path)
	{
	   	$params = array( "php_script_path" => $php_script_path );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////

     	// �������� ��� � �������� ��������� ����������� ���������
	function add_disabled_request_url($url,$exactly=false)
	{
	   	$params = array( "url" => $url , "exactly" => $exactly );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// �������� ����������� ��� ������� ����
	function clear_disabled_request_urls_array()
	{
	   	$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// �������� ��� � �� ������� ��������� �������� ����������
	function add_disabled_response_url($url,$exactly=false)
	{
	   	$params = array( "url" => $url , "exactly" => $exactly );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// �������� ����������� ��� ������ ����
	function clear_disabled_response_urls_array()
	{
	   	$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

     	// ������ ������� ������
	function add_replace_rule($url, $exactly_url, $find, $replace)
	{
	   	$params = array( "url" => $url , "exactly_url" => $exactly_url , "find" => $find , "replace" => $replace );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// �������� ������� ������
	function clear_replace_rules($url, $exactly_url=false)
	{
	   	$params = array( "url" => $url , "exactly_url" => $exactly_url );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////

     	// ������ �������������� ���������, ������ ����� ������������ ��������� ��� ��������
	function set_additional_request_header($header="")
	{
	   	$params = array( "header" => $header );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

};
?>