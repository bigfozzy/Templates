<?php
//////////////////////////////////////////////////// Script /////////////////////////////////////////////////
class XHEScriptElement  extends XHEScriptElementCompatible
{
	////////////////////////////////////// —≈–¬»—Ќџ≈ ‘”Ќ ÷»» ///////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "ScriptElement";
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// задать defer у скрипта с заданным номером
	function set_defer_by_number($number,$defer,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "defer" => $defer , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// задать defer у скрипта с заданным src
	function set_defer_by_src($src,$defer,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("src",$src,true,$frame);		

		$params = array( "src" => $src , "defer" => $defer , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	// задать htmlFor у скрипта с заданным номером
	function set_htmlFor_by_number($number,$htmlFor,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "htmlFor" => $htmlFor , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// задать htmlFor у скрипта с заданным src
	function set_htmlFor_by_src($src,$htmlFor,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("src",$src,true,$frame);		

		$params = array( "src" => $src , "htmlFor" => $htmlFor , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	// задать event у скрипта с заданным номером
	function set_event_by_number($number,$event,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "event" => $event , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// задать event у скрипта с заданным src
	function set_event_by_src($src,$event,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("src",$src,true,$frame);		

		$params = array( "src" => $src , "event" => $event , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

   	// задать src у скрипта с заданным номером
	function set_src_by_number($number,$src,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "src" => $src , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	// задать текст у скрипта с заданным номером
	function set_text_by_number($number,$text,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "text" => $text , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// задать event у скрипта с заданным src
	function set_text_by_src($src,$text,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("src",$src,true,$frame);		

		$params = array( "src" => $src , "text" => $text , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	// задать тип у скрипта с заданным номером
	function set_type_by_number($number,$type,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "type" => $type , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// задать тип у скрипта с заданным src
	function set_type_by_src($src,$type,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("src",$src,true,$frame);		

		$params = array( "src" => $src , "type" => $type , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить defer у скрипта с заданным номером
	function get_defer_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// получить defer у скрипта с заданным src
	function get_defer_by_src($src,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("src",$src,true,$frame);		

		$params = array( "src" => $src , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

   	// получить htmlFor у скрипта с заданным номером
	function get_htmlFor_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить htmlFor у скрипта с заданным src
	function get_htmlFor_by_src($src,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("src",$src,true,$frame);		

		$params = array( "src" => $src , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}

   	// получить event у скрипта с заданным номером
	function get_event_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить event у скрипта с заданным src
	function get_event_by_src($src,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("src",$src,true,$frame);		

		$params = array( "src" => $src , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}

   	// получить readyState у скрипта с заданным номером
	function get_readyState_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить readyState у скрипта с заданным src
	function get_readyState_by_src($src,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("src",$src,true,$frame);		

		$params = array( "src" => $src , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}

   	// получить текст скрипта с заданным номером
	function get_text_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить текст скрипта с заданным src
	function get_text_by_src($src,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("src",$src,true,$frame);		

		$params = array( "src" => $src , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}

   	// получить тип скрипта с заданным номером
	function get_type_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить тип скрипта с заданным номером
	function get_type_by_src($src,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("src",$src,true,$frame);		

		$params = array( "src" => $src , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// проверить что все скрипты наход€тс€ в незапущенном стосто€нии (без учета проверки : существует ли элемент)
	function is_all_completed()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////
};	
?>