<?php
//////////////////////////////////////////////////// RadioBox ///////////////////////////////////////////////
class XHERadioButton  extends XHERadioButtonCompatible
{
	//////////////////////////////////////// —≈–¬»—Ќџ≈ ‘”Ќ ÷»» /////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "RadioButton";
	}
        /////////////////////////////////////////////////////////////////////////////////////////////////////
	
        /////////////////////////////////////////////////////////////////////////////////////////////////////

        // кликнуть по имени и значению (old - need replace) (без учета проверки : существует ли элемент)
	function click_by_name_and_value($name,$value="",$frame=-1,$wait_browser=true)
	{
		return $this->z_click_by_name_and_value($name,$value,$frame,$wait_browser);
	}

        /////////////////////////////////////////////////////////////////////////////////////////////////////

	// чекнуть по номеру
	function check_by_number($number,$check,$frame=-1) 
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "check" => $check , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // чекнуть по имени
	function check_by_name($name,$check,$frame=-1) 
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array( "name" => $name , "check" => $check , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // чекнуть по value
	function check_by_value($value,$exactly,$check,$frame=-1) 
	{
		$this->wait_element_exist_by_attribute("value",$value,$exactly,$frame);		

		$params = array( "value" => $value , "exactly" => $exactly , "check" => $check , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // чекнуть по значению аттрибута
        function check_by_attribute($attr_name,$attr_value,$exactly,$check,$frame=-1)
        {
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);		

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "check" => $check , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }

        // чекнуть по значению аттрибута в форме с заданным номером (без учета проверки : существует ли элемент)
        function check_by_attribute_by_form_number($attr_name,$attr_value,$exactly,$check,$form_number,$frame=-1)
        {
		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "check" => $check , "form_number" => $form_number, "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // чекнуть по значению аттрибута в форме с заданным именем (без учета проверки : существует ли элемент)
        function check_by_attribute_by_form_name($attr_name,$attr_value,$exactly,$check,$form_name,$frame=-1)
        {
		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "check" => $check , "form_name" => $form_name, "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }
         
	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// проверить чекнутость по номеру
	function is_check_by_number($number,$frame=-1) 
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// проверить чекнутость по имени
	function is_check_by_name($name,$frame=-1) 
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // проверить чекнутость по value
	function is_check_by_value($value,$exactly=true,$frame=-1) 
	{
		$this->wait_element_exist_by_attribute("value",$value,$exactly,$frame);		

		$params = array( "value" => $value , "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // проверить чекнутость по значению аттрибута
	function is_check_by_attribute($attr_name,$attr_value,$exactly=true,$frame=-1) 
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);		

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

        ////////////////////////////////////////////////////////////////////////////////////////////////////////
};	
?>