<?php
//////////////////////////////////////////////////// Debug /////////////////////////////////////////////////
class XHEDebug extends XHEBaseObject
{
	////////////////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ //////////////////////////////////////////
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Debug";
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////

	////////////////////////////////////////////////////////////////////////////////////////////////////
   	// открыть отладочную закладку
	function open_tab($page)
	{
		$params = array( "page" => $page);
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// добавить текст в отладочную закладку
	function set_tab_content($page,$text)
	{
		$params = array( "page" => $page , "text" => $text);
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// сохранить содержимое отладочной закладки в файл
	function save_tab_content_to_file($page,$filepath,$add=false)
	{
		$params = array( "page" => $page , "filepath" => $filepath , "add" => $add );
		return $this->call_boolean(__FUNCTION__,$params);
	}	
	// получить содержимое отладочной закладки
	function get_tab_content($page)
	{
		$params = array( "page" => $page );
		return $this->call_get(__FUNCTION__,$params);
	}	
	// очистить текст в отладочной закладке
	function clear_tab_content($page)
	{
		$params = array( "page" => $page);
		return $this->call_boolean(__FUNCTION__,$params);
	}	
	// закрыть отладочную закладку
	function close_tab($page)
	{
		$params = array( "page" => $page);
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// задать кодировку отладочной закладки
	function set_encoding($page,$charset)
	{
		$params = array( "page" => $page , "charset" => $charset);
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// задать режим отображения отладочной закладки
	function view_tab_as_text($page,$as_text=true)
	{
		$params = array( "page" => $page , "as_text" => $as_text);
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// закрыть все отладочные закладки
	function close_tabs()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////////////

	// вывести диалоговое сообщение 
	function message_box($text)
	{
		$params = array( "text" => $text);
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// вывести сообщение - уведомление
	function notification_box($rtf_text,$show_time=9999)
	{
		$params = array( "rtf_text" => $rtf_text , "show_time" => $show_time);
		return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить минимальный размер памяти, которую занимала программа в процессе работы
	function get_min_mem_size()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}	
	// получить максимальный размер памяти, которую занимала программа в процессе работы
	function get_max_mem_size()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}	

	// получить текущий размер памяти, занимаемый программой
	function get_cur_mem_size()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}	
	// получить размер свободной физической памяти
	function get_free_physical_mem_size()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}	
	// оптимизировать размер памяти, занимаемый программой
	function optimize_memory($onlyGarbageCollector=false)
	{
		$params = array( "onlyGarbageCollector" => $onlyGarbageCollector );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// получить число ресурсов, использованных хуманом (0 - GDI, 1 - USER ,  2 - бывший максимум GDI , 4 - бывший максимум USER , 5 - число HANDLE использованых програмой)
	function get_gui_resources($type)
	{
		$params = array( "type" => $type );
		return $this->call_get(__FUNCTION__,$params);
	}	
		
	// получить id процесса хумана
	function get_process_id()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////

	// задать хук на отладочные действия
	function set_hook($action,$php_script)
	{
		$params = array( "action" => $action , "php_script" => $php_script );
		return $this->call_boolean(__FUNCTION__,$params);
	}

        ////////////////////////////////////////////////////////////////////////////////////////////////////

        // получить путь к текущему скрипту
	function get_cur_script_path()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}	
        // задать путь к текущему скрипту
	function set_cur_script_path($path)
	{
		$params = array( "path" => $path );
		return $this->call_boolean(__FUNCTION__,$params);
	}	
        // получить путь к папке в котрой находится текущий скрипт
	function get_cur_script_folder()
	{
		$params = array( );
		return $this->call_get(__FUNCTION__,$params);
	}	
	// проверить, выполняется ли сейчас скрипт
	function is_script_run()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // запустить текущий скрипт на выполнение
        function run_current_script($params)
	{
		$params = array( "params" => $params);
		return $this->call_boolean(__FUNCTION__,$params);
	}

	////////////////////////////////////////////////////////////////////////////////////////////////////
};	
?>