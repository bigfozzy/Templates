<?php
/////////////////////////////////////// Browser ////////////////////////////////////////////////////
class XHEBrowser extends XHEBrowserCompatible
{
	////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ //////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Browser";
	}
	////////////////////////////////////////////////////////////////////////////////////////////

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

     	// задать число закладок
	function set_count($count)
	{
		$params = array( "count" => $count );
		$res = $this->call_boolean(__FUNCTION__,$params);
		sleep(1);
		$this->wait_for();
		return $res;
	}
        // получить число закладок
	function get_count()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}
     	// задать активную закладку 
	function set_active_browser($num,$activate=true)
	{
		$params = array( "num" => $num , "activate" => $activate );
		return $this->call_boolean(__FUNCTION__,$params);
	}
     	// получить активную закладку 
	function get_active_browser()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}
        // добавить закладку браузера
	function add_tab()
	{
		$params = array( );
		$res =  $this->call_boolean(__FUNCTION__,$params);
		sleep(1);
		$this->wait_for();
		return $res;
	}
        // закрыть текущую закладку (Main не закрывается)
	function close()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // закрыть все открытые закладки
	function close_all_tabs($close_type="")
	{
		$params = array( "close_type" => $close_type );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////

	// перейти на заданный урл
	function navigate($url,$use_cache=true,$use_wait=true)
	{
		$params = array( "url" => $url , "use_cache" => $use_cache );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($use_wait)
			$this->wait_for();
		if ($this->get_last_navigation_error()!="" || $this->is_busy())
			return false;
		else
			return true;
	}
	// получить ошибку последней навигации
	function get_last_navigation_error()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}
	// обновить текущую страницу
	function refresh($ignore_cache = true)
	{
		$params = array( "ignore_cache" => $ignore_cache );
		$res=$this->call_boolean(__FUNCTION__,$params);
		$this->wait_for();
		return $res;
	}
	// остановить текущий переход
	function stop()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// перейти на предыдущую страницу
	function go_back()
	{
		$params = array( );
		$res=$this->call_boolean(__FUNCTION__,$params);
		$this->wait_for();
		return $res;
	}
	// перейти на следующую страницу
	function go_forward()
	{
		$params = array( );
		$res=$this->call_boolean(__FUNCTION__,$params);
		$this->wait_for();
		return $res;
	}
	// задать домашнюю страницу
	function set_home_page($url)
	{
		$params = array( "url" => $url );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// перейти на домашнюю страницу
	function navigate_to_home_page()
	{
		$params = array( );
		$res=$this->call_boolean(__FUNCTION__,$params);
		$this->wait_for();
		return $res;
	}

	////////////////////////////////////////////////////////////////////////////////////////////

        // ожидание загрузки страницы в браузере в течении заданного времени и заданного числа повторов
        function wait_for($Try_Navigate_Second=15,$Try_Navigate_Count=1)
        {
		global $Wait_Try_Navigate_Second;
		global $Wait_Try_Navigate_Count;

		if ($Try_Navigate_Second==0)
			return true;
		if ($Wait_Try_Navigate_Second!=-1)
			$Try_Navigate_Second=$Wait_Try_Navigate_Second;
		if ($Wait_Try_Navigate_Count!=-1)
			$Try_Navigate_Count=$Wait_Try_Navigate_Count;
		
                $count=0;
                $second=0;

		//echo "--".$Try_Navigate_Second."--";

		sleep(1);
                $is_busy = $this->is_busy();

		while($is_busy)
		{
                       if( (int)$second >= (int)$Try_Navigate_Second )
                       { 
                          $second=0;
                          $count++;
                          if((int)$count >= (int)$Try_Navigate_Count)
		          { 		
				break;
		          	return false;
			  }

			  // повторим попытку навигации (без кэша и без ожидания)
                          $this->navigate($this->call("WebPage.get_url"),false,false);
 			  sleep(1);
                        }
			else
			{
				//echo $count."+";
				//echo $second."-";
				sleep(1);
                        	$second=$second+1;
			}

			$is_busy = $this->is_busy();
	        }
		return true;
        }

        // ожидание отработки JS в браузере в течении заданного времени
        function wait_js($Try_Second=30)
        {
		sleep(1);
		$second=1;
      		$is_completed = $this->call("ScriptElement.is_all_completed");
		while($is_completed==false)
		{
			sleep(1);
                       	$second=$second+1;
			echo "...";
			$is_completed = $this->call("ScriptElement.is_all_completed");			
                        if( (int)$second >= (int)$Try_Second )
				return $is_completed;
		}
		return true;
	}
	// ожидание загрузки страницы в браузере
	function wait($num=-1)
	{
		if ($num!=-1)
		{
			$busy = $this->is_busy($num);
			while($busy)
			{
				sleep($num);
				$busy = $this->is_busy($num);
			}
			return true;
		}	
		return $this->wait_for();        

	}
	// проверка занятости заданого браузера
	function is_busy($num=-1)
	{               		
                if ($this->call("Browser.IsBusy?num=".base64_encode($num))=="true")
                	return true;
		else
			return false;		

	}
	// получить состояние занятости браузера
	function get_ready_state()
	{               		
                return $this->call("Browser.GetReadyState");
	}

        // задать параметры ожидания навигации (без параметров - сброс по умолчанию на 30,1)
        function set_wait_params($Try_Navigate_Second=-1,$Try_Navigate_Count=-1)
        {
		global $Wait_Try_Navigate_Second;
		global $Wait_Try_Navigate_Count;

		$Wait_Try_Navigate_Second=$Try_Navigate_Second;
		$Wait_Try_Navigate_Count=$Try_Navigate_Count;
		return true;
	}

   	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

     	// включить или выключить картинки
	function enable_images($enable=true,$refresh=true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		$res = $this->call_boolean(__FUNCTION__,$params);
		if ($refresh)
		{
			sleep(1);
			$this->wait_for();
		}
		return $res;
	}
     	// включить или выключить Java Script's
	function enable_java_script($enable=true,$refresh=true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		$res = $this->call_boolean(__FUNCTION__,$params);
		if ($refresh)
		{
			sleep(1);
			$this->wait_for();
		}
		return $res;
	}
   	// включить или выключить звуки
	function enable_sounds($enable=true,$refresh=true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// включить или выключить видео
	function enable_video($enable=true,$refresh=true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
     	// включить или выключить ActiveX
	function enable_activex($enable=true,$refresh=true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		$res = $this->call_boolean(__FUNCTION__,$params);
		if ($refresh)
		{
			sleep(1);
			$this->wait_for();
		}
		return $res;
	}
   	// включить или выключить Java
	function enable_java($enable=true,$refresh=true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// включить или выключить фреймы
	function enable_frames($enable=true,$refresh=true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// включить или выключить системные шрифты
	function enable_fonts($enable=true, $refresh = true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// включить использование удаленных шрифты
	function enable_remote_fonts($enable=true, $refresh = true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// разрешить или запретить поп-апы
	function enable_popup($enable=true,$refresh=true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
     	// запретить сообщения о ошибках JS
	function disable_script_error($enable=true,$refresh=true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		return $this->call_boolean(__FUNCTION__,$params);
	}	     	
     	// запретить диалоги-сообщения о проблемах безопасности
	function disable_security_problem_dialogs($disable=true)
	{
		$params = array( "disable" => $disable );
		return $this->call_boolean(__FUNCTION__,$params);
	}
     	// включить тихий режим браузера (без интерактивности с пользователем)
	function enable_quiet_regime($enable=true,$refresh=true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// включить или выключить кэш
	function enable_cache($enable=true,$refresh=true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		$res = $this->call_boolean(__FUNCTION__,$params);
		if ($refresh)
		{
			sleep(1);
			$this->wait_for();
		}
		return $res;
	}
	// включить или выключить DOM Storage
	function enable_dom_storage($enable=true,$refresh=true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		$res = $this->call_boolean(__FUNCTION__,$params);
		if ($refresh)
		{
			sleep(1);
			$this->wait_for();
		}
		return $res;
	}
	// включить или выключить callback
	function enable_callback($enable=true,$refresh=true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// разрешить просмотр json в браузере
	function enable_view_json($enable=true,$refresh=true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// разрешить WebRTC
	function enable_web_rtc($enable=true,$refresh=true)
	{
		return $this->enable_web_socket($enable,$refresh);
	}
	// установить режим общего кэша и кукисов для всех копий xhe
	function enable_common_cache_and_cookies($enable=true,$refresh=true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// разрешить отрисовку картинок через direct x
	function enable_directx($enable=true)
	{
		$params = array( "enable" => $enable  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// разрешить gpu отрисовку
	function enable_gpu_rendering($enable=true)
	{
		$params = array( "enable" => $enable  );
		$res = $this->call_boolean(__FUNCTION__,$params);
		sleep(1);
		$this->wait_for();
		return $res;
	}
	// включить или выключить browser notification
	function enable_browser_notification($enable=true,$show=true,$refresh=true)
	{
		$params = array( "enable" => $enable , "show" => $show , "refresh" => $refresh );
		return $this->call_boolean(__FUNCTION__,$params);
	}

  	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

     	// проверить включены ли картинки
	function is_enable_images()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
     	// проверить включенность Java Script
	function is_enable_java_script()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// проверить включены ли звуки
	function is_enable_sounds()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// проверить включены ли видео
	function is_enable_video()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
     	// проверить включены ли ActiveX
	function is_enable_activex()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// проверить включена ли Java
	function is_enable_java()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // проверка включенности поп-апов
	function is_enable_popup()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// проверить включены ли фреймы
	function is_enable_frames()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
     	// проверка включенности сообщений об ошибках JS
	function is_disable_script_error()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
     	// проверка включенности тихого режима
	function is_enable_quiet_regime()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// проверить что кэш доступен
	function is_enable_cache()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// проверить что dom storage доступно
	function is_enable_dom_storage()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// проверить что callback доступно
	function is_enable_callback()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// проверить что разрешен просмотр json в браузере
	function is_enable_view_json()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// проверить что разрешены вебсокеты в браузере
	function is_enable_web_socket()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// проверить что установлен режим общий кэш и куки для всех копий xhe
	function is_enable_common_cache_and_cookies()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}

  	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

	// вызвать существующий JS
	function call_java_script($func,$parametrs)
	{
		$params = array( "func" => $func , "parametrs" => $parametrs );
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // выполнить произвольный JS
	function run_java_script($script_text,$add_file="")
	{
		$params = array( "script_text" => $script_text , "add_file" => $add_file);
		return $this->call_get(__FUNCTION__,$params);
        }
        // задать начальный JS
	function set_init_java_script($script_text,$add_file="")
	{
		$params = array( "script_text" => $script_text , "add_file" => $add_file);
		return $this->call_get(__FUNCTION__,$params);
        }
        // задать JS, который вызывается после Document Complete
	function set_document_complete_java_script($script_text,$add_file="")
	{
		$params = array( "script_text" => $script_text , "add_file" => $add_file);
		return $this->call_get(__FUNCTION__,$params);
        }
	
        // выполнить произвольный JQuery (используя заданную версию jQuery 1,2,3)
	function run_jquery($script_text,$ver="3")
	{
		$params = array( "script_text" => $script_text , "ver" => $ver );
		return $this->call_get(__FUNCTION__,$params);
        }
        // выполнить произвольный Dojo
	function run_dojo($script_text)
	{
		$params = array( "script_text" => $script_text );
		return $this->call_get(__FUNCTION__,$params);
        }

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// установить прокси
	function enable_proxy($connection,$proxy,$recreate = true)
	{     
		$params = array( "connection" => $connection , "proxy" => $proxy );
		$res = $this->call_boolean(__FUNCTION__,$params);
		if ($recreate)
		{
			$this->recreate();
			$this->wait_for();
		}
		return $res;
	}
	// убрать прокси
	function disable_proxy($connection="",$recreate = true)
	{
		$params = array( "connection" => $connection );
		$res = $this->call_boolean(__FUNCTION__,$params);
		sleep(1);
		if ($recreate)
		{
			$this->recreate();
			$this->wait_for();
		}
		return $res;
  	}	
	// получить текущий прокси
	function get_current_proxy($connection="",$with_auth=false)
	{
		$params = array( "connection" => $connection , "with_auth" => $with_auth);
		return $this->call_get(__FUNCTION__,$params);
  	}	

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить версию браузера
	function get_version($numerica=true)
	{
		$params = array( "numerica" => $numerica);
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить user-agent
	function get_user_agent()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
   	}
	// получить модель браузера
	function get_model()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}
   	// получить папку куков
	function get_cookies_folder()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
   	}	
   	// получить папку кэша
	function get_cache_folder()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
   	}
   	// задать папку куков
	function set_cookies_folder($folder,$refresh=true)
	{
		$params = array( "folder" => $folder , "refresh" => $refresh );
		$res = $this->call_boolean(__FUNCTION__,$params);
		if ($refresh)
			sleep(1);
		return $res;
   	}	
   	// задать папку кэша
	function set_cache_folder($folder,$refresh=true)
	{
		$params = array( "folder" => $folder , "refresh" => $refresh );
		$res = $this->call_boolean(__FUNCTION__,$params);
		if ($refresh)
			sleep(1);
		return $res;
   	}
   	// сохранить флэш куки
	function flash_cookies_save($folder,$site="")
	{
		$params = array( "folder" => $folder , "site" => $site );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
	// восстановить флэш куки
	function flash_cookies_restore($folder,$site="")
	{
		$params = array( "folder" => $folder , "site" => $site );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
   	// удалить флэш куки
	function flash_cookies_delete($site="")
	{
		$params = array( "site" => $site );
		return $this->call_boolean(__FUNCTION__,$params);
   	}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// задать user-agent
	function set_user_agent($agent_string,$refresh=true)
	{
		$params = array( "agent_string" => $agent_string , "refresh" => $refresh );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
	// задать модель браузера
	function set_model($model)
	{
		$params = array( "model" => $model );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

	// получить ширину страницы
	function get_page_width()
	{
		$params = array(  );
		return $this->call_get(__FUNCTION__,$params);
   	}	
	// получить высоту страницы
	function get_page_height()
	{
		$params = array(  );
		return $this->call_get(__FUNCTION__,$params);
   	}	
     	// получить ширину окна браузера
	function get_window_width()
	{
		$params = array(  );
		return $this->call_get(__FUNCTION__,$params);
	}
     	// поулчить высоту окна браузера
	function get_window_height()
	{
		$params = array(  );
		return $this->call_get(__FUNCTION__,$params);
	}
   	// получить выбранный текст в браузере
	function get_selected_text($as_html)
	{
		$params = array( "as_html" => $as_html );
		return $this->call_get(__FUNCTION__,$params);
	}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  	// задать ширину браузера
	function set_width($width)
	{
		$params = array( "width" => $width );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
	// задать высоту браузера
	function set_height($height)
	{
		$params = array( "height" => $height );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
	// задать позицию вертикального скролла
	function set_vertical_scroll_pos($y)
	{
		$params = array( "y" => $y );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
	// задать позицию горизонтального скролла
	function set_horizontal_scroll_pos($x)
	{
		$params = array( "x" => $x );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
	// получить позицию вертикального скролла
	function get_vertical_scroll_pos()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
   	}	
	// получить позицию горизонтального скролла
	function get_horizontal_scroll_pos()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
   	}	

   	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		

	// очистить заданные куки
	function clear_cookies($match_name,$clear_session=false,$clear_flash=true)
	{
		$params = array( "match_name" => $match_name , "clear_session" => $clear_session , "clear_flash" => $clear_flash  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// очистить Local Storage
	function clear_local_storage()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// очистить Indexed DB
	function clear_indexed_db()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// получить куки для текущей страницы
	function get_cookie($as_json=false)
	{
		$params = array( "as_json" => $as_json );
		return $this->call_get(__FUNCTION__,$params);
   	}	
	// установить куки
	function set_cookie($cookie)
	{
		$params = array( "cookie" => $cookie );
		return $this->call_boolean(__FUNCTION__,$params);
   	}

   	// получить куки для заданного урла
	function get_cookie_for_url($url,$name,$as_json=false)
	{
		$params = array( "url" => $url , "name" => $name , "as_json" => $as_json);
		return $this->call_get(__FUNCTION__,$params);
   	}	
	// задать куки для заданного урла
	function set_cookie_for_url($url,$name,$cookie,$expires="",$domain="",$path="",$httpOnly=false,$secure=false)
	{
		$params = array( "url" => $url , "name" => $name , "cookie" => $cookie , "expires" => $expires, "domain" => $domain, "path" => $path, "secure" => $secure, "httpOnly" => $httpOnly);
		return $this->call_boolean(__FUNCTION__,$params);
   	}
	// импорт куков из заданног формата
	function import_cookies($url,$cookies)
	{
		$params = array( "url" => $url , "cookies" => $cookies);
		return $this->call_boolean(__FUNCTION__,$params);
	}

   	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

        // получить источник поп-апа по источнику
	function get_popup_source($url,$exactly)
	{
		$params = array( "url" => $url , "exactly" => $exactly);
		return $this->call_get(__FUNCTION__,$params);
        }	
        // закрыть поп-ап с заданным урлом
	function close_popup($url,$exactly)
	{
		$params = array( "url" => $url , "exactly" => $exactly );
		return $this->call_boolean(__FUNCTION__,$params);
        }

  	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	
	// запретить диалоги-сообщения браузера и задать автоответ на них ($answer is one from "Ok","Cancel","Abort","Retry","Ignore","Yes","No")
	function enable_browser_message_boxes($enable=true,$default_answer="Ok")
	{
		$params = array( "enable" => $enable , "default_answer" => $default_answer );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // получить заголовок последнего диалогового сообщения браузера
	function get_last_messagebox_caption()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}
        // получить текст последнего диалогового сообщения браузера
	function get_last_messagebox_text()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}
        // получить тип последнего диалогового сообщения браузера
	function get_last_messagebox_type()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}
        // очистить информацию о последнем диалоговом сообщении браузера
	function clear_last_messagebox_info()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

	// установить http авторизацию по умолчанию
	function set_default_authorization($login,$password)
	{
		$params = array( "login" => $login , "password" => $password );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
	// сбросить http авторизацию по умолчанию
	function reset_default_authorization()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
	// установить имя серфтификата умолчанию
	function set_default_certificate($text)
	{
		$params = array( "text" => $text );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	

        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

        // запретить диалог выбора пути для скачивания файлов
	function enable_download_file_dialog($enable)
	{
		$params = array( "enable" => $enable );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // проверить включенность диалога выбора пути для скачивания файлов
	function is_enable_download_file_dialog()
	{
		$params = array(  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// задать папку по умолчанию куда будут скачиваться файлы, если выключен диалог выбора пути
	function set_default_download($folder)
	{
		$params = array( "folder" => $folder );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
        // сбросить параметры диалога скачивания файлов
	function reset_default_download()
	{
		$params = array(  );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
        // получить id последней загрузки
	function get_last_download_id()
	{
		$params = array(  );
		return $this->call_get(__FUNCTION__,$params);
	}
        // завершена ли загрузка
	function is_download_complete($id)
	{
		$params = array( "id" => $id );
		$res = $this->call_get(__FUNCTION__,$params);
		if ($res==-1)
			return $res;
		if ($res==0)
			return false;
		else
			return true;
	}
        // поулчить информацию о загрузке
	function get_download_info($id)
	{
		$params = array( "id" => $id );
		return $this->call_get(__FUNCTION__,$params);
	}
        // отменить загрузку
	function cancel_download($id)
	{
		$params = array( "id" => $id );
		return $this->call_boolean(__FUNCTION__,$params);
	}

  	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

        // задать как открывать popup
	function set_popup_type($popup_type)
	{
		$params = array( "popup_type" => $popup_type );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
        // задать google api key
	function set_google_api_key($api_key)
	{
		$params = array( "api_key" => $api_key );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
        // задать google default client id
	function set_google_default_client_id($client_id)
	{
		$params = array( "client_id" => $client_id );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
        // задать google default client secret
	function set_google_default_client_secret($client_secret)
	{
		$params = array( "client_secret" => $client_secret );
		return $this->call_boolean(__FUNCTION__,$params);
   	}

   	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   	
   	// задать акцепт
	function set_accept($accept_string)
	{
		$params = array( "accept_string" => $accept_string );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
   	// задать язык в акцептах (заголовки запроса браузера)
	function set_accept_language($accept_string)
	{
		$params = array( "accept_string" => $accept_string );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
   	// задать кодировку в акцептах (заголовки запроса браузера)
	function set_accept_encoding($accept_string)
	{
		$params = array( "accept_string" => $accept_string );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
   	// задать реферер
	function set_referer($referer="")
	{
		$params = array( "referer" => $referer );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
   	// задать реферер
	function set_platform($platform="",$cpuClass="")
	{
		$params = array( "platform" => $platform , "cpuClass" => $cpuClass);
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
   	// задать геоинформацию
	function set_geo($latitude="",$longitude="",$accuracy="",$altitude="",$altitudeAccuracy="",$heading="",$speed="")
	{
		$params = array( "latitude" => $latitude, "longitude" => $longitude, "accuracy" => $accuracy, "altitude" => $altitude, "altitudeAccuracy" => $altitudeAccuracy, "heading" => $heading, "speed" => $speed);
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
   	// задать информацию об оборудовании
	function set_hardware_info($hardwareConcurrency=-1,$deviceMemory=-1,$devicePixelRatio=-1)
	{
		$params = array( "hardwareConcurrency" => $hardwareConcurrency , "deviceMemory" => $deviceMemory, "devicePixelRatio" => $devicePixelRatio);
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
   	// задать язык
	function set_language($language="")
	{
		$params = array( "language" => $language );
		$res = $this->call_boolean(__FUNCTION__,$params);
		$this->wait_for();
		return $res;
   	}	
   	// задать реферер
	function set_screen_resolution($width=-1,$height=-1,$pixelDepth=-1)
	{
		$params = array( "width" => $width , "height" => $height , "pixelDepth" => $pixelDepth);
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
	// задать информацию о приложении
	function set_app_info($appName="", $appCodeName="", $appMinorVersion="", $product="", $productSub="", $vendor="", $vendorSub="")
	{
		$params = array( "appName" => $appName , "appCodeName" => $appCodeName , "appMinorVersion" => $appMinorVersion , "product" => $product , "productSub" => $productSub , "vendor" => $vendor, "vendorSub" => $vendorSub);
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// указать сайтам не отслеживать наши действия
	function set_do_not_track($doNotTrack=true)
	{
		$params = array( "doNotTrack" => $doNotTrack );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
	// задать информацию о плагинах
	function set_plugins_info($plugins_info="",$mime_types="")
	{
		$params = array( "plugins_info" => $plugins_info , "mime_types" => $mime_types );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// задать часовой пояс
	function set_time_zone($time_zone=-100)
	{
		$params = array( "time_zone" => $time_zone );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
   	// задать Internationalization API
	function set_internationalization($locale="",$timeZone="",$calendar="",$numberingSystem="",$year="",$month="",$day="")
	{
		$params = array( "locale" => $locale, "timeZone" => $timeZone, "calendar" => $calendar, "numberingSystem" => $numberingSystem, "year" => $year, "month" => $month, "day" => $day );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
   	// задать информацию о touch
	function set_touch_info($max_points="",$ontouchevent="")
	{
		$params = array( "max_points" => $max_points , "ontouchevent" => $ontouchevent );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
   	// указать - отправлять заданные данные canvas (для смены finger print)
	function set_canvas_toDataURL($toDataURL="")
	{
		$params = array( "toDataURL" => $toDataURL );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
   	// задать случайный Web GL fingerprint
	function set_random_webgl_fingerprint($enable=true,$noiseImage="",$noiseParams="",$unmaskedVendor="",$unmaskedRenderer="",$glVersion="",$shadingLanguageVersion="",$vendor="",$renderer="")
	{
		$params = array( "enable" => $enable, "noiseImage" => $noiseImage, "noiseParams" => $noiseParams, "glVersion" => $glVersion, "shadingLanguageVersion" => $shadingLanguageVersion, "vendor" => $vendor, "renderer" => $renderer, "unmaskedVendor" => $unmaskedVendor,"unmaskedRenderer" => $unmaskedRenderer );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
   	// задать случайный Audio fingerprint
	function set_random_audio_fingerprint($noiseAudio="",$noiseFrequence="")
	{
		$params = array( "noiseAudio" => $noiseAudio, "noiseFrequence" => $noiseFrequence );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
   	// задать случайный Bounds fingerprint
	function set_random_bounds_fingerprint($noise=-1)
	{
		$params = array( "noise" => $noise );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
        // получить реферер
	function get_referer()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
   	}

   	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
     	// выполнить команду вставки в браузер
	function paste($text = "")
	{
		$params = array( "text" => $text );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// сохранить текущую страницу в файл
	function save_page_as($file)
	{
		$params = array( "file" => $file );
		return $this->call_boolean(__FUNCTION__,$params);
	}

     	// получить теущий масштаб отображения
	function get_zoom()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}	
     	// задать текущий масштаб отображения
	function set_zoom($zoom)
	{
		$params = array( "zoom" => $zoom );
		return $this->call_boolean(__FUNCTION__,$params);
	}
     	// выполнить команду браузера (ex: IDM_PASTE,IDM_COPY,IDM_PRINT etc.)
	function run_command($command)
	{
		$params = array( "command" => $command );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // послать get запрос на заданный урл
	function send_get_query($url,$data="",$type="application/x-www-form-urlencoded",$set_as_page=false,$add_header="")
	{
		$params = array( "url" => $url , "data" => $data , "type" => $type , "set_as_page" => $set_as_page , "add_header" => $add_header );
		$res=$this->call_get(__FUNCTION__,$params);
		if($res!="")
                   return $res;
                else
                   return false;   
        }
        // послать пост запрос на заданный урл
	function send_post_query($url,$data="",$type="application/x-www-form-urlencoded",$set_as_page=false,$add_header="")
	{
		$params = array( "url" => $url , "data" => base64_encode($data) , "type" => $type , "set_as_page" => $set_as_page , "add_header" => $add_header );
		$res=$this->call_get(__FUNCTION__,$params);
		if($res!="")
                   return $res;
                else
                   return false;   
        }
	
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
   	// проверить соединение с интернетом
	function check_internet_connection()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
	// проверить соединение с заданным урлом
   	function check_connection($url,$timeout,$use_cache=false,$num=-1)
   	{
      		// делаем переход
		if ($url!="")
	 	   	if(!$this->navigate($url,$use_cache))
        			return false;

      		global $time;
      		$time=0;
		// wait
      		$is_busy = $this->is_busy($num);
     		while($is_busy=="true")
		{
         		global $time;
         		$time++;
			sleep(1);

			$is_busy = $this->is_busy($num);
         		if($time==$timeout)
            			return ($is_busy=="false");
		}
      
      		$text =  $this->call("WebPage.get_body");
      		if($text=="")
        		return false;
     
      		$index= strpos($text,"Forbidden");
      		if($index!=null)
         		return false;
      
      		$ind= strpos($text,"The page cannot be found");
      		if($ind!=null)
         		return false;
            
                $ind= strpos($text,"Нет подключения к Интернету.");
                if($ind!=null)
                        return false;

                $ind= strpos($text,"Недействительный адрес");
                if($ind!=null)
                        return false;

                
                $ind= strpos($text,"Эта программа не может отобразить эту веб-страницу");
                if($ind!=null)
                       return false;
            
                $ind= strpos($text,"Переход на веб-страницу отменен");
                if($ind!=null)
                       return false;
             
                $ind= strpos($text,"The requested URL could not be retrieved");
                if($ind!=null)
                       return false;
      
                $ind= strpos($text,"Navigation to the webpage was canceled");
                if($ind!=null)
                       return false;

                $ind= strpos($text,"This program cannot display the webpage");
                if($ind!=null)
                       return false;

               $ind= strpos($text,"Bad Gateway");
                if($ind!=null)
                       return false;
          
               $ind= strpos($text,"Internal Server Error");
                if($ind!=null)
                       return false;

               $ind= strpos($text,"The website cannot display the page");
                if($ind!=null)
                       return false;

      		return true;
   	}
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// очистить кэш
	function clear_cache()
	{
	   	$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// очитсить историю
	function clear_history()
	{
	   	$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// очистить историю урлов в адреснм комбобоксе
	function clear_address_bar_history()
	{
	   	$params = array(  );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
   	// управление перерисовкой браузера (позволяет экономить ресурсы)
	function set_redraw($enable)
	{
	   	$params = array( "enable" => $enable );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
   	// задать fps
	function set_fps($fps)
	{
	   	$params = array( "fps" => $fps );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
   	// управление режимом изолированных закладок
	function enable_isolate_tabs($enable=true)
	{
	   	$params = array( "enable" => $enable );
	    	$res = $this->call_boolean(__FUNCTION__,$params);
		$this->wait_for();
		sleep(2);
		return $res;
	}
   	// пересоздать браузер
	function recreate()
	{
	   	$params = array(  );
	    	$res=$this->call_boolean(__FUNCTION__,$params);
		sleep(1);

		global $PHP_Use_Trought_Shell;
		if ($PHP_Use_Trought_Shell)
			fgets(STDIN);

		return $res;

   	}	
   	// получить класс процессора
	function get_cpu_class()
	{
	   	$params = array(  );
	    	return $this->call_get(__FUNCTION__,$params);

   	}	
   	// сохранить профиль
	function save_profile($path,$name="",$description="")
	{
	   	$params = array( "path" => $path , "name" => $name , "description" => $description);
	    	return $this->call_boolean(__FUNCTION__,$params);
   	}	
   	// загрузить профиль
	function load_profile($path)
	{
	   	$params = array( "path" => $path );
	    	return $this->call_boolean(__FUNCTION__,$params);
   	}	

	////////////////////////////////////////////////////////////////////////////////////////////////////

	// начать запись видео
	function start_video_record($path,$fps=10,$quality=70,$x=-1,$y=-1,$width=-1,$height=-1,$as_gray=false)
	{
		$params = array( "path" => $path, "fps" => $fps, "quality" => $quality, "x" => $x, "y" => $y, "width" => $width, "height" => $height , "as_gray" => $as_gray);
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// остановить запись видео
	function stop_video_record()
	{
		$params = array(  );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
};
?>