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

	// �������� ��������� �� ��������� �������
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

		// ������ �������
		if ($iNeedNum!=-1)
			return $this->elements[$iNeedNum]->get_clone();
		else
			return false;
	}	

	// �������� ��������� ������� �� �����
	function get_by_name($name,$exactly=true)
	{
		return $this->get_by_xxx("get_name",$name,$exactly);
	}	
	// �������� ��������� ������� �� id
	function get_by_id($id,$exactly=true)
	{
		return $this->get_by_xxx("get_id",$id,$exactly);
	}	
	// �������� ��������� ������� �� ����������� ������
	function get_by_inner_text($inner_text,$exactly=true)
	{
		return $this->get_by_xxx("get_inner_text",$inner_text,$exactly);
	}	
	// �������� ��������� ������� �� ����������� ����
	function get_by_inner_html($inner_html,$exactly=true)
	{
		return $this->get_by_xxx("get_inner_html",$inner_html,$exactly);
	}	
	// �������� ��������� ������� �� ����������� ������
	function get_by_outer_text($outer_text,$exactly=true)
	{
		return $this->get_by_xxx("get_outer_text",$outer_text,$exactly);
	}	
	// �������� ��������� ������� �� ����������� ����
	function get_by_outer_html($outer_html,$exactly=true)
	{
		return $this->get_by_xxx("get_outer_html",$outer_html,$exactly);
	}	
	// �������� ��������� ������� �� src
	function get_by_src($src,$exactly=true)
	{
		return $this->get_by_xxx("get_src",$src,$exactly);
	}	
	// �������� ��������� ������� �� href
	function get_by_href($href,$exactly=true)
	{
		return $this->get_by_xxx("get_href",$href,$exactly);
	}	
	// �������� ��������� ������� �� alt
	function get_by_alt($alt,$exactly=true)
	{
		return $this->get_by_xxx("get_alt",$alt,$exactly);
	}	
	// �������� ��������� ������� �� value
	function get_by_value($value,$exactly=true)
	{
		return $this->get_by_xxx("get_value",$value,$exactly);
	}	
	// �������� ��������� ������� �� �������� ���������
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

		// ������ �������
		if ($iNeedNum!=-1)
			return $this->elements[$iNeedNum]->get_clone();
		else
			return false;
	}	

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// �������� ��� ���������� �� ��������� �������
	function get_all_by_xxx($xxx,$condition,$exactly)
	{
		// ������� ������ ��������� ��� ������ ������
		$aNeedNums=array();
		for ($i=0;$i<count($this->elements);$i++) 
		{
			if (compare_string($exactly,$this->elements[$i]->$xxx(),$condition))
				$aNeedNums[count($aNeedNums)]=$i;
		}

		// �������� ����� ������
		$new_interfaces=new XHEInterfaces("",$this->server,$this->password);
		// �������� ��� ������� ���������
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

        // �������� ��� �������� c �������� ������
	function get_all_by_name($name,$exactly=false,$frame=-1)
	{
		return $this->get_all_by_xxx("get_name",$name,$exactly);
	}	
        // �������� ��� �������� c �������� id
	function get_all_by_id($id,$exactly=false,$frame=-1)
	{
		return $this->get_all_by_xxx("get_id",$id,$exactly);
	}	
        // �������� ��� �������� c �������� inner text
	function get_all_by_inner_text($inner_text,$exactly=false,$frame=-1)
	{
		return $this->get_all_by_xxx("get_inner_text",$inner_text,$exactly);
	}	
        // �������� ��� �������� c �������� inner html
	function get_all_by_inner_html($inner_html,$exactly=false,$frame=-1)
	{
		return $this->get_all_by_xxx("get_inner_html",$inner_html,$exactly);
	}	
        // �������� ��� �������� c �������� src
	function get_all_by_src($src,$exactly=false,$frame=-1)
	{
		return $this->get_all_by_xxx("get_src",$src,$exactly);
	}	
        // �������� ��� �������� c �������� href
	function get_all_by_href($href,$exactly=false,$frame=-1)
	{
		return $this->get_all_by_xxx("get_href",$href,$exactly);
	}	
        // �������� ��� �������� c �������� alt
	function get_all_by_alt($alt,$exactly=false,$frame=-1)
	{
		return $this->get_all_by_xxx("get_alt",$alt,$exactly);
	}	
        // �������� ��� �������� c �������� value
        function get_all_by_value($value,$exactly=false,$frame=-1)
        {
		return $this->get_all_by_xxx("get_value",$value,$exactly);
        }
        // �������� ��� �������� c �������� ��������� ���������
        function get_all_by_attribute($attr_name,$attr_value,$exactly=false,$frame=-1)
        {
		// ������� ������ ��������� ��� ������ ������
		$aNeedNums=array();
		for ($i=0;$i<count($this->elements);$i++) 
		{
			if (compare_string($exactly,$this->elements[$i]->get_attribute($attr_name),$attr_value))
				$aNeedNums[count($aNeedNums)]=$i;
		}

		// �������� ����� ������
		$new_interfaces=new XHEInterfaces("",$this->server,$this->password);
		// �������� ��� ������� ���������
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