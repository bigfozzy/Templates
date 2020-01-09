<?php
/////////////////////////////////////////// Raw ////////////////////////////////////////////////////
class XHEMail extends XHEBaseObject
{
	//////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ ////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Mail";
	}
  	
	////////////////////////////////////////////////////////////////////////////////////////////
	// задать прокси (пример socks5://xx.xx.xx.xx:pp или socks5://xx.xx.xx.xx:pp;login;password)
   	function set_proxy($proxy)
	{
		$params = array( "proxy" => $proxy );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	////////////////////////////////////////////////////////////////////////////////////////////

	// соединится с SMTP сервером
   	function smtp_connect($server, $port, $login, $password, $ssl_option = 1 , $cert_type="s, c, h, e", $timeout = 3000)
	{
		$params = array( "server" => $server , "port" => $port , "ssl_option" => $ssl_option , "cert_type" => $cert_type , "login" => $login , "password" => $password , "timeout" => $timeout );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// отсоединится от SMTP сервера
	function smtp_disconnect()
	{
		$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// отправить сообщение через smtp
   	function send_mail_via_smtp($from, $to, $subject, $message, $type)
	{
		$params = array( "from" => $from , "to" => $to , "subject" => $subject , "message" => $message , "type" => $type );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

	// соединиться с POP3 сервером
   	function pop3_connect($server, $port, $login, $password , $ssl_option = 1 , $cert_type="s, c, h, e", $timeout = 3000 )
	{
		$params = array( "server" => $server , "port" => $port , "ssl_option" => $ssl_option , "cert_type" => $cert_type , "login" => $login , "password" => $password , "timeout" => $timeout );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// отсоединиться от POP3 сервера
	function pop3_disconnect()
	{
		$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// получить число писем в ящике через POP3
   	function get_message_count_via_pop3()
	{
		$params = array(  );
	    	return $this->call_get(__FUNCTION__,$params);
	}

	// получить письмо с заданным номером через POP3
   	function get_message_by_number_via_pop3($number)
	{
		$params = array( "number" => $number );
	    	return new XHEMailMessage($this->call_get(__FUNCTION__,$params));
	}
	// получить письмо с заданной темой через POP3
   	function get_message_by_subject_via_pop3($subject,$exactly=false,$number=0)
	{
		$params = array( "subject" => $subject , "exactly" => $exactly , "number" => $number);
	    	return new XHEMailMessage($this->call_get(__FUNCTION__,$params));
	}
	// получить письмо от заданного отправителя через POP3
   	function get_message_by_from_via_pop3($from,$exactly=false,$number=0)
	{
		$params = array( "from" => $from , "exactly" => $exactly , "number" => $number);
	    	return new XHEMailMessage($this->call_get(__FUNCTION__,$params));
	}
	// получить письмо с заданным текстом через POP3
   	function get_message_by_text_via_pop3($text,$exactly=false,$number=0)
	{
		$params = array( "text" => $text , "exactly" => $exactly , "number" => $number);
	    	return new XHEMailMessage($this->call_get(__FUNCTION__,$params));
	}

	// удалить письмо с заданным номером через POP3
   	function delete_message_by_number_via_pop3($number)
	{
		$params = array( "number" => $number );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// удалить письмо с заданным from через POP3
   	function delete_message_by_from_via_pop3($from,$exactly=false,$number=0)
	{
		$params = array( "from" => $from , "exactly" => $exactly , "number" => $number);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// удалить письмо с заданным subject через POP3
   	function delete_message_by_subject_via_pop3($subject,$exactly=false,$number=0)
	{
		$params = array( "subject" => $subject , "exactly" => $exactly , "number" => $number);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// удалить письмо с заданным текстом через POP3
   	function delete_message_by_text_via_pop3($text,$exactly=false,$number=0)
	{
		$params = array( "text" => $text , "exactly" => $exactly , "number" => $number);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	// удалить все письма на почте через POP3
   	function delete_all_messages_via_pop3()
	{
		$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

	// соединиться с IMAP сервером
   	function imap_connect($server, $port, $login, $password , $ssl_option = 1 , $cert_type="s, c, h, e", $timeout = 3000 )
	{
		$params = array( "server" => $server , "port" => $port , "ssl_option" => $ssl_option , "cert_type" => $cert_type , "login" => $login , "password" => $password , "timeout" => $timeout );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// отсоединиться от IMAP сервера
	function imap_disconnect()
	{
		$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// получить число писем в ящике через IMAP
   	function get_message_count_via_imap($folder="")
	{
		$params = array( "folder" => $folder );
	    	return $this->call_get(__FUNCTION__,$params);
	}

	// получить письмо с заданным номером через IMAP
   	function get_message_by_number_via_imap($folder, $number)
	{
		$params = array( "number" => $number, "folder" => $folder );
	    	return new XHEMailMessage($this->call_get(__FUNCTION__,$params));
	}
	// получить письмо с заданной темой через IMAP
   	function get_message_by_subject_via_imap($folder, $subject,$exactly=false,$number=0)
	{
		$params = array( "subject" => $subject , "exactly" => $exactly , "folder" => $folder, "number" => $number);
	    	return new XHEMailMessage($this->call_get(__FUNCTION__,$params));
	}
	// получить письмо от заданного отправителя через IMAP
   	function get_message_by_from_via_imap($folder,$from,$exactly=false,$number=0)
	{
		$params = array( "from" => $from , "exactly" => $exactly , "folder" => $folder, "number" => $number);
	    	return new XHEMailMessage($this->call_get(__FUNCTION__,$params));
	}
	// получить письмо от с заданным текстом через IMAP
   	function get_message_by_text_via_imap($folder,$text,$exactly=false,$number=0)
	{
		$params = array( "text" => $text , "exactly" => $exactly , "folder" => $folder, "number" => $number);
	    	return new XHEMailMessage($this->call_get(__FUNCTION__,$params));
	}

	// удалить письмо с заданным номером через IMAP
   	function delete_message_by_number_via_imap($folder,$number)
	{
		$params = array( "number" => $number , "folder" => $folder);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// удалить все письма из заданной папки через IMAP
   	function delete_all_messages_via_imap($folder)
	{
		$params = array( "folder" => $folder);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

	// запустить проверку smtp ответов
	/*function run_smtp_check_answers_job($path, $check_text, $emails_path, $servers_config_path, $proxies_path = "", $timeout = 3000 ,$parallel = true)
	{
		$params = array( "path" => $path , "check_text" => $check_text , "emails_path" => $emails_path , "servers_config_path" => $servers_config_path , "proxies_path" => $proxies_path ,  "timeout" => $timeout ,  "parallel" => $parallel);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// остановить проверку smtp ответов
	function stop_smtp_check_answers_job()
	{
		$params = array(  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// проверить завершена ли проверка
	function is_check_answers_job_finished()
	{
		$params = array(  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// получить число завершенных
        function get_check_answers_job_completed_count()
	{
		$params = array(  );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// получить ответ с заданым номером
	function get_check_answers_job_answer($number)
	{
		$params = array( "number" => $number );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// получить емйелы с хорошими ответами
	function get_check_answers_job_good_emails()
	{
		$params = array(  );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// получить емйелы с плохими ответами
	function get_check_answers_job_bad_emails()
	{
		$params = array(  );
	    	return $this->call_get(__FUNCTION__,$params);
	}*/
};
?>