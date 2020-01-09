<?php

//////////////////////////////////////////////////// Interface //////////////////////////////////////////////
class XHEInterfaces extends XHEBaseList
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
				     $this->elements[$i]=new XHEInterface(trim($elms_nums[$i]),$server,$password);
			}
		}
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить интерфейс по заданному условию
	function get_by_xxx($xxx,$condition,$exactly)
	{
		$iNeedNum=-1;
		for ($i=0;$i<count($this->elements);$i++) 
		{
			if (compare_string($exactly,$this->elements[$i]->$xxx(),$condition))
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

	// получить интерфейс объекта по имени
	function get_by_name($name,$exactly=true)
	{
		return $this->get_by_xxx("get_name",$name,$exactly);
	}	
	// получить интерфейс объекта по id
	function get_by_id($id,$exactly=true)
	{
		return $this->get_by_xxx("get_id",$id,$exactly);
	}	
	// получить интерфейс объекта по внутреннему тексту
	function get_by_inner_text($inner_text,$exactly=true)
	{
		return $this->get_by_xxx("get_inner_text",$inner_text,$exactly);
	}	
	// получить интерфейс объекта по внутреннему хтмл
	function get_by_inner_html($inner_html,$exactly=true)
	{
		return $this->get_by_xxx("get_inner_html",$inner_html,$exactly);
	}	
	// получить интерфейс объекта по внутреннему тексту
	function get_by_outer_text($outer_text,$exactly=true)
	{
		return $this->get_by_xxx("get_outer_text",$outer_text,$exactly);
	}	
	// получить интерфейс объекта по внутреннему хтмл
	function get_by_outer_html($outer_html,$exactly=true)
	{
		return $this->get_by_xxx("get_outer_html",$outer_html,$exactly);
	}	
	// получить интерфейс объекта по src
	function get_by_src($src,$exactly=true)
	{
		return $this->get_by_xxx("get_src",$src,$exactly);
	}	
	// получить интерфейс объекта по href
	function get_by_href($href,$exactly=true)
	{
		return $this->get_by_xxx("get_href",$href,$exactly);
	}	
	// получить интерфейс объекта по alt
	function get_by_alt($alt,$exactly=true)
	{
		return $this->get_by_xxx("get_alt",$alt,$exactly);
	}	
	// получить интерфейс объекта по value
	function get_by_value($value,$exactly=true)
	{
		return $this->get_by_xxx("get_value",$value,$exactly);
	}	
	// получить интерфейс объекта по значению аттрибута
	function get_by_attribute($attr_name,$attr_value,$exactly=true)
	{
		$iNeedNum=-1;
		for ($i=0;$i<count($this->elements);$i++) 
		{
			if (compare_string($exactly,$this->elements[$i]->get_attribute($attr_name),$attr_value))
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

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить все интерфейсы по заданному условию
	function get_all_by_xxx($xxx,$condition,$exactly)
	{
		// получим номера элементов для нового списка
		$aNeedNums=array();
		for ($i=0;$i<count($this->elements);$i++) 
		{
			if (compare_string($exactly,$this->elements[$i]->$xxx(),$condition))
				$aNeedNums[count($aNeedNums)]=$i;
		}

		// создадим новый список
		$new_interfaces=new XHEInterfaces("",$this->server,$this->password);
		// заполним его клонами элементов
		for ($i=0;$i<count($aNeedNums);$i++)
		{
			$new_interfaces->elements[$i]=$this->elements[$aNeedNums[$i]]->get_clone();
			//print_r($new_interfaces->elements[$i]);
			$this->inner_numbers=$this->inner_numbers.$new_interfaces->elements[$i]->inner_number;
			if (($i+1)!=count($aNeedNums))
				$this->inner_numbers=$this->inner_numbers.";";				
		}				
		return $new_interfaces;
	}	

        // получить все элементы c заданным именем
	function get_all_by_name($name,$exactly=false,$frame=-1)
	{
		return $this->get_all_by_xxx("get_name",$name,$exactly);
	}	
        // получить все элементы c заданным id
	function get_all_by_id($id,$exactly=false,$frame=-1)
	{
		return $this->get_all_by_xxx("get_id",$id,$exactly);
	}	
        // получить все элементы c заданным inner text
	function get_all_by_inner_text($inner_text,$exactly=false,$frame=-1)
	{
		return $this->get_all_by_xxx("get_inner_text",$inner_text,$exactly);
	}	
        // получить все элементы c заданным inner html
	function get_all_by_inner_html($inner_html,$exactly=false,$frame=-1)
	{
		return $this->get_all_by_xxx("get_inner_html",$inner_html,$exactly);
	}	
        // получить все элементы c заданным src
	function get_all_by_src($src,$exactly=false,$frame=-1)
	{
		return $this->get_all_by_xxx("get_src",$src,$exactly);
	}	
        // получить все элементы c заданным href
	function get_all_by_href($href,$exactly=false,$frame=-1)
	{
		return $this->get_all_by_xxx("get_href",$href,$exactly);
	}	
        // получить все элементы c заданным alt
	function get_all_by_alt($alt,$exactly=false,$frame=-1)
	{
		return $this->get_all_by_xxx("get_alt",$alt,$exactly);
	}	
        // получить все элементы c заданным value
        function get_all_by_value($value,$exactly=false,$frame=-1)
        {
		return $this->get_all_by_xxx("get_value",$value,$exactly);
        }
        // получить все элементы c заданным значением аттрибута
        function get_all_by_attribute($attr_name,$attr_value,$exactly=false,$frame=-1)
        {
		// получим номера элементов для нового списка
		$aNeedNums=array();
		for ($i=0;$i<count($this->elements);$i++) 
		{
			if (compare_string($exactly,$this->elements[$i]->get_attribute($attr_name),$attr_value))
				$aNeedNums[count($aNeedNums)]=$i;
		}

		// создадим новый список
		$new_interfaces=new XHEInterfaces("",$this->server,$this->password);
		// заполним его клонами элементов
		for ($i=0;$i<count($aNeedNums);$i++)
		{
			$new_interfaces->elements[$i]=$this->elements[$aNeedNums[$i]]->get_clone();
			//print_r($new_interfaces->elements[$i]);
			$this->inner_numbers=$this->inner_numbers.$new_interfaces->elements[$i]->inner_number;
			if (($i+1)!=count($aNeedNums))
				$this->inner_numbers=$this->inner_numbers.";";				
		}				
		return $new_interfaces;
        }

	/////////////////////////////////////////////////////////////////////////////////////////////////////
};		
?>