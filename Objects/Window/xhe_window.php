<?php
//////////////////////////////////////////// Window ////////////////////////////////////////////////////////
class XHEWindow extends XHEWindowCompatible
{
	////////////////////////////// ��������� ������� //////////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Window";
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////

	////////////////////////////////////////////////////////////////////////////////////////////////////

	// �������� ���������� ���� ��������� ����
	function get_count($visibled=true,$mained=true)
	{
		$params = array( "visibled" => $visibled , "mained" => $mained );
		return $this->call_get(__FUNCTION__,$params);
	}
	// �������� ������ ���� ���� ��������� ����
	function get_all_texts($visibled=true,$mained=true)
	{
		$params = array( "visibled" => $visibled , "mained" => $mained );
		return $this->call_get(__FUNCTION__,$params);
	}
	// �������� ����� ���� ��������� ���� �� ��� ������
	function get_text_by_number($number,$visibled=true,$mained=true)
	{
		$params = array( "number" => $number , "visibled" => $visibled , "mained" => $mained );
		return $this->call_get(__FUNCTION__,$params);
	}
	// �������� ����� ���� ��������� ���� �� ��� ������
	function get_number_by_text($text,$exactly=false,$visibled=true,$mained=true)
	{
		$params = array( "text" => $text , "exactly" => $exactly , "visibled" => $visibled , "mained" => $mained );
		return $this->call_get(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////////////

	// �������� ���������� �������� ���� � ���� ��������� ���� �� ��� ������
	function get_child_count_by_number($number,$visibled=true,$mained=true)
	{
		$params = array( "number" => $number , "visibled" => $visibled , "mained" => $mained );
		return $this->call_get(__FUNCTION__,$params);
	}
	// �������� ������ ���� �������� ���� � ���� � �������� ����� �� ��� ������
	function get_child_texts_by_number($number,$visibled=true,$mained=true)
	{
		$params = array( "number" => $number , "visibled" => $visibled , "mained" => $mained );
		return $this->call_get(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////////////

	// ������ ����� � ����� ����� ������ ��������� ���� ������ � ������ OK
        function execute_open_file($text,$path,$btn_text,$exactly=true,$thread=false)
	{
		$params = array( "text" => $text , "path" => $path , "btn_text" => $btn_text , "exactly" => $exactly , "thread" => $thread );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// �������� ������ '���������' � ������� �������� ����� ��� ��������� ����� �������
        function execute_download_file($path="")
	{
		$params = array( "path" => $path );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// ����������� ���������� ������� prompt ��� ��������� ����� �������
        function execute_prompt($caption,$text="",$btn_text="OK",$exactly=true)
	{
		$params = array( "caption" => $caption , "text" => $text , "btn_text" => $btn_text , "exactly" => $exactly);
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// ����������� ���������� ������� ����������� ��� ��������� ����� �������
        function execute_authorization($login="",$password="",$caption="������������ Windows")
	{
		$params = array( "login" => $login , "password" => $password , "caption" => $caption);
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// ����������� ���������� ������� ������ ��� ��������� ����� �������
        function execute_print($path)
	{
		$params = array( "path" => $path );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// �������� ��������� ���� �� ������ ����
	function get_by_number($number,$mained=true,$visibled=true)
	{
		$params = array( "number" => $number , "mained" => $mained , "visibled" => $visibled);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEWindowInterface($internal_number,$this->server,$this->password);
	}	
	// �������� ��������� ���� �� ��� ������ (���������)
	function get_by_text($text,$exactly=false,$mained=true,$visibled=true)
	{
		$params = array( "text" => $text , "exactly" => $exactly , "mained" => $mained , "visibled" => $visibled);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEWindowInterface($internal_number,$this->server,$this->password);
	}	
	// �������� ��������� ���� �� ��� ����� ������
	function get_by_class($class_name,$exactly=false,$mained=true,$visibled=true)
	{
		$params = array( "class_name" => $class_name , "exactly" => $exactly , "mained" => $mained , "visibled" => $visibled);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEWindowInterface($internal_number,$this->server,$this->password);
	}	
	// �������� ��������� ���� �� ��� �����
	function get_by_point($x,$y)
	{
		$params = array( "x" => $x , "y" => $y);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEWindowInterface($internal_number,$this->server,$this->password);
	}	
	// �������� ��������� ���� � ������ �������� ������������
	function get_foreground_window()
	{
		$params = array( );
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEWindowInterface($internal_number,$this->server,$this->password);
	}	
	// �������� ��������� ���� � �������
	function get_focused_window()
	{
		$params = array( );
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEWindowInterface($internal_number,$this->server,$this->password);
	}	

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// �������� ������ ����������� ���� ���� ��������� ����
	function get_all($mained=true,$visibled=true)
	{
		$params = array(  "mained" => $mained , "visibled" => $visibled);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEWindowInterfaces($internal_number,$this->server,$this->password);
	}	
	// �������� ������ ����������� ���� �� ������� 
	function get_all_by_number($numbers,$mained=true,$visibled=true)
	{
		$params = array( "numbers" => $numbers , "mained" => $mained , "visibled" => $visibled);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEWindowInterfaces($internal_number,$this->server,$this->password);
	}	
	// �������� ������ ����������� ���� �� �� ������� (����������)
	function get_all_by_text($text,$exactly=false,$mained=true,$visibled=true)
	{
		$params = array( "text" => $text , "exactly" => $exactly , "mained" => $mained , "visibled" => $visibled);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEWindowInterfaces($internal_number,$this->server,$this->password);
	}	
	// �������� ������ ����������� ���� �� �� ������ �������
	function get_all_by_class($class_name,$exactly=false,$mained=true,$visibled=true)
	{
		$params = array( "class_name" => $class_name , "exactly" => $exactly , "mained" => $mained , "visibled" => $visibled);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEWindowInterfaces($internal_number,$this->server,$this->password);
	}	
	// �������� ������ ����������� ���� � �������� �����
	function get_all_by_point($x,$y,$mained=true,$visibled=true)
	{
		$params = array( "x" => $x , "y" => $y , "mained" => $mained , "visibled" => $visibled);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEWindowInterfaces($internal_number,$this->server,$this->password);
	}	
};	
?>