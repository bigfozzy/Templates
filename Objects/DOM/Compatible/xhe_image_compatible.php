<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
class XHEImageCompatible extends XHEBaseDOMVisual
{
	/////////////////////////////////////////////////////////////////////////////////////////////////////
	// is image loaded to browser by number (in future will replace -> is_complete_by_number)
	function is_complete($number)
	{
		return $this->is_complete_by_number($number,-1);
	}
   	// get src by name (image url) (in future will replace -> get_src_by_name)
	function get_href_by_name($name,$frame=-1)
	{
		return $this->get_src_by_name($name,$frame);
	}
	// get src by number (image url) (in future will replace -> get_src_by_name)
	function get_href_by_number($number,$frame=-1)
	{
		return $this->get_src_by_number($number,$frame);
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////
	// click on element by attribute
	function click_by_atribute($atr_name,$atr_value,$exactly=true)
	{
		return $this->click_by_attribute($atr_name,$atr_value,$exactly,-1);
	}	
	// send event to element by any attribute
	function send_event_by_atribute($atr_name,$atr_value,$exactly,$event)
	{
		return $this->send_event_by_attribute($atr_name,$atr_value,$exactly,$event,-1);
	}
        // get attribute by name
        function get_atribute_by_name($name,$name_attr)
        {
               return $this->get_attribute_by_name($name,$name_attr);
        }
        // get attribute by number
        function get_atribute_by_number($number,$name_attr)
        {
               return $this->get_attribute_by_number($number,$name_attr);
        }
        // get attribute by attribute
        function get_atribute_by_attribute($attr_name,$attr_value,$exactly,$name_attr)
        {
               return $this->get_attribute_by_attribute($attr_name,$attr_value,$exactly,$name_attr);
        }
        // get attribute by attribute in frame by number
        function get_atribute_by_attribute_in_frame_by_number($attr_name,$attr_value,$exactly,$name_attr,$frame_number)
        {
		return $this->get_attribute_by_attribute_in_frame_by_number($attr_name,$attr_value,$exactly,$name_attr,$frame_number);
        }
	/////////////////////////////////////////////////////////////////////////////////////////////////////
	// get count of elements
	function get_count_within_iframe_by_number($number)
	{
		return $this->get_count($number);
	}
        // is exist by name
        function is_exist_with_name($name,$frame=-1)
        {
		return $this->is_exist_by_name($name,$frame);
        }
	// add (or set) attribute by attribute in frame by number
	function add_attribute_by_attribute_in_frame_by_number($attr_name,$attr_value,$exactly,$name_attr,$value_attr,$frame_number)
	{
		return $this->add_attribute_by_attribute($attr_name,$attr_value,$exactly,$name_attr,$value_attr,$frame_number);
	}
	// click by attribute in iframe
	function click_within_iframe_by_attribute($attr_name,$attr_value,$exactly,$frame)
	{
		return $this->click_by_attribute($attr_name,$attr_value,$exactly,$frame);
	}
        // click on random element in frame
	function click_random_in_frame($frame)
	{
		return $this->click_random($frame);
	}	
        // send event to element by name in frame
	function send_event_by_name_in_frame($name,$event,$frame)
	{
		return $this->send_event_by_name($name,$event,$frame);
	}
	// send event to element by number in frame
	function send_event_by_number_in_frame($number,$event,$frame)
	{
		return $this->send_event_by_number($number,$event,$frame);
	}
   	// set focus by attribute in frame by number
	function set_focus_by_attribute_in_frame_by_number($attr_name,$attr_value,$exactly,$frame_num)
	{
		return $this->set_focus_by_attribute($attr_name,$attr_value,$exactly,$frame_num);
	}
	// is exist with attribute
	function is_exist_with_attribute($attr_name,$attr_value,$exactly)
	{
		return $this->is_exist_by_attribute($attr_name,$attr_value,$exactly,-1);
	}	
	// is exist with attribute in frame by number
	function is_exist_with_attribute_in_frame_by_number($attr_name,$attr_value,$exactly,$frame_number)
	{
		return $this->is_exist_by_attribute($attr_name,$attr_value,$exactly,$frame_number);
	}	
        // get attribute by attribute in frame by number
        function get_attribute_by_attribute_in_frame_by_number($attr_name,$attr_value,$exactly,$name_attr,$frame_number)
        {
		return $this->get_attribute_by_attribute($attr_name,$attr_value,$exactly,$name_attr,$frame_number);
        }
	// save image to file by number
	function save_to_file_by_number($number,$file_path)
	{
		return $this->screenshot_by_number($file_path,$number,-1);
	}
  	// save image to file by name
	function save_to_file_by_name($name,$file_path)
	{
		return $this->screenshot_by_name($file_path,$name,-1);
	}
    	// save image to file by url
	function save_to_file_by_url($url,$file_path,$exactly="true")
	{
		return $this->screenshot_by_src($file_path,$url,$exactly,-1);
	}
        // save image to file by number within Iframe by number
	function save_to_file_by_number_withinIframe_number($number,$file_path,$framenum)
	{
		return $this->screenshot_by_number($file_path,$number,$framenum);
	}
  	// save image to file by name within Iframe by number
	function save_to_file_by_name_withinIframe_number($name,$file_path,$framenum)
	{
		return $this->screenshot_by_name($file_path,$name,$framenum);
	}
    	// save image to file by url within Iframe by number
	function save_to_file_by_url_withinIframe_number($url,$file_path,$framenum,$exactly="true")
	{
		return $this->screenshot_by_src($file_path,$url,$exactly,$framenum);
	}
        // add (or set) attribute by number
	function add_atribute_by_number($number,$name_atr,$value_atr)
	{
               return $this->add_attribute_by_number($number,$name_atr,$value_atr,-1);
	}
	// get x by any attribute
	function get_x_by_atribute($attr_name,$attr_value,$exactly=true)
	{
		return $this->get_x_by_attribute($attr_name,$attr_value,$exactly,-1);
	}
	// get y by any attribute
	function get_y_by_atribute($attr_name,$attr_value,$exactly=true)
	{
		return $this->get_y_by_attribute($attr_name,$attr_value,$exactly,-1);
	}
        // recognize captcha using anticaptcha service
        function recognize_captcha_by_url($url,$exactly,$login,$password)
        {
 		echo "service is unavailable<br>";
        }
	/////////////////////////////////////////////////////////////////////////////////////////////////////
};		
?>