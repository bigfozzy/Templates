<?php
////////////////////////////////////////////// TextArea /////////////////////////////////////////////////////
class XHETextArea extends XHETextareaCompatible
{
        /////////////////////////////// —≈–¬»—Ќџ≈ ‘”Ќ ÷»» //////////////////////////////////////////////////
        // server initialization
        function __construct($server,$password="")
        {    
                $this->server = $server;
                $this->password = $password;
		$this->prefix = "TextArea";
        }
	/////////////////////////////////////////////////////////////////////////////////////////////////////

	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // прокрутить курсор в самый конец в текстарии с заданным номером
        function seek_to_end_by_number($number,$frame=-1)
        {
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // прокрутить курсор в самый конец в текстарии с заданным именем
        function seek_to_end_by_name($name,$frame=-1)
        {
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }

	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // изменить режим 'только чтение' в текстарии с заданным номером
        function set_readonly_by_number($number,$readonly,$frame=-1)
        {
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "value" => $readonly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // изменить режим 'только чтение' в текстарии с заданным именем
        function set_readonly_by_name($name,$readonly,$frame=-1)
        {
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array( "name" => $name , "value" => $readonly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }

	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // получить режим 'только чтение' у текстарии с заданным номером
        function get_readonly_by_number($number,$frame=-1)
        {
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // получить режим 'только чтение' у текстарии с заданным именем
        function get_readonly_by_name($name,$frame=-1)
        {
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }

        // получить число строк у текстарии с заданным номером
        function get_rows_by_number($number,$frame=-1)
        {
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }
        // получить число строк у текстарии с заданным именем
        function get_rows_by_name($name,$frame=-1)
        {
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }

        // получить число столбцов у текстарии с заданным номером
        function get_cols_by_number($number,$frame=-1)
        {
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }
        // получить число столбцов у текстарии с заданным именем
        function get_cols_by_name($name,$frame=-1)
        {
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }

	/////////////////////////////////////////////////////////////////////////////////////////////////////
};      
?>