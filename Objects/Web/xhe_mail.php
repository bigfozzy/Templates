<?php
/////////////////////////////////////////// Raw ////////////////////////////////////////////////////
class XHEMail extends XHEBaseObject
{
	//////////////////////////// ��������� ������� ////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Mail";
	}
  	
	////////////////////////////////////////////////////////////////////////////////////////////
	// ������ ������ (������ socks5://xx.xx.xx.xx:pp ��� socks5://xx.xx.xx.xx:pp;login;password)
   	function set_proxy($proxy)
	{
		$params = array( "proxy" => $proxy );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	////////////////////////////////////////////////////////////////////////////////////////////

	// ���������� � SMTP ��������
   	function smtp_connect($server, $port, $login, $password, $ssl_option = 1 , $cert_type="s, c, h, e", $timeout = 3000)
	{
		$params = array( "server" => $server , "port" => $port , "ssl_option" => $ssl_option , "cert_type" => $cert_type , "login" => $login , "password" => $password , "timeout" => $timeout );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// ������������ �� SMTP �������
	function smtp_disconnect()
	{
		$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// ��������� ��������� ����� smtp
   	function send_mail_via_smtp($from, $to, $subject, $message, $type)
	{
		$params = array( "from" => $from , "to" => $to , "subject" => $subject , "message" => $message , "type" => $type );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

	// ����������� � POP3 ��������
   	function pop3_connect($server, $port, $login, $password , $ssl_option = 1 , $cert_type="s, c, h, e", $timeout = 3000 )
	{
		$params = array( "server" => $server , "port" => $port , "ssl_option" => $ssl_option , "cert_type" => $cert_type , "login" => $login , "password" => $password , "timeout" => $timeout );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// ������������� �� POP3 �������
	function pop3_disconnect()
	{
		$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// �������� ����� ����� � ����� ����� POP3
   	function get_message_count_via_pop3()
	{
		$params = array(  );
	    	return $this->call_get(__FUNCTION__,$params);
	}

	// �������� ������ � �������� ������� ����� POP3
   	function get_message_by_number_via_pop3($number)
	{
		$params = array( "number" => $number );
	    	return new XHEMailMessage($this->call_get(__FUNCTION__,$params));
	}
	// �������� ������ � �������� ����� ����� POP3
   	function get_message_by_subject_via_pop3($subject,$exactly=false,$number=0)
	{
		$params = array( "subject" => $subject , "exactly" => $exactly , "number" => $number);
	    	return new XHEMailMessage($this->call_get(__FUNCTION__,$params));
	}
	// �������� ������ �� ��������� ����������� ����� POP3
   	function get_message_by_from_via_pop3($from,$exactly=false,$number=0)
	{
		$params = array( "from" => $from , "exactly" => $exactly , "number" => $number);
	    	return new XHEMailMessage($this->call_get(__FUNCTION__,$params));
	}
	// �������� ������ � �������� ������� ����� POP3
   	function get_message_by_text_via_pop3($text,$exactly=false,$number=0)
	{
		$params = array( "text" => $text , "exactly" => $exactly , "number" => $number);
	    	return new XHEMailMessage($this->call_get(__FUNCTION__,$params));
	}

	// ������� ������ � �������� ������� ����� POP3
   	function delete_message_by_number_via_pop3($number)
	{
		$params = array( "number" => $number );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// ������� ������ � �������� from ����� POP3
   	function delete_message_by_from_via_pop3($from,$exactly=false,$number=0)
	{
		$params = array( "from" => $from , "exactly" => $exactly , "number" => $number);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// ������� ������ � �������� subject ����� POP3
   	function delete_message_by_subject_via_pop3($subject,$exactly=false,$number=0)
	{
		$params = array( "subject" => $subject , "exactly" => $exactly , "number" => $number);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// ������� ������ � �������� ������� ����� POP3
   	function delete_message_by_text_via_pop3($text,$exactly=false,$number=0)
	{
		$params = array( "text" => $text , "exactly" => $exactly , "number" => $number);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	// ������� ��� ������ �� ����� ����� POP3
   	function delete_all_messages_via_pop3()
	{
		$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

	// ����������� � IMAP ��������
   	function imap_connect($server, $port, $login, $password , $ssl_option = 1 , $cert_type="s, c, h, e", $timeout = 3000 )
	{
		$params = array( "server" => $server , "port" => $port , "ssl_option" => $ssl_option , "cert_type" => $cert_type , "login" => $login , "password" => $password , "timeout" => $timeout );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// ������������� �� IMAP �������
	function imap_disconnect()
	{
		$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// �������� ����� ����� � ����� ����� IMAP
   	function get_message_count_via_imap($folder="")
	{
		$params = array( "folder" => $folder );
	    	return $this->call_get(__FUNCTION__,$params);
	}

	// �������� ������ � �������� ������� ����� IMAP
   	function get_message_by_number_via_imap($folder, $number)
	{
		$params = array( "number" => $number, "folder" => $folder );
	    	return new XHEMailMessage($this->call_get(__FUNCTION__,$params));
	}
	// �������� ������ � �������� ����� ����� IMAP
   	function get_message_by_subject_via_imap($folder, $subject,$exactly=false,$number=0)
	{
		$params = array( "subject" => $subject , "exactly" => $exactly , "folder" => $folder, "number" => $number);
	    	return new XHEMailMessage($this->call_get(__FUNCTION__,$params));
	}
	// �������� ������ �� ��������� ����������� ����� IMAP
   	function get_message_by_from_via_imap($folder,$from,$exactly=false,$number=0)
	{
		$params = array( "from" => $from , "exactly" => $exactly , "folder" => $folder, "number" => $number);
	    	return new XHEMailMessage($this->call_get(__FUNCTION__,$params));
	}
	// �������� ������ �� � �������� ������� ����� IMAP
   	function get_message_by_text_via_imap($folder,$text,$exactly=false,$number=0)
	{
		$params = array( "text" => $text , "exactly" => $exactly , "folder" => $folder, "number" => $number);
	    	return new XHEMailMessage($this->call_get(__FUNCTION__,$params));
	}

	// ������� ������ � �������� ������� ����� IMAP
   	function delete_message_by_number_via_imap($folder,$number)
	{
		$params = array( "number" => $number , "folder" => $folder);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// ������� ��� ������ �� �������� ����� ����� IMAP
   	function delete_all_messages_via_imap($folder)
	{
		$params = array( "folder" => $folder);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

	// ��������� �������� smtp �������
	/*function run_smtp_check_answers_job($path, $check_text, $emails_path, $servers_config_path, $proxies_path = "", $timeout = 3000 ,$parallel = true)
	{
		$params = array( "path" => $path , "check_text" => $check_text , "emails_path" => $emails_path , "servers_config_path" => $servers_config_path , "proxies_path" => $proxies_path ,  "timeout" => $timeout ,  "parallel" => $parallel);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// ���������� �������� smtp �������
	function stop_smtp_check_answers_job()
	{
		$params = array(  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// ��������� ��������� �� ��������
	function is_check_answers_job_finished()
	{
		$params = array(  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// �������� ����� �����������
        function get_check_answers_job_completed_count()
	{
		$params = array(  );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// �������� ����� � ������� �������
	function get_check_answers_job_answer($number)
	{
		$params = array( "number" => $number );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// �������� ������ � �������� ��������
	function get_check_answers_job_good_emails()
	{
		$params = array(  );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// �������� ������ � ������� ��������
	function get_check_answers_job_bad_emails()
	{
		$params = array(  );
	    	return $this->call_get(__FUNCTION__,$params);
	}*/
};
?>