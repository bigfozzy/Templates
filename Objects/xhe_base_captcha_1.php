<?php
/////////////////////////////////////////////////////////// XHEBaseCaptcha_1 //////////////////////////////////////////////////////
class XHEBaseCaptcha_1
{
	var $soft_id=0;

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// адрес сервера
	var $server='';
	// ключ api 
	var $api_key=null;

	// показывать ли процесс распозанния (лог)
	var $is_verbose = true;
	// максимальное число попыток связаться с сервером (с паузой ttimeout)
	var $max_try=10;

	// таймаут между запросами состояния разгаданности капчи (в секундах)
	var $rtimeout = 5;
	// таймаут между попыткам отправить капчу на сервер
	var $ttimeout = 20;
	// максимальное время для получения капчи (в секундах)
	var $mtimeout = 120;


	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// 0;1	0 = одно слово (значение по умлочанию) 1 = капча имеет два слова
	var $is_phrase = 0;
	// 0 = регистр ответа не имеет значения (значение по умолчанию ) 1 = регистр ответа имеет значение
	var $is_regsense = 0;
	// 0 = параметр не задействован (значение по умолчанию ) 1 = на изображении задан вопрос, работник должен написать ответ
	var $is_question=0;
	// 0 = параметр не задействован (значение по умолчанию) 1 = капча состоит только из цифр (и расширенно для некоторых сервисов: 2 = Капча состоит только из букв 3 = Капча состоит либо только из цифр, либо только из букв.)
	var $is_numeric = 0;
	// 0 = параметр не задействован (значение по умолчанию) 1 = работнику нужно совершить математическое действие с капчи
	var $is_calc=0;
	// 0 = параметр не задействован (значение по умолчанию) 1..20 = минимальное количество знаков в ответе
	var $min_len = 0;
	// 0 = параметр не задействован (значение по умолчанию)	1..20 = максимальное количество знаков в ответе
	var $max_len = 0;
	// 0 = параметр не задействован (значение по умолчанию) 1 = на капче только кириллические буквы (и расширено для некоторых сервисов 2 = на капче только латинские буквы)
	var $language = 0;

	// Текст, который будет показан работнику. Может содержать в себе инструкции по разгадке капчи. Ограничение - 140 символов. Текст необходимо слать в кодировке UTF-8. (доступен для некоторых типов сервисов)
	var $instructions="";

