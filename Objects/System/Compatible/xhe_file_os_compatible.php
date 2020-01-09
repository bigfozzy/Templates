<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
class XHEFile_osCompatible extends XHEBaseObject
{
	/////////////////////////////////////////////////////////////////////////////////////////////////////
	
        // get file name
	function get_file_name($path)
	{			  
		return $this->get_name($path);
	}
        // get file title (without extention)
	function get_file_title($path)
	{			  
		return $this->get_title($path);
	}
        // get file extention
	function get_file_ext($path)
	{			  
		return $this->get_ext($path);
	}
        // get file folder
	function get_file_folder($path)
	{			  
		return $this->get_folder($path);
	}
        // get file disk
	function get_file_disk($path)
	{			  
		return $this->get_disk($path);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////
};		
?>