<?php
/////////////////////////////////////////// anchor /////////////////////////////////////////////////////////
class XHEAnchor extends XHEAnchorCompatible
{
	//////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ /////////////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Anchor";
	}
        /////////////////////////////////////////////////////////////////////////////////////////////////////

        /////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить все href (без учета проверки : существует ли элемент)
	function get_all_hrefs($separator="<br>",$frame=-1)
	{
		$params = array( "separator" => $separator , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
        //  получить все href с заданными внутренними текстами (без учета проверки : существует ли элемент)
	function get_all_hrefs_by_inner_text($inner_text,$separator="<br>",$frame=-1)
	{
		$params = array( "inner_text" => $inner_text , "separator" => $separator , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
        // получить все href с заданными внутренними текстами (без учета проверки : существует ли элемент)
	function get_all_hrefs_by_inner_text_2($inner_text,$exactly=true,$separator="<br>",$frame=-1)
	{
		$params = array( "inner_text" => $inner_text , "exactly" => $exactly , "separator" => $separator , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить все href с заданными значениями аттрибута (без учета проверки : существует ли элемент)
	function get_all_hrefs_by_attribute($attr_name,$attr_value,$exactly=true,$separator="<br>",$frame=-1)
	{
		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "separator" => $separator , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}

	// получить все внутренние тексты по href (без учета проверки : существует ли элемент)
	function get_all_inner_texts_by_href($href,$separator="<br>",$exactly=true,$frame=-1)
	{
		return $this->z_get_all_inner_texts_by_href($href,$separator,$exactly,$frame);
	}
   	
	// получить все внешние ссылки, относительно заданного урла (без учета проверки : существует ли элемент)
	function get_all_external_inner_texts_and_hrefs($href,$navigate="false",$separator="<br>",$frame=-1)
	{
		$params = array( "href" => $href , "navigate" => $navigate , "separator" => $separator , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить все внутренние ссылки, относительно заданного урла (без учета проверки : существует ли элемент)
	function get_all_internal_inner_texts_and_hrefs($href,$navigate="false",$separator="<br>",$frame=-1)
	{
		$params = array( "href" => $href , "navigate" => $navigate , "separator" => $separator , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
};		
?>