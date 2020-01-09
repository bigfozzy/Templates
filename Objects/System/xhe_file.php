<?php
///////////////////////////////////////////////// File_os ///////////////////////////////////////////////////
class XHEFile_os extends XHEFile_osCompatible
{
	////////////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ ///////////////////////////////////////////////
	// конструктор
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "File";
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// копировать файл
	function copy($path,$new_path,$fail_if_exist=false)
	{			  
		$params = array( "path" => $path , "new_path" => $new_path , "fail_if_exist" => $fail_if_exist);
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// переместить файл
	function move($path,$new_path,$fail_if_exist=false)
	{			  
		$params = array( "path" => $path , "new_path" => $new_path , "fail_if_exist" => $fail_if_exist);
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// переименовать файл
	function rename($path,$new_path)
	{			  
		$params = array( "path" => $path , "new_path" => $new_path );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// удалить файл
	function delete($path)
	{			  
		$params = array( "path" => $path );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// проверка существования файла
	function is_exist($path)
	{
		$params = array( "path" => $path );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // получить имя файла (без пути к файлу)
	function get_name($path)
	{			  
		$params = array( "path" => $path );
		return $this->call_get(__FUNCTION__,$params);
	}
        // получить заголовок файла (имя файла, без расширения)
	function get_title($path)
	{			  
		$params = array( "path" => $path );
		return $this->call_get(__FUNCTION__,$params);
	}
        // получить расширение файла
	function get_ext($path)
	{			  
		$params = array( "path" => $path );
		return $this->call_get(__FUNCTION__,$params);
	}
        // получить папку файла
	function get_folder($path)
	{			  
		$params = array( "path" => $path );
		return $this->call_get(__FUNCTION__,$params);
	}
        // получить имя диска, на котором находится файл
	function get_disk($path)
	{			  
		$params = array( "path" => $path );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить размер файла
	function get_size($path)
	{			  
		$params = array( "path" => $path );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить содержимое случайного файла в заданной папке
	function get_random_file_content($folder,$ext,$include_subfolders,$timeout=-1)
	{			  
		$params = array( "folder" => $folder , "extension" => $ext , "include_subfolders" => $include_subfolders );
		return $this->call_get(__FUNCTION__,$params,$timeout);
	}
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // получить дату создания файла
	function get_creation_date($path,$time=false)
	{			  
		$params = array( "path" => $path , "time" => $time );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить дату последнего изменения файла
	function get_modification_date($path,$time=false)
	{			  
		$params = array( "path" => $path , "time" => $time );
		return $this->call_get(__FUNCTION__,$params);
	}
	// получить дату последнего доступа к файлу
	function get_lastacess_date($path,$time=false)
	{			  
		$params = array( "path" => $path , "time" => $time );
		return $this->call_get(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////
	
	// проверить что файл имеет атрибут NORMAL
	function is_normal($path)
	{			  
		$params = array( "path" => $path);
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// проверить что файл имеет атрибут READONLY
        function is_readonly($path)
	{			  
		$params = array( "path" => $path );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// проверить что файл имеет атрибут HIDDEN
	function is_hidden($path)
	{			  
		$params = array( "path" => $path );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// проверить что файл имеет атрибут SYSTEM
	function is_system($path)
	{			  
		$params = array( "path" => $path );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// проверить что файл имеет атрибут ARCHIVE 
	function is_archive($path)
	{			  
		$params = array( "path" => $path );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// установить у файла атрибут NORMAL
	function set_normal($path,$on=true)
	{			  
		$params = array( "path" => $path , "on" => $on, "attribute" => "NORMAL" );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// установить у файла атрибут READONLY
        function set_readonly($path,$on=true)
	{			  
		$params = array( "path" => $path , "on" => $on, "attribute" => "READONLY" );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// установить у файла атрибут HIDDEN
	function set_hidden($path,$on=true)
	{			  
		$params = array( "path" => $path , "on" => $on, "attribute" => "HIDDEN" );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// установить у файла атрибут SYSTEM
	function set_system($path,$on=true)
	{			  
		$params = array( "path" => $path , "on" => $on, "attribute" => "SYSTEM" );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// установить у файла атрибут ARCHIVE
	function set_archive($path,$on=true)
	{			  
		$params = array( "path" => $path , "on" => $on, "attribute" => "ARCHIVE" );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////
};	
?>