	// является ли капча - рекапчей
	var $is_recaptcha=0;
	// текстовые инструкции к рекапче
	var $textinstructions="";
	// картинка инструкций к рекапче
	var $imginstructions="";

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// капча id
	var $last_capcha_id;
	// последнйи файл капчи
	var $last_capcha_filename;
	// результат распознания
	var $last_capcha_result;

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // constructor
        function __construct($server)
        {
		$this->server = $server;
        }

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// call a command on the server
	function call($command)
	{
		// call server and return its answer
		$url = "http://".$this->server."/".$command;
		$postvars="";
		if(strstr($url,"?"))
      		{
         		$indexPost=strpos($url,"?",0);
			$postvars=substr($url,$indexPost+1,strlen($url)-$indexPost);
			$url=substr($url,0,$indexPost);
	   	}
      		$postvars=$postvars."  ";
      		$cUrl = curl_init();
      		curl_setopt($cUrl, CURLOPT_URL, $url);
      		curl_setopt($cUrl, CURLOPT_POST,  1); 
      		curl_setopt($cUrl, CURLOPT_POSTFIELDS, $postvars);
      		curl_setopt($cUrl, CURLOPT_RETURNTRANSFER, 1);
      		curl_setopt($cUrl, CURLOPT_TIMEOUT, 60);
      		$html = trim(curl_exec($cUrl));
      		curl_close($cUrl);
	
		return $html;
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// задать параметры распозаннрия по умолчанию
	function set_default_params()
	{
		// 0;1	0 = одно слово (значение по умлочанию) 1 = капча имеет два слова
		$this->is_phrase = 0;
		// 0 = регистр ответа не имеет значения (значение по умолчанию ) 1 = регистр ответа имеет значение
		$this->is_regsense = 0;
		// 0 = параметр не задействован (значение по умолчанию ) 1 = на изображении задан вопрос, работник должен написать ответ
		$this->is_question=0;
		// 0 = параметр не задействован (значение по умолчанию) 1 = капча состоит только из цифр 2 = Капча состоит только из букв 3 = Капча состоит либо только из цифр, либо только из букв.
		$this->is_numeric = 0;
		// 0 = параметр не задействован (значение по умолчанию) 1 = работнику нужно совершить математическое действие с капчи
		$this->is_calc=0;
		// 0 = параметр не задействован (значение по умолчанию) 1..20 = минимальное количество знаков в ответе
		$this->min_len = 0;
		// 0 = параметр не задействован (значение по умолчанию)	1..20 = максимальное количество знаков в ответе
		$this->max_len = 0;
		// 0 = параметр не задействован (значение по умолчанию) 1 = на капче только кириллические буквы2 = на капче только латинские буквы
		$this->language = 0;
		// Текст, который будет показан работнику. Может содержать в себе инструкции по разгадке капчи. Ограничение - 140 символов. Текст необходимо слать в кодировке UTF-8.
		$this->instructions="";
		return true;
	}

	// распознать картинку
	function recognize_image($filename)
	{
		return $this->recognize($filename, $this->api_key, "http://www.".$this->server,  $this->is_verbose, $this->rtimeout, $this->mtimeout, $this->is_phrase, $this->is_regsense, $this->is_numeric, $this->min_len, $this->max_len,$this->language,$this->is_question,$this->is_calc,$this->instructions,"",0,0);
	}

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// get last capcha id
	function get_last_capcha_id()
	{
            return $this->last_capcha_id;
	}
	// get last capcha file
	function get_last_capcha_filename()
	{
            return $this->last_capcha_filename;
	}
	// get last capcha result
	function get_last_capcha_result()
	{
            return $this->last_capcha_result;
	}
	// report bug capcha
	function report_bug_capcha($key,$id)
	{
            return $this->call("res.php?key=".urlencode($key)."&action=reportbad&id=".urlencode($id));
	}

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/*
	phrase		0;1	
			0 = одно слово (значение по умлочанию)
			1 = капча имеет два слова
	regsense	0;1
			0 = регистр ответа не имеет значения (значение по умолчанию )
			1 = регистр ответа имеет значение
	question	0;1
			0 = параметр не задействован (значение по умолчанию )
			1 = на изображении задан вопрос, работник должен написать ответ
	numeric		0;1;2;3	
			0 = параметр не задействован (значение по умолчанию)
			1 = капча состоит только из цифр
			2 = Капча состоит только из букв
			3 = Капча состоит либо только из цифр, либо только из букв.
	calc		0;1
			0 = параметр не задействован (значение по умолчанию)
			1 = работнику нужно совершить математическое действие с капчи
	min_len		0..20
			0 = параметр не задействован (значение по умолчанию)
			1..20 = минимальное количество знаков в ответе
	max_len		1..20	
			0 = параметр не задействован (значение по умолчанию)
			1..20 = максимальное количество знаков в ответе
	language	0;1;2	
			0 = параметр не задействован (значение по умолчанию)
			1 = на капче только кириллические буквы
			2 = на капче только латинские буквы
	instructions     TEXT	Текст, который будет показан работнику. Может содержать в себе инструкции по разгадке капчи. Ограничение - 140 символов. Текст необходимо слать в кодировке UTF-8.
	textcaptcha	 TEXT	Текстовая капча. Картинка при этом не загружается, работник получает только текст и вводит ответ на этот текст. Ограничение - 140 символов. Текст необходимо слать в кодировке UTF-8.

	ошибки: Ответы сервера на загрузку капчи:

	ERROR_WRONG_USER_KEY			Не верный формат параметра key, должно быть 32 символа
	ERROR_KEY_DOES_NOT_EXIST		Использован несуществующий key
	ERROR_ZERO_BALANCE	отказано	Баланс Вашего аккаунта нулевой
	ERROR_NO_SLOT_AVAILABLE	отказано	Текущая ставка распознования выше, чем максимально установленная в настройках Вашего аккаунта. Либо на сервере скопилась очередь и работники не успевают её разобрать, повторите загрузку через 5 секунд.
	ERROR_ZERO_CAPTCHA_FILESIZE		Размер капчи меньше 100 Байт
	ERROR_TOO_BIG_CAPTCHA_FILESIZE		Размер капчи более 100 КБайт
	ERROR_WRONG_FILE_EXTENSION		Ваша капча имеет неверное расширение, допустимые расширения jpg,jpeg,gif,png
	ERROR_IMAGE_TYPE_NOT_SUPPORTED		Сервер не может определить тип файла капчи
	ERROR_IP_NOT_ALLOWED			В Вашем аккаунте настроено ограничения по IP с которых можно делать запросы. И IP, с которого пришёл данный запрос не входит в список разрешённых.
	IP_BANNED				IP-адрес, с которого пришёл запрос заблокирован из-за частых обращений с различными неверными ключами. Блокировка снимается через час

	ошибки: Ответы сервера на загрузку капчи:

	ERROR_KEY_DOES_NOT_EXIST		Вы использовали неверный key в запросе
	ERROR_WRONG_ID_FORMAT			Неверный формат ID капчи. ID должен содержать только цифры
	ERROR_CAPTCHA_UNSOLVABLE		Капчу не смогли разгадать 3 разных работника. Списанные средства за это изображение возвращаются обратно на баланс
	ERROR_WRONG_CAPTCHA_ID			Вы пытаетесь получить ответ на капчу или пожаловаться на капчу, которая была загружена более 15 минут назад
	ERROR_BAD_DUPLICATES			Ошибка появляется при включённом 100%м распознании. Было использовано максимальное количество попыток, но необходимое количество одинаковых ответов не было набрано
	*/

	// распознать капчу
	function recognize($filename, $apikey, $path ='',  $is_verbose = true, $rtimeout = 5, $mtimeout = 120, $is_phrase = 0, $is_regsense = 0, $is_numeric = 0, $min_len = 0, $max_len = 0,$language = 0,$is_question=0,$is_calc=0,$instructions="",$textcaptcha="",$id_constructor=0,$is_invoice=0,
		$is_recaptcha=0,$textinstructions="",$imginstructions="",$coordinatescaptcha=0,$method="",$angle=0,$file_1="",$file_2="",$file_3="",$is_audio_recaptcha=0,$is_solveaudio=0)
	{
		// проверим apikey
		if ($apikey=="")
		{
			if ($this->api_key=="")
			{
				echo "API key is not setted\n";
				return false;
			}
			else
				$apikey=$this->api_key;
		}

		// сбросим данные по последней капче
		$this->last_capcha_id=-1;
		$this->last_capcha_filename=$filename;
		
		// обработаем файл капчи
		$curl_file=null;
		if (!file_exists($filename) && $textcaptcha=="")
		{
			// лог
			if ($is_verbose) 
				echo "file $filename not found\n";
			$this->last_capcha_result=false;
			return false;
		}
		$curl_file = curl_file_create($filename);

		// обработаем файл графической инструкции к рекапче
		$imginstructions_file=null;
		if ($imginstructions!="" && !file_exists($imginstructions))
		{
			// лог
			if ($is_verbose) 
				echo "file $imginstructions not found\n";
			$this->last_capcha_result=false;
			return false;
		}
		if ($imginstructions!="")
			$imginstructions_file = curl_file_create($imginstructions);
		
		// обработаем файл 1 rotate captcha
		$file_1_file=null;
		if ($file_1!="")
			$file_1_file = curl_file_create($file_1);
		
		// обработаем файл 2 rotate captcha
		$file_2_file=null;
		if ($file_2!="")
			$file_2_file = curl_file_create($file_2);

		// обработаем файл 3 rotate captcha
		$file_3_file=null;
		if ($file_3!="")
			$file_3_file = curl_file_create($file_3);

		// обязательные post параметры
		$postdata = array(			
			'key'       => $apikey, 
			'soft_id'	=> $this->soft_id );
		// необязательные post параметры
		if ($filename!="" && $textcaptcha=="")
			$postdata['file']  = $curl_file;
		if ($is_phrase!=0)
			$postdata['phrase'] = $is_phrase;
		if ($is_regsense!=0)
			$postdata['regsense'] = $is_regsense;
		if ($is_question!=0)
			$postdata['question'] = $is_question;
		if ($is_calc!=0)
			$postdata['calc'] = $is_calc;
		if ($is_numeric!=0)
			$postdata['numeric'] = $is_numeric;
		if ($min_len!=0)
			$postdata['min_len'] = $min_len;
		if ($max_len!=0)
			$postdata['max_len'] = $max_len;
		if ($language!=0)
                {
			$postdata['language'] = $language;
                        $postdata['is_russian'] = $language;
                }
		if ($instructions!="")
			$postdata['textinstructions'] = $instructions;
		if ($textcaptcha!="")
			$postdata['textcaptcha'] = $textcaptcha;
		if ($id_constructor!=0)
			$postdata['id_constructor'] = $id_constructor;
		if ($is_recaptcha!=0)
			$postdata['is_recaptcha'] = $is_recaptcha;
		if ($textinstructions!="")
			$postdata['textinstructions'] = $textinstructions;
		if ($imginstructions_file!=null)
			$postdata['imginstructions'] = $imginstructions_file;
		if ($coordinatescaptcha!=0)
			$postdata['coordinatescaptcha'] = $coordinatescaptcha;
		if ($method!="")
			$postdata['method'] = $method;
		if ($angle!=0)
			$postdata['angle'] = $angle;
		if ($file_1_file!=null)
			$postdata['file_1'] = $file_1_file;
		if ($file_2_file!=null)
			$postdata['file_2'] = $file_2_file;
		if ($file_3_file!=null)
			$postdata['file_3'] = $file_3_file;
		if ($is_audio_recaptcha!=0)
			$postdata['recaptchavoice'] = 1;
		else if ($is_solveaudio!=0)
			$postdata['solveaudio'] = 1;

		$result = "";
		for ($i=0;$i<$this->max_try;$i++)
		{
			// сделаем запрос
			$ch = curl_init();
			if ($is_invoice!=0)
				curl_setopt($ch, CURLOPT_URL,             $path.'/in_invoice.php');
			else
				curl_setopt($ch, CURLOPT_URL,             $path.'/in.php');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,     1);
			curl_setopt($ch, CURLOPT_TIMEOUT,             60);
			curl_setopt($ch, CURLOPT_POST,                 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS,         $postdata);
			$result = curl_exec($ch);

			// во время запроса произошел сбой
			if (curl_errno($ch)) 
			{
				// лог
    				if ($is_verbose) 
					echo "CURL returned error: ".curl_error($ch)."\n";
				$this->last_capcha_result=false;
				return false;
			}

			// закроем запрос
			curl_close($ch);

			// нет свободных слотов
			if (strpos($result, "ERROR_NO_SLOT_AVAILABLE")!==false)
			{
				// лог
    				if ($is_verbose) 
					echo " ERROR_NO_SLOT_AVAILABLE => try_".($i+1)." ";
				if ($is_verbose) 
					echo "waiting for $this->ttimeout seconds\n";
				sleep($this->ttimeout);
				continue;
			}
			// сервер вернул ошибку распозания
			if (strpos($result, "ERROR")!==false)
			{
				// лог
    				if ($is_verbose) 
					echo "server returned error: $result\n";
				$this->last_capcha_result=false;
				return false;
			}
			// сервер вернул статус - забанено
			if (strpos($result, 'IP_BANNED')!==false)
			{
				// лог
	       			if ($is_verbose) 
					echo "server returned banned: $result\n";
				$this->last_capcha_result=false;
				return false;
			}
			break;
		}
		
		
		// получим captcha id
		if ($is_invoice==0)
		{
			$ex = explode("|", $result);		
			if ($is_verbose)
				echo $result."\n";
			if ($ex[0]!="OK")
			{
				// лог
       				if ($is_verbose) 
					echo "server not return captcha id: $result\n";
				$this->last_capcha_result=false;
				return false;
			}
			$captcha_id = $ex[1];
		}
		else
		{
			$ex = explode("\"", $result);		
			if ($is_verbose)
				echo $result."\n";
			if ($ex[2]!=":1,")
			{
				// лог
       				if ($is_verbose) 
					echo "server not return captcha id: $result\n";
				$this->last_capcha_result=false;
				return false;
			}
			$captcha_id = $ex[5];
		}
		$this->last_capcha_id=$captcha_id;

		// лог
    		if ($is_verbose) 
			echo "captcha sent, got captcha ID $captcha_id\n";

		// ждем таймаут 1
		$waittime = 0;
		if ($is_verbose) 
			echo "waiting for $rtimeout seconds\n";
		if ($is_invoice==0)
			sleep($rtimeout);
		else
			sleep(60);

		
		// получим сам ответ (капчу)
		while(true)
		{
			// запросим состояние распозанния капчи
			if (strpos($result, 'OK|')==false)
			{
				if ($is_invoice!=0)
					$result = file_get_contents($path.'/res_invoice.php?key='.$apikey.'&soft_id='.$this->soft_id.'&action=get&id='.$captcha_id);
				else
					$result = file_get_contents($path."/res.php?key=".$apikey."&soft_id=".$this->soft_id."&action=get&id=".$captcha_id);
			}

			// сервер вернул ошибку распозания 
			if (strpos($result, 'ERROR')!==false)
			{
				// лог
            			if ($is_verbose) 
					echo "server returned error: $result\n";
				$this->last_capcha_result=false;
				return false;
			}
			
			if (strpos($result, 'CAPCHA_NOT_READY')!==false)
			{
            			if ($is_verbose) echo "captcha is not ready yet\n";
            			$waittime += $rtimeout;
            			if ($waittime>$mtimeout) 
            			{
            				if ($is_verbose) 
						echo "timelimit ($mtimeout) hit\n";				
            				break;
            			}
        			if ($is_verbose) 
					echo "waiting for $rtimeout seconds\n";
				if ($is_invoice==0)
            				sleep($rtimeout);
				else
            				sleep(20);
				continue;
			}

			// получим капчу			
			if ($is_invoice==0)
			{
	          		$ex = explode('|', $result);
        	    		if (trim($ex[0])=='OK') 
				{
					$this->last_capcha_result=trim($ex[1]);
			   		return trim($this->last_capcha_result);
				}
			}
			else
			{
				if (strpos($result, 'status":1')!==false)
				{
					$this->last_capcha_result=$result;
					return trim($this->last_capcha_result);
				}
			}
		}
        
		// не дождались
		$this->last_capcha_result=false;
		return false;
		
	}

