<?php

///////////////////////////////////////////////// Image /////////////////////////////////////////////////////
class XHEImage extends XHEImageCompatible
{
	////////////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ ///////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Image";
	}
        /////////////////////////////////////////////////////////////////////////////////////////////////////

        /////////////////////////////////////////////////////////////////////////////////////////////////////

        // показать картинку с заданным номером
        function show_by_number($number,$frame=-1)
        {
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // показать картинку с заданным именем
        function show_by_name($name,$frame=-1)
        {
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // показать картинку с заданным src
        function show_by_src($src,$exactly=true,$frame=-1)
        {
		$this->wait_element_exist_by_attribute("src",$src,$exactly,$frame);		

		$params = array( "src" => $src , "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // показать картинку с заданным alt
        function show_by_alt($alt,$exactly=true,$frame=-1)
        {
		$this->wait_element_exist_by_attribute("alt",$alt,$exactly,$frame);		

		$params = array( "alt" => $alt , "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // показать картинку с заданным значением аттрибута
        function show_by_attribute($attr_name,$attr_value,$exactly=true,$frame=-1)
        {
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);		

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value ,  "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// проверить что картинка с заданным номером уже загружена
	function is_complete_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// проверить что картинка с заданным именем уже загружена
   	function is_complete_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params); 
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить дату создания картинки по её номеру
	function get_file_create_date_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
   	// получить дату создания картинки по её имени
	function get_file_create_date_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params); 
	}

	// получить дату последнего изменения картинки по её номеру
	function get_file_modification_date_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить дату последнего изменения картинки по её имени
	function get_file_modification_date_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params); 
	}

	// получить размер картинки по её номеру
	function get_file_size_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить размер картинки по её имени
	function get_file_size_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params); 
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

    	// распознать капчу из картинки встроенными функциями
	function recognize_captcha($file_path,$type)
	{
		$params = array( "file_path" => $file_path , "type" => $type );
		return $this->call_get(__FUNCTION__,$params);
	}
        // распознать капчу из картинки через сервис antigate.com
        function recognize_by_anticaptcha($src,$file_path,$key,$path='http://antigate.com',$is_verbose = true, $rtimeout = 5, $mtimeout = 120, $is_phrase = 0, $is_regsense = 0, $is_numeric = 0, $min_len = 0, $max_len = 0,$frame=-1,$is_russian = 0)
        {
		// save
		if ($src!="")
                {
			$this->wait_element_exist_by_attribute("src",$src,false,$frame);		

			if (!$this->screenshot_by_src($file_path,$src,false,$frame))
				return false;
                }

		// recognize
               	global $anticapcha;
               	return $anticapcha->recognize($file_path,$key,$path,$is_verbose,$rtimeout,$mtimeout,$is_phrase,$is_regsense,$is_numeric,$min_len,$max_len,$is_russian);
        }
        // распознать капчу из картинки через сервис rucaptcha.com
        function recognize_by_rucaptcha($src,$file_path,$key,$path='http://rucaptcha.com',$is_verbose = true, $rtimeout = 5, $mtimeout = 120, $is_phrase = 0, $is_regsense = 0, $is_numeric = 0, $min_len = 0, $max_len = 0,$frame=-1,$is_russian = 0)
        {
		// save
		if ($src!="")
                {
			$this->wait_element_exist_by_attribute("src",$src,false,$frame);		

			if (!$this->screenshot_by_src($file_path,$src,false,$frame))
				return false;
                }

		// recognize
               	global $rucaptcha;
               	return $rucaptcha->recognize($file_path,$key,$path,$is_verbose,$rtimeout,$mtimeout,$is_phrase,$is_regsense,$is_numeric,$min_len,$max_len,$is_russian);
        }
        // распознать капчу из картинки через сервис captcha24.com
        function recognize_by_captcha24($src,$file_path,$key,$path='http://captcha24.com',$is_verbose = true, $rtimeout = 5, $mtimeout = 120, $is_phrase = 0, $is_regsense = 0, $is_numeric = 0, $min_len = 0, $max_len = 0,$frame=-1,$is_russian = 0)
        {
		// save
		if ($src!="")
                {
			$this->wait_element_exist_by_attribute("src",$src,false,$frame);		

			if (!$this->screenshot_by_src($file_path,$src,false,$frame))
				return false;
                }

		// recognize
               	global $captcha24;
               	return $captcha24->recognize($file_path,$key,$path,$is_verbose,$rtimeout,$mtimeout,$is_phrase,$is_regsense,$is_numeric,$min_len,$max_len,$is_russian);
        }
        // распознать капчу из картинки через сервис ripcaptcha.com
        function recognize_by_ripcaptcha($src,$file_path,$key,$path='http://ripcaptcha.com',$is_verbose = true, $rtimeout = 5, $mtimeout = 120, $is_phrase = 0, $is_regsense = 0, $is_numeric = 0, $min_len = 0, $max_len = 0,$frame=-1,$is_russian = 0)
        {
		// save
		if ($src!="")
                {
			$this->wait_element_exist_by_attribute("src",$src,false,$frame);		

			if (!$this->screenshot_by_src($file_path,$src,false,$frame))
				return false;
                }

		// recognize
               	global $ripcaptcha;
               	return $ripcaptcha->recognize($file_path,$key,$path,$is_verbose,$rtimeout,$mtimeout,$is_phrase,$is_regsense,$is_numeric,$min_len,$max_len,$is_russian);
        }
        // распознать капчу из картинки через сервис bypasscaptcha.com
        function recognize_by_bypasscaptcha($systemkey,$file_path,$src="",$frame=-1)
        {
		// save
		if ($src!="")
		{
			$this->wait_element_exist_by_attribute("src",$src,false,$frame);

			if (!$this->screenshot_by_src($file_path,$src,false,$frame))
				return false;
		}

          
		// recognize
          	global $bypasscaptcha;
          	$bypasscaptcha->set_system_key($systemkey);
          	return $bypasscaptcha->recognize($file_path);
        }        	
        // распознать капчу из картинки через сервис captchabot.com
        function recognize_by_captchabot($systemkey,$file_path,$src="",$code=0,$frame=-1)
        {
		// save
		if ($src!="")
		{
			$this->wait_element_exist_by_attribute("src",$src,false,$frame);

			if (!$this->screenshot_by_src($file_path,$src,false,$frame))
				return false;
		}

          
		// recognize
          	global $captchabot;
          	$captchabot->set_system_key($systemkey);
          	return $captchabot->recognize($file_path,$code);
        }        	

        /////////////////////////////////////////////////////////////////////////////////////////////////////

        // получить новую картинку - как часть заданной
        function get_image($src_path,$image_path,$x,$y,$width,$height)
        {
		$params = array( "src_path" => $src_path , "image_path" => $image_path , "x" => $x , "y" => $y , "width" => $width , "height" => $height  );
		return $this->call_boolean(__FUNCTION__,$params);
        }        	
        // получить x - координату вхождения заданной картинки
        function get_x_of_image($src_path,$image_path,$koeff=0.95)
        {
		$params = array( "src_path" => $src_path , "image_path" => $image_path , "koeff" => $koeff );
		return $this->call_get(__FUNCTION__,$params);
        }        	
        // получить y - координату вхождения заданной картинки
        function get_y_of_image($src_path,$image_path,$koeff=0.95)
        {
		$params = array( "src_path" => $src_path , "image_path" => $image_path , "koeff" => $koeff );
		return $this->call_get(__FUNCTION__,$params);
        }        	
        // получить позицию вхождения заданной картинки
        function get_pos_of_image($src_path,$image_path,$koeff=0.95)
        {
		$params = array( "src_path" => $src_path , "image_path" => $image_path , "koeff" => $koeff );
	        $res = explode("@",$this->call_get(__FUNCTION__,$params,600));
		if (count($res)>=2)
			return new XHEPosition($res[0],$res[1]);
		else
			return new XHEPosition(-1,-1);
        }        	
        // получить позицию вхождения заданной картинки
        function get_all_pos_of_image($src_path,$image_path,$koeff=0.95)
        {
		$out= array();				
		$params = array( "src_path" => $src_path , "image_path" => $image_path , "koeff" => $koeff );
		$res = $this->call_get(__FUNCTION__,$params,600);			        
		if ($res=="")
			return $out;		
		$res = explode("@",$res);		
		for ($i=0;$i<count($res);$i++)		
		{
			$pp = explode(":",$res[$i]);
			array_push($out, new XHEPosition($pp[0],$pp[1]));
		}
		return $out;
        }        	
        // добавить картинку к заданной
        function add_image($src_path,$image_path,$side="right")
        {
		$params = array( "src_path" => $src_path , "image_path" => $image_path , "side" => $side );
		return $this->call_boolean(__FUNCTION__,$params);
        }        		

        /////////////////////////////////////////////////////////////////////////////////////////////////////

	// создать медианное изображние для папки с изображениями (для теста водяных знаков)
	function create_median_image_by_folder_of_images($image_path, $folder)
	{
		$params = array( "image_path" => $image_path , "folder" => $folder );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////
};	
?>