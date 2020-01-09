<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
class XHESelectElementCompatible extends XHEBaseDOMVisual
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
	function select_random_value_by_num($num)
	{
		return $this->select_random_value_by_number($num);
	}
   	// select value with num by text
	function select_value_by_num($value,$num)
	{
		return $this->select_value_by_number($value,$num);
	}
    	// select value with num by inner name
	function select_option_value_by_num($num,$innername)
	{
		return $this->select_option_value_by_number($num,$innername);
	}
   	// multiselect name by number
	function multi_select_name_by_num($name, $values)
	{
		return $this->multi_select_name_by_number($name,$values);
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
               return $this->add_attribute_by_attribute_in_frame_by_number($attr_name,$attr_value,$exactly,$name_attr,$value_attr,$frame_number);
	}
	// click by attribute in iframe
	function click_within_iframe_by_attribute($attr_name,$attr_value,$exactly,$frame)
	{
		return $this->click_by_attribute($attr_name,$attr_value,$exactly,$frame);
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
   	// select value bu name
	function select_part_value_by_name($name,$value,$exactly)
	{
		return $this->select_text_by_name($name,$value,$exactly,-1);
	}
        // select random value by name
	function select_random_value_by_name($name)
	{
		return $this->select_random_by_name($name,-1);
	}
   	// select random value by num 
	function select_random_value_by_number($num)
	{
		return $this->select_random_by_number($num,-1);
	}
	// select value with num by name
	function select_num_value_by_name($name,$num)
	{
		return $this->select_index_by_name($name,$num,-1);
	}
	// select value with num by number
	function select_num_value_by_number($number,$num)
	{
		return $this->select_index_by_number($number,$num,-1);
	}
   	// select value with num by inner name
	function select_num_by_inner_name($num,$innername)
	{
		return $this->select_value_by_number($num,$innername,true,-1);
	}
   	// select value with name by inner name
	function select_name_by_inner_name($name,$innername)
	{
		return $this->select_text_by_name($name,$innername,true,-1);
	}
   	// select value bu name
	function select_option_text_by_name($name,$value)
	{
		return $this->select_text_by_name($name,$value,true,-1);
	}
   	// select value with num by text
	function select_option_text_by_num($value,$num)
	{
		return $this->select_text_by_number($num,$value,true,-1);
	}
    	// select value with num by inner name
	function select_option_value_by_number($num,$innername)
	{
		return $this->select_value_by_number($num,$innername,true,-1);
	}
   	// select value with name by inner name
	function select_option_value_by_name($name,$innername)
	{
		return $this->select_value_by_name($name,$innername,true,-1);
	}
        // get current selected option text by name
	function get_cur_option_text_by_name($name)
	{
		return $this->get_selected_text_by_name($name,-1);
	}
	// get current selected option text by number
	function get_cur_option_text_by_number($number)
	{
		return $this->get_selected_text_by_number($name,-1);
	}
   	// select value by name
	function select_value_within_iframe_by_name($name,$value,$frame)
	{
		return $this->select_value_by_name($name,$value,true,$frame);
	}
   	// select value with num by text
	function select_value_within_iframe_by_num($value,$num,$frame)
	{
		return $this->select_value_by_number($num,$value,true,$frame);
	}
   	// select value bu name
	function select_part_value_within_iframe_by_name($name,$value,$exactly,$frame)
	{
		return $this->select_text_by_name($name,$value,$exactly,$frame);
	}
	// select value with num by name
	function select_num_value_within_iframe_by_name($name,$num,$frame)
	{
		return $this->select_index_by_name($name,$num,$frame);
	}
	// select value with num by number
	function select_num_value_within_iframe_by_number($number,$num,$frame)
	{
		return $this->select_index_by_number($number,$num,$frame);
	}
   	// select value with num by inner name
	function select_num_within_iframe_by_inner_name($num,$innername,$frame)
	{
		return $this->select_value_by_number($num,$innername,true,$frame);
	}
   	// select value with name by inner name
	function select_name_within_iframe_by_inner_name($name,$innername,$frame)
	{
		return $this->select_value_by_name($name,$innername,true,$frame);
	}
   	// select value bu name
	function multi_select_name_by_number($name, $values)
	{
		return $this->multiselect_indexes_by_name($name,$values,-1);
	}
   	// select value with num by text
	function multi_select_num_by_num($num, $values)
	{
		return $this->multiselect_indexes_by_name($name,$values,-1);
	}
   	// select value bu name
	function multi_select_name_by_text($name, $values)
	{
		return $this->multiselect_texts_by_name($name,$values,-1);
	}
   	// select value with num by text
	function multi_select_num_by_text($num, $values)
	{
		return $this->multiselect_texts_by_number($num,$values,-1);
	}
   	// select value bu name
	function multi_select_name_by_inner_name($name, $values)
	{
		return $this->multiselect_values_by_number($name,$values,-1);
	}
   	// select value with num by text
	function multi_select_num_by_inner_name($num, $values)
	{
		return $this->multiselect_values_by_number($num,$values,-1);
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////
};		
?>