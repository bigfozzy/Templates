<?php
///////////////////////////////////////////// Общее для всех DOM ////////////////////////////////////////////
class XHEBaseDOMVisual extends XHEBaseDOM
{     
	////////////////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ ///////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->prefix = "-bvd-";
		return XHEBaseDOM($server,$password);
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////

        /////////////////////////////////////////////////////////////////////////////////////////////////////

	// нажать, используя номер
	function click_by_number($number,$frame=-1,$wait_browser=true)
	{
		return $this->z_click_by_number($number,$frame,$wait_browser);
	}
        // нажать, используя имя
	function click_by_name($name,$frame=-1,$wait_browser=true)
	{
		return $this->z_click_by_name($name,$frame,$wait_browser);
	}
   	// нажать, используя id
	function click_by_id($id,$exactly=true,$frame=-1,$wait_browser=true)
	{
		return $this->z_click_by_id($id,$exactly,$frame,$wait_browser);
	}
   	// нажать, используя value
	function click_by_value($value,$exactly=true,$frame=-1,$wait_browser=true)
	{
		return $this->z_click_by_value($value,$exactly,$frame,$wait_browser);
	}
	// нажать, используя alt
	function click_by_alt($alt,$exactly=true,$frame=-1,$wait_browser=true)
	{
		return $this->z_click_by_alt($alt,$exactly,$frame,$wait_browser);
	}
	// нажать, используя src
	function click_by_src($src,$exactly=true,$frame=-1,$wait_browser=true)
	{
		return $this->z_click_by_src($src,$exactly,$frame,$wait_browser);
	}
	// нажать, используя href
	function click_by_href($url,$exactly=true,$frame=-1,$wait_browser=true)
	{
		return $this->z_click_by_href($url,$exactly,$frame,$wait_browser);
	}	
	// нажать, используя внутренний текст
	function click_by_inner_text($text,$exactly=true,$frame=-1,$wait_browser=true)
	{
		return $this->z_click_by_inner_text($text,$exactly,$frame,$wait_browser);
	}
	// нажать, используя внутренний хтмл
	function click_by_inner_html($inner_html,$exactly=true,$frame=-1,$wait_browser=true)
	{
		return $this->z_click_by_inner_html($inner_html,$exactly,$frame,$wait_browser);
	}
	// нажать, используя значение атрибута
	function click_by_attribute($attr_name,$attr_value,$exactly=true,$frame=-1,$wait_browser=true)
	{
		return $this->z_click_by_attribute($attr_name,$attr_value,$exactly,$frame,$wait_browser);
	}	

        // нажать, используя номер, в форме с заданным номером
	function click_by_number_by_form_number($number,$form_number,$frame=-1,$wait_browser=true)
	{
		return $this->z_click_by_number_by_form_number($number,$form_number,$frame,$wait_browser);
	}
        // нажать, используя имя, в форме с заданным номером
	function click_by_name_by_form_number($name,$form_number,$frame=-1,$wait_browser=true)
	{
		return $this->z_click_by_name_by_form_number($name,$form_number,$frame,$wait_browser);
	}
        // нажать, используя значение аттрибута, в форме с заданным номером
	function click_by_attribute_by_form_number($attr_name,$attr_value,$exactly,$form_number,$frame=-1,$wait_browser=true)
	{
		return $this->z_click_by_attribute_by_form_number($attr_name,$attr_value,$exactly,$form_number,$frame,$wait_browser);
	}

        // нажать, используя номер, в форме с заданным именем
	function click_by_number_by_form_name($number,$form_name,$frame=-1,$wait_browser=true)
	{
		return $this->z_click_by_number_by_form_name($number,$form_name,$frame,$wait_browser);
	}
        // нажать, используя имя, в форме с заданным именем
	function click_by_name_by_form_name($name,$form_name,$frame=-1,$wait_browser=true)
	{
		return $this->z_click_by_name_by_form_name($name,$form_name,$frame,$wait_browser);
	}
        // нажать, используя значение аттрибута, в форме с заданным именем
	function click_by_attribute_by_form_name($attr_name,$attr_value,$exactly,$form_name,$frame=-1,$wait_browser=true)
	{
		return $this->z_click_by_attribute_by_form_name($attr_name,$attr_value,$exactly,$form_name,$frame,$wait_browser);
	}