    // распознать капчу рекапча
	/*
	method	Строка	Да	userrecaptcha — определяет, что вы решаете ReCaptcha V2 с помощью нового метода
	googlekey	Строка	Да	Значение параметра k или data-sitekey, которое вы нашли в коде страницы
	pageurl	Строка	Да	Полный URL страницы, на которой вы решаете ReCaptcha V2
	invisible	Число
	По умолчанию: 0	Нет	1 — говорит нам, что на сайте невидимая ReCaptcha. 0 — обычная ReCaptcha.
	proxy	Строка	Нет	При аутенификации по IP: IP_адрес:ПОРТ
	Пример: proxy=123.123.123.123:3128
	При аутенификации по логину и паролю: логин:пароль@IP_адрес:ПОРТ
	Пример: proxy=proxyuser:strongPassword@123.123.123.123:3128
	proxytype	Строка	Нет	Тип вашего прокси: HTTP, HTTPS, SOCKS4, SOCKS5.
	Пример: proxytype=SOCKS4
	*/
	function recognize_userrecaptcha($apikey,$path ='',$pageurl, $googlekey, $invisible="0", $proxy="", $proxytype="", $method="userrecaptcha")
	{
		// проверим apikey
		if ($apikey=="")
		{
			if ($this->api_key=="")
			{
				echo "API key is not setted\n";
				return false;
			}
			else
				$apikey=$this->api_key;
		}

        // проверить $pageurl
        if($pageurl=="")
        {
            echo "pageurl is not setted\n";
			return false;
        }
        // проверить $pageurl
        if($googlekey=="")
        {
            echo "googlekey is not setted\n";
			return false;
        }
        
		// сбросим данные по последней капче
		$this->last_capcha_id=-1;
		$this->last_capcha_filename=$pageurl;
		
		// обязательные post параметры
		$postdata = array(			
			'key'       => $apikey, 
			'soft_id'	=> $this->soft_id );
		// необязательные post параметры
		
		$postdata['pageurl']  = $pageurl;
		$postdata['googlekey'] = $googlekey;
		
		if ($method!="")
			$postdata['method'] = $method;
   
        // не видимая рекапча v2
        if($invisible!="0")
			$postdata['invisible'] = $invisible;

		// использовать прокси 
		if($proxy!="")
		{
			$postdata['proxy'] = $proxy;

			if($proxytype=="")
			   $postdata['proxytype'] = 'HTTP';
			else
			   $postdata['proxytype'] = $proxytype;
		}

		$result = "";
		for ($i=0;$i<$this->max_try;$i++)
		{
			// сделаем запрос
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_URL,             $path.'/in.php');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,     1);
			curl_setopt($ch, CURLOPT_TIMEOUT,             60);
			curl_setopt($ch, CURLOPT_POST,                 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS,         $postdata);
			$result = curl_exec($ch);

