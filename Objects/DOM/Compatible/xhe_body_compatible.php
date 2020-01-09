<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
class XHEBodyCompatible extends XHEBaseDOMVisual
{
	/////////////////////////////////////////////////////////////////////////////////////////////////////	
	// set body text by number in frame
	function set_text_within_iframe_by_name($name,$text,$framenum)
	{
		return $this->set_text_by_name($name,$text,$framenum);
	}
  	// set body text by number in frame
	function set_text_within_iframe_by_number($number,$text,$framenum)
	{
		return $this->set_text_by_number($number,$text,$framenum);
	}
	// get body text by name in frame
	function get_text_within_iframe_by_name($name,$framenum)
	{
		return $this->get_text_by_name($name,$framenum);
	}   
	// get body text by name in frame
	function get_text_within_iframe_by_number($number,$framenum)
	{
		return $this->get_text_by_number($number,$framenum);
	}	
	/////////////////////////////////////////////////////////////////////////////////////////////////////
	// set text by name
	function set_text_by_name($name,$text,$frame=-1)
	{
		return $this->set_inner_html_by_name($name,$text,$frame);
	}
	// set text by number
	function set_text_by_number($number,$text,$frame=-1)
	{
		return $this->set_inner_html_by_number($number,$text,$frame);
	}
   	// get text by name
	function get_text_by_name($name,$frame=-1)
	{
		return $this->get_inner_html_by_name($name,$frame);
	}   
        // get text by number
	function get_text_by_number($number,$frame=-1)
	{
		return $this->get_inner_html_by_number($number,$frame);
	}	
	/////////////////////////////////////////////////////////////////////////////////////////////////////
};		
?>