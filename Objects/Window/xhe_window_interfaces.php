<?php

//////////////////////////////////////////////////// Interface //////////////////////////////////////////////
class XHEWindowInterfaces extends XHEBaseList
{
	/////////////////////////////////////// SERVICE FUNCTIONS ///////////////////////////////////////////

	// server initialization
	function __construct($inner_numbers,$server,$password="")
	{    
		XHEBaseList::XHEBaseList($inner_numbers,$server,$password);

		if ($inner_numbers!="" && $inner_numbers!="Ignore")
		{
			if ($inner_numbers===false)
				return;			
			$elms_nums=explode(";",$inner_numbers);
			for ($i=0;$i<count($elms_nums);$i++) 
			{
			     if (trim($elms_nums[$i])!="")
				     $this->elements[$i]=new XHEWindowInterface(trim($elms_nums[$i]),$server,$password);
			}
		}
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить интерфейс окна по его тексту
	function get_by_text($text,$exactly=false)
	{
		$iNeedNum=-1;
		for ($i=0;$i<count($this->elements);$i++) 
		{
			if (compare_string($exactly,$this->elements[$i]->get_text(),$text))
			{
				$iNeedNum=$i;
				break;
			}						
		}

		// вернем элемент
		if ($iNeedNum!=-1)
			return $this->elements[$iNeedNum]->get_clone();
		else
			return false;
	}	
	// получить интерфейс окна по его классу
	function get_by_class_name($class_name,$exactly=false)
	{
		$iNeedNum=-1;
		for ($i=0;$i<count($this->elements);$i++) 
		{
			if (compare_string($exactly,$this->elements[$i]->get_class_name(),$class_name))
			{
				$iNeedNum=$i;
				break;
			}						
		}

		// вернем элемент
		if ($iNeedNum!=-1)
			return $this->elements[$iNeedNum]->get_clone();
		else
			return false;
	}	
	// получить интерфейс окна по его точке
	function get_by_point($x,$y)
	{
		$iNeedNum=-1;
		for ($i=0;$i<count($this->elements);$i++) 
		{
			$xw=$this->elements[$i]->get_x();
			if ($x<$xw)
				continue;
			$yw=$this->elements[$i]->get_y();
			if ($y<$yw)
				continue;
			$width=$this->elements[$i]->get_width();
			if ($x>$xw+$width)
				continue;
			$height=$this->elements[$i]->get_height();
			if ($y>$yw+$height)
				continue;
			$iNeedNum=$i;		
			break;
		}

		// вернем элемент
		if ($iNeedNum!=-1)
			return $this->elements[$iNeedNum]->get_clone();
		else
			return false;
	}	
};		
?>