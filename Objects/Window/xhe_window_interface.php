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
	// ����������� ��������� � DOM	
  	function get_clone() 
	{
		$params = array( "inner_number" => $this->inner_number );
		$clone_inner_number = $this->call_get(__FUNCTION__,$params);	       
		return new XHEWindowInterface($clone_inner_number,$this->server,$this->password);
	}	
	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// ������ �����
   	function set_text($text)
   	{
		$params = array( "inner_number" => $this->inner_number , "text" => $text );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ������ ���������
   	function show($on=true)
   	{
		$params = array( "inner_number" => $this->inner_number , "on" => $on );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// �������� �����������
   	function enable($on)
   	{
		$params = array( "inner_number" => $this->inner_number , "on" => $on );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// ������ �����
   	function focus()
   	{
		$params = array( "inner_number" => $this->inner_number);
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// � ����� ���� 
   	function foreground()
   	{
		$params = array( "inner_number" => $this->inner_number);
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ��������������
   	function minimize()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ���������������
   	function maximize()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ������������
   	function restore()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// �������
   	function close()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// �����������
   	function move($x=-1,$y=-1)
   	{
		$params = array( "inner_number" => $this->inner_number , "x" => $x , "y" => $y );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// �������� ������
   	function resize($width=-1,$height=-1)
   	{
		$params = array( "inner_number" => $this->inner_number , "width" => $width , "height" => $height );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ������� ���������
   	function message($type,$wparam,$lparam)
   	{
		$params = array( "inner_number" => $this->inner_number , "type" => $type , "wparam" => $wparam , "lparam" => $lparam );
		return $this->call_get(__FUNCTION__,$params);
   	}   

	// ��������
   	function screenshot($filepath,$x=-1,$y=-1,$width=-1,$heigth=-1,$as_gray=false)
   	{
		$params = array( "inner_number" => $this->inner_number , "x" => $x , "y" => $y , "width" => $width , "height" => $heigth , "filepath" => $filepath, "as_gray" => $as_gray);
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// �������� ����� �������� ����
   	function get_child_count()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// �������� �������� �� ������
   	function get_child_by_number($number)
   	{
		$params = array( "inner_number" => $this->inner_number , "number" => $number);
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   
	// �������� �������� �� ������
   	function get_child_by_text($text,$exactly=false)
   	{
		$params = array( "inner_number" => $this->inner_number , "text" => $text , "exactly" => $exactly );
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   
	// �������� �������� �� ����� ������
   	function get_child_by_class($class_name,$exactly=false)
   	{
		$params = array( "inner_number" => $this->inner_number , "class_name" => $class_name , "exactly" => $exactly );
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   
	// �������� ���������
   	function get_next()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   
	// �������� ����������
   	function get_prev()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   
	// �������� ������������
   	function get_parent()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   
	// �������� ���������
   	function get_owner()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   
	// �������� ������ ����������� ���� �������� ����
   	function get_all_child()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$numbers=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterfaces($numbers,$this->server,$this->password);
   	}   
	// �������� ������ ����������� ���� ��������� ����
   	function get_all_next()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$numbers=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterfaces($numbers,$this->server,$this->password);
   	}   
	// �������� ������ ����������� ���� ���������� ����
   	function get_all_prev()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$numbers=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterfaces($numbers,$this->server,$this->password);
   	}   
	// �������� ������ ����������� ���� ������������ ����
   	function get_all_parent()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$numbers=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterfaces($numbers,$this->server,$this->password);
   	}   
	// �������� ���������� ��������
   	function get_top_parent()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   
	// �������� ���������� ���������
   	function get_top_owner()
   	{
		$params = array( "inner_number" => $this->inner_number );
		$new_internal_number=$this->call_get(__FUNCTION__,$params);
	
		return new XHEWindowInterface($new_internal_number,$this->server,$this->password);
   	}   

	// �������� �����
   	function get_text()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// �������� �����
   	function get_number($visibled=true,$mained=true)
   	{
		$params = array( "inner_number" => $this->inner_number , "visibled" => $visibled , "mained" => $mained );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// �������� ����� (������� ��� �����������)
   	function get_style($extended=false)
   	{
		$params = array( "inner_number" => $this->inner_number , "extended" => $extended );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// �������� ��� ������
   	function get_class_name()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// �������� ���������� HWND
   	function get_hwnd()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// �������� ID ��������
   	function get_process_id()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// �������� ID ������
   	function get_thread_id()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   

	// �������� X
   	function get_x()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// �������� Y
   	function get_y()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// �������� ������
   	function get_width()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   
	// �������� ������
   	function get_height()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
   	}   

	// ���������� ��
   	function is_exist()
   	{
		return $this->inner_number!=-1;
   	}   
	// ������ ��
   	function is_visible()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// �������� ��
   	function is_enable()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ���� �� ����� �����
   	function is_focus()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ���� �� ���������������� ����� �����
   	function is_foreground()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// �������� ��
   	function is_child()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// �������������� ��
   	function is_minimize()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ��������������� ��
   	function is_maximize()
   	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// ������� ����������� �����
   	function send_mouse_move($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// ������� ������ �����
   	function send_mouse_click($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ������� ������� ������ �����
   	function send_mouse_double_click($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ������� ������� ����� ������ ����
   	function send_mouse_left_down($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ������� ������� ����� ������ ����
   	function send_mouse_left_up($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// ������� ������ ������ ������ ����
   	function send_mouse_right_click($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ������� ������� ������ ������ ����
   	function send_mouse_right_down($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ������� ������� ������ ������ ����
   	function send_mouse_right_up($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// ����������� �����
   	function mouse_move($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// ������ �����
   	function mouse_click($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ������� ������ �����
   	function mouse_double_click($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ������� ����� ������ ����
   	function mouse_left_down($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ������� ����� ������ ����
   	function mouse_left_up($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	// ������ ������ ������ ����
   	function mouse_right_click($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ������� ������ ������ ����
   	function mouse_right_down($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ������� ������ ������ ����
   	function mouse_right_up($dx=0,$dy=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   

	/*// �������� ���� ������ � �������, ���� ���� �� �����
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
	// �������� ���� ������� � �������, ���� ���� �� �����
   	function send_key($key,$is_key=false)
   	{
		$params = array( "inner_number" => $this->inner_number , "key" => $key , "is_key" => $is_key);
		return $this->call_boolean(__FUNCTION__,$params);
   	}
   	*/

	// �������� ������� �������
   	function send_key_down($key,$is_key=false)
   	{
		$params = array( "inner_number" => $this->inner_number , "key" => $key , "is_key" => $is_key);
		return $this->call_boolean(__FUNCTION__,$params);
   	}
	// �������� ������� �������
   	function send_key_up($key,$is_key=false)
   	{
		$params = array( "inner_number" => $this->inner_number , "key" => $key , "is_key" => $is_key);
		return $this->call_boolean(__FUNCTION__,$params);
   	}

	// ���������� ���� ���� �������� �� ���������� ������� ������
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
	// ���������� ���� ����� ������ �� �� ���� ����
   	function key($code)
   	{
		$params = array( "inner_number" => $this->inner_number , "code" => $code  );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// ��������� ������� �������
   	function key_down($key)
   	{
		$params = array( "inner_number" => $this->inner_number , "key" => $key  );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
	// ��������� ������� �������
   	function key_up($key)
   	{
		$params = array( "inner_number" => $this->inner_number , "key" => $key  );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
	// ���������� ������� ����� �����
   	function set_current_language($language)
   	{
		$params = array( "inner_number" => $this->inner_number , "language" => $language  );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
};		
?>