			// во время запроса произошел сбой
			if (curl_errno($ch)) 
			{
				// лог
				if ($this->is_verbose) 
				  echo "CURL returned error: ".curl_error($ch)."\n";

				$this->last_capcha_result=false;
				return false;
			}

			// закроем запрос
			curl_close($ch);

			// нет свободных слотов
			if (strpos($result, "ERROR_NO_SLOT_AVAILABLE")!==false)
			{
				// лог
    			if ($this->is_verbose)
                { 
					echo " ERROR_NO_SLOT_AVAILABLE => try_".($i+1)." ";
					echo "waiting for $this->ttimeout seconds\n";
                }
				sleep($this->ttimeout);
                continue;
			}
			// сервер вернул ошибку распозания
			if (strpos($result, "ERROR")!==false)
			{
				// лог
    				if ($this->is_verbose) 
					echo "server returned error: $result\n";
				$this->last_capcha_result=false;
				return false;
			}
			// сервер вернул статус - забанено
			if (strpos($result, 'IP_BANNED')!==false)
			{
				// лог
	       			if ($this->is_verbose) 
					echo "server returned banned: $result\n";
				$this->last_capcha_result=false;
				return false;
			}
			break;
		}
		
		$ex = explode("|", $result);		
		if ($this->is_verbose)
			echo $result."\n";
		if ($ex[0]!="OK")
		{
			// лог
				if ($this->is_verbose) 
				echo "server not return captcha id: $result\n";
			$this->last_capcha_result=false;
			return false;
		}
		$captcha_id = $ex[1];

		if ($this->is_verbose) 
				echo "captcha id: $captcha_id\n";
		$this->last_capcha_id=$captcha_id;

		// лог
    		if ($this->is_verbose) 
			echo "captcha sent, got captcha ID $captcha_id\n";

		// ждем таймаут 1
		$waittime = 0;
		if ($this->is_verbose) 
			echo "waiting for $this->ttimeout seconds\n";
		
		sleep($this->ttimeout);
        // сбросим ответ
		$result="";

		// получим сам ответ (капчу)
		while(true)
		{
			// запросим состояние распозанния капчи
			if(strpos($result, 'OK|')===false)
			{
				$result = file_get_contents($path."/res.php?key=".$apikey."&soft_id=".$this->soft_id."&action=get&id=".$captcha_id);
			}
            else
            {
                $ex = explode("|", $result);	

                $this->last_capcha_result=$ex[1];
				return trim($this->last_capcha_result);
            }

        	// лог
            if ($this->is_verbose) 
				echo "server returned answer: $result\n";


			// сервер вернул ошибку распозания 
			if (strpos($result, 'ERROR')!==false)
			{
				// лог
            			if ($this->is_verbose) 
					echo "server returned error: $result\n";
				$this->last_capcha_result=false;
				return false;
			}
			
			if (strpos($result, 'CAPCHA_NOT_READY')!==false)
			{
            			if ($this->is_verbose) echo "captcha is not ready yet\n";
            			$waittime += $this->rtimeout;
            			if ($waittime>$this->mtimeout) 
            			{
            				if ($this->is_verbose) 
						        echo "timelimit ($this->mtimeout) hit\n";				
            				break;
            			}
        			if ($this->is_verbose) 
					echo "waiting for $this->rtimeout seconds\n";
				
            	    sleep($this->rtimeout);
                    
				continue;
			}

			if (strpos($result, 'status":1')!==false)
			{
				if ($this->is_verbose) 
				    echo "last capcha resul $result\n";
				   
				$this->last_capcha_result=$result;
				return trim($this->last_capcha_result);
			}
			
		}
        
		// не дождались
		$this->last_capcha_result=false;
		return false;
		
	}
    // распознать geetest
    function recognize_geetest_captcha($apikey,$path ='',$pageurl, $gt, $challenge, $api_server="", $proxy="", $proxytype="", $method="geetest")
	{
		// проверим apikey
		if ($apikey=="")
		{
			if ($this->api_key=="")
			{
				echo "API key is not setted\n";
				return false;
			}
			else
				$apikey=$this->api_key;
		}

        // проверить $pageurl
        if($pageurl=="")
        {
            echo "pageurl is not setted\n";
			return false;
        }
        // проверить $gt
        if($gt=="")
        {
            echo "gt is not setted\n";
			return false;
        }

        // проверить $gt
        if($challenge=="")
        {
            echo "challenge is not setted\n";
			return false;
        }
        
		// сбросим данные по последней капче
		$this->last_capcha_id=-1;
		$this->last_capcha_filename=$pageurl;
		
		// обязательные post параметры
		$postdata = array(			
			'key'       => $apikey, 
			'soft_id'	=> $this->soft_id );
		// необязательные post параметры
		
		$postdata['pageurl']  = $pageurl;
		$postdata['gt'] = $gt;
        $postdata['challenge'] = $challenge;
        $postdata['api_server'] = $api_server;
		
		if ($method!="")
			$postdata['method'] = $method;
   
		// использовать прокси 
		if($proxy!="")
		{
			$postdata['proxy'] = $proxy;

			if($proxytype=="")
			   $postdata['proxytype'] = 'HTTP';
			else
			   $postdata['proxytype'] = $proxytype;
		}

		$result = "";
		for ($i=0;$i<$this->max_try;$i++)
		{
			// сделаем запрос
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_URL,             $path.'/in.php');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,     1);
			curl_setopt($ch, CURLOPT_TIMEOUT,             60);
			curl_setopt($ch, CURLOPT_POST,                 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS,         $postdata);
			$result = curl_exec($ch);

            print_r($postdata);

			// во время запроса произошел сбой
			if (curl_errno($ch)) 
			{
				// лог
				if ($this->is_verbose) 
				  echo "CURL returned error: ".curl_error($ch)."\n";

				$this->last_capcha_result=false;
				return false;
			}

			// закроем запрос
			curl_close($ch);

			// нет свободных слотов
			if (strpos($result, "ERROR_NO_SLOT_AVAILABLE")!==false)
			{
				// лог
    			if ($this->is_verbose)
                { 
					echo " ERROR_NO_SLOT_AVAILABLE => try_".($i+1)." ";
					echo "waiting for $this->ttimeout seconds\n";
                }
				sleep($this->ttimeout);
                continue;
			}
			// сервер вернул ошибку распозания
			if (strpos($result, "ERROR")!==false)
			{
				// лог
    				if ($this->is_verbose) 
					echo "server returned error: $result\n";
				$this->last_capcha_result=false;
				return false;
			}
			// сервер вернул статус - забанено
			if (strpos($result, 'IP_BANNED')!==false)
			{
				// лог
	       			if ($this->is_verbose) 
					echo "server returned banned: $result\n";
				$this->last_capcha_result=false;
				return false;
			}
			break;
		}
		
		$ex = explode("|", $result);		
		if ($this->is_verbose)
			echo $result."\n";
		if ($ex[0]!="OK")
		{
			// лог
				if ($this->is_verbose) 
				echo "server not return captcha id: $result\n";
			$this->last_capcha_result=false;
			return false;
		}
		$captcha_id = $ex[1];

		if ($this->is_verbose) 
				echo "captcha id: $captcha_id\n";
		$this->last_capcha_id=$captcha_id;

		// лог
    		if ($this->is_verbose) 
			echo "captcha sent, got captcha ID $captcha_id\n";

		// ждем таймаут 1
		$waittime = 0;
		if ($this->is_verbose) 
			echo "waiting for $this->ttimeout seconds\n";
		
		sleep($this->ttimeout);
        // сбросим ответ
		$result="";

		// получим сам ответ (капчу)
		while(true)
		{
			// запросим состояние распозанния капчи
			if(strpos($result, 'OK|')===false)
			{
				$result = file_get_contents($path."/res.php?key=".$apikey."&soft_id=".$this->soft_id."&action=get&id=".$captcha_id);
			}
            else
            {
                $ex = explode("|", $result);	

                $this->last_capcha_result=$ex[1];
				return trim($this->last_capcha_result);
            }

        	// лог
            if ($this->is_verbose) 
				echo "server returned answer: $result\n";


			// сервер вернул ошибку распозания 
			if (strpos($result, 'ERROR')!==false)
			{
				// лог
            			if ($this->is_verbose) 
					echo "server returned error: $result\n";
				$this->last_capcha_result=false;
				return false;
			}
			
			if (strpos($result, 'CAPCHA_NOT_READY')!==false)
			{
            			if ($this->is_verbose) echo "captcha is not ready yet\n";
            			$waittime += $this->rtimeout;
            			if ($waittime>$this->mtimeout) 
            			{
            				if ($this->is_verbose) 
						        echo "timelimit ($this->mtimeout) hit\n";				
            				break;
            			}
        			if ($this->is_verbose) 
					echo "waiting for $this->rtimeout seconds\n";
				
            	    sleep($this->rtimeout);
                    
				continue;
			}

			if (strpos($result, 'status":1')!==false)
			{
				if ($this->is_verbose) 
				    echo "last capcha resul $result\n";
				   
				$this->last_capcha_result=$result;
				return trim($this->last_capcha_result);
			}
			
		}
        
		// не дождались
		$this->last_capcha_result=false;
		return false;
		
	}

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
};
?>