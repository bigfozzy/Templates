<?php
/////////////////////////////////////////// Submitter /////////////////////////////////////////////////////
class XHESubmitter extends XHEBaseObject
{
	///////////////////////////////////////////////////////////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Submitter";
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////
  	
	///////////////////////////////////////////////////////////////////////////////////////////////////

	// �������� ��������� ���
        function generate_random_name($lang="EN",$sex_for_RU="man")
	{
	   	$params = array( "lang" => $lang , "sex_for_RU" => $sex_for_RU  );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// �������� ��������� ������ ��� (�������)
        function generate_random_second_name($lang="EN",$sex_for_RU="man")
	{
	   	$params = array( "lang" => $lang , "sex_for_RU" => $sex_for_RU  );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// �������� ��������� ���
        function generate_random_nick_name($len)
	{
	   	$params = array( "len" => $len );
	    	return $this->call_get(__FUNCTION__,$params);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////

	// �������� ��������� �����
        function generate_random_street($lang)
	{
	   	$params = array( "lang" => $lang );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// �������� ��������� �����
        function generate_random_city($lang)
	{
	   	$params = array( "lang" => $lang );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// �������� ��������� ������
        function generate_random_region($lang)
	{
	   	$params = array( "lang" => $lang );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// �������� ��������� ������
        function generate_random_country($lang)
	{
	   	$params = array( "lang" => $lang );
	    	return $this->call_get(__FUNCTION__,$params);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////

	// �������� ��������� �����
        function generate_random_number($min,$max,$as_int=false)
	{
	   	$params = array( "min" => $min , "max" => $max , "as_int" => $as_int );
	    	$res=$this->call_get(__FUNCTION__,$params);

		$res=str_replace(",","",$res);
		if ($as_int)
			return (int)$res;
		else
			return $res;
	}
	// �������� ��������� �����
        function generate_random_text($len,$type)
	{
	   	$params = array( "len" => $len , "type" => $type  );
	    	return $this->call_get(__FUNCTION__,$params);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////
};
?>