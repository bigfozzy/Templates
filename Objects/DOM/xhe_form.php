<?php
//////////////////////////////////////////////////// Form ///////////////////////////////////////////////////
class XHEForm  extends XHEFormCompatible
{
	///////////////////////////////////// ��������� ������� ////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Form";
	}
   	/////////////////////////////////////////////////////////////////////////////////////////////////////

        /////////////////////////////////////////////////////////////////////////////////////////////////////

   	// ������� ������ ����� � �������� �������
	function submit_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		$res = $this->call_boolean(__FUNCTION__,$params);

		if ($res)
		{
			global $browser;
			$browser->wait_for();
		}	
		return $res;
	}
   	// ������� ������ ����� � �������� ������
	function submit_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array( "name" => $name , "frame" => $frame );
		$res = $this->call_boolean(__FUNCTION__,$params);

		if ($res)
		{
			global $browser;
			$browser->wait_for();
		}	
		return $res;
	}
   	// ������� ������ ����� � �������� id
	function submit_by_id($id,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("id",$id,true,$frame);		

		$params = array( "id" => $id , "frame" => $frame );
		$res = $this->call_boolean(__FUNCTION__,$params);

		if ($res)
		{
			global $browser;
			$browser->wait_for();
		}	
		return $res;
	}
        // ������� ������ ����� � �������� action
	function submit_by_action($action,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("action",$action,$exactly,$frame);		

		$params = array( "action" => $action , "exactly" => $exactly , "frame" => $frame );
		$res = $this->call_boolean(__FUNCTION__,$params);

		if ($res)
		{
			global $browser;
			$browser->wait_for();
		}	
		return $res;
	}
        // ������� ������ ����� � �������� ��������� ���������
	function submit_by_attribute($attr_name,$attr_value,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);		

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "frame" => $frame );
		$res = $this->call_boolean(__FUNCTION__,$params);

		if ($res)
		{
			global $browser;
			$browser->wait_for();
		}	
		return $res;
	}

   	/////////////////////////////////////////////////////////////////////////////////////////////////////

   	// ������� ����� ����� � �������� �������
	function reset_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// ������� ����� ����� � �������� ������
	function reset_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

   	/////////////////////////////////////////////////////////////////////////////////////////////////////

   	// �������� action ����� � �������� �������
	function get_action_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
   	// �������� action ����� � �������� ������
	function get_action_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
   	// �������� action ����� � �������� id
	function get_action_by_id($id,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("id",$id,true,$frame);		

		$params = array( "id" => $id , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}

   	/////////////////////////////////////////////////////////////////////////////////////////////////////
};		
?>