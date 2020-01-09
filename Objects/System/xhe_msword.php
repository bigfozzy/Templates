<?php
/////////////////////////////////////////////////////// MsWord //////////////////////////////////////////////
class XHEMsWord extends XHEBaseObject
{
	////////////////////////////////////////// —≈–¬»—Ќџ≈ ‘”Ќ ÷»» ///////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "MsWord";
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////

	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // создать документ
	function create_doc($path,$type,$is_visible=true,$close=false)
	{
		$params = array( "path" => $path , "type" => $type , "is_visible" => $is_visible , "close" => $close );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// открыть существующий документ
	function open_doc($path,$is_visible=true)
	{
		$params = array( "path" => $path , "is_visible" => $is_visible );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // задать активный документ
	function set_active_doc($name)
	{
		$params = array( "name" => $name );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// сохранить документ
	function save_doc($name)
	{
		$params = array( "name" => $name );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// закрыть все документы
	function close_docs($save)
	{
		$params = array( "save" => $save );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // закрыть активный документ 
	function close_active_doc($save)
	{
		$params = array( "save" => $save );
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // закрыть приложение MsWord
        function close()
        {
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
        }

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// задать текст
	function set_text($path, $text, $pos,$is_visible=true)
	{
		$params = array( "path" => $path , "text" => $text , "pos" => $pos , "is_visible" => $is_visible);
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// создать таблицу
	function create_table($name, $row, $col, $pos, $border=1)
	{
		$params = array( "name" => $name , "row" => $row , "col" => $col , "pos" => $pos , "border" => $border);
		return $this->call_boolean(__FUNCTION__,$params);
	}
        // добавить строку к таблице
	function add_row($name,$table,$count=1)
        {
		$params = array( "name" => $name , "table" => $table , "count" => $count);
		return $this->call_boolean(__FUNCTION__,$params);
        }
        // добавить столбец к таблице
	function add_column($name,$table,$count=1)
        {
		$params = array( "name" => $name , "table" => $table , "count" => $count);
		return $this->call_boolean(__FUNCTION__,$params);
        }

        // заполнить €чейку в таблице
        function fill_cell($name,$table,$row, $col, $text)
        {
		$params = array( "name" => $name , "table" => $table , "row" => $row , "col" => $col , "text" => $text);
		return $this->call_boolean(__FUNCTION__,$params);
        }

        // получить текст €чейки в таблице
        function get_cell_text($name,$table,$row, $col)
        {
		$params = array( "name" => $name , "table" => $table , "row" => $row , "col" => $col);
		return $this->call_get(__FUNCTION__,$params);
        } 
        // получить текст таблицы
        function get_table_text($name,$table,$separator="<br>")
        {
		$params = array( "name" => $name , "table" => $table , "separator" => $separator );
		return $this->call_get(__FUNCTION__,$params);
        }

	/////////////////////////////////////////////////////////////////////////////////////////////////////
};	
?>