        // нажать случайный элемент
	function click_random($frame=-1,$wait_browser=true)
	{
		return $this->z_click_random($frame,$wait_browser);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// послать событие по номеру
	function send_event_by_number($number,$event,$frame=-1,$wait_browser=true)
	{
		return $this->z_send_event_by_number($number,$event,$frame,$wait_browser);
	}
	// послать событие по имени
	function send_event_by_name($name,$event,$frame=-1,$wait_browser=true)
	{
		return $this->z_send_event_by_name($name,$event,$frame,$wait_browser);
	}
	// послать событие по id
	function send_event_by_id($id,$exactly,$event,$frame=-1,$wait_browser=true)
	{
		return $this->z_send_event_by_id($id,$exactly,$event,$frame,$wait_browser);
	}
	// послать событие по урлу
	function send_event_by_href($url,$exactly,$event,$frame=-1,$wait_browser=true)
	{
		return $this->z_send_event_by_href($url,$exactly,$event,$frame,$wait_browser);
	}
	// послать событие по внутреннему тексту
	function send_event_by_inner_text($text,$exactly,$event,$frame=-1,$wait_browser=true)
	{
		return $this->z_send_event_by_inner_text($text,$exactly,$event,$frame,$wait_browser);
	}
	// послать событие по внутреннему хтмл
	function send_event_by_inner_html($html,$exactly,$event,$frame=-1,$wait_browser=true)
	{
		return $this->z_send_event_by_inner_html($html,$exactly,$event,$frame,$wait_browser);
	}
	// послать событие по атрибуту
	function send_event_by_attribute($atr_name,$atr_value,$exactly,$event,$frame=-1,$wait_browser=true)
	{
		return $this->z_send_event_by_attribute($atr_name,$atr_value,$exactly,$event,$frame,$wait_browser);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// установить фокус, используя номер
	function set_focus_by_number($number,$frame=-1)
	{
		return $this->z_set_focus_by_number($number,$frame);
	}
   	// установить фокус, используя имя
	function set_focus_by_name($name,$frame=-1)
	{
		return $this->z_set_focus_by_name($name,$frame);
	}
   	// установить фокус, используя href
	function set_focus_by_href($href,$exactly=true,$frame=-1)
	{
		return $this->z_set_focus_by_href($href,$exactly,$frame);
	}
   	// установить фокус, используя внутренний текст
	function set_focus_by_inner_text($inner_text,$exactly=true,$frame=-1)
	{
		return $this->z_set_focus_by_inner_text($inner_text,$exactly,$frame);
	}
   	// установить фокус, используя внутренний хтмл
	function set_focus_by_inner_html($inner_html,$exactly=true,$frame=-1)
	{
		return $this->z_set_focus_by_inner_html($inner_html,$exactly,$frame);
	}
   	// установить фокус, используя значение аттрибута
	function set_focus_by_attribute($attr_name,$attr_value,$exactly=true,$frame=-1)
	{
		return $this->z_set_focus_by_attribute($attr_name,$attr_value,$exactly,$frame);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // задать значение элементу по его номеру
        function set_value_by_number($number,$value,$frame=-1)
        {
		return $this->z_set_value_by_number($number,$value,$frame);
        }
        // задать значение элементу по его имени
        function set_value_by_name($name,$value,$frame=-1)
        {
		return $this->z_set_value_by_name($name,$value,$frame);
        }
        // задать значение элементу по его аттрибуту
        function set_value_by_attribute($attr_name,$attr_value,$exactly,$value,$frame=-1)
        {
		return $this->z_set_value_by_attribute($attr_name,$attr_value,$exactly,$value,$frame);
        }

        // задать значение элементу по номеру, в форме с заданным номером
        function set_value_by_number_by_form_number($number,$value,$form_number,$frame=-1)
        {
		return $this->z_set_value_by_number_by_form_number($number,$value,$form_number,$frame);
        }
        // задать значение элементу по имени, в форме с заданным номером
        function set_value_by_name_by_form_number($name,$value,$form_number,$frame=-1)
        {
		return $this->z_set_value_by_name_by_form_number($name,$value,$form_number,$frame);
        }
        // задать значение элементу по значению аттрибута, в форме с заданным номером
        function set_value_by_attribute_by_form_number($attr_name,$attr_value,$exactly,$value,$form_number,$frame=-1)
        {
		return $this->z_set_value_by_attribute_by_form_number($attr_name,$attr_value,$exactly,$value,$form_number,$frame);
        }

        // задать значение элементу по номеру, в форме с заданным именем
        function set_value_by_number_by_form_name($number,$value,$form_name,$frame=-1)
        {
		return $this->z_set_value_by_number_by_form_name($number,$value,$form_name,$frame);
        }
        // задать значение элементу по имени, в форме с заданным именем
        function set_value_by_name_by_form_name($name,$value,$form_name,$frame=-1)
        {
		return $this->z_set_value_by_name_by_form_name($name,$value,$form_name,$frame);
        }
        // задать значение элементу по значению аттрибута, в форме с заданным именем
        function set_value_by_attribute_by_form_name($attr_name,$attr_value,$exactly,$value,$form_name,$frame=-1)
        {
		return $this->z_set_value_by_attribute_by_form_name($attr_name,$attr_value,$exactly,$value,$form_name,$frame);
        }

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// установить внутренний текст, используя номер
	function set_inner_text_by_number($number,$text,$frame=-1)
	{
		 return $this->z_set_inner_text_by_number($number,$text,$frame);
	}	
        // установить внутренний текст, используя имя
	function set_inner_text_by_name($name,$text,$frame=-1)
	{
	         return $this->z_set_inner_text_by_name($name,$text,$frame);
	}
	// установить внутренний текст, используя значение аттрибута
	function set_inner_text_by_attribute($attr_name,$attr_value,$exactly=true,$text,$frame=-1)
	{
		if ($text===false || $text===true )
	        	return $this->z_set_inner_text_by_attribute($attr_name,$attr_value,$text,$exactly,$frame); // был прощелк с порядком параметров - костыль
		else
	        	return $this->z_set_inner_text_by_attribute($attr_name,$attr_value,$exactly,$text,$frame);
	}

	// установить внутренний html, используя номер
	function set_inner_html_by_number($number,$html,$frame=-1)
	{
		return $this->z_set_inner_html_by_number($number,$html,$frame);
	}	
        // установить внутренний html, используя имя
	function set_inner_html_by_name($name,$html,$frame=-1)
	{
		return $this->z_set_inner_html_by_name($name,$html,$frame);
	}
	// установить внутренний html, используя значение аттрибута
	function set_inner_html_by_attribute($attr_name,$attr_value,$html,$exactly=true,$frame=-1)
	{
		return $this->z_set_inner_html_by_attribute($attr_name,$attr_value,$html,$exactly,$frame);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // добавить атрибут, используя номер
	function add_attribute_by_number($number,$name_attr,$value_attr,$frame=-1)
	{
               	return $this->z_add_attribute_by_number($number,$name_attr,$value_attr,$frame);
	}
	// добавить атрибут, используя имя
	function add_attribute_by_name($name,$name_attr,$value_attr,$frame=-1)
	{
               	return $this->z_add_attribute_by_name($name,$name_attr,$value_attr,$frame);
	}
	// добавить аттрибут, используя внутренний текст
	function add_attribute_by_inner_text($inner_text,$exactly,$name_atr,$value_atr,$frame=-1)
	{
		return $this->z_add_attribute_by_inner_text($inner_text,$exactly,$name_atr,$value_atr,$frame);
	}    
	// добавить аттрибут, используя внутренний html
	function add_attribute_by_inner_html($inner_html,$exactly,$name_atr,$value_atr,$frame=-1)
	{
		return $this->z_add_attribute_by_inner_html($inner_html,$exactly,$name_atr,$value_atr,$frame);
	}    
	// добавить аттрибут, используя значение аттрибута
	function add_attribute_by_attribute($atr_name,$atr_value,$exactly,$name_atr,$value_atr,$frame=-1)
	{
		return $this->z_add_attribute_by_attribute($atr_name,$atr_value,$exactly,$name_atr,$value_atr,$frame);
	}    

	//  задать значение аттрибута, используя номер
        function set_attribute_by_number($number,$name_atr,$value_atr,$frame=-1)
        {
		return $this->z_set_attribute_by_number($number,$name_atr,$value_atr,$frame);
        }
	// задать значение аттрибута, используя имя
        function set_attribute_by_name($name,$name_atr,$value_atr,$frame=-1)
        {
		return $this->z_set_attribute_by_name($name,$name_atr,$value_atr,$frame);
        }
	// задать значение аттрибута, используя внутренний текст
        function set_attribute_by_inner_text($inner_text,$exactly,$name_atr,$value_atr,$frame=-1)
        {
		return $this->z_set_attribute_by_inner_text($inner_text,$exactly,$name_atr,$value_atr,$frame);
        }
	// задать значение аттрибута, используя внутренний html
        function set_attribute_by_inner_html($inner_html,$exactly,$name_atr,$value_atr,$frame=-1)
        {
		return $this->z_set_attribute_by_inner_html($inner_html,$exactly,$name_atr,$value_atr,$frame);
        }
	// задать значение аттрибута, используя значение аттрибута
        function set_attribute_by_attribute($atr_name,$atr_value,$exactly,$name_atr,$value_atr,$frame=-1)
        {
		return $this->z_set_attribute_by_attribute($atr_name,$atr_value,$exactly,$name_atr,$value_atr,$frame);
        }

	// удалить атрибут, используя номер
	function remove_attribute_by_number($number,$name_atr,$frame=-1)
	{
		return $this->z_remove_attribute_by_number($number,$name_atr,$frame);
	}
	// удалить атрибут, используя имя
	function remove_attribute_by_name($name,$name_atr,$frame=-1)
	{
		return $this->z_remove_attribute_by_name($name,$name_atr,$frame);
	}
	// удалить аттрибут, используя внутренний текст
	function remove_attribute_by_inner_text($inner_text,$exactly,$name_atr,$frame=-1)
	{
		return $this->z_remove_attribute_by_inner_text($inner_text,$exactly,$name_atr,$frame);
	}
	// удалить аттрибут, используя внутренний html
	function remove_attribute_by_inner_html($inner_html,$exactly,$name_atr,$frame=-1)
	{
		return $this->z_remove_attribute_by_inner_html($inner_html,$exactly,$name_atr,$frame);
	}
	// удалить аттрибут, используя значение аттрибута
	function remove_attribute_by_attribute($atr_name,$atr_value,$exactly,$name_atr,$frame=-1)
	{
		return $this->z_remove_attribute_by_attribute($atr_name,$atr_value,$exactly,$name_atr,$frame);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// скриншот, используя номер
	function screenshot_by_number($file_path,$number,$frame=-1,$as_gray=false)
	{
		return $this->z_screenshot_by_number($file_path,$number,$frame,$as_gray);
	}
  	// скриншот, используя имя
	function screenshot_by_name($file_path,$name,$frame=-1,$as_gray=false)
	{
		return $this->z_screenshot_by_name($file_path,$name,$frame,$as_gray);
	}
    	// скриншот, используя src
	function screenshot_by_src($file_path,$src,$exactly=true,$frame=-1,$as_gray=false)
	{
		return $this->z_screenshot_by_src($file_path,$src,$exactly,$frame,$as_gray);
	}
    	// скриншот, используя значение аттрибута
	function screenshot_by_attribute($file_path,$atr_name,$atr_value,$exactly=true,$frame=-1,$as_gray=false)
	{
		return $this->z_screenshot_by_attribute($file_path,$atr_name,$atr_value,$exactly,$frame,$as_gray);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // проверить, есть ли элемент с заданным номером
        function is_exist_by_number($number,$frame=-1)
        {
		return $this->z_is_exist_by_number($number,$frame);
        }
        // проверить, есть ли элемент с заданным именем
        function is_exist_by_name($name,$frame=-1)
        {
		return $this->z_is_exist_by_name($name,$frame);
        }
        // проверить, есть ли элемент с заданным id
        function is_exist_by_id($id,$exactly=true,$frame=-1)
        {
		return $this->z_is_exist_by_id($id,$exactly,$frame);
        }
	// проверить, есть ли элемент с заданным href
	function is_exist_by_href($href,$exactly=true,$frame=-1)
	{
		return $this->z_is_exist_by_href($href,$exactly,$frame);
	}	
	// проверить, есть ли элемент с заданным alt
	function is_exist_by_alt($alt,$exactly=true,$frame=-1)
	{
		return $this->z_is_exist_by_alt($alt,$exactly,$frame);
	}	
	// проверить, есть ли элемент с заданным src
	function is_exist_by_src($src,$exactly=true,$frame=-1)
	{
		return $this->z_is_exist_by_src($src,$exactly,$frame);
	}	
	// проверить, есть ли элемент с заданным внутренним текстом 
	function is_exist_by_inner_text($inner_text,$exactly=true,$frame=-1)
	{
		return $this->z_is_exist_by_inner_text($inner_text,$exactly,$frame);
	}	
	// проверить, есть ли элемент с заданным внутренним хтмл 
	function is_exist_by_inner_html($inner_html,$exactly=true,$frame=-1)
	{
		return $this->z_is_exist_by_inner_html($inner_html,$exactly,$frame);
	}	
	// проверить есть ли элемент с заданным значением атрибута
	function is_exist_by_attribute($atr_name,$atr_value,$exactly=true,$frame=-1)
	{
		return $this->z_is_exist_by_attribute($atr_name,$atr_value,$exactly,$frame);
	}	
	// проверить есть ли элемент с заданным xpath
	function is_exist_by_xpath($xpath)
	{
		return $this->z_is_exist_by_xpath($xpath);
	}	

	// проверить есть ли элемент с заданным значением атрибута в форме с заданным номером
	function is_exist_by_attribute_by_form_number($atr_name,$atr_value,$exactly,$form_number,$frame=-1)
	{
		return $this->z_is_exist_by_attribute_by_form_number($atr_name,$atr_value,$exactly,$form_number,$frame);
	}	
	// проверить есть ли элемент с заданным значением атрибута в форме с заданным именем
	function is_exist_by_attribute_by_form_name($atr_name,$atr_value,$exactly,$form_name,$frame=-1)
	{
		return $this->z_is_exist_by_attribute_by_form_name($atr_name,$atr_value,$exactly,$form_name,$frame);
	}	

	/////////////////////////////////////////////////////////////////////////////////////////////////////

   	// получить номер по имени
	function get_number_by_name($name,$frame=-1)
	{
		return $this->z_get_number_by_name($name,$frame);
	}
   	// получить номер по id
	function get_number_by_id($id,$frame=-1)
	{
		return $this->z_get_number_by_id($id,$frame);
	}
	// получить номер по src
	function get_number_by_src($src,$exactly=true,$frame=-1)
	{
		return $this->z_get_number_by_src($src,$exactly,$frame);
	}
	// получить номер по href
	function get_number_by_href($href,$exactly=true,$frame=-1)
	{
		return $this->z_get_number_by_href($href,$exactly,$frame);
	}
   	// получить номер по внутреннему тексту
	function get_number_by_inner_text($innertext,$exactly=true,$frame=-1)
	{
		return $this->z_get_number_by_inner_text($innertext,$exactly,$frame);
	}
   	// получить номер по внутреннему html
	function get_number_by_inner_html($innerhtml,$exactly=true,$frame=-1)
	{
		return $this->z_get_number_by_inner_html($innerhtml,$exactly,$frame);
	}
        // получить номер по значению атрибута
        function get_number_by_attribute($atr_name,$atr_value,$exactly=true,$frame=-1)
        {
		return $this->z_get_number_by_attribute($atr_name,$atr_value,$exactly,$frame);
        }

	// получить имя по номеру
	function get_name_by_number($number,$frame=-1)
	{
		return $this->z_get_name_by_number($number,$frame);
	}

        // получить значение атрибута по номеру
        function get_attribute_by_number($number,$name_atr,$frame=-1)
        {
		return $this->z_get_attribute_by_number($number,$name_atr,$frame);
        }
        // получить значение атрибута по имени
        function get_attribute_by_name($name,$name_atr,$frame=-1)
        {
		return $this->z_get_attribute_by_name($name,$name_atr,$frame);
        }
        // получить значение атрибута по src
        function get_attribute_by_src($src,$exactly,$name_atr,$frame=-1)
        {
               return $this->z_get_attribute_by_src($src,$exactly,$name_atr,$frame);
        }
        // получить значение атрибута по внутреннему тексту
        function get_attribute_by_inner_text($inner_text,$exactly,$name_atr,$frame=-1)
        {
               return $this->z_get_attribute_by_inner_text($inner_text,$exactly,$name_atr,$frame);
        }
        // получить значение атрибута по внутреннему html
        function get_attribute_by_inner_html($inner_html,$exactly,$name_atr,$frame=-1)
        {
               return $this->z_get_attribute_by_inner_html($inner_html,$exactly,$name_atr,$frame);
        }
        // получить значение атрибута по атрибуту
        function get_attribute_by_attribute($atr_name,$atr_value,$exactly,$name_atr,$frame=-1)
        {
	       return $this->z_get_attribute_by_attribute($atr_name,$atr_value,$exactly,$name_atr,$frame); 
        }

	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // получить value по номеру
	function get_value_by_number($number,$frame=-1)
	{
		return $this->z_get_value_by_number($number,$frame);
	}	
        // получить value по имени
        function get_value_by_name($name,$frame=-1)
        {
		return $this->z_get_value_by_name($name,$frame);
        }
        // получить value по атрибуту
        function get_value_by_attribute($atr_name,$atr_value,$exactly=true,$frame=-1)
        {		
		return $this->z_get_value_by_attribute($atr_name,$atr_value,$exactly,$frame);
        }

   	// получить src по номеру
	function get_src_by_number($number,$frame=-1)
	{
		return $this->z_get_src_by_number($number,$frame);
	}
    	// получить src по имени
	function get_src_by_name($name,$frame=-1)
	{
		return $this->z_get_src_by_name($name,$frame);
	}

	// получить alt по номеру
	function get_alt_by_number($number,$frame=-1)
	{
		return $this->z_get_alt_by_number($number,$frame);
	}
	// получить alt по имени
	function get_alt_by_name($name,$frame=-1)
	{
		return $this->z_get_alt_by_name($name,$frame);
	}

	// получить href по номеру
	function get_href_by_number($number,$frame=-1)
	{
		return $this->z_get_href_by_number($number,$frame);
	}
        // получить href по имени
	function get_href_by_name($name,$frame=-1)
	{
		return $this->z_get_href_by_name($name,$frame);
	}
        // получить href по внутреннему тексту
	function get_href_by_inner_text($inner_text,$exactly=true,$frame=-1)
	{
		return $this->z_get_href_by_inner_text($inner_text,$exactly,$frame);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить внутренний текст по номеру
	function get_inner_text_by_number($number,$frame=-1)
	{
		return $this->z_get_inner_text_by_number($number,$frame);
	}
	// получить внутренний текст по имени
	function get_inner_text_by_name($name,$frame=-1)
	{
		return $this->z_get_inner_text_by_name($name,$frame);
	}
        // получить внутренний текст по id
        function get_inner_text_by_id($id,$frame=-1)
        {
		return $this->z_get_inner_text_by_id($id,$frame);
        }
	// получить внутренний текст по href
	function get_inner_text_by_href($href,$exactly=true,$frame=-1)
	{
		return $this->z_get_inner_text_by_href($href,$exactly,$frame);
	}
	// получить внутренний текст по значению аттрибута
	function get_inner_text_by_attribute($attr_name,$attr_value,$exactly=true,$frame=-1)
	{
		return $this->z_get_inner_text_by_attribute($attr_name,$attr_value,$exactly,$frame);
	}

        // получить внутренний html по номеру
        function get_inner_html_by_number($number,$frame=-1)
        {
		return $this->z_get_inner_html_by_number($number,$frame);
        }
        // получить внутренний html по имени
        function get_inner_html_by_name($name,$frame=-1)
        {
                return $this->z_get_inner_html_by_name($name,$frame);
        }
        // получить внутренний html по id
        function get_inner_html_by_id($id,$frame=-1)
        {
		return $this->z_get_inner_html_by_id($id,$frame);
        }
        // получить внутренний html по значению аттрибута
	function get_inner_html_by_attribute($attr_name,$attr_value,$exactly=true,$frame=-1)
        {
		return $this->z_get_inner_html_by_attribute($attr_name,$attr_value,$exactly,$frame);
        }

	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // проверить доступность элемента по номеру
        function is_disabled_by_number($number,$frame=-1)
        {
               return $this->z_is_disabled_by_number($number,$frame);
        }
        // проверить доступность элемента по имени
        function is_disabled_by_name($name,$frame=-1)
        {
               return $this->z_is_disabled_by_name($name,$frame); 
        }

        // получить все аттрибуты элемента по его номеру
        function get_all_attributes_by_number($number,$frame=-1)
        {
               return $this->z_get_all_attributes_by_number($number,$frame);
        }
        // получить все аттрибуты элемента по его имени
        function get_all_attributes_by_name($name,$frame=-1)
        {
               return $this->z_get_all_attributes_by_name($name,$frame);
        }
	// получить все аттрибуты элемента по src
        function get_all_attributes_by_src($src,$exactly="true",$frame=-1)
        {
               return $this->z_get_all_attributes_by_src($src,$exactly,$frame);
        }

        // получить все значения атрибутов элемента по его номеру
        function get_all_attributes_values_by_number($number,$frame=-1)
        {
		return $this->z_get_all_attributes_values_by_number($number,$frame);
        }
        // получить все значения атрибутов элемента по его имени
        function get_all_attributes_values_by_name($name,$frame=-1)
        {
		return $this->z_get_all_attributes_values_by_name($name,$frame);
        }
        // получить все значения атрибутов элемента по src
        function get_all_attributes_values_by_src($src,$exactly=true,$frame=-1)
        {
		return $this->z_get_all_attributes_values_by_src($src,$exactly,$frame);
        }

        // получить все события элемента по его номеру
        function get_all_events_by_number($number,$frame=-1)
        {
		return $this->z_get_all_events_by_number($number,$frame);
        }
        // получить все события элемента по его имени
        function get_all_events_by_name($name,$frame=-1)
        {
		return $this->z_get_all_events_by_name($name,$frame);
        }
	// получить все события элемента по src
        function get_all_events_by_src($src,$exactly=true,$frame=-1)
        {
		return $this->z_get_all_events_by_src($src,$exactly,$frame);
        }

   	// получить номера дочерних элементов по его номеру
	function get_numbers_child_by_number($number,$element_type="",$frame=-1,$include_subchildren=false)
	{
		return $this->z_get_numbers_child_by_number($number,$element_type,$frame,$include_subchildren);
	}
   	// получить номера дочерних элементов по его имени
	function get_numbers_child_by_name($name,$element_type="",$frame=-1,$include_subchildren=false)
	{
		return $this->z_get_numbers_child_by_name($name,$element_type,$frame,$include_subchildren);
	}
   	// получить номера дочерних элементов по его id
	function get_numbers_child_by_id($id,$element_type="",$frame=-1,$include_subchildren=false)
	{
		return $this->z_get_numbers_child_by_id($id,$element_type,$frame,$include_subchildren);
	}
   	// получить номера дочерних элементов по значению его аттрибута
	function get_numbers_child_by_attribute($attr_name,$attr_value,$exactly=true,$element_type="",$frame=-1,$include_subchildren=false)
	{
		return $this->z_get_numbers_child_by_attribute($attr_name,$attr_value,$exactly,$element_type,$frame,$include_subchildren);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить X левого верхнего угла элемента по номеру
	function get_x_by_number($number,$frame=-1)
	{
        	return $this->z_get_x_by_number($number,$frame);
	}
        // получить X левого верхнего угла элемента по имени
	function get_x_by_name($name,$frame=-1)
	{
		return $this->z_get_x_by_name($name,$frame);
	}
	// получить X левого верхнего угла элемента по href
	function get_x_by_href($href,$exactly=true,$frame=-1)
	{
		return $this->z_get_x_by_href($href,$exactly,$frame);
	}	
	// получить X левого верхнего угла элемента по внутрененму тексту
	function get_x_by_inner_text($inner_text,$exactly=true,$frame=-1)
	{
		return $this->z_get_x_by_inner_text($inner_text,$exactly,$frame);
	}
        // получить X левого верхнего угла элемента по внутреннему html
        function get_x_by_inner_html($inner_html,$exactly=true,$frame=-1)
        {
		return $this->z_get_x_by_inner_html($inner_html,$exactly,$frame);
        }
	// получить X левого верхнего угла элемента по значению атрибута
	function get_x_by_attribute($attr_name,$attr_value,$exactly=true,$frame=-1)
	{
		return $this->z_get_x_by_attribute($attr_name,$attr_value,$exactly,$frame);
	}

	// получить Y левого верхнего угла элемента по номеру
	function get_y_by_number($number,$frame=-1)
	{
        	return $this->z_get_y_by_number($number,$frame);
	}
        // получить Y левого верхнего угла элемента по имени
	function get_y_by_name($name,$frame=-1)
	{
		return $this->z_get_y_by_name($name,$frame);
	}
	// получить Y левого верхнего угла элемента по href
	function get_y_by_href($href,$exactly=true,$frame=-1)
	{
		return $this->z_get_y_by_href($href,$exactly,$frame);
	}	
	// получить Y левого верхнего угла элемента по внутрененму тексту
	function get_y_by_inner_text($inner_text,$exactly=true,$frame=-1)
	{
		return $this->z_get_y_by_inner_text($inner_text,$exactly,$frame);
	}
        // получить Y левого верхнего угла элемента по внутреннему html
        function get_y_by_inner_html($inner_html,$exactly=true,$frame=-1)
        {
		return $this->z_get_y_by_inner_html($inner_html,$exactly,$frame);
        }
	// получить Y левого верхнего угла элемента по значению атрибута
	function get_y_by_attribute($attr_name,$attr_value,$exactly=true,$frame=-1)
	{
		return $this->z_get_y_by_attribute($attr_name,$attr_value,$exactly,$frame);
	}	

	//////////////////////////////////// GET SIZES /////////////////////////////////////////

	// получить ширину элемента по номеру
	function get_width_by_number($number,$frame=-1)
	{
		return $this->z_get_width_by_number($number,$frame);
	}
        // получить ширину элемента по имени
        function get_width_by_name($name,$frame=-1)
        {
                return $this->z_get_width_by_name($name,$frame);
        }
        // получить ширину элемента по src
        function get_width_by_src($src,$exactly=true,$frame=-1)
        {
                return $this->z_get_width_by_src($src,$exactly,$frame);
        }
        // получить ширину элемента по href
        function get_width_by_href($href,$exactly=true,$frame=-1)
        {
                return $this->z_get_width_by_href($href,$exactly,$frame);
        }
        // получить ширину элемента по значению атрибута
        function get_width_by_attribute($attr_name,$attr_value,$exactly=true,$frame=-1)
        {
                return $this->z_get_width_by_attribute($attr_name,$attr_value,$exactly,$frame);
        }

	// получить высоту элемента по номеру
	function get_height_by_number($number,$frame=-1)
	{
		return $this->z_get_height_by_number($number,$frame);
	}
        // получить высоту элемента по имени
        function get_height_by_name($name,$frame=-1)
        {
                return $this->z_get_height_by_name($name,$frame);
        }
        // получить высоту элемента по src
        function get_height_by_src($src,$exactly=true,$frame=-1)
        {
                return $this->z_get_height_by_src($src,$exactly,$frame);
        }
        // получить высоту элемента по href
        function get_height_by_href($href,$exactly=true,$frame=-1)
        {
                return $this->z_get_height_by_href($href,$exactly,$frame);
        }
        // получить высоту элемента по значению атрибута
        function get_height_by_attribute($attr_name,$attr_value,$exactly=true,$frame=-1)
        {
                return $this->z_get_height_by_attribute($attr_name,$attr_value,$exactly,$frame);
        }

        /////////////////////////////////////////////////////////////////////////////////////////////////////

        // эмуляция ввода с клавиатуры в элемент с заданным номером
	function send_keyboard_input_by_number($number,$string,$timeout=INPUT_TIME,$frame=-1)
	{
		return $this->z_send_keyboard_input_by_number($number,$string,$timeout,$frame);
	}
        // эмуляция ввода с клавиатуры в элемент с заданным именем
	function send_keyboard_input_by_name($name,$string,$timeout=INPUT_TIME,$frame=-1)
	{
		return $this->z_send_keyboard_input_by_name($name,$string,$timeout,$frame);
	}
        // эмуляция ввода с клавиатуры в элемент по внутреннему тексту
	function send_keyboard_input_by_inner_text($inner_text,$exactly,$string,$timeout=INPUT_TIME,$frame=-1)
	{
		return $this->z_send_keyboard_input_by_inner_text($inner_text,$exactly,$string,$timeout,$frame);
	}
        // эмуляция ввода с клавиатуры в элемент по внутреннему html
	function send_keyboard_input_by_inner_html($inner_html,$exactly,$string,$timeout=INPUT_TIME,$frame=-1)
	{
		return $this->z_send_keyboard_input_by_inner_html($inner_html,$exactly,$string,$timeout,$frame);
	}
        // эмуляция ввода с клавиатуры в элемент по значению аттрибута
	function send_keyboard_input_by_attribute($attr_name,$attr_value,$exactly,$string,$timeout=INPUT_TIME,$frame=-1)
	{
		return $this->z_send_keyboard_input_by_attribute($attr_name,$attr_value,$exactly,$string,$timeout,$frame);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить число элементов на странице
	function get_count($frame=-1)
	{
		return $this->z_get_count($frame);
	}
	// получить число элементов на странице с заданным значением аттрибута
	function get_count_by_attribute($attr_name,$attr_value,$exactly,$frame=-1)
	{
		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "frame" => $frame);
		return $this->call_get(__FUNCTION__,$params);
	}

	// получить номера всех элементов с заданным внутренним текстом
	function get_all_numbers_by_inner_text($text,$exactly=false,$frame=-1)
	{
		return $this->z_get_all_numbers_by_inner_text($text,$exactly,$frame);
	}	
	// получить номера всех элементов с заданным внутренним хтмл
	function get_all_numbers_by_inner_html($html,$exactly=false,$frame=-1)
	{
		return $this->z_get_all_numbers_by_inner_html($html,$exactly,$frame);
	}	
	// получить номера всех элементов с заданным значением аттрибута
	function get_all_numbers_by_attribute($attr_name,$attr_value,$exactly=false,$frame=-1)
	{
		return $this->z_get_all_numbers_by_attribute($attr_name,$attr_value,$exactly,$frame);
	}	

	// получить все внутренние тексты всех элементов с заданным внутренним текстом
	function get_all_inner_texts($separator="<br>",$text_filter="",$frame=-1)
	{
		return $this->z_get_all_inner_texts($separator,$text_filter,$frame);
	}	
	// получить все внутренние тексты всех элементов с зададнным значением аттрибутов
	function get_all_inner_texts_by_attribute($attr_name,$attr_value,$exactly=false,$frame=-1)
	{
		return $this->z_get_all_inner_texts_by_attribute($attr_name,$attr_value,$exactly,$frame);
	}	

	// получить все внутренние html всех элементов с заданным внутренним текстом
	function get_all_inner_htmls_by_inner_text($text,$exactly=false,$frame=-1)
	{
		return $this->z_get_all_inner_htmls_by_inner_text($text,$exactly,$frame);
	}	
	// получить все внутренние html всех элементов с заданным значением аттрибута
	function get_all_inner_htmls_by_attribute($attr_name,$attr_value,$exactly=false,$frame=-1)
	{
		return $this->z_get_all_inner_htmls_by_attribute($attr_name,$attr_value,$exactly,$frame);
	}	

	// получить все значения аттрибута всех элементов с заданным внутренним текстом
	function get_all_attributes_by_inner_text($attr_name_need,$text,$exactly=false,$frame=-1)
	{
		return $this->z_get_all_attributes_by_inner_text($attr_name_need,$text,$exactly,$frame);
	}	
	// получить все значения аттрибута всех элементов по значению аттрибута
	function get_all_attributes_by_attribute($attr_name_need,$attr_name,$attr_value,$exactly=false,$frame=-1)
	{
		return $this->z_get_all_attributes_by_attribute($attr_name_need,$attr_name,$attr_value,$exactly,$frame);
	}	

	//////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить интерфейс объекта по номеру
	function get_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "frame" => $frame);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEInterface($internal_number,$this->server,$this->password);
	}	
	// получить интерфейс объекта по имени
	function get_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEInterface($internal_number,$this->server,$this->password);
	}	
	// получить интерфейс объекта по внутреннему тексту
	function get_by_inner_text($inner_text,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_inner_text($inner_text,$exactly,$frame);

		$params = array( "inner_text" => $inner_text , "exactly" => $exactly , "frame" => $frame);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEInterface($internal_number,$this->server,$this->password);
	}	
	// получить интерфейс объекта по внутреннему хтмл
	function get_by_inner_html($inner_html,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_inner_html($inner_html,$exactly,$frame);

		$params = array( "inner_html" => $inner_html , "exactly" => $exactly , "frame" => $frame);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEInterface($internal_number,$this->server,$this->password);
	}	
	// получить интерфейс объекта по внешнему тексту
	function get_by_outer_text($outer_text,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_outer_text($outer_text,$exactly,$frame);

		$params = array( "outer_text" => $outer_text , "exactly" => $exactly , "frame" => $frame);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEInterface($internal_number,$this->server,$this->password);
	}	
	// получить интерфейс объекта по внешнему хтмл
	function get_by_outer_html($outer_html,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_outer_html($outer_html,$exactly,$frame);

		$params = array( "outer_html" => $outer_html , "exactly" => $exactly , "frame" => $frame);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEInterface($internal_number,$this->server,$this->password);
	}	
	// получить интерфейс объекта по id
	function get_by_id($id,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("id",$id,$exactly,$frame);

		$params = array( "id" => $id , "exactly" => $exactly , "frame" => $frame);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEInterface($internal_number,$this->server,$this->password);
	}	
	// получить интерфейс объекта по src
	function get_by_src($src,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("src",$src,$exactly,$frame);

		$params = array( "src" => $src , "exactly" => $exactly , "frame" => $frame);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEInterface($internal_number,$this->server,$this->password);
	}	
	// получить интерфейс объекта по href
	function get_by_href($href,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("href",$href,$exactly,$frame);

		$params = array( "href" => $href , "exactly" => $exactly , "frame" => $frame);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEInterface($internal_number,$this->server,$this->password);
	}	
	// получить интерфейс объекта по alt
	function get_by_alt($alt,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("alt",$alt,$exactly,$frame);

		$params = array( "alt" => $alt , "exactly" => $exactly , "frame" => $frame);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEInterface($internal_number,$this->server,$this->password);
	}	
	// получить интерфейс объекта по value
	function get_by_value($value,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_attribute("value",$value,$exactly,$frame);

		$params = array( "value" => $value , "exactly" => $exactly , "frame" => $frame);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEInterface($internal_number,$this->server,$this->password);
	}	
	// получить интерфейс объекта по значению аттрибута
	function get_by_attribute($attr_name,$attr_value,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "frame" => $frame);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEInterface($internal_number,$this->server,$this->password);
	}	
	// получить интерфейс объекта по значению свойств : name1;value1;exactly1; ... nameN;valueN;exactlyN;
	function get_by_properties($properties,$frame=-1)
	{
		//$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "properties" => $properties , "frame" => $frame);
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEInterface($internal_number,$this->server,$this->password);
	}	
	// получить интерфейс объекта по xpath
	function get_by_xpath($xpath)
	{
		$this->wait_element_exist_by_xpath($xpath);

		$params = array( "xpath" => $xpath );
		$internal_number=$this->call_get(__FUNCTION__,$params);

		return new XHEInterface($internal_number,$this->server,$this->password);
	}	
        // получить все элементы
        function get_all($frame=-1)
        {
		$params = array( "frame" => $frame );
		$res=$this->call_get(__FUNCTION__,$params);

		return new XHEInterfaces($res,$this->server,$this->password);
        }

        // получить все элементы c заданными номерами
	function get_all_by_number($numbers,$frame=-1)
	{
		$params = array( "numbers" => $numbers , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);

		return new XHEInterfaces($res,$this->server,$this->password);
	}	
        // получить все элементы c заданным inner text
	function get_all_by_inner_text($inner_text,$exactly=false,$frame=-1)
	{
		$params = array( "inner_text" => $inner_text , "exactly" => $exactly , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);

		return new XHEInterfaces($res,$this->server,$this->password);
	}	
        // получить все элементы c заданным inner html
	function get_all_by_inner_html($inner_html,$exactly=false,$frame=-1)
	{
		$params = array( "inner_html" => $inner_html , "exactly" => $exactly , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);

		return new XHEInterfaces($res,$this->server,$this->password);
	}	
        // получить все элементы c заданным outer text
	function get_all_by_outer_text($outer_text,$exactly=false,$frame=-1)
	{
		$params = array( "outer_text" => $outer_text , "exactly" => $exactly , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);

		return new XHEInterfaces($res,$this->server,$this->password);
	}	
        // получить все элементы c заданным outer html
	function get_all_by_outer_html($outer_html,$exactly=false,$frame=-1)
	{
		$params = array( "outer_html" => $outer_html , "exactly" => $exactly , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);

		return new XHEInterfaces($res,$this->server,$this->password);
	}	
        // получить все элементы c заданным именем
	function get_all_by_name($name,$exactly=false,$frame=-1)
	{
		$params = array( "name" => $name , "exactly" => $exactly , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);

		return new XHEInterfaces($res,$this->server,$this->password);
	}	
        // получить все элементы c заданным id
	function get_all_by_id($id,$exactly=false,$frame=-1)
	{
		$params = array( "id" => $id , "exactly" => $exactly , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);

		return new XHEInterfaces($res,$this->server,$this->password);
	}	
        // получить все элементы c заданным src
	function get_all_by_src($src,$exactly=false,$frame=-1)
	{
		$params = array( "src" => $src , "exactly" => $exactly , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);

		return new XHEInterfaces($res,$this->server,$this->password);
	}	
        // получить все элементы c заданным href
	function get_all_by_href($href,$exactly=false,$frame=-1)
	{
		$params = array( "href" => $href , "exactly" => $exactly , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);

		return new XHEInterfaces($res,$this->server,$this->password);
	}	
        // получить все элементы c заданным alt
	function get_all_by_alt($alt,$exactly=false,$frame=-1)
	{
		$params = array( "alt" => $alt , "exactly" => $exactly , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);

		return new XHEInterfaces($res,$this->server,$this->password);
	}	
        // получить все элементы c заданным value
        function get_all_by_value($value,$exactly=false,$frame=-1)
        {
		$params = array( "value" => $value , "exactly" => $exactly , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);

		return new XHEInterfaces($res,$this->server,$this->password);
        }
        // получить все элементы c заданным значением аттрибута
        function get_all_by_attribute($attr_name,$attr_value,$exactly=false,$frame=-1)
        {
		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);

		return new XHEInterfaces($res,$this->server,$this->password);
        }
	// получить интерфейсы объектов по xpath
	function get_all_by_xpath($xpath)
	{
		$params = array( "xpath" => $xpath );
		$res=$this->call_get(__FUNCTION__,$params);

		return new XHEInterfaces($res,$this->server,$this->password);
	}	
        // получить все элементы c заданными значениями свойств
        function get_all_by_properties($properties,$frame=-1)
        {
		$params = array( "properties" => $properties , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);

		return new XHEInterfaces($res,$this->server,$this->password);
        }
};
?>