<?php
//////////////////////////////////////////// Webpage //////////////////////////////////////////////////////
class XHEWebPage extends XHEWebPageCompatible
{
	////////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ /////////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "WebPage";
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////

	///////////////////////////////////////////////////////////////////////////////////////////////////

	// получить интерфейс активного элемента
	function get_active_element()
        {
	   	$params = array( );
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEInterface($internal_number,$this->server,$this->password);
        }
	// получить интерфейс элемента по координатам
	function get_element_from_point($x,$y)
        {
	   	$params = array( "x" => $x , "y" => $y );
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEInterface($internal_number,$this->server,$this->password);
        }
   	// получить заголовок страницы (<title> из браузера)
	function get_title()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить текущий урл страницы
	function get_url()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить текущую кодировку страницы
	function get_encoding()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}
	// задать кодировку страницы
	function set_encoding($encoding)
	{
		$params = array( "encoding" => $encoding);
		return $this->call_boolean(__FUNCTION__,$params);
   	}

   	///////////////////////////////////////////////////////////////////////////////////////////////////

	// получить исходник текущей страницы в браузере
	function get_source()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить длинну исходника текущей страницы
	function get_source_length()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}
	// сохранить исходный текст текущей страницы в файл
	function save_source_to_file($filepath)
	{
		$params = array( "filepath" => $filepath);
		return $this->call_boolean(__FUNCTION__,$params);
	}

   	///////////////////////////////////////////////////////////////////////////////////////////////////

	// получить тело текущей страницы (source после обработки браузером)
	function get_body()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}
	// задать тело текущей страницы
	function set_body($body)
	{
		$params = array( "body" => base64_encode($body) );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// получить тело документа текущей страницы (как текст или хтмл)
	function get_document_body($as_html)
	{
		$params = array( "as_html" => $as_html);
		return $this->call_get(__FUNCTION__,$params);
	}
        // получить тело текущей страницы перед заданным префиксом
	function get_body_before_prefix($prefix,$as_html=true)
	{
	   	$params = array( "prefix" => $prefix, "as_html" => $as_html );
	    	return $this->call_get(__FUNCTION__,$params);
        }
        // получить тело текущей страницы после заданного префикса
	function get_body_after_prefix($prefix,$as_html=true)
	{
	   	$params = array( "prefix" => $prefix, "as_html" => $as_html );
	    	return $this->call_get(__FUNCTION__,$params);
        }
        // получить тело текущей страницы внутри заданных префиксов (первое вхождение)
	function get_body_inter_prefix($prefix1,$prefix2,$as_html=true)
	{
	   	$params = array( "prefix1" => $prefix1 , "prefix2" => $prefix2 , "as_html" => $as_html );
	    	return $this->call_get(__FUNCTION__,$params);
        }
	 // получить тело текущей страницы внутри заданных префиксов (все вхождения)
	function get_body_inter_prefix_all($prefix1,$prefix2,$as_html=true,$shift1=0,$shift2=0,$separator="<br>")
	{                                                                 
	   	$params = array( "prefix1" => $prefix1 , "prefix2" => $prefix2 , "as_html" => $as_html , "shift1" => $shift1 , "shift2" => $shift2 , "separator" => $separator );
	    	return $this->call_get(__FUNCTION__,$params);
        }

	///////////////////////////////////////////////////////////////////////////////////////////////////

	// сохранить скриншот заданной части видимой страницы в файл-картинку
	function print_screen($filepath,$xl=-1,$yt=-1,$xr=-1,$yb=-1,$as_gray=false)
	{
	   	$params = array( "filepath" => $filepath, "xl" => $xl , "yt" => $yt , "xr" => $xr , "yb" => $yb , "as_gray" => $as_gray);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// сохранить скриншот всей страницы в pdf
	function print_to_pdf($filepath)
	{
	   	$params = array( "filepath" => $filepath );
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
	// сохранить скриншот заданной части всей страницы в файл-картинку
	function print_body($filepath,$xl=-1,$yt=-1,$xr=-1,$yb=-1,$as_gray=false)
	{
	   	$params = array( "filepath" => $filepath, "xl" => $xl , "yt" => $yt , "xr" => $xr , "yb" => $yb , "as_gray" => $as_gray);
	    	return $this->call_boolean(__FUNCTION__,$params);
	}
     	// получить X - координату заданной картинки на странице
	function get_x_in_webpage_picture($picture_filepath, $similar_koeff=0.95 , $similar_algoritm = 5 )
	{
	   	$params = array( "picture_filepath" => $picture_filepath , "similar_koeff" => $similar_koeff, "similar_algoritm" => $similar_algoritm );
	    	return $this->call_get(__FUNCTION__,$params,600);
	}
     	// получить Y - координату заданной картинки на странице	
	function get_y_in_webpage_picture($picture_filepath, $similar_koeff=0.95, $similar_algoritm = 5)
	{
	   	$params = array( "picture_filepath" => $picture_filepath , "similar_koeff" => $similar_koeff , "similar_algoritm" => $similar_algoritm);
	    	return $this->call_get(__FUNCTION__,$params,600);
	}
     	// получить Y - координату заданной картинки на странице	
	function get_pos_in_webpage_picture($picture_filepath, $similar_koeff=0.95, $similar_algoritm = 5)
	{
	   	$params = array( "picture_filepath" => $picture_filepath , "similar_koeff" => $similar_koeff , "similar_algoritm" => $similar_algoritm);
	    $res = explode(";",$this->call_get(__FUNCTION__,$params,600));
		if (count($res)>=2)
			return new XHEPosition($res[0],$res[1]);
		else
			return new XHEPosition(-1,-1);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////

        // получить размер содержимого произвольного урла (по заголовку)
	function get_url_size($url)
        {
	   	$params = array( "url" => $url );
	    	return $this->call_get(__FUNCTION__,$params);
        }
        // получить страницу по произвольному урлу
	function load_web_page($url,$size=0)
	{
	   	$params = array( "url" => $url , "size" => $size );
	    	return $this->call_get(__FUNCTION__,$params);
	}
        // получить код ответа для заданной страницы по произвольному урлу
	function get_web_page_code($url)
	{
	   	$params = array( "url" => $url );
	    	return $this->call_get(__FUNCTION__,$params);
	}
	// сохранить содержимое произвольного урла в файл
	function save_url_to_file($url,$filepath,$timeout=9999)
        {
	   	$params = array( "url" => $url , "filepath" => $filepath);
	    	return $this->call_boolean(__FUNCTION__,$params,$timeout);
        }
        // получить домен по произвольному урлу
	function get_domain($url="",$level=-1)
	{
		if ($url=="")
                	$url=$this->get_location_url();
                $url=str_replace("http://","",$url);
		$url=str_replace("https://","",$url);
		$url=str_replace("www.","",$url);
 		$domens= explode("/", $url);
		$domen=$domens[0];
		$parts = explode(".", $domen);
                if (count($parts)>=$level && $level!=-1)
		{
			$res="";
			for ($i=0;$i<$level;$i++)
			{
				//echo $parts[count($parts)-$i-1];
				$res=$parts[count($parts)-$i-1].$res;
				if ($i<$level-1)
					$res=".".$res;
			}
			return $res;
		}
		else
			return $domen;
	}
        // перeвести домен в idn формат (например зона рф) 
	function convert_to_idn($domain)
	{
		global $bUTF8Ver;

		if (!$bUTF8Ver)
			$domain=iconv("windows-1251","utf-8",$domain);
		$res=idn_to_ascii($domain);
		return $res;
	}
        // перeвести домен из idn формата (например зона рф)
	function convert_from_idn($domain)
	{
		global $bUTF8Ver;

		$res=idn_to_utf8($domain);
		if (!$bUTF8Ver)
			$res=iconv("utf-8","windows-1251",$res);			

		return $res;
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////
};	
?>