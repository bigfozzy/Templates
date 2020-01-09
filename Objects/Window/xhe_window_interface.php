<?php
//////////////////////////////////////////////////// Interface //////////////////////////////////////////////
class XHEWindowInterface extends XHEWindowInterfacesCompatible
{
	/////////////////////////////////////// SERVICE VARIABLES ///////////////////////////////////////////
	// inner number
	var $inner_number;
	/////////////////////////////////////// SERVICE FUNCTIONS ///////////////////////////////////////////
	// server initialization
	function __construct($inner_number,$server,$password="")
	{    
		$this->inner_number = $inner_number;
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "WindowInterface";
	}
  	function __destruct() 
	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);	       
	}	
	// клонировать интерфейс к DOM	
  	function get_clone() 
	{
		$params = array( "inner_number" => $this->inner_number );
		$clone_inner_number = $this->call_get(__FUNCTION__,$params);	       
		return new XHEWindowInterface($clone_inner_number,$this->server,$this->password);
	}	
	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// задать текст
   	function set_text($text)
   	{
		$params = array( "inner_number" => $this->inner_number , "text" => $text );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// задать видимость
   	function show($on=true)
   	{
		$params = array( "inner_number" => $this->inner_number , "on" => $on );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// изменить доступность
   	function enable($on)
   	{
		$params = array( "inner_number" => $this->inner_number , "on" => $on );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// задать фокус
   	function focus()
   	{
		$params = array( "inner_number" => $this->inner_number);
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// в самый верх 
   	function foreground()
   	{
		$params = array( "inner_number" => $this->inner_number);
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// минимизирвоать
   	function minimize()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// максимизировать
   	function maximize()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// восстановить
   	function restore()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// закрыть
   	function close()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// передвинуть
   	function move($x=-1,$y=-1)
   	{
		$params = array( "inner_number" => $this->inner_number , "x" => $x , "y" => $y );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// изменить размер
   	function resize($width=-1,$height=-1)
   	{
		$params = array( "inner_number" => $this->inner_number , "width" => $width , "height" => $height );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// послать сообщение
   	function message($type,$wparam,$lparam)
   	{
		$params = array( "inner_number" => $this->inner_number , "type" => $type , "wparam" => $wparam , "lparam" => $lparam );
		return $this->call_get(__FUNCTION__,$params);
   	}   

	// скриншот
   	function screenshot($filepath,$x=-1,$y=-1,$width=-1,$heigth=-1,$as_gray=false)
   	{
		$params = array( "inner_number" => $this->inner_number , "x" => $x , "y" => $y , "width" => $width , "height" => $heigth , "filepath" => $filepath, "as_gray" => $as_gray);
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// получить число дочерних окон
   	function get_child_count()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// получить дочернее по номеру
   	function get_child_by_number($number)
   	{
		$params = array( "inner_number" => $this->inner_number , "number" => $number);
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   
	// получить дочернее по тексту
   	function get_child_by_text($text,$exactly=false)
   	{
		$params = array( "inner_number" => $this->inner_number , "text" => $text , "exactly" => $exactly );
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   
	// получить дочернее по имени классу
   	function get_child_by_class($class_name,$exactly=false)
   	{
		$params = array( "inner_number" => $this->inner_number , "class_name" => $class_name , "exactly" => $exactly );
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   
	// получить слудующее
   	function get_next()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   
	// получить предыдущее
   	function get_prev()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   
	// получить родительское
   	function get_parent()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   
	// получить владельца
   	function get_owner()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   
	// получить список интерфейсов всех дочерних окон
   	function get_all_child()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$numbers=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterfaces($numbers,$this->server,$this->password);
   	}   
	// получить список интерфейсов всех следующих окон
   	function get_all_next()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$numbers=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterfaces($numbers,$this->server,$this->password);
   	}   
	// получить список интерфейсов всех предыдущих окон
   	function get_all_prev()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$numbers=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterfaces($numbers,$this->server,$this->password);
   	}   
	// получить список интерфейсов всех родительских окон
   	function get_all_parent()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$numbers=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterfaces($numbers,$this->server,$this->password);
   	}   
	// получить наивысшего родителя
   	function get_top_parent()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   
	// получить наивысшего владельца
   	function get_top_owner()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   

	// получить текст
   	function get_text()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// получить номер
   	function get_number($visibled=true,$mained=true)
   	{
		$params = array( "inner_number" => $this->inner_number , "visibled" => $visibled , "mained" => $mained );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// получить стиль (простой или расширенный)
   	function get_style($extended=false)
   	{
		$params = array( "inner_number" => $this->inner_number , "extended" => $extended );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// получить имя класса
   	function get_class_name()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// получить дескриптор HWND
   	function get_hwnd()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// получить ID процесса
   	function get_process_id()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// получить ID потока
   	function get_thread_id()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   

	// получить X
   	function get_x()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// получить Y
   	function get_y()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// получить ширину
   	function get_width()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// получить высоту
   	function get_height()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   

	// существует ли
   	function is_exist()
   	{
		return $this->inner_number!=-1;
   	}   
	// видимо ли
   	function is_visible()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// доступно ли
   	function is_enable()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// есть ли фокус ввода
   	function is_focus()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// есть ли пользовательский фокус ввода
   	function is_foreground()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// дочернее ли
   	function is_child()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// минимизировано ли
   	function is_minimize()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// максимизировано ли
   	function is_maximize()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// послать перемещение мышью
   	function send_mouse_move($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// послать щелчок мышью
   	function send_mouse_click($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// послать двойной щелчок мышью
   	function send_mouse_double_click($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// послать нажатие левой кнопки мыши
   	function send_mouse_left_down($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// послать отжатие левой кнопки мыши
   	function send_mouse_left_up($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// послать щелчок правой кнопки мыши
   	function send_mouse_right_click($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// послать нажатие правой кнопки мыши
   	function send_mouse_right_down($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// послать отжатие правой кнопки мыши
   	function send_mouse_right_up($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// перемещение мышью
   	function mouse_move($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// щелчок мышью
   	function mouse_click($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// двойной щелчок мышью
   	function mouse_double_click($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// нажатие левой кнопки мыши
   	function mouse_left_down($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// отжатие левой кнопки мыши
   	function mouse_left_up($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// щелчок правой кнопки мыши
   	function mouse_right_click($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// нажатие правой кнопки мыши
   	function mouse_right_down($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// отжатие правой кнопки мыши
   	function mouse_right_up($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	/*// посылает ввод строки в браузер, даже если он скрыт
   	function send_input($string,$timeout=INPUT_TIME,$inFlash=false)
   	{
		global $PHP_Use_Trought_Shell;

		$params = array( "inner_number" => $this->inner_number , "string" => $string , "timeout" => $timeout , "inFlash" => $inFlash );
		$res=$this->call_boolean(__FUNCTION__,$params);
		
		if ($PHP_Use_Trought_Shell)
			fgets(STDIN);

		sleep(1);
		return $res;
   	}
	// посылает ввод клавиши в браузер, даже если он скрыт
   	function send_key($key,$is_key=false)
   	{
		$params = array( "inner_number" => $this->inner_number , "key" => $key , "is_key" => $is_key);
		return $this->call_boolean(__FUNCTION__,$params);
   	}
   	*/

	// посылает нажатие клавиши
   	function send_key_down($key,$is_key=false)
   	{
		$params = array( "inner_number" => $this->inner_number , "key" => $key , "is_key" => $is_key);
		return $this->call_boolean(__FUNCTION__,$params);
   	}
	// посылает отжатие клавиши
   	function send_key_up($key,$is_key=false)
   	{
		$params = array( "inner_number" => $this->inner_number , "key" => $key , "is_key" => $is_key);
		return $this->call_boolean(__FUNCTION__,$params);
   	}

	// эммулирует ввод всех символов из переданной функции строки
   	function input($string,$timeout=INPUT_TIME)
   	{
		global $PHP_Use_Trought_Shell;

		$params = array( "inner_number" => $this->inner_number , "string" => $string , "timeout" => $timeout );
		$res=$this->call_boolean(__FUNCTION__,$params);

		if ($PHP_Use_Trought_Shell)
			fgets(STDIN);

		sleep(1);
		return $res;
   	}
	// эммулирует ввод одной кнопки по ее скан коду
   	function key($code)
   	{
		$params = array( "inner_number" => $this->inner_number , "code" => $code  );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// эмулирует нажатие клавиши
   	function key_down($key)
   	{
		$params = array( "inner_number" => $this->inner_number , "key" => $key  );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
	// эмулирует отжатие клавиши
   	function key_up($key)
   	{
		$params = array( "inner_number" => $this->inner_number , "key" => $key  );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
	// эммулирует задание языка ввода
   	function set_current_language($language)
   	{
		$params = array( "inner_number" => $this->inner_number , "language" => $language  );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
};		
?>