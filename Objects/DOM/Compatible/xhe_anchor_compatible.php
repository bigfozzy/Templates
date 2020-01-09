<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
class XHEAnchorCompatible extends XHEBaseDOMVisual
{
	/////////////////////////////////////////////////////////////////////////////////////////////////////
	// click on element by any attribute
	function click_by_atribute($atr_name,$atr_value,$exactly=true)
	{
		return $this->click_by_attribute($atr_name,$atr_value,$exactly,-1);
	}	
	// send event to element by any attribute
	function send_event_by_atribute($atr_name,$atr_value,$exactly,$event)
	{
		return $this->send_event_by_attribute($atr_name,$atr_value,$exactly,$event,-1);
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////
	// is anchor exist by attribute
	function is_exist_with_atribute($atr_name,$atr_value,$exactly=true)
	{
		return $this->is_exist_by_attribute($atr_name,$atr_value,$exactly,-1);
	}	
	// is anchor exist by attribute
	function is_exist_with_attribute($atr_name,$atr_value,$exactly=true)
	{
		return $this->is_exist_by_attribute($atr_name,$atr_value,$exactly,-1);
	}	
        // is anchor exist by name
        function is_exist_with_name($name)
        {
		return $this->is_exist_by_name($name,-1);
        }
        // get any attribute any by attribute in frame
        function get_attribute_by_attribute_in_frame_by_number($attr_name,$attr_value,$exactly,$name_attr,$frame_number)
        {
               return $this->get_attribute_by_attribute_in_frame($attr_name,$attr_value,$exactly,$name_attr,$frame_number);
        }
	// is anchor exist by inner text
	function is_exist_with_inner_text($text,$exactly=true)
	{
		return $this->is_exist_by_inner_text($text,$exactly,-1);
	}	
	// is anchor exist by href
	function is_exist_with_href($href,$exactly=true)
	{
		return $this->is_exist_by_href($href,$exactly,-1);
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
	// remove attribute by name
	function remove_atribute_by_name($name,$name_atr)
	{
		return $this->remove_attribute_by_name($name,$name_atr,-1);
	}
	// remove attribute by number
	function remove_atribute_by_number($number,$name_atr)
	{
		return $this->remove_attribute_by_number($number,$name_atr,-1);
	}
        // add (or set) attribute by number
	function add_atribute_by_number($number,$name_atr,$value_atr)
	{
               return $this->add_attribute_by_number($number,$name_atr,$value_atr,-1);
	}
	// add (or set) attribute by attribute
	function add_atribute_by_attribute($atr_name,$atr_value,$exactly,$name_atr,$value_atr)
	{
               return $this->add_attribute_by_attribute($atr_name,$atr_value,$exactly,$name_atr,$value_atr,-1);
	}
	// add (or set) attribute by attribute
	function add_atribute_by_atribute($atr_name,$atr_value,$exactly,$name_atr,$value_atr)
	{
               return $this->add_attribute_by_attribute($atr_name,$atr_value,$exactly,$name_atr,$value_atr,-1);
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////
        // get number by attribute
        function get_number_by_atribute($atr_name,$atr_value,$exactly=true)
        {
               return $this->get_number_by_attribute($atr_name,$atr_value,$exactly,-1);
        }
	/////////////////////////////////////////////////////////////////////////////////////////////////////
   	// set focus to anchor by attribute
	function set_focus_by_atribute($attr_name,$attr_value,$exactly=true)
	{
		return $this->set_focus_by_attribute($attr_name,$attr_value,$exactly,-1);
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////
	// is exist with attribute in frame by number
	function is_exist_with_atribute_in_frame_by_number($attr_name,$attr_value,$exactly,$frame_number)
	{
	       return $this->is_exist_by_attribute($atr_name,$atr_value,$frame_number,$exactly,$frame_number);	
	}
	// remove attribute by name
	function remove_atribute_by_name_in_frame($name,$name_atr,$frame_number)
	{
		return $this->remove_attribute_by_name($name,$name_atr,$frame_number);
	}
	// remove attribute by number
	function remove_atribute_by_number_in_frame($number,$name_atr,$frame_number)
	{
		return $this->remove_attribute_by_number($number,$name_atr,$frame_number);
	}
	// remove attribute by attribute in frame by number
	function remove_atribute_by_attribute_in_frame_by_number($atr_name,$atr_value,$exactly,$name_atr,$frame_number)
	{
		return $this->remove_attribute_by_attribute($atr_name,$atr_value,$exactly,$name_atr,$frame_number);
	}
	// get x of element by any attribute
	function get_x_by_atribute($attr_name,$attr_value,$exactly=true)
	{
		return $this->get_x_by_attribute($attr_name,$attr_value,$exactly);
	}
	// get y of element by any attribute
	function get_y_by_atribute($attr_name,$attr_value,$exactly=true)
	{
		return $this->get_y_by_attribute($attr_name,$attr_value,$exactly);
	}
	// is anchor exist by attribute in frame
	function is_exist_by_atribute_in_frame($atr_name,$atr_value,$frame,$exactly=true)
	{
		return $this->is_exist_by_attribute($atr_name,$atr_value,$exactly,$frame);
	}

	// get all anchors urls on page
	function get_all_urls($separator="<br>")
	{
		return $this->get_all_hrefs($separator);
	}
	// get all anchors urls on page by inner text
	function get_all_urls_by_inner_text($inner_text,$separator="<br>")
	{
		return $this->get_all_hrefs_by_inner_text($inner_text,$separator);
	}
        // get all hrefs on page in frame
	function get_all_urls_in_frame($frame, $separator="<br>")
	{
		return $this->get_all_hrefs_in_frame($frame, $separator);
	}
	// get all anchors urls on page by inner text in frame
	function get_all_urls_by_inner_text_in_frame($inner_text,$frame,$separator="<br>")
	{
		return $this->get_all_hrefs_by_inner_text_in_frame($inner_text,$frame,$separator);
	}
   	// get all external inner texts and hrefs on page
	function get_all_external_texts_and_url($url,$navigate="false",$separator="<br>")
	{
		return $this->get_all_external_inner_texts_and_hrefs($url,$navigate,$separator);
	}
   	// get all external inner texts and hrefs in frame
	function get_all_external_texts_and_url_in_frame($url,$frame,$separator="<br>")
	{
		return $this->get_all_external_inner_texts_and_hrefs_in_frame($url,$frame,false,$separator);
	}
   	// click by name in frame 
	function click_within_iframe_by_name($name,$frame)
	{
		return $this->click_by_name_in_frame($name,$frame);
	}
	// click by number in frame
	function click_within_iframe_by_number($number,$frame)
	{
		return $this->click_by_number_in_frame($number,$frame);
	}
	// click by inner text in frame
	function click_within_iframe_by_inner_text($text,$exactly,$frame)
	{
		return $this->click_by_inner_text_in_frame($text,$exactly,$frame);
	}
	// click by href in frame
	function click_within_iframe_by_href($url,$exactly,$frame)
	{
		return $this->click_by_href_in_frame($url,$exactly,$frame);
	}	
	// click by any attribute in iframe
	function click_within_iframe_by_attribute($attr_name,$attr_value,$exactly,$frame)
	{
		return $this->click_by_attribute_in_frame($attr_name,$attr_value,$exactly,$frame);
	}

   	// set by any attribute in frame
	function set_focus_by_attribute_in_frame_by_number($attr_name,$attr_value,$exactly,$frame_num)
	{
		return $this->set_focus_by_attribute_in_frame($attr_name,$attr_value,$exactly,$frame_num);
	}
	// add (or set) any attribute by any attribute in frame
	function add_attribute_by_attribute_in_frame_by_number($attr_name,$attr_value,$exactly,$name_attr,$value_attr,$frame_number)
	{
		return $this->add_attribute_by_attribute_in_frame($attr_name,$attr_value,$exactly,$name_attr,$value_attr,$frame_number);
	}
	// remove attribute by attribute in frame
	function remove_attribute_by_attribute_in_frame_by_number($atr_name,$atr_value,$exactly,$name_atr,$frame_number)
	{
		return $this->remove_attribute_by_attribute($atr_name,$atr_value,$exactly,$name_atr,$frame_number);
	}
	// get count in frame
	function get_count_within_iframe_by_number($number)
	{
		return $this->get_count($number);
	}	
        // is exist by name in frame
        function is_exist_by_name_in_frame($name,$frame)
        {
		return $this->is_exist_by_name($name,$frame);
        }
   	// click by name in frame 
	function click_by_name_in_frame($name,$frame)
	{
		return $this->click_by_name($name,$frame);
	}
	// add (or set) any attribute by any attribute in frame
	function add_attribute_by_attribute_in_frame($attr_name,$attr_value,$exactly,$name_attr,$value_attr,$frame_number)
	{
               return $this->add_attribute_by_attribute($attr_name,$attr_value,$exactly,$name_attr,$value_attr,$frame_number);
	}
	// click by number in frame
	function click_by_number_in_frame($number,$frame)
	{
               return $this->click_by_number($number,$frame);
	}
	// click by any attribute in iframe
	function click_by_attribute_in_frame($attr_name,$attr_value,$exactly,$frame)
	{		
		return $this->click_by_attribute($attr_name,$attr_value,$exactly,$frame);
	}
	// click by href in frame
	function click_by_href_in_frame($url,$exactly,$frame)
	{
		return $this->click_by_href($url,$exactly,$frame);
	}	
	// click by inner text in frame
	function click_by_inner_text_in_frame($text,$exactly,$frame)
	{
		return $this->click_by_inner_text($text,$exactly,$frame);
	}
        // click on random element in frame
	function click_random_in_frame($frame)
	{
		return $this->click_random($frame);
	}	
	// send event by name in frame
	function send_event_by_name_in_frame($name,$event,$frame)
	{
		return $this->send_event_by_name($name,$event,$frame);
	}
	// send event by number in frame
	function send_event_by_number_in_frame($number,$event,$frame)
	{
		return $this->send_event_by_number($number,$event,$frame);
	}
	// send event by inner text in frame
	function send_event_by_inner_text_in_frame($text,$exactly,$event,$frame)
	{
		return $this->send_event_by_inner_text($text,$exactly,$event,$frame);
	}
	// send event by href in frame
	function send_event_by_href_in_frame($url,$exactly,$event,$frame)
	{
		return $this->send_event_by_href($url,$exactly,$event,$frame);
	}
	// send event by any attribute in frame
	function send_event_by_atribute_in_frame($atr_name,$atr_value,$exactly,$event,$frame)
	{
		return $this->send_event_by_attribute($atr_name,$atr_value,$exactly,$event,$frame);
	}
	// send event by any attribute in frame
	function send_event_by_attribute_in_frame($atr_name,$atr_value,$exactly,$event,$frame)
	{
		return $this->send_event_by_attribute($atr_name,$atr_value,$exactly,$event,$frame);
	}
   	// set by any attribute in frame
	function set_focus_by_attribute_in_frame($attr_name,$attr_value,$exactly,$frame_num)
	{
		return $this->set_focus_by_attribute($attr_name,$attr_value,$exactly,$frame_num);
	}
	// remove attribute by name in frame
	function remove_attribute_by_name_in_frame($name,$name_atr,$frame_number)
	{
		return $this->remove_attribute_by_name($name,$name_atr,$frame_number);
	}
	// remove attribute by number in frame
	function remove_attribute_by_number_in_frame($number,$name_atr,$frame_number)
	{
		return $this->remove_atribute_by_number($number,$name_atr,$frame_number);
	}
	// remove attribute by attribute in frame
	function remove_attribute_by_attribute_in_frame($atr_name,$atr_value,$exactly,$name_atr,$frame_number)
	{
		return $this->remove_attribute_by_attribute($atr_name,$atr_value,$exactly,$name_atr,$frame_number);
	}
	// is exist by inner text in frame
	function is_exist_by_inner_text_in_frame($text,$frame,$exactly=true)
	{
		return $this->is_exist_by_inner_text($text,$exactly,$frame);
	}	
	// is exist by href in frame
	function is_exist_by_href_in_frame($href,$frame,$exactly=true)
	{
		return $this->is_exist_by_href($href,$exactly,$frame);
	}	
	// is anchor exist by attribute in frame
	function is_exist_by_attribute_in_frame($atr_name,$atr_value,$frame,$exactly=true)
	{
		return $this->is_exist_by_attribute($atr_name,$atr_value,$exactly,$frame);
	}
        // get any attribute any by attribute in frame
        function get_attribute_by_attribute_in_frame($attr_name,$attr_value,$exactly,$name_attr,$frame_number)
        {
               return $this->get_attribute_by_attribute($attr_name,$attr_value,$exactly,$name_attr,$frame_number);
        }
	// get all inner texts in frame
	function get_all_inner_texts_in_frame($frame, $separator="<br>")
	{
		return $this->get_all_inner_texts($separator,"",$frame);
	}	
        // get all hrefs in frame
	function get_all_hrefs_in_frame($frame, $separator="<br>")
	{
		return $this->get_all_hrefs($separator,$frame);
	}
	// get hrefs by inner text in frame
	function get_all_hrefs_by_inner_text_in_frame($inner_text,$frame,$separator="<br>")
	{
		return $this->get_all_hrefs_by_inner_text($inner_text,$separator,$frame);
	}
   	// get all external inner texts and hrefs in frame
	function get_all_external_inner_texts_and_hrefs_in_frame($url,$frame,$navigate="false",$separator="<br>")
	{
		return $this->get_all_external_inner_texts_and_hrefs($url,$navigate,$separator,$frame);
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////
};		
?>