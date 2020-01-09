<?php
////////////////////////////////////////////////////// H ///////////////////////////////////////////////////
class XHEFlash  extends XHEBaseDOMVisual
{
	/////////////////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ //////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Flash";
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить версию флэш у элемента с заданным номером
	function get_version_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить состояние готовности флэш по номеру
	function get_ready_state_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить проигрывается ли флэш по номеру
	function is_playing_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// запустить флэш с заданным номером
	function play_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// кадр вперед во флэш с заданным номером
	function forward_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// кадр назад во флэш с заданным номером
	function back_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// остановить флэш с заданным номером
	function stop_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	// перейти на заданный кадр во флэш с заданным номером
	function go_to_frame_by_number($frame_number,$number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "frame_number" => $frame_number , "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// получить текущий кадр во флэш с заданным номером
	function get_current_frame_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить число кадров во флэш с заданным номером
	function get_frame_count_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}

        /////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить цвет фона во флэш с заданным номером
	function get_background_color_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// зададим цвет фона во флэш с заданным номером
	function set_background_color_by_number($color,$number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "color" => $color , "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

        /////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить файл содержимого во флэш с заданным номером
	function get_movie_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// зададим файл содержимого  во флэш с заданным номером
	function set_movie_by_number($path,$number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "path" => $path , "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

        /////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить текущую метку во флэш с заданным номером
	function get_current_label_by_number($time,$number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "time" => $time , "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// вызвать метку во флэш с заданным номером
	function call_label_by_number($label,$time,$number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "label" => $label , "time" => $time , "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// вызвать фрейм во флэш с заданным номером
	function call_frame_by_number($frame_number,$time,$number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "frame_number" => $frame_number , "time" => $time , "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

        /////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить значение переменной во флэш с заданным номером
	function get_variable_by_number($name,$number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "name" => $name , "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// задать значение переменной во флэш с заданным номером
	function set_variable_by_number($name,$value,$number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "name" => $name , "value" => $value , "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
};		
?>