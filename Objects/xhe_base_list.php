<?php

class XHEBaseList implements ArrayAccess,IteratorAggregate
{
	/////////////////////////////////////// SERVICE VARIABLES ///////////////////////////////////////////
	// inner number
	var $inner_numbers;
	var $elements=array();
	// server address and port
	var $server;
	// server password
	var $password;
	/////////////////////////////////////// SERVICE FUNCTIONS ///////////////////////////////////////////
	// server initialization
	function __construct($inner_numbers,$server,$password="")
	{    
		$this->inner_number = $inner_numbers;
		$this->server = $server;
		$this->password = $password;
	}

        /////////////////////////////////////////////////////////////////////////////////////////////////////

    	public function __call($name, $arguments) 
	{
		$res=array();
		for ($i=0;$i<count($this->elements);$i++) 
		{	
			if (count($arguments)==0)		
				$res[$i]=$this->elements[$i]->$name();
			if (count($arguments)==1)		
				$res[$i]=$this->elements[$i]->$name($arguments[0]);
			else if (count($arguments)==2)		
				$res[$i]=$this->elements[$i]->$name($arguments[0],$arguments[1]);
			else if (count($arguments)==3)		
				$res[$i]=$this->elements[$i]->$name($arguments[0],$arguments[1],$arguments[2]);
			else if (count($arguments)==4)		
				$res[$i]=$this->elements[$i]->$name($arguments[0],$arguments[1],$arguments[2],$arguments[3]);
			else if (count($arguments)==5)		
				$res[$i]=$this->elements[$i]->$name($arguments[0],$arguments[1],$arguments[2],$arguments[3],$arguments[4]);
			else if (count($arguments)==6)		
				$res[$i]=$this->elements[$i]->$name($arguments[0],$arguments[1],$arguments[2],$arguments[3],$arguments[4],$arguments[4]);
		}
		return $res;
	}
        /////////////////////////////////////////////////////////////////////////////////////////////////////

	public function offsetExists($offset) 
	{ 
		if(isset($this->elements[$offset]))  
			return TRUE;
		else 
			return FALSE;           
	} 
	public function offsetGet($offset) 
	{ 
		if ($this->offsetExists($offset))  
			return $this->elements[$offset];
		else 
			return (false);
	}
	public function offsetSet($offset, $value) 
	{    
        	if ($offset)  
			$this->elements[$offset] = $value;
        	else  
			$this->elements[] = $value;
	}
        public function offsetUnset($offset) 
	{ 
		unset ($this->elements[$offset]);
        } 
    	function getIterator()
    	{
        	return new ArrayIterator($this->elements);
    	}
        // получить число элементов
   	function get_count()
   	{
		return count ($this->elements);
   	}
        // получить элемент
   	function get($index)
   	{
		if ($index<count($this->elements))
			return $this->elements[$index];
		else
			return false;
   	}
        /////////////////////////////////////////////////////////////////////////////////////////////////////


}

?>