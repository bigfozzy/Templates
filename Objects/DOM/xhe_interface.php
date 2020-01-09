<?php
//////////////////////////////////////////////////// Interface //////////////////////////////////////////////
class XHEInterface extends XHEInterfaceCompatible
{
	/////////////////////////////////////// SERVICE VARIABLES ///////////////////////////////////////////
	// внутренний номер
	var $inner_number;
	/////////////////////////////////////// SERVICE FUNCTIONS ///////////////////////////////////////////
	// инициализация
	function __construct($inner_number,$server,$password="")
	{    
		$this->inner_number = $inner_number;
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Interface";
	}
	// деструктор (для очистки памяти)
  	function __destruct() 
	{
		global $app;
		$params = array( "inner_number" => $this->inner_number );
		if (!$app->finished)
			return $this->call_boolean(__FUNCTION__,$params);	       
	}
	function __toString()
	{
		$res="{".$this->get_inner_text()."}";
		return $res;
	}
	// клонировать интерфейс к DOM	
  	function get_clone() 
	{
		$params = array( "inner_number" => $this->inner_number );
		$clone_inner_number = $this->call_get(__FUNCTION__,$params);	       
		return new XHEInterface($clone_inner_number,$this->server,$this->password);
	}	
	/////////////////////////////////////////////////////////////////////////////////////////////////////

	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // мета щелчок (фокус, перемещение мыши и шлчок мышью по случайнйо координате)
	function meta_click($wait_browser=true)
	{
		$params = array( "inner_number" => $this->inner_number );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
			sleep(1);
		}        
		return $res;
	}
        // щелчок
	function click($wait_browser=true)
	{
		$params = array( "inner_number" => $this->inner_number );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
			sleep(1);
		}        
		return $res;
	}
	// послать событие
	function event($event,$wait_browser=true)
	{
		$params = array( "inner_number" => $this->inner_number , "event" => $event );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
			sleep(1);
		}
		return $res;
	}
   	// задать фокус
	function focus()
	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// скроллировать страницу чтобы увидеть этот элемент
	function scroll_to_view($start)
	{
		$params = array( "inner_number" => $this->inner_number , "start" => $start );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// скроллировать 
	function scroll($scroll_action)
	{
		$params = array( "inner_number" => $this->inner_number , "scroll_action" => $scroll_action );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // чекнуть
	function check($needCheck = true)
	{
		$params = array( "inner_number" => $this->inner_number , "check" => $needCheck );
		return $this->call_boolean(__FUNCTION__,$params);
	}

        // задать значение
        function set_value($value)
        {
		$params = array( "inner_number" => $this->inner_number , "value" => $value );
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // задать внутренний текст
	function set_inner_text($inner_text)
	{
		$params = array( "inner_number" => $this->inner_number , "inner_text" => $inner_text );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // задать внутренний хтмл
	function set_inner_html($inner_html)
	{
		$params = array( "inner_number" => $this->inner_number , "inner_html" => $inner_html );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // добавить (или задать) аттрибут
	function add_attribute($name_atr,$value_atr)
	{
		$params = array( "inner_number" => $this->inner_number , "name_atr" => $name_atr , "value_atr" => $value_atr );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// задать аттрибут
        function set_attribute($name_atr,$value_atr)
        {
		$params = array( "inner_number" => $this->inner_number , "name_atr" => $name_atr , "value_atr" => $value_atr );
		return $this->call_boolean(__FUNCTION__,$params);
        }
	// убрать аттрибут
	function remove_attribute($name_atr)
	{
		$params = array( "inner_number" => $this->inner_number , "name_atr" => $name_atr );
		return $this->call_boolean(__FUNCTION__,$params);
	}
  	// сделать скроиншот элемента в файл
	function screenshot($file_path, $as_gray = false)
	{
		$params = array( "inner_number" => $this->inner_number , "file_path" => $file_path , "as_gray" => $as_gray );
		return $this->call_boolean(__FUNCTION__,$params);
	}
  	// сохоранит содержимое элемента в файл (для картинки и флэша сохраняются исходные данные с сайта)
	function save($file_path)
	{
		$params = array( "inner_number" => $this->inner_number , "file_path" => $file_path );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// получить тэг
	function get_tag()
	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить имя
	function get_name()
	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить идентификатор
	function get_id()
	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
	}
   	// получить номер
	function get_number($object_name="")
	{
		$params = array( "inner_number" => $this->inner_number , "object_name" => $object_name  );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить внутренний текст
	function get_inner_text()
	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
	}
        // получить внутренний хтмл
        function get_inner_html()
        {
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
        }
	// получить внешний текст
	function get_outer_text()
	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
	}
        // получить внешний хтмл
        function get_outer_html()
        {
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
        }
	// получить вычисляемый стиль
	function get_computed_style($style_name="",$pseudo="")
	{
		$params = array( "inner_number" => $this->inner_number , "style_name" => $style_name , "pseudo" => $pseudo );
		return $this->call_get(__FUNCTION__,$params);
	}
        // получить значение
        function get_value()
        {
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
        }
        // получить href
	function get_href()
	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
	}
    	// получить src
	function get_src()
	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить alt
	function get_alt()
	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
	}
        // получить значение аттрибута
        function get_attribute($name_atr)
        {
		$params = array( "inner_number" => $this->inner_number , "name_atr" => $name_atr );
		return $this->call_get(__FUNCTION__,$params);
        }
        // получить номер фрейма
        function get_frame_number()
        {
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
        }
        // получить номер формы
        function get_form_number()
        {
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
        }
        // получить имена всех атрибутов
        function get_all_attributes()
        {
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
        }
        // получить значения всех атрибутов
        function get_all_attributes_values()
        {
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
        }
        // поулчить все события
        function get_all_events()
        {
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
        }
        // проверка недоступности
        function is_disabled()
        {
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // проверка чекнутости
        function is_checked()
        {
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // проверка существования
        function is_exist()
        {
		return $this->inner_number!=-1;
        }
        // проверка видимости
        function is_visibled()
        {
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // проверка того что эелемнт сейчас попадает на страницу
        function is_view_now()
        {
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // сделать видимым (прокрутить до видимости)
        function ensure_visible()
        {
		if ($this->inner_number==-1)
			return false;
		global $browser;

		if (!$this->is_view_now())
		{
			$x=$this->get_x();
			$y=$this->get_y();		

			if ($y>10)
				$browser->set_vertical_scroll_pos($y-10);
			if ($x>10 && !$this->is_view_now())
				$browser->set_horizontal_scroll_pos($x-10);

		}
		sleep(1);
		return true;
	}
   	// получить номера дочерних элементов заданного типа
	function get_numbers_child($element_type="",$include_subchildren=false)
	{
		$params = array( "inner_number" => $this->inner_number , "element_type" => $element_type , "include_subchildren" => $include_subchildren );
		return $this->call_get(__FUNCTION__,$params);
	}

        // получить X координату
	function get_x($in_view=false)
	{
		$params = array( "inner_number" => $this->inner_number , "in_view" => $in_view );
		return $this->call_get(__FUNCTION__,$params);
	}
        // получить Y координату
	function get_y($in_view=false)
	{
		$params = array( "inner_number" => $this->inner_number , "in_view" => $in_view );
		return $this->call_get(__FUNCTION__,$params);
	}
        // получить ширину
        function get_width()
        {
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
        }
	// получить высоту
	function get_height()
	{
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
	}

	// get xpath
	function get_xpath()
	{		
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get parent interface
	function get_parent($level=1)
	{		
		$params = array( "inner_number" => $this->inner_number , "level" => $level);
		$parent_inner_number=-1;
		if ($this->inner_number!=-1)
			$parent_inner_number=$this->call_get(__FUNCTION__,$params);
		return new XHEInterface($parent_inner_number,$this->server,$this->password);
	}
	// get parent by attribute
	function get_parent_by_attribute($atr_name,$atr_value,$exactly=true)
	{		
		$params = array( "inner_number" => $this->inner_number , "atr_name" => $atr_name, "atr_value" => $atr_value, "exactly" => $exactly);
		$parent_inner_number=-1;
		if ($this->inner_number!=-1)
			$parent_inner_number=$this->call_get(__FUNCTION__,$params);
		return new XHEInterface($parent_inner_number,$this->server,$this->password);
	}
	// get next interface
	function get_next()
	{		
		$params = array( "inner_number" => $this->inner_number );
		$parent_inner_number=-1;
		if ($this->inner_number!=-1)
			$parent_inner_number=$this->call_get(__FUNCTION__,$params);
		return new XHEInterface($parent_inner_number,$this->server,$this->password);
	}
	// get prev interface
	function get_prev()
	{		
		$params = array( "inner_number" => $this->inner_number );
		$parent_inner_number=-1;
		if ($this->inner_number!=-1)
			$parent_inner_number=$this->call_get(__FUNCTION__,$params);
		return new XHEInterface($parent_inner_number,$this->server,$this->password);
	}
	// add child
	function add_child($tag,$inner_html)
	{		
		$params = array( "inner_number" => $this->inner_number , "tag" => $tag , "inner_html" => $inner_html);
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// insert before
	function insert_before($tag,$inner_html)
	{		
		$params = array( "inner_number" => $this->inner_number , "tag" => $tag , "inner_html" => $inner_html);
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// remove
	function remove()
	{		
		$params = array( "inner_number" => $this->inner_number );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// get child count
	function get_child_count($include_subchildren=false)
	{		
		$params = array( "inner_number" => $this->inner_number , "include_subchildren" => $include_subchildren);
		return $this->call_get(__FUNCTION__,$params);
	}
	// get child interface by number
	function get_child_by_number($number,$include_subchildren=false)
	{			
		$params = array( "inner_number" => $this->inner_number , "number" => $number , "include_subchildren" => $include_subchildren);
		$child_inner_number=-1;
		if ($this->inner_number!=-1)
			$child_inner_number=$this->call_get(__FUNCTION__,$params);
		return new XHEInterface($child_inner_number,$this->server,$this->password);
	}
	// get child interface by inner text
	function get_child_by_inner_text($inner_text,$exactly=false,$include_subchildren=false)
	{		
		$params = array( "inner_number" => $this->inner_number , "inner_text" => $inner_text , "exactly" => $exactly , "include_subchildren" => $include_subchildren);
		$child_inner_number=-1;
		if ($this->inner_number!=-1)
			$child_inner_number=$this->call_get(__FUNCTION__,$params);
		return new XHEInterface($child_inner_number,$this->server,$this->password);
	}
	// get child interface by inner html
	function get_child_by_inner_html($inner_html,$exactly=false,$include_subchildren=false)
	{		
		$params = array( "inner_number" => $this->inner_number , "inner_html" => $inner_html , "exactly" => $exactly , "include_subchildren" => $include_subchildren);
		$child_inner_number=-1;
		if ($this->inner_number!=-1)
			$child_inner_number=$this->call_get(__FUNCTION__,$params);
		return new XHEInterface($child_inner_number,$this->server,$this->password);
	}
	// get child interface by outer text
	function get_child_by_outer_text($outer_text,$exactly=false,$include_subchildren=false)
	{		
		$params = array( "inner_number" => $this->inner_number , "outer_text" => $outer_text , "exactly" => $exactly , "include_subchildren" => $include_subchildren);
		$child_inner_number=-1;
		if ($this->inner_number!=-1)
			$child_inner_number=$this->call_get(__FUNCTION__,$params);
		return new XHEInterface($child_inner_number,$this->server,$this->password);
	}
	// get child interface by outer html
	function get_child_by_outer_html($outer_html,$exactly=false,$include_subchildren=false)
	{		
		$params = array( "inner_number" => $this->inner_number , "outer_html" => $outer_html , "exactly" => $exactly , "include_subchildren" => $include_subchildren);
		$child_inner_number=-1;
		if ($this->inner_number!=-1)
			$child_inner_number=$this->call_get(__FUNCTION__,$params);
		return new XHEInterface($child_inner_number,$this->server,$this->password);
	}
	// get child interface by attribute
	function get_child_by_attribute($atr_name,$atr_value,$exactly=true,$include_subchildren=false)
	{		
		$params = array( "inner_number" => $this->inner_number , "attr_name" => $atr_name , "attr_value" => $atr_value , "exactly" => $exactly , "include_subchildren" => $include_subchildren);
		$child_inner_number=-1;
		if ($this->inner_number!=-1)
			$child_inner_number=$this->call_get(__FUNCTION__,$params);
		return new XHEInterface($child_inner_number,$this->server,$this->password);
	}
	// get all child interfaces by inner text
	function get_all_child_by_inner_text($inner_text,$exactly=false)
	{		
		$params = array( "inner_number" => $this->inner_number , "inner_text" => $inner_text , "exactly" => $exactly );
		$child_inner_number=-1;
		if ($this->inner_number!=-1)
			$child_inner_number=$this->call_get(__FUNCTION__,$params);
		return new XHEInterfaces($child_inner_number,$this->server,$this->password);
	}
	// get all child interfaces by inner html
	function get_all_child_by_inner_html($inner_html,$exactly=false)
	{		
		$params = array( "inner_number" => $this->inner_number , "inner_html" => $inner_html , "exactly" => $exactly );
		$child_inner_number=-1;
		if ($this->inner_number!=-1)
			$child_inner_number=$this->call_get(__FUNCTION__,$params);
		return new XHEInterfaces($child_inner_number,$this->server,$this->password);
	}
	// get all child interfaces by attribute
	function get_all_child_by_attribute($atr_name,$atr_value,$exactly=true)
	{		
		$params = array( "inner_number" => $this->inner_number , "attr_name" => $atr_name , "attr_value" => $atr_value , "exactly" => $exactly );
		$child_inner_number=-1;
		if ($this->inner_number!=-1)
			$child_inner_number=$this->call_get(__FUNCTION__,$params);
		return new XHEInterfaces($child_inner_number,$this->server,$this->password);
	}
	/*// get next interface
	function get_next($tag="",$type="")
	{
		$params = array( "inner_number" => $this->inner_number , "tag" => $tag , "type" => $type  );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get next interface
	function get_prev($tag="",$type="")
	{
		$params = array( "inner_number" => $this->inner_number , "tag" => $tag , "type" => $type  );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get first child
	function get_child($tag="",$type="")
	{
		$params = array( "inner_number" => $this->inner_number , "tag" => $tag , "type" => $type  );
		return $this->call_get(__FUNCTION__,$params);
	}*/
  
        // подвинуть мышку на элемент по заданной траектории
	function mouse_move_to($dx=1,$dy=1,$type_="curve",$time_=1000)
	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy , "type" => $type_ , "time" => $time_ );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // подвинуть мышку на элемент со смещением
	function mouse_move($dx=1,$dy=1,$time=0,$tremble=0)
	{
		if ($time==0)
		{
			$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy  );
			return $this->call_boolean(__FUNCTION__,$params);
		}
		else
		{

			global $mouse,$browser;
			$xc=$mouse->get_x(true);
			$yc=$mouse->get_y(true);
			$sc_x=$browser->get_horizontal_scroll_pos();
			$sc_y=$browser->get_vertical_scroll_pos();
			$xc+=$sc_x;
			$yc+=$sc_y;
			$x=$this->get_x();
			$y=$this->get_y();
			$StepX=($x-$xc-0.0001)/$time/50;
			$StepY=($y-$yc-0.0001)/$time/50;			

			for ($i=0;$i<50*$time-1;$i++)
			{
				$xc+=$StepX;$yc+=$StepY;
				$params = array( "inner_number" => $this->inner_number , "dx" => $xc-$x , "dy" => $yc-$y );
				$this->call_boolean(__FUNCTION__,$params);
				usleep(20000);
			}
			$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy );
			return $this->call_boolean(__FUNCTION__,$params);
		}

	}
        // кликнуть мышку на элементе со смещением
	function mouse_click($dx=1,$dy=1)
	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // двойной щелчок мышкой на элементе со смещением
	function mouse_double_click($dx=1,$dy=1)
	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // подвинуть мышку на элемент со смещением
	function mouse_left_down($dx=1,$dy=1)
	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // подвинуть мышку на элемент со смещением
	function mouse_left_up($dx=1,$dy=1)
	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy  );
		return $this->call_boolean(__FUNCTION__,$params);
	}

        // кликнуть мышку на элементе со смещением
	function mouse_right_click($dx=1,$dy=1)
	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // подвинуть мышку на элемент со смещением
	function mouse_right_down($dx=1,$dy=1)
	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // подвинуть мышку на элемент со смещением
	function mouse_right_up($dx=1,$dy=1)
	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy  );
		return $this->call_boolean(__FUNCTION__,$params);
	}

        // подвинуть мышку на элемент по заданной траектории (через события)
	function send_mouse_move_to($dx=1,$dy=1,$type_="curve",$time_=1000)
	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy , "type" => $type_ , "time" => $time_ );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// отправить касание пальцев
   	function send_touch($id,$touch_type,$dx,$dy,$radiusX=0,$radiusY=0,$rotationAngle=0,$pressure=0,$modiefiers=0,$pointerType=0)
   	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy , "id" => $id , "touch_type" => $touch_type , "radiusX" => $radiusX, "radiusY" => $radiusY, "rotationAngle" => $rotationAngle, "pressure" => $pressure, "modiefiers" => $modiefiers, "pointerType" => $pointerType);
		return $this->call_boolean(__FUNCTION__,$params);
   	}
        // подвинуть мышку на элемент со смещением (через события)
	function send_mouse_move($dx=1,$dy=1,$time=0,$tremble=0,$buttons="")
	{
		if ($time==0)
		{
			$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy  , "buttons" => $buttons );
			return $this->call_boolean(__FUNCTION__,$params);
		}
		else
		{
			global $mouse,$browser;
			$xc=$mouse->get_x(true,true);
			$yc=$mouse->get_y(true,true);
			$sc_x=$browser->get_horizontal_scroll_pos();
			$sc_y=$browser->get_vertical_scroll_pos();
			$xc+=$sc_x;
			$yc+=$sc_y;
			$x=$this->get_x();
			$y=$this->get_y();
			$StepX=($x-$xc-0.0001)/$time/50;
			$StepY=($y-$yc-0.0001)/$time/50;
			for ($i=0;$i<50*$time-1;$i++)
			{
				$xc+=$StepX;$yc+=$StepY;
				$params = array( "inner_number" => $this->inner_number , "dx" => $xc-$x , "dy" => $yc-$y , "buttons" => $buttons );
				$this->call_boolean(__FUNCTION__,$params);
				usleep(20000);
			}
			$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy  , "buttons" => $buttons);
			return $this->call_boolean(__FUNCTION__,$params);
		}
	}
        // кликнуть мышку на элементе со смещением (через события)
	function send_mouse_click($dx=1,$dy=1)
	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // двойной щелчок мышкой на элементе со смещением (через события)
	function send_mouse_double_click($dx=1,$dy=1)
	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // подвинуть мышку на элемент со смещением (через события)
	function send_mouse_left_down($dx=1,$dy=1)
	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // подвинуть мышку на элемент со смещением (через события)
	function send_mouse_left_up($dx=1,$dy=1)
	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy  );
		return $this->call_boolean(__FUNCTION__,$params);
	}

        // кликнуть мышку на элементе со смещением (через события)
	function send_mouse_right_click($dx=1,$dy=1)
	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // подвинуть мышку на элемент со смещением (через события)
	function send_mouse_right_down($dx=1,$dy=1)
	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // подвинуть мышку на элемент со смещением (через события)
	function send_mouse_right_up($dx=1,$dy=1)
	{
		$params = array( "inner_number" => $this->inner_number , "dx" => $dx , "dy" => $dy  );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	// посылает ввод строки в браузер, даже если он скрыт
   	function send_input($string,$timeout=INPUT_TIME,$inFlash=false,$auto_change=true)
   	{
		global $PHP_Use_Trought_Shell;

		$params = array( "inner_number" => $this->inner_number , "string" => $string , "timeout" => $timeout , "inFlash" => $inFlash , "auto_change" => $auto_change);

		$res=false;
		if ($this->inner_number!=-1)
			$res=$this->call_boolean(__FUNCTION__,$params);
		
		if ($res!=false && $PHP_Use_Trought_Shell)
			fgets(STDIN);

		sleep(1);
		return $res;
   	}
	// посылает ввод клавиши в браузер, даже если он скрыт
   	function send_key($key,$is_key=false)
   	{
		$params = array( "inner_number" => $this->inner_number , "key" => $key , "is_key" => $is_key);
		return $this->call_boolean(__FUNCTION__,$params);
   	}
	// посылает нажатие клавиши в браузер, даже если он скрыт
   	function send_key_down($key,$is_key=false)
   	{
		$params = array( "inner_number" => $this->inner_number , "key" => $key , "is_key" => $is_key);
		return $this->call_boolean(__FUNCTION__,$params);
   	}
	// посылает отжатие клавиши в браузер, даже если он скрыт 
   	function send_key_up($key,$is_key=false)
   	{
		$params = array( "inner_number" => $this->inner_number , "key" => $key , "is_key" => $is_key);
		return $this->call_boolean(__FUNCTION__,$params);
   	}

	// эммулирует ввод всех символов из переданной функции строки
   	function input($_string,$timeout=INPUT_TIME,$inFlash=false,$auto_change=true)
   	{
		global $PHP_Use_Trought_Shell;

		$params = array( "inner_number" => $this->inner_number , "string" => $_string , "timeout" => $timeout , "inFlash" => $inFlash, "auto_change" => $auto_change);
		$res=false;
		if ($this->inner_number!=-1)
			$res=$this->call_boolean(__FUNCTION__,$params);

		if ($res!=false && $PHP_Use_Trought_Shell)
			fgets(STDIN);

		sleep(1);
		return $res;
   	}
	// эммулирует ввод одной кнопки по ее скан коду
   	function key($code)
   	{
		$params = array( "inner_number" => $this->inner_number , "code" => $code  );
		return $this->call_boolean(__FUNCTION__,$params);
   	}   
	// эмулирует нажатие клавиши
   	function key_down($key)
   	{
		$params = array( "inner_number" => $this->inner_number , "key" => $key  );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
	// эмулирует отжатие клавиши
   	function key_up($key)
   	{
		$params = array( "inner_number" => $this->inner_number , "key" => $key  );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
        /////////////////////////////////////////////////////////////////////////////////////////////////////
};		
?>