<?php

define ("VK_UP", "38");
define ("VK_DOWN", "40");
define ("VK_LEFT", "37");
define ("VK_RIGHT", "39");

define ("VK_HOME", "36");
define ("VK_END", "35");
define ("VK_PAGEUP", "33");
define ("VK_PAGEDOWN", "34");

define ("VK_TAB", "9");
define ("VK_ENTER", "13");
define ("VK_SPACE", "32");
define ("VK_ESC", "27");

///////////////////////////////////////////////////// Keyboard //////////////////////////////////////////////
class XHEKeyboard extends XHEKeyboardCompatible
{

	//////////////////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ /////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Keyboard";
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// эммулирует ввод всех символов из переданной функции строки
   	function input($string,$timeout="20:40",$inFlash=false,$auto_change=true)
   	{
		global $PHP_Use_Trought_Shell;

		$params = array( "string" => $string , "timeout" => $timeout , "inFlash" => $inFlash, "auto_change" => $auto_change, "auto_change" => $auto_change);
		$res=$this->call_boolean(__FUNCTION__,$params);

		if ($PHP_Use_Trought_Shell)
			fgets(STDIN);

		sleep(1);
		return $res;
   	}
	// эммулирует ввод одной кнопки по ее скан коду
   	function key($code)
   	{
		$params = array( "code" => $code  );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// эмулирует нажатие клавиши
   	function key_down($key)
   	{
		$params = array( "key" => $key  );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
	// эмулирует отжатие клавиши
   	function key_up($key)
   	{
		$params = array( "key" => $key  );
		return $this->call_boolean(__FUNCTION__,$params);
   	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// посылает ввод строки в браузер, даже если он скрыт
   	function send_input($string,$timeout="0:2",$inFlash=false,$auto_change=true)
   	{
		global $PHP_Use_Trought_Shell;

		$params = array( "string" => $string , "timeout" => $timeout , "inFlash" => $inFlash , "auto_change" => $auto_change );
		$res=$this->call_boolean(__FUNCTION__,$params);
		
		if ($PHP_Use_Trought_Shell)
			fgets(STDIN);

		sleep(1);
		return $res;
   	}
	// посылает ввод клавиши в браузер, даже если он скрыт
   	function send_key($key,$is_key=false,$ctrl=false,$alt=false,$shift=false)
   	{
		$params = array( "key" => $key , "is_key" => $is_key, "ctrl" => $ctrl, "alt" => $alt, "shift" => $shift);
		return $this->call_boolean(__FUNCTION__,$params);
   	}
	// посылает нажатие клавиши в браузер, даже если он скрыт
   	function send_key_down($key,$is_key=false)
   	{
		$params = array( "key" => $key , "is_key" => $is_key);
		return $this->call_boolean(__FUNCTION__,$params);
   	}
	// посылает отжатие клавиши в браузер, даже если он скрыт 
   	function send_key_up($key,$is_key=false)
   	{
		$params = array( "key" => $key , "is_key" => $is_key);
		return $this->call_boolean(__FUNCTION__,$params);
   	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// эммулирует нажатие или отжатие CTRL
   	function set_ctrl_prefix($on)
   	{
		$params = array( "on" => $on );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
	// эммулирует нажатие или отжатие ALT
	function set_alt_prefix($on)
   	{
		$params = array( "on" => $on );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
	// эммулирует нажатие или отжатие SHIFT 
   	function set_shift_prefix($on)
   	{
		$params = array( "on" => $on );
		return $this->call_boolean(__FUNCTION__,$params);
   	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////
   	
	// эммулирует нажатие кнопки CAPS LOCK
	function press_caps_lock() 
   	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
   	}  
   	// эммулирует нажатие кнопки NUM LOCK
	function press_num_lock()
   	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
   	// эммулирует нажатие кнопки SCROLL LOCK
	function press_scroll_lock()
   	{ 
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
   	}

	// проверяет нажатие кнопки CAPS LOCK
	function is_caps_lock_pressed() 
   	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
   	}  
   	// проверяет нажатие кнопки NUM LOCK
	function is_num_lock_pressed()
   	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
   	// проверяет нажатие кнопки SCROLL LOCK
	function is_scroll_lock_pressed()
   	{ 
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
   	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить текущий язык ввода
   	function get_current_language()
   	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
   	}
	// задать текущий язык ввода
   	function set_current_language($language)
   	{
		$params = array( "language" => $language );
		return $this->call_boolean(__FUNCTION__,$params);
   	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////
};
?>