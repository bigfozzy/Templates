<?php
///////////////////////////////////////// Внутренее общее для всех DOM элементов ////////////////////////////
class XHEBaseDOM extends XHEBaseObject
{
	// check and wait element exist by number
	public function wait_element_exist_by_number($number,$frame=-1)
	{
 		global $bWaitElementExistBeforeAction;
		global $iSecondsWaitElementExistBeforeAction;

		$iSec=0;
		if ($bWaitElementExistBeforeAction)
		{
		   $is_exist = $this->z_is_exist_by_number($number,$frame);
		   while(!$is_exist)
		   {
  			usleep(250000);
			$is_exist = $this->z_is_exist_by_number($number,$frame);
			$iSec+=0.25;
			if ($iSec>$iSecondsWaitElementExistBeforeAction)
				return false;	
		   }
		}
		return true;
	}
	// check and wait element exist by name
	public function wait_element_exist_by_name($name,$frame=-1)
	{
 		global $bWaitElementExistBeforeAction;
		global $iSecondsWaitElementExistBeforeAction;

		$iSec=0;
		if ($bWaitElementExistBeforeAction)
		{
		   $is_exist = $this->z_is_exist_by_name($name,$frame);
		   while(!$is_exist)
		   {
  			usleep(250000);
			$is_exist = $this->z_is_exist_by_name($name,$frame);
			$iSec+=0.25;
			if ($iSec>$iSecondsWaitElementExistBeforeAction)
				return false;	
		   }
		}
		return true;
	}
	// check and wait element exist by id
	public function wait_element_exist_by_id($id,$exactly,$frame=-1)
	{
 		global $bWaitElementExistBeforeAction;
		global $iSecondsWaitElementExistBeforeAction;

		$iSec=0;
		if ($bWaitElementExistBeforeAction)
		{
		   $is_exist = $this->z_is_exist_by_id($id,$exactly,$frame);
		   while(!$is_exist)
		   {
  			usleep(250000);
			$is_exist = $this->z_is_exist_by_id($id,$exactly,$frame);
			$iSec+=0.25;
			if ($iSec>$iSecondsWaitElementExistBeforeAction)
				return false;	
		   }
		}
		return true;
	}
	// check and wait element exist by inner text
	public function wait_element_exist_by_inner_text($inner_text,$exactly,$frame=-1)
	{
 		global $bWaitElementExistBeforeAction;
		global $iSecondsWaitElementExistBeforeAction;

		$iSec=0;
		if ($bWaitElementExistBeforeAction)
		{
		   $is_exist = $this->z_is_exist_by_inner_text($inner_text,$exactly,$frame);
		   while(!$is_exist)
		   {
  			usleep(250000);
			$is_exist = $this->z_is_exist_by_inner_text($inner_text,$exactly,$frame);
			$iSec+=0.25;
			if ($iSec>$iSecondsWaitElementExistBeforeAction)
				return false;	
		   }
		}
		return true;
	}
	// check and wait element exist by inner html
	public function wait_element_exist_by_inner_html($inner_html,$exactly,$frame=-1)
	{
 		global $bWaitElementExistBeforeAction;
		global $iSecondsWaitElementExistBeforeAction;

		$iSec=0;
		if ($bWaitElementExistBeforeAction)
		{
		   $is_exist = $this->z_is_exist_by_inner_html($inner_html,$exactly,$frame);
		   while(!$is_exist)
		   {
  			usleep(250000);
			$is_exist = $this->z_is_exist_by_inner_html($inner_html,$exactly,$frame);
			$iSec+=0.25;
			if ($iSec>$iSecondsWaitElementExistBeforeAction)
				return false;	
		   }
		}
		return true;
	}
	// check and wait element exist by outer text
	public function wait_element_exist_by_outer_text($outer_text,$exactly,$frame=-1)
	{
 		global $bWaitElementExistBeforeAction;
		global $iSecondsWaitElementExistBeforeAction;

		$iSec=0;
		if ($bWaitElementExistBeforeAction)
		{
		   $is_exist = $this->z_is_exist_by_outer_text($outer_text,$exactly,$frame);
		   while(!$is_exist)
		   {
  			usleep(250000);
			$is_exist = $this->z_is_exist_by_outer_text($outer_text,$exactly,$frame);
			$iSec+=0.25;
			if ($iSec>$iSecondsWaitElementExistBeforeAction)
				return false;	
		   }
		}
		return true;
	}
	// check and wait element exist by outer html
	public function wait_element_exist_by_outer_html($outer_html,$exactly,$frame=-1)
	{
 		global $bWaitElementExistBeforeAction;
		global $iSecondsWaitElementExistBeforeAction;

		$iSec=0;
		if ($bWaitElementExistBeforeAction)
		{
		   $is_exist = $this->z_is_exist_by_outer_html($outer_html,$exactly,$frame);
		   while(!$is_exist)
		   {
  			usleep(250000);
			$is_exist = $this->z_is_exist_by_outer_html($outer_html,$exactly,$frame);
			$iSec+=0.25;
			if ($iSec>$iSecondsWaitElementExistBeforeAction)
				return false;	
		   }
		}
		return true;
	}
	// check and wait element exist by attribute
	public function wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame=-1)
	{
 		global $bWaitElementExistBeforeAction;
		global $iSecondsWaitElementExistBeforeAction;

		$iSec=0;
		if ($bWaitElementExistBeforeAction)
		{
		   $is_exist = $this->z_is_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);
		   while(!$is_exist)
		   {
  			usleep(500000);
			$is_exist = $this->z_is_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);
			$iSec+=0.5;
			if ($iSec>$iSecondsWaitElementExistBeforeAction)
				return false;	
		   }
		}
		return true;
	}
	// check and wait element exist by xpath
	public function wait_element_exist_by_xpath($xpath)
	{
 		global $bWaitElementExistBeforeAction;
		global $iSecondsWaitElementExistBeforeAction;

		$iSec=0;
		if ($bWaitElementExistBeforeAction)
		{
		   $is_exist = $this->z_is_exist_by_xpath($xpath);
		   while(!$is_exist)
		   {
  			usleep(500000);
			$is_exist = $this->z_is_exist_by_xpath($xpath);
			$iSec+=0.5;
			if ($iSec>$iSecondsWaitElementExistBeforeAction)
				return false;	
		   }
		}
		return true;
	}
	// check and wait element exist by attribute in form by name
	public function wait_element_exist_by_attribute_by_form_name($attr_name,$attr_value,$exactly,$form_name,$frame=-1)
	{
 		global $bWaitElementExistBeforeAction;
		global $iSecondsWaitElementExistBeforeAction;

		$iSec=0;
		if ($bWaitElementExistBeforeAction)
		{
		   $is_exist = $this->z_is_exist_by_attribute_by_form_name($attr_name,$attr_value,$exactly,$form_name,$frame);
		   while(!$is_exist)
		   {
  			usleep(500000);
			$is_exist = $this->z_is_exist_by_attribute_by_form_name($attr_name,$attr_value,$exactly,$form_name,$frame);
			$iSec+=0.5;
			if ($iSec>$iSecondsWaitElementExistBeforeAction)
				return false;	
		   }
		}
		return true;
	}
	// check and wait element exist by attribute in form by number
	public function wait_element_exist_by_attribute_by_form_number($attr_name,$attr_value,$exactly,$form_number,$frame=-1)
	{
 		global $bWaitElementExistBeforeAction;
		global $iSecondsWaitElementExistBeforeAction;

		$iSec=0;
		if ($bWaitElementExistBeforeAction)
		{
		   $is_exist = $this->z_is_exist_by_attribute_by_form_number($attr_name,$attr_value,$exactly,$form_number,$frame);
		   while(!$is_exist)
		   {
  			usleep(500000);
			$is_exist = $this->z_is_exist_by_attribute_by_form_number($attr_name,$attr_value,$exactly,$form_number,$frame);
			$iSec+=0.5;
			if ($iSec>$iSecondsWaitElementExistBeforeAction)
				return false;	
		   }
		}
		return true;
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // click on element by name
	protected function z_click_by_name($name,$frame,$wait_browser)
	{	
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
	// click on element by number 
	protected function z_click_by_number($number,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_number($number,$frame);		

		$params = array( "number" => $number , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
   	// click by id
	protected function z_click_by_id($id,$exactly=true,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_attribute("id",$id,$exactly,$frame);		

		$params = array( "id" => $id , "exactly" => $exactly , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
   	// click by value
	protected function z_click_by_value($value,$exactly=true,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_attribute("value",$value,$exactly,$frame);		

		$params = array( "value" => $value , "exactly" => $exactly , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
	// click on element by href
	protected function z_click_by_href($href,$exactly=true,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_attribute("href",$href,$exactly,$frame);

		$params = array( "href" => $href , "exactly" => $exactly , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}	
	// click by alt
	protected function z_click_by_alt($alt,$exactly=true,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_attribute("alt",$alt,$exactly,$frame);

		$params = array( "alt" => $alt , "exactly" => $exactly , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
	// click by src
	protected function z_click_by_src($src,$exactly=true,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_attribute("src",$src,$exactly,$frame);

		$params = array( "src" => $src , "exactly" => $exactly , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
	// click on element by inner text
	protected function z_click_by_inner_text($inner_text,$exactly=true,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_inner_text($inner_text,$exactly,$frame);

		$params = array( "inner_text" => $inner_text , "exactly" => $exactly , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
	// click on element by inner html
	protected function z_click_by_inner_html($inner_html,$exactly=true,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_inner_html($inner_html,$exactly,$frame);

		$params = array( "inner_html" => $inner_html , "exactly" => $exactly , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
	// click on element by any attribute
	protected function z_click_by_attribute($attr_name,$attr_value,$exactly=true,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}	
        // click on all elements (без учета проверки : существует ли элемент)
	protected function z_click_all($frame,$wait_browser=true)
	{
		$params = array( "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
	// click on random element (без учета проверки : существует ли элемент)
	protected function z_click_random($frame,$wait_browser)
	{
		$params = array( "frame" => $frame );
		$res=$this->call_get(__FUNCTION__,$params);
		if ($res!=-1 && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
        // click by name (без учета проверки : существует ли элемент)
	protected function z_click_by_name_and_value($name,$value="",$frame,$wait_browser)
	{
		$params = array( "name" => $name , "value" => $value , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // click by name in form by name
	protected function z_click_by_name_by_form_name($name,$form_name,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_attribute_by_form_name("name",$name,true,$form_name,$frame);

		$params = array( "name" => $name , "form_name" => $form_name , "frame" => $frame);
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
        // click by name in form by number
	protected function z_click_by_name_by_form_number($name,$form_number,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_attribute_by_form_number("name",$name,true,$form_number,$frame);

		$params = array( "name" => $name , "form_number" => $form_number , "frame" => $frame);
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}

        // click by number in form by name (без учета проверки : существует ли элемент)
	protected function z_click_by_number_by_form_name($number,$form_name,$frame,$wait_browser)
	{
		$params = array( "number" => $number , "form_name" => $form_name , "frame" => $frame);
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
        // click by number in form by number (без учета проверки : существует ли элемент)
	protected function z_click_by_number_by_form_number($number,$form_number,$frame,$wait_browser)
	{
		$params = array( "number" => $number , "form_number" => $form_number , "frame" => $frame);
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}

        // click by attribute in form by name
	protected function z_click_by_attribute_by_form_name($attr_name,$attr_value,$exactly,$form_name,$frame=-1,$wait_browser=true)
	{
		$this->wait_element_exist_by_attribute_by_form_name($attr_name,$attr_value,$exactly,$form_name,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "form_name" => $form_name , "frame" => $frame);
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
        // click by attribute in form by number
	protected function z_click_by_attribute_by_form_number($attr_name,$attr_value,$exactly,$form_number,$frame=-1,$wait_browser=true)
	{
		$this->wait_element_exist_by_attribute_by_form_number($attr_name,$attr_value,$exactly,$form_number,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "form_number" => $form_number , "frame" => $frame);
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // click on element by name
        protected function z_click_in_by_name($name,$x=-1,$y=-1,$frame=-1)
        {
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "x" => $x , "y" => $y , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true)
		{
			global $browser;
			$browser->wait_for();
			sleep(1);
		}        
		return $res;
        }
        // click on element by number
        protected function z_click_in_by_number($number,$x=-1,$y=-1,$frame=-1)
        {
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "x" => $x , "y" => $y , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true)
		{
			global $browser;
			$browser->wait_for();
			sleep(1);
		}        
		return $res;
        }
        // click on element by src
        protected function z_click_in_by_src($src,$exactly="true",$x=-1,$y=-1,$frame=-1)
        {
		$this->wait_element_exist_by_attribute("src",$src,$exactly,$frame);

		$params = array( "src" => $src , "exactly" => $exactly , "x" => $x , "y" => $y , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true)
		{
			global $browser;
			$browser->wait_for();
			sleep(1);
		}        
		return $res;
        }
        // click on element by any attribute
        protected function z_click_in_by_attribute($attr_name,$attr_value,$exactly="true",$x=-1,$y=-1,$frame=-1)
        {
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "x" => $x , "y" => $y , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true)
		{
			global $browser;
			$browser->wait_for();
			sleep(1);
		}        
		return $res;
        }

        /////////////////////////////////////////////////////////////////////////////////////////////////////

	// send event to element by name
	protected function z_send_event_by_name($name,$event,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "event" => $event ,"frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
	// send event to element by id
	protected function z_send_event_by_id($id,$exactly,$event,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_id($id,$frame);

		$params = array( "id" => $id , "exactly" => $exactly , "event" => $event ,"frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
	// send event to element by number 
	protected function z_send_event_by_number($number,$event,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "event" => $event , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
	// send event to element by href
	protected function z_send_event_by_href($href,$exactly,$event,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_attribute("href",$href,$exactly,$frame);

		$params = array( "href" => $href , "exactly" => $exactly , "event" => $event , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
	// send event to element by inner text
	protected function z_send_event_by_inner_text($inner_text,$exactly,$event,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_inner_text($inner_text,$exactly,$frame);

		$params = array( "inner_text" => $inner_text , "exactly" => $exactly , "event" => $event , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
	// send event to element by inner html
	protected function z_send_event_by_inner_html($inner_html,$exactly,$event,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_inner_html($inner_html,$exactly,$frame);

		$params = array( "inner_html" => $inner_html , "exactly" => $exactly , "event" => $event , "frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}
	// send event to element by any attribute
	protected function z_send_event_by_attribute($attr_name,$attr_value,$exactly,$event,$frame,$wait_browser)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "event" => $event ,"frame" => $frame );
		$res=$this->call_boolean(__FUNCTION__,$params);
		if ($res==true && $wait_browser)
		{
			global $browser;
			$browser->wait_for();
		}        
		return $res;
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

   	// set focus to element by name
	protected function z_set_focus_by_name($name,$frame)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// set focus to element by name
	protected function z_set_focus_by_number($number,$frame)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// set focus to element by inner text
	protected function z_set_focus_by_inner_text($inner_text,$exactly=true,$frame)
	{
		$this->wait_element_exist_by_inner_text($inner_text,$exactly,$frame);

		$params = array( "inner_text" => $inner_text , "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// set focus to element by inner html
	protected function z_set_focus_by_inner_html($inner_html,$exactly=true,$frame)
	{
		$this->wait_element_exist_by_inner_html($inner_html,$exactly,$frame);

		$params = array( "inner_html" => $inner_html , "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// set focus to element by href
	protected function z_set_focus_by_href($href,$exactly=true,$frame)
	{
		$this->wait_element_exist_by_attribute("href",$href,$exactly,$frame);

		$params = array( "href" => $href , "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// set focus to element by attribute
	protected function z_set_focus_by_attribute($attr_name,$attr_value,$exactly=true,$frame)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // set value by name
        protected function z_set_value_by_name($name,$value,$frame=-1)
        {
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "value" => $value , "frame" => $frame);
		return $this->call_boolean(__FUNCTION__,$params,600);
        }
        // set value by number
        protected function z_set_value_by_number($number,$value,$frame=-1)
        {
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "value" => $value , "frame" => $frame);
		return $this->call_boolean(__FUNCTION__,$params,600);
        }
        // set value by attribute
        protected function z_set_value_by_attribute($attr_name,$attr_value,$exactly,$value,$frame=-1)
        {
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "value" => $value , "frame" => $frame);
		return $this->call_boolean(__FUNCTION__,$params,600);
        }

        // set value by name in form by form name
        protected function z_set_value_by_name_by_form_name($name,$value,$form_name,$frame=-1)
        {
		$this->wait_element_exist_by_attribute_by_form_name("name",$name,true,$form_name,$frame);

		$params = array( "name" => $name , "value" => $value , "form_name" => $form_name , "frame" => $frame);
		return $this->call_boolean(__FUNCTION__,$params,600);
        }
        // set value byname in form by form number
        protected function z_set_value_by_name_by_form_number($name,$value,$form_number,$frame=-1)
        {
		$this->wait_element_exist_by_attribute_by_form_number("name",$name,true,$form_number,$frame);

		$params = array( "name" => $name , "value" => $value , "form_number" => $form_number , "frame" => $frame);
		return $this->call_boolean(__FUNCTION__,$params,600);
        }

        // set value by number in form by form name (без учета проверки : существует ли элемент)
        protected function z_set_value_by_number_by_form_name($number,$value,$form_name,$frame=-1)
        {
		$params = array( "number" => $number , "value" => $value , "form_name" => $form_name , "frame" => $frame);
		return $this->call_boolean(__FUNCTION__,$params,600);
        }
        // set value by number in form by form number (без учета проверки : существует ли элемент)
        protected function z_set_value_by_number_by_form_number($number,$value,$form_number,$frame=-1)
        {
		$params = array( "number" => $number , "value" => $value , "form_number" => $form_number , "frame" => $frame);
		return $this->call_boolean(__FUNCTION__,$params,600);
        }

        // set value by attribute in form by form name
        protected function z_set_value_by_attribute_by_form_name($attr_name,$attr_value,$exactly,$value,$form_name,$frame=-1)
        {
		$this->wait_element_exist_by_attribute_by_form_name($attr_name,$attr_value,$exactly,$form_name,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "value" => $value , "form_name" => $form_name , "frame" => $frame);
		return $this->call_boolean(__FUNCTION__,$params,600);
        }
        // set value by attribute in form by form number
        protected function z_set_value_by_attribute_by_form_number($attr_name,$attr_value,$exactly,$value,$form_number,$frame=-1)
        {
		$this->wait_element_exist_by_attribute_by_form_number($attr_name,$attr_value,$exactly,$form_number,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "value" => $value , "form_number" => $form_number , "frame" => $frame);
		return $this->call_boolean(__FUNCTION__,$params,600);
        }

        /////////////////////////////////////////////////////////////////////////////////////////////////////

        // set inner text by name
	protected function z_set_inner_text_by_name($name,$inner_text,$frame)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "inner_text" => $inner_text , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params,600);
	}
	// set inner text by number 
	protected function z_set_inner_text_by_number($number,$inner_text,$frame)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "inner_text" => $inner_text , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params,600);
	}	
	// set inner text by any attribute
	protected function z_set_inner_text_by_attribute($attr_name,$attr_value,$exactly,$inner_text,$frame)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "inner_text" => $inner_text , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params,600);
	}       

        // set inner html by name
	protected function z_set_inner_html_by_name($name,$inner_html,$frame)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "inner_html" => $inner_html , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params,600);
	}
	// set inner html by number 
	protected function z_set_inner_html_by_number($number,$inner_html,$frame)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "inner_html" => $inner_html , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params,600);
	}	
	// set inner html by any attribute
	protected function z_set_inner_html_by_attribute($attr_name,$attr_value,$exactly,$inner_html,$frame)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "inner_html" => $inner_html , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params,600);
	}       

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// add (or set) attribute by name
	protected function z_add_attribute_by_name($name,$name_attr,$value_attr,$frame)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "name_attr" => $name_attr , "value_attr" => $value_attr , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// add (or set) attribute by number
	protected function z_add_attribute_by_number($number,$name_attr,$value_attr,$frame)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "name_attr" => $name_attr , "value_attr" => $value_attr , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // add (or set) attribute by inner text
	protected function z_add_attribute_by_inner_text($inner_text,$exactly,$name_attr,$value_attr,$frame)
	{
		$this->wait_element_exist_by_inner_text($inner_text,$exactly,$frame);

		$params = array( "inner_text" => $inner_text , "exactly" => $exactly , "name_attr" => $name_attr , "value_attr" => $value_attr , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // add (or set) attribute by inner html
	protected function z_add_attribute_by_inner_html($inner_html,$exactly,$name_attr,$value_attr,$frame)
	{
		$this->wait_element_exist_by_inner_html($inner_html,$exactly,$frame);

		$params = array( "inner_html" => $inner_html , "exactly" => $exactly , "name_attr" => $name_attr , "value_attr" => $value_attr , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // add (or set) attribute by attribute
	protected function z_add_attribute_by_attribute($attr_name,$attr_value,$exactly,$name_attr,$value_attr,$frame)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "name_attr" => $name_attr , "value_attr" => $value_attr , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	// set any attribute by name
        protected function z_set_attribute_by_name($name,$name_attr,$value_attr,$frame=-1)
        {
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "name_attr" => $name_attr , "value_attr" => $value_attr , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }
	// set any attribute by number
        protected function z_set_attribute_by_number($number,$name_attr,$value_attr,$frame=-1)
        {
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "name_attr" => $name_attr , "value_attr" => $value_attr , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }
	// set any attribute by inner text
        protected function z_set_attribute_by_inner_text($inner_text,$exactly,$name_attr,$value_attr,$frame=-1)
        {
		$this->wait_element_exist_by_inner_text($inner_text,$exactly,$frame);

		$params = array( "inner_text" => $inner_text , "exactly" => $exactly , "name_attr" => $name_attr , "value_attr" => $value_attr , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }
	// set any attribute by inner html
        protected function z_set_attribute_by_inner_html($inner_html,$exactly,$name_attr,$value_attr,$frame=-1)
        {
		$this->wait_element_exist_by_inner_html($inner_html,$exactly,$frame);

		$params = array( "inner_html" => $inner_html , "exactly" => $exactly , "name_attr" => $name_attr , "value_attr" => $value_attr , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }
	// set any attribute by any attribute
        protected function z_set_attribute_by_attribute($attr_name,$attr_value,$exactly,$name_attr,$value_attr,$frame=-1)
        {
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "name_attr" => $name_attr , "value_attr" => $value_attr , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }

	// remove attribute by name
	protected function z_remove_attribute_by_name($name,$name_attr,$frame)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "name_attr" => $name_attr , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// remove attribute by number
	protected function z_remove_attribute_by_number($number,$name_attr,$frame)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "name_attr" => $name_attr , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// remove attribute by inner text
	protected function z_remove_attribute_by_inner_text($inner_text,$exactly,$name_attr,$frame)
	{
		$this->wait_element_exist_by_inner_text($inner_text,$exactly,$frame);

		$params = array( "inner_text" => $inner_text , "exactly" => $exactly , "name_attr" => $name_attr , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// remove attribute by inner html
	protected function z_remove_attribute_by_inner_html($inner_html,$exactly,$name_attr,$frame)
	{
		$this->wait_element_exist_by_inner_html($inner_html,$exactly,$frame);

		$params = array( "inner_html" => $inner_html , "exactly" => $exactly , "name_attr" => $name_attr , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// remove attribute by attribute 
	protected function z_remove_attribute_by_attribute($attr_name,$attr_value,$exactly,$name_attr,$frame)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "name_attr" => $name_attr , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

  	// save screenshot to file by name
	protected function z_screenshot_by_name($file_path,$name,$frame=-1,$as_gray=false)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "file_path" => $file_path , "frame" => $frame , "as_gray" => $as_gray );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// save screenshot to file by number
	protected function z_screenshot_by_number($file_path,$number,$frame=-1,$as_gray=false)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "file_path" => $file_path , "frame" => $frame , "as_gray" => $as_gray);
		return $this->call_boolean(__FUNCTION__,$params);
	}
    	// save image to file by src
	protected function z_screenshot_by_src($file_path,$src,$exactly=true,$frame=-1,$as_gray=false)
	{
		$this->wait_element_exist_by_attribute("src",$src,$exactly,$frame);

		$params = array( "src" => $src , "exactly" => $exactly , "file_path" => $file_path , "frame" => $frame , "as_gray" => $as_gray);
		return $this->call_boolean(__FUNCTION__,$params);
	}
    	// save screenshot to file by attribute
	protected function z_screenshot_by_attribute($file_path,$attr_name,$attr_value,$exactly=true,$frame=-1,$as_gray=false)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "file_path" => $file_path , "frame" => $frame , "as_gray" => $as_gray);
		return $this->call_boolean(__FUNCTION__,$params);
	}

        /////////////////////////////////////////////////////////////////////////////////////////////////////

        // is exist by number (без учета проверки : существует ли элемент)
        protected function z_is_exist_by_number($number,$frame)
        {
		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // is exist by name (без учета проверки : существует ли элемент)
        protected function z_is_exist_by_name($name,$frame)
        {
		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // is exist by name (без учета проверки : существует ли элемент)
        protected function z_is_exist_by_id($id,$exactly,$frame)
        {
		$params = array( "id" => $id , "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }
	// is element exist by href (без учета проверки : существует ли элемент)
	protected function z_is_exist_by_href($href,$exactly,$frame)
	{
		$params = array( "href" => $href , "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}	
	// is element exist by alt (без учета проверки : существует ли элемент)
	protected function z_is_exist_by_alt($alt,$exactly,$frame)
	{
		$params = array( "alt" => $alt , "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}	
	// is element exist by src (без учета проверки : существует ли элемент)
	protected function z_is_exist_by_src($src,$exactly,$frame)
	{
		$params = array( "src" => $src , "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}	
	// is element exist by inner text (без учета проверки : существует ли элемент)
	protected function z_is_exist_by_inner_text($inner_text,$exactly,$frame)
	{
		$params = array( "inner_text" => $inner_text , "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}	
	// is element exist by inner html (без учета проверки : существует ли элемент)
	protected function z_is_exist_by_inner_html($inner_html,$exactly,$frame)
	{
		$params = array( "inner_html" => $inner_html , "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}	
	// is element exist by outer text (без учета проверки : существует ли элемент)
	protected function z_is_exist_by_outer_text($outer_text,$exactly,$frame)
	{
		$params = array( "outer_text" => $outer_text , "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}	
	// is element exist by outer html (без учета проверки : существует ли элемент)
	protected function z_is_exist_by_outer_html($outer_html,$exactly,$frame)
	{
		$params = array( "outer_html" => $outer_html , "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}	
	// is element exist by attribute (без учета проверки : существует ли элемент)
	protected function z_is_exist_by_attribute($attr_name,$attr_value,$exactly,$frame)
	{
		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// is element exist by attribute (без учета проверки : существует ли элемент)
	protected function z_is_exist_by_xpath($xpath)
	{
		$params = array( "xpath" => $xpath );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	// is element exist by attribute in form by number (без учета проверки : существует ли элемент)
	protected function z_is_exist_by_attribute_by_form_number($attr_name,$attr_value,$exactly,$form_number,$frame)
	{
		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "form_number" => $form_number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// is element exist by attribute in form by name (без учета проверки : существует ли элемент)
	protected function z_is_exist_by_attribute_by_form_name($attr_name,$attr_value,$exactly,$form_name,$frame)
	{
		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "form_name" => $form_name , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// get name by number
	protected function z_get_name_by_number($number,$frame)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}

   	// get number by name
	protected function z_get_number_by_name($name,$frame)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
   	// get number by inner text
	protected function z_get_number_by_inner_text($inner_text,$exactly=true,$frame)
	{
		$this->wait_element_exist_by_inner_text($inner_text,$exactly,$frame);

		$params = array( "inner_text" => $inner_text , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
   	// get number by inner html
	protected function z_get_number_by_inner_html($inner_html,$exactly=true,$frame)
	{
		$this->wait_element_exist_by_inner_html($inner_html,$exactly,$frame);

		$params = array( "inner_html" => $inner_html , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
   	// get number by id
	protected function z_get_number_by_id($id,$frame)
	{
		$this->wait_element_exist_by_attribute("id",$id,true,$frame);

		$params = array( "id" => $id , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
   	// get number by src
	protected function z_get_number_by_src($src,$exactly=true,$frame)
	{
		$this->wait_element_exist_by_attribute("src",$src,$exactly,$frame);

		$params = array( "src" => $src , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
   	// get number by href
	protected function z_get_number_by_href($href,$exactly=true,$frame)
	{
		$this->wait_element_exist_by_attribute("href",$href,$exactly,$frame);

		$params = array( "href" => $href , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
        // get number by attribute
        protected function z_get_number_by_attribute($attr_name,$attr_value,$exactly=true,$frame)
        {
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }

	// get inner text by name
	protected function z_get_inner_text_by_name($name,$frame)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get inner text by number
	protected function z_get_inner_text_by_number($number,$frame)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get inner text by id
	protected function z_get_inner_text_by_id($id,$frame)
	{
		$this->wait_element_exist_by_attribute("id",$id,true,$frame);

		$params = array( "id" => $id , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get inner text by name
	protected function z_get_inner_text_by_href($href,$exactly,$frame)
	{
		$this->wait_element_exist_by_attribute("href",$href,$exactly,$frame);

		$params = array( "href" => $href , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
        // get inner text by any attribute
	protected function z_get_inner_text_by_attribute($attr_name,$attr_value,$exactly=true,$frame)
        {
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }

        // get inner html by name
        protected function z_get_inner_html_by_name($name,$frame)
        {
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }
        // get inner html by number
        protected function z_get_inner_html_by_number($number,$frame)
        {
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }
        // get inner html of element by id
        protected function z_get_inner_html_by_id($id,$frame)
        {
		$this->wait_element_exist_by_attribute("id",$id,true,$frame);

		$params = array( "id" => $id , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }
        // get inner html by any attribute
	protected function z_get_inner_html_by_attribute($attr_name,$attr_value,$exactly=true,$frame)
        {
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }

        // get value by name
	protected function z_get_value_by_name($name,$frame)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
        // get value by number
	protected function z_get_value_by_number($number,$frame)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
        // get value by attribute
	protected function z_get_value_by_attribute($attr_name,$attr_value,$exactly,$frame)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}

    	// get src by name
	protected function z_get_src_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
   	// get src by number
	protected function z_get_src_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get alt by name
	protected function z_get_alt_by_name($name,$frame=-1)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get alt by number
	protected function z_get_alt_by_number($number,$frame=-1)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}

        // get href by name
	protected function z_get_href_by_name($name,$frame)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get href by number
	protected function z_get_href_by_number($number,$frame)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
        // get href by inner text
	protected function z_get_href_by_inner_text($inner_text,$exactly=true,$frame)
	{
		$this->wait_element_exist_by_inner_text($inner_text,$exactly,$frame);

		$params = array( "inner_text" => $inner_text , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}               

        // get attribute by name
        protected function z_get_attribute_by_name($name,$name_attr,$frame)
        {
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "name_attr" => $name_attr , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }
        // get attribute by number
        protected function z_get_attribute_by_number($number,$name_attr,$frame)
        {
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "name_attr" => $name_attr , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }
        // get attribute by src
        protected function z_get_attribute_by_src($src,$exactly,$name_attr,$frame)
        {
		$this->wait_element_exist_by_attribute("src",$src,$exactly,$frame);

		$params = array( "src" => $src , "exactly" => $exactly , "name_attr" => $name_attr , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }
        // get attribute by inner text
        protected function z_get_attribute_by_inner_text($inner_text,$exactly,$name_attr,$frame)
        {
		$this->wait_element_exist_by_inner_text($inner_text,$exactly,$frame);

		$params = array( "inner_text" => $inner_text , "exactly" => $exactly , "name_attr" => $name_attr , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }
        // get attribute by inner html
        protected function z_get_attribute_by_inner_html($inner_html,$exactly,$name_attr,$frame)
        {
		$this->wait_element_exist_by_inner_html($inner_html,$exactly,$frame);

		$params = array( "inner_html" => $inner_html , "exactly" => $exactly , "name_attr" => $name_attr , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }
        // get attribute by attribute
        protected function z_get_attribute_by_attribute($attr_name,$attr_value,$exactly,$name_attr,$frame)
        {
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "name_attr" => $name_attr , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }

        // get all atributes names by name
        protected function z_get_all_attributes_by_name($name,$frame)
        {
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }
        // get all atributes names by number
        protected function z_get_all_attributes_by_number($number,$frame)
        {
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }
	// get all atributes names by src
        protected function z_get_all_attributes_by_src($src,$exactly,$frame)
        {
		$this->wait_element_exist_by_attribute("src",$src,$exactly,$frame);

		$params = array( "src" => $src , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }

        // get all attributes values by name
        protected function z_get_all_attributes_values_by_name($name,$frame)
        {
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }
        // get all attributes values by number
        protected function z_get_all_attributes_values_by_number($number,$frame)
        {
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }
        // get all attributes values by src
        protected function z_get_all_attributes_values_by_src($src,$exactly,$frame)
        {
		$this->wait_element_exist_by_attribute("src",$src,$exactly,$frame);

		$params = array( "src" => $src , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }

        // get all events by name
        protected function z_get_all_events_by_name($name,$frame)
        {
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }
        // get all events by number
        protected function z_get_all_events_by_number($number,$frame)
        {
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }
	// get all events by src
        protected function z_get_all_events_by_src($src,$exactly,$frame)
        {
		$this->wait_element_exist_by_attribute("src",$src,$exactly,$frame);

		$params = array( "src" => $src , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
        }

        // is disabled by name
        protected function z_is_disabled_by_name($name,$frame)
        {
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // is disabled by number
        protected function z_is_disabled_by_number($number,$frame)
        {
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_boolean(__FUNCTION__,$params);
        }

   	// get numbers of child with setted type by name
	protected function z_get_numbers_child_by_name($name,$element_type,$frame,$include_subchildren)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "element_type" => $element_type , "frame" => $frame , "include_subchildren" => $include_subchildren);
		return $this->call_get(__FUNCTION__,$params);
	}
   	// get numbers of child with setted type by number
	protected function z_get_numbers_child_by_number($number,$element_type,$frame,$include_subchildren)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "element_type" => $element_type , "frame" => $frame , "include_subchildren" => $include_subchildren);
		return $this->call_get(__FUNCTION__,$params);
	}
   	// get numbers of child with setted type by id
	protected function z_get_numbers_child_by_id($id,$element_type,$frame,$include_subchildren)
	{
		$this->wait_element_exist_by_attribute("id",$id,true,$frame);

		$params = array( "id" => $id , "element_type" => $element_type , "frame" => $frame , "include_subchildren" => $include_subchildren);
		return $this->call_get(__FUNCTION__,$params);
	}
   	// get numbers of child with setted type by attribute
	protected function z_get_numbers_child_by_attribute($attr_name,$attr_value,$exactly,$element_type,$frame,$include_subchildren)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "element_type" => $element_type , "frame" => $frame , "include_subchildren" => $include_subchildren);
		return $this->call_get(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // send keyboard input by name
	protected function z_send_keyboard_input_by_name($name,$string,$timeout,$frame)
	{
		global $PHP_Use_Trought_Shell;
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "string" => $string , "timeout" => $timeout , "frame" => $frame);
		$res=$this->call_boolean(__FUNCTION__,$params);

		if ($res!=false && $PHP_Use_Trought_Shell)
			fgets(STDIN);
		else
			sleep(1);

		return $res;
	}
        // send keyboard input by number
	protected function z_send_keyboard_input_by_number($number,$string,$timeout,$frame)
	{
		global $PHP_Use_Trought_Shell;
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "string" => $string , "timeout" => $timeout , "frame" => $frame);
		$res=$this->call_boolean(__FUNCTION__,$params);

		if ($res!=false && $PHP_Use_Trought_Shell)
			fgets(STDIN);
		else
			sleep(1);

		return $res;
	}
        // send keyboard input by inner text
	protected function z_send_keyboard_input_by_inner_text($inner_text,$exactly,$string,$timeout,$frame)
	{
		global $PHP_Use_Trought_Shell;
		$this->wait_element_exist_by_inner_text($inner_text,$exactly,$frame);

		$params = array( "inner_text" => $inner_text , "exactly" => $exactly , "string" => $string , "timeout" => $timeout , "frame" => $frame);
		$res=$this->call_boolean(__FUNCTION__,$params);

		if ($res!=false && $PHP_Use_Trought_Shell)
			fgets(STDIN);
		else
			sleep(1);

		return $res;
	}
        // send keyboard input by inner html
	protected function z_send_keyboard_input_by_inner_html($inner_html,$exactly,$string,$timeout,$frame)
	{
		global $PHP_Use_Trought_Shell;
		$this->wait_element_exist_by_inner_html($inner_html,$exactly,$frame);

		$params = array( "inner_html" => $inner_html , "exactly" => $exactly , "string" => $string , "timeout" => $timeout , "frame" => $frame);
		$res=$this->call_boolean(__FUNCTION__,$params);

		if ($res!=false && $PHP_Use_Trought_Shell)
			fgets(STDIN);
		else
			sleep(1);

		return $res;
	}
        // send keyboard input by attribute
	protected function z_send_keyboard_input_by_attribute($attr_name,$attr_value,$exactly,$string,$timeout,$frame)
	{
		global $PHP_Use_Trought_Shell;
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "string" => $string , "timeout" => $timeout , "frame" => $frame);
		$res=$this->call_boolean(__FUNCTION__,$params);

		if ($res!=false && $PHP_Use_Trought_Shell)
			fgets(STDIN);
		else
			sleep(1);

		return $res;
	}

        /////////////////////////////////////////////////////////////////////////////////////////////////////

        // get x by name
	protected function z_get_x_by_name($name,$frame)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get x by number 
	protected function z_get_x_by_number($number,$frame)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get x by inner text
	protected function z_get_x_by_inner_text($inner_text,$exactly,$frame)
	{
		$this->wait_element_exist_by_inner_text($inner_text,$exactly,$frame);

		$params = array( "inner_text" => $inner_text , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get x by inner html
	protected function z_get_x_by_inner_html($inner_html,$exactly,$frame)
	{
		$this->wait_element_exist_by_inner_html($inner_html,$exactly,$frame);

		$params = array( "inner_html" => $inner_html , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get x by href
	protected function z_get_x_by_href($href,$exactly,$frame)
	{
		$this->wait_element_exist_by_attribute("href",$href,$exactly,$frame);

		$params = array( "href" => $href , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}	
	// get x by any attribute
	protected function z_get_x_by_attribute($attr_name,$attr_value,$exactly,$frame)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
        // get y by name
	protected function z_get_y_by_name($name,$frame)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get y by number 
	protected function z_get_y_by_number($number,$frame)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get y by inner text
	protected function z_get_y_by_inner_text($inner_text,$exactly,$frame)
	{
		$this->wait_element_exist_by_inner_text($inner_text,$exactly,$frame);

		$params = array( "inner_text" => $inner_text , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get y by inner html
	protected function z_get_y_by_inner_html($inner_html,$exactly,$frame)
	{
		$this->wait_element_exist_by_inner_html($inner_html,$exactly,$frame);

		$params = array( "inner_html" => $inner_html , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get y by href
	protected function z_get_y_by_href($href,$exactly,$frame)
	{
		$this->wait_element_exist_by_attribute("href",$href,$exactly,$frame);

		$params = array( "href" => $href , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}	
	// get y by any attribute
	protected function z_get_y_by_attribute($attr_name,$attr_value,$exactly,$frame)
	{
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	} 

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// get count of elements on page (без учета проверки : существует ли элемент)
	protected function z_get_count($frame=-1)
	{
		$params = array( "frame" => $frame );
		return $this->call_get(__FUNCTION__,$params);
	}
	// get inner texts of all elements on page (без учета проверки : существует ли элемент)
	protected function z_get_all_inner_texts($separator,$text_filter,$frame=-1)
	{
		$params = array( "separator" => $separator , "text_filter" => $text_filter , "frame" => $frame);
		return $this->call_get(__FUNCTION__,$params);
	}


        // get inner texts of all elements on page by href (без учета проверки : существует ли элемент)
	protected function z_get_all_inner_texts_by_href($href,$separator,$exactly,$frame)
	{
		$params = array( "href" => $href , "separator" => $separator , "exactly" => $exactly , "frame" => $frame);
		return $this->call_get(__FUNCTION__,$params);
	}
        // get inner texts of all elements on page in frame (без учета проверки : существует ли элемент)
	protected function z_get_all_inner_texts_in_frame($frame, $separator="<br>")
	{
		return $this->call("$this->prefix.GetAllInnerTextsInFrame?separator=".base64_encode($separator)."&frame=".base64_encode($frame));
	}	

	// get all numbers by inner text (без учета проверки : существует ли элемент)
	protected function z_get_all_numbers_by_inner_text($text,$exactly=false,$frame=-1)
	{
		$separator="<@@@b@r@@@>";
		$params = array( "text" => $text , "exactly" => $exactly , "separator" => $separator , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);
		if ($res=="")
			return array();
		return explode($separator,$res);
	}	
	// get all numbers by inner html (без учета проверки : существует ли элемент)
	protected function z_get_all_numbers_by_inner_html($html,$exactly=false,$frame=-1)
	{
		$separator="<@@@b@r@@@>";
		$params = array( "html" => $html , "exactly" => $exactly , "separator" => $separator , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);
		if ($res=="")
			return array();
		return explode($separator,$res);
	}	
	// get all inner htmls by inner text (без учета проверки : существует ли элемент)
	protected function z_get_all_inner_htmls_by_inner_text($text,$exactly=false,$frame=-1)
	{
		$separator="<@@@b@r@@@>";
		$params = array( "text" => $text , "exactly" => $exactly , "separator" => $separator , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);
		if ($res=="")
			return array();
		return explode($separator,$res);
	}	
	// get all attribute values by inner text (без учета проверки : существует ли элемент)
	protected function z_get_all_attributes_by_inner_text($attr_name_need,$text,$exactly=false,$frame=-1)
	{
		$separator="<@@@b@r@@@>";
		$params = array( "attr_name_need" => $attr_name_need ,"text" => $text , "exactly" => $exactly , "separator" => $separator , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);
		if ($res=="")
			return array();
		return explode($separator,$res);
	}
	
	// get all numbers by attribute (без учета проверки : существует ли элемент)
	protected function z_get_all_numbers_by_attribute($attr_name,$attr_value,$exactly=false,$frame=-1)
	{
		$separator="<@@@b@r@@@>";
		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "separator" => $separator , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);
		if ($res=="")
			return array();
		return explode($separator,$res);
	}	
	// get all inner text by attribute (без учета проверки : существует ли элемент)
	protected function z_get_all_inner_texts_by_attribute($attr_name,$attr_value,$exactly=false,$frame=-1)
	{
		$separator="<@@@b@r@@@>";
		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "separator" => $separator , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);
		if ($res=="")
			return array();
		return explode($separator,$res);
	}	
	// get all inner htmls by attribute (без учета проверки : существует ли элемент)
	protected function z_get_all_inner_htmls_by_attribute($attr_name,$attr_value,$exactly=false,$frame=-1)
	{
		$separator="<@@@b@r@@@>";
		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "separator" => $separator , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);
		if ($res=="")
			return array();
		return explode($separator,$res);
	}	
	// get all attribute values by attribute (без учета проверки : существует ли элемент)
	protected function z_get_all_attributes_by_attribute($attr_name_need,$attr_name,$attr_value,$exactly=false,$frame=-1)
	{
		$separator="<@@@b@r@@@>";
		$params = array( "attr_name_need" => $attr_name_need , "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "separator" => $separator , "frame" => $frame);
		$res=$this->call_get(__FUNCTION__,$params);
		if ($res=="")
			return array();
		return explode($separator,$res);
	}	

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// get width by number
	protected function z_get_width_by_number($number,$frame)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "frame" => $frame);
		return $this->call_get(__FUNCTION__,$params);
	}
	// get width by name
	protected function z_get_width_by_name($name,$frame)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame);
		return $this->call_get(__FUNCTION__,$params);
	}
	// get width by href
	protected function z_get_width_by_href($href,$exactly,$frame)
	{
		$this->wait_element_exist_by_attribute("href",$href,$exactly,$frame);

		$params = array( "href" => $href , "exactly" => $exactly , "frame" => $frame);
		return $this->call_get(__FUNCTION__,$params);
	}
	// get width by src
	protected function z_get_width_by_src($src,$exactly,$frame)
	{
		$this->wait_element_exist_by_attribute("src",$src,$exactly,$frame);

		$params = array( "src" => $src , "exactly" => $exactly , "frame" => $frame);
		return $this->call_get(__FUNCTION__,$params);
	}
        // get width by attribute
        protected function z_get_width_by_attribute($attr_name,$attr_value,$exactly,$frame)
        {
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "frame" => $frame);
		return $this->call_get(__FUNCTION__,$params);
        }

	// get height by number
	protected function z_get_height_by_number($number,$frame)
	{
		$this->wait_element_exist_by_number($number,$frame);

		$params = array( "number" => $number , "frame" => $frame);
		return $this->call_get(__FUNCTION__,$params);
	}
	// get height by name
	protected function z_get_height_by_name($name,$frame)
	{
		$this->wait_element_exist_by_name($name,$frame);

		$params = array( "name" => $name , "frame" => $frame);
		return $this->call_get(__FUNCTION__,$params);
	}
	// get height by href
	protected function z_get_height_by_href($href,$exactly,$frame)
	{
		$this->wait_element_exist_by_attribute("href",$href,$exactly,$frame);

		$params = array( "href" => $href , "exactly" => $exactly , "frame" => $frame);
		return $this->call_get(__FUNCTION__,$params);
	}
	// get height by src
	protected function z_get_height_by_src($src,$exactly,$frame)
	{
		$this->wait_element_exist_by_attribute("src",$src,$exactly,$frame);

		$params = array( "src" => $src , "exactly" => $exactly , "frame" => $frame);
		return $this->call_get(__FUNCTION__,$params);
	}
        // get height by attribute
        protected function z_get_height_by_attribute($attr_name,$attr_value,$exactly,$frame)
        {
		$this->wait_element_exist_by_attribute($attr_name,$attr_value,$exactly,$frame);

		$params = array( "attr_name" => $attr_name , "attr_value" => $attr_value , "exactly" => $exactly , "frame" => $frame);
		return $this->call_get(__FUNCTION__,$params);
        }

	/////////////////////////////////////////////////////////////////////////////////////////////////////
};
?>