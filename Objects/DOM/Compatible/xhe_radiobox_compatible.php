<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
class XHERadioButtonCompatible extends XHEBaseDOMVisual
{
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
   	// click by name in iframe
	function click_within_iframe_by_name($name,$frame)
	{
		return $this->click_by_name($name,$frame);
	}
	// click by number in iframe
	function click_within_iframe_by_number($number,$frame)
	{
		return $this->click_by_number($number,$frame);
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
	// send event to element by inner text in frame
	function send_event_by_inner_text_in_frame($text,$exactly,$event,$frame)
	{
		return $this->send_event_by_inner_text($text,$exactly,$event,$frame);
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
        // set check by name
	function set_checked_by_name($name,$check) 
	{
		return $this->check_by_name($name,$check,-1);
	}
	// set check by number
	function set_checked_by_number($number,$check) 
	{
		return $this->check_by_number($number,$check,-1);
	}
        // set check by value
	function set_checked_by_value($value,$check) 
	{
		return $this->check_by_value($value,true,$check,-1);
	}
	// is checked by name
	function is_checked_by_name($name) 
	{
		return $this->is_check_by_name($name,-1);
	}
	// is checked by number
	function is_checked_by_number($number) 
	{
		return $this->is_check_by_number($number,-1);
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
	/////////////////////////////////////////////////////////////////////////////////////////////////////
};		
?>