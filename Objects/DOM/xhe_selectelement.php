<?php
////////////////////////////////////////////////// Lisatbox /////////////////////////////////////////////////
class XHESelectElement extends XHESelectElementCompatible
{
	//////////////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ /////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "SelectElement";
	}
  	/////////////////////////////////////////////////////////////////////////////////////////////////////

  	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// выбрать опцию по ее индексу в листбоксе с заданным номером
	function select_index_by_number($number,$index,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array("number" => $number, "index" => $index , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}
	// выбрать опцию по ее индексу в листбоксе с заданным именем
	function select_index_by_name($name,$index,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array("name" => $name, "index" => $index , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}
	// выбрать опцию по ее индексу в листбоксе с заданным значением аттрибута
	function select_index_by_attribute($attr_name,$attr_value,$exactly_attr,$index,$frame=-1)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly_attr,$frame);		

		$params = array("attr_name" => $attr_name, "attr_value" => $attr_value, "exactly_attr" => $exactly_attr, "index" => $index , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}

	// выбрать опцию по ее тексту в листбоксе с заданным номером
	function select_text_by_number($number,$text,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array("number" => $number, "text" => $text , "exactly" => $exactly , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}
	// выбрать опцию по ее тексту в листбоксе с заданным именем
	function select_text_by_name($name,$text,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array("name" => $name, "text" => $text , "exactly" => $exactly , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}
	// выбрать опцию по ее тексту в листбоксе с заданным значением аттрибута
	function select_text_by_attribute($attr_name,$attr_value,$exactly_attr,$text,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly_attr,$frame);		

		$params = array("attr_name" => $attr_name, "attr_value" => $attr_value, "exactly_attr" => $exactly_attr, "text" => $text , "exactly" => $exactly , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}

	// выбрать опцию по ее значению в листбоксе с заданным номером
	function select_value_by_number($number,$value,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array("number" => $number, "value" => $value , "exactly" => $exactly , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}
	// выбрать опцию по ее значению в листбоксе с заданным именем
	function select_value_by_name($name,$value,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array("name" => $name, "value" => $value , "exactly" => $exactly , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}
	// выбрать опцию по ее значению в листбоксе с заданным значением аттрибута
	function select_value_by_attribute($attr_name,$attr_value,$exactly_attr,$value,$exactly=true,$frame=-1)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly_attr,$frame);		

		$params = array("attr_name" => $attr_name, "attr_value" => $attr_value, "exactly_attr" => $exactly_attr, "value" => $value , "exactly" => $exactly , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}

	// выбрать опцию по ее индексу в листбоксе с заданным значением аттрибута и в форме с заданным номером (без учета проверки : существует ли элемент)
	function select_index_by_attribute_by_form_number($attr_name,$attr_value,$exactly_attr,$index,$form_number,$frame=-1)
	{
		$params = array("attr_name" => $attr_name, "attr_value" => $attr_value, "exactly_attr" => $exactly_attr, "index" => $index , "form_number" => $form_number , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}
	// выбрать опцию по ее индексу в листбоксе с заданным значением аттрибута и в форме с заданным именем (без учета проверки : существует ли элемент)
	function select_index_by_attribute_by_form_name($attr_name,$attr_value,$exactly_attr,$index,$form_name,$frame=-1)
	{
		$params = array("attr_name" => $attr_name, "attr_value" => $attr_value, "exactly_attr" => $exactly_attr, "index" => $index , "form_name" => $form_name , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}

	// выбрать опцию по ее тексту в листбоксе с заданным значением аттрибута и в форме с заданным номером (без учета проверки : существует ли элемент)
	function select_text_by_attribute_by_form_number($attr_name,$attr_value,$exactly_attr,$text,$exactly,$form_number,$frame=-1)
	{
		$params = array("attr_name" => $attr_name, "attr_value" => $attr_value, "exactly_attr" => $exactly_attr, "text" => $text , "exactly" => $exactly , "form_number" => $form_number , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}
	// выбрать опцию по ее тексту в листбоксе с заданным значением аттрибута и в форме с заданным именем (без учета проверки : существует ли элемент)
	function select_text_by_attribute_by_form_name($attr_name,$attr_value,$exactly_attr,$text,$exactly,$form_name,$frame=-1)
	{
		$params = array("attr_name" => $attr_name, "attr_value" => $attr_value, "exactly_attr" => $exactly_attr, "text" => $text , "exactly" => $exactly , "form_name" => $form_name , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}

	// выбрать опцию по ее значению в листбоксе с заданным значением аттрибута и в форме с заданным номером (без учета проверки : существует ли элемент)
	function select_value_by_attribute_by_form_number($attr_name,$attr_value,$exactly_attr,$value,$exactly,$form_number,$frame=-1)
	{
		$params = array("attr_name" => $attr_name, "attr_value" => $attr_value, "exactly_attr" => $exactly_attr, "value" => $value , "exactly" => $exactly , "form_number" => $form_number , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}
	// выбрать опцию по ее значению в листбоксе с заданным значением аттрибута и в форме с заданным именем (без учета проверки : существует ли элемент)
	function select_value_by_attribute_by_form_name($attr_name,$attr_value,$exactly_attr,$value,$exactly,$form_name,$frame=-1)
	{
		$params = array("attr_name" => $attr_name, "attr_value" => $attr_value, "exactly_attr" => $exactly_attr, "value" => $value , "exactly" => $exactly , "form_name" => $form_name , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}

	// выбрать случайную опцию в листбоксе с заданным номером
	function select_random_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array("number" => $number, "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}
	// выбрать случайную опцию в листбоксе с заданным именем
	function select_random_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array("name" => $name, "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}
	// выбрать случайную опцию в листбоксе с заданным значением аттрибута
	function select_random_by_attribute($attr_name,$attr_value,$exactly_attr=true,$frame=-1)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly_attr,$frame);

		$params = array("attr_name" => $attr_name, "attr_value" => $attr_value, "exactly_attr" => $exactly_attr , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);		
	}

  	/////////////////////////////////////////////////////////////////////////////////////////////////////

   	// выбрать опции по их индексам в листбоксе с заданным номером
	function multi_select_indexes_by_number($number,$indexes,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array("number" => $number, "indexes" => $indexes , "frame" => $frame );
 		return $this->call_boolean(__FUNCTION__,$params);		
	}
   	// выбрать опции по их индексам в листбоксе с заданным именем
	function multi_select_indexes_by_name($name,$indexes,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array("name" => $name, "indexes" => $indexes , "frame" => $frame );
 		return $this->call_boolean(__FUNCTION__,$params);		
	}

   	// выбрать опции их текстам в листбоксе с заданным номером
	function multi_select_values_by_number($number,$values,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array("number" => $number, "values" => $values , "frame" => $frame );
 		return $this->call_boolean(__FUNCTION__,$params);		
	}
   	// выбрать опции по их текстам в листбоксе с заданным именем
	function multi_select_values_by_name($name,$values,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array("name" => $name, "values" => $values , "frame" => $frame );
 		return $this->call_boolean(__FUNCTION__,$params);		
	}

   	// выбрать опции их значениям в листбоксе с заданным номером
	function multi_select_texts_by_number($number,$texts,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array("number" => $number, "texts" => $texts , "frame" => $frame );
 		return $this->call_boolean(__FUNCTION__,$params);		
	}
   	// выбрать опции по их значениям в листбоксе с заданным именем
	function multi_select_texts_by_name($name,$texts,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array("name" => $name, "texts" => $texts , "frame" => $frame );
 		return $this->call_boolean(__FUNCTION__,$params);		
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить индекс выбранной опции в листбоксе с заданным номером
	function get_selected_index_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array("number" => $number, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}
	// получить индекс выбранной опции в листбоксе с заданным именем
	function get_selected_index_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array("name" => $name, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}
	// получить индекс выбранной опции в листбоксе с заданным значением аттрибута
	function get_selected_index_by_attribute($attr_name,$attr_value,$exactly,$frame=-1)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);		

		$params = array("attr_name" => $attr_name, "attr_value" => $attr_value, "exactly" => $exactly, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}

	// получить текст выбранной опции в листбоксе с заданным номером
	function get_selected_text_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array("number" => $number, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}
        // получить текст выбранной опции в листбоксе с заданным именем
	function get_selected_text_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array("name" => $name, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}
	// получить текст выбранной опции в листбоксе с заданным значением аттрибута
	function get_selected_text_by_attribute($attr_name,$attr_value,$exactly,$frame=-1)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);		

		$params = array("attr_name" => $attr_name, "attr_value" => $attr_value, "exactly" => $exactly, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить размер листбокса (количества рядов) с заданным номером
	function get_size_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array("number" => $number, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}
	// получить размер листбокса (количества рядов) с заданным именем
	function get_size_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array("name" => $name, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}
	// получить размер листбокса с заданным значением аттрибута
	function get_size_by_attribute($attr_name,$attr_value,$exactly,$frame=-1)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);		

		$params = array("attr_name" => $attr_name, "attr_value" => $attr_value, "exactly" => $exactly, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}

	// получить длину листбокса с заданным номером
	function get_length_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array("number" => $number, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}
	// получить длину листбокса с заданным именем
	function get_length_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array("name" => $name, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}
	// получить длинну листбокса с заданным значением аттрибута
	function get_length_by_attribute($attr_name,$attr_value,$exactly,$frame=-1)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);		

		$params = array("attr_name" => $attr_name, "attr_value" => $attr_value, "exactly" => $exactly, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}

	// получить тип листбокса с заданным номером
	function get_type_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array("number" => $number, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}
	// получить тип листбокса с заданным именем
	function get_type_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array("name" => $name, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}
	// получить тип листбокса с заданным значением аттрибута
	function get_type_by_attribute($attr_name,$attr_value,$exactly,$frame=-1)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);		

		$params = array("attr_name" => $attr_name, "attr_value" => $attr_value, "exactly" => $exactly, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}

        // получить текст всех опций листбокса с заданным номером
	function get_all_texts_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array("number" => $number, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}
        // получить текст всех опций листбокса с заданным именем
	function get_all_texts_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array("name" => $name, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}
        // получить текст всех опций листбокса с заданным значением аттрибута
	function get_all_texts_by_attribute($attr_name,$attr_value,$exactly,$frame=-1)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);		

		$params = array("attr_name" => $attr_name, "attr_value" => $attr_value, "exactly" => $exactly, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}

        // получить значения всех опций листбокса с заданным номером
	function get_all_values_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array("number" => $number, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}
        // получить значения всех опций листбокса с заданным именем
	function get_all_values_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array("name" => $name, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}
        // получить значения всех опций листбокса с заданным значением аттрибута
	function get_all_values_by_attribute($attr_name,$attr_value,$exactly,$frame=-1)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);		

		$params = array("attr_name" => $attr_name, "attr_value" => $attr_value, "exactly" => $exactly, "frame" => $frame);
 		return $this->call_get(__FUNCTION__,$params);		
	}

        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// добавить опцию к листбоксу с заданным номером
	function add_option_by_number($number,$text,$value,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array("number" => $number, "text" => $text , "value" => $value , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);
	}
	// добавить опцию к листбоксу с заданным именем
	function add_option_by_name($name,$text,$value,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);		

		$params = array("name" => $name, "text" => $text , "value" => $value , "frame" => $frame);
 		return $this->call_boolean(__FUNCTION__,$params);
	}

   	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

};	
?>