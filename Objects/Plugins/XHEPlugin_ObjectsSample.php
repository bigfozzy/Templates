<?php
/////////////////////////////////////////// sample of plugin /////////////////////////////////////////////////////////
class XHESampleObject extends XHEBaseObject
{
	//////////////////////////// ��������� ������� /////////////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "SampleXHEObject";
	}
        /////////////////////////////////////////////////////////////////////////////////////////////////////
   	
	// �������� ��� ������� ������, ������������ ��������� ���� (��� ����� �������� : ���������� �� �������)
	function test_command($param1,$param2)
	{
		$params = array( "param1" => $param1, "param2" => $param2 );
		return $this->call_get(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
};
$sampleobject=new XHESampleObject($xhe_host,$server_password);
?>