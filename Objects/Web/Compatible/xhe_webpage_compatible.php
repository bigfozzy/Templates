<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class XHEWebPageCompatible extends XHEBaseObject
{
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   	// get value of element by name
	function get_element_value_by_name($name)
	{
		return $this->call("WebPage.GetElementValueByName?name=".base64_encode($name));
	}
   	// get inner html of element by mane
	function get_element_innerHtml_by_name($name)
	{
		return $this->call("WebPage.GetElementInnerHtmlByName?name=".base64_encode($name));
	}
   	// get element inner text by mane
	function get_element_innerText_by_name($name)
	{
		return $this->call("WebPage.GetElementInnerTextByName?name=".base64_encode($name));
	}
    	// set value of element by mane
	function set_element_value_by_name($name,$text)
	{
		return $this->call("WebPage.SetElementValueByName?name=".base64_encode($name)."&text=".base64_encode($text));
	}
   	// click on element by name
	function click_on_element_by_name($name)
	{
		return $this->call("WebPage.ClickOnElementByName?name=".base64_encode($name));
	}
   	// click on element by number
	function click_on_element_by_number($number)
	{
		return $this->call("WebPage.ClickOnElementByNumber?number=".base64_encode($number));
	}
   	// click on element by inner text
   	function click_on_element_by_inner_text($inner_text)
	{
		return $this->call("WebPage.ClickOnElementByInnerText?inner_text=".base64_encode($inner_text));
	}
	// получить текущий урл страницы
	function get_location_url()
	{
		return $this->get_url();
	}
};		
?>