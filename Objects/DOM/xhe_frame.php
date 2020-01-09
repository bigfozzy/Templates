<?php
//////////////////////////////////////////////////// Frame //////////////////////////////////////////////////
class XHEFrame  extends XHEFrameCompatible
{
	///////////////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ ////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Frame";
	}
   	/////////////////////////////////////////////////////////////////////////////////////////////////////

        /////////////////////////////////////////////////////////////////////////////////////////////////////

   	// получить тело фрейма по его номеру
	function get_body_by_number($number,$as_html,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "as_html" => $as_html , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
   	// задать тело фрейма по его номеру
	function set_body_by_number($number,$html_body,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "html_body" => $html_body , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

   	/////////////////////////////////////////////////////////////////////////////////////////////////////
};		
?>