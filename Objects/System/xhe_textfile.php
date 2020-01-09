<?php
//////////////////////////////////////////////////// Textfile ///////////////////////////////////////////////
class XHETextFile extends XHEBaseObject
{
	////////////////////////////////////// —≈–¬»—Ќџ≈ ‘”Ќ ÷»» ///////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "TextFile";
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// получить папку файла
   	function get_file_folder($path,$timeout=-1) 
   	{
		$params = array( "path" => $path );
		return $this->call_get(__FUNCTION__,$params,$timeout);
   	}    	
   	// получить число строк в файле
   	function get_lines_count($path,$timeout=-1) 
   	{
		$params = array( "path" => $path );
		return $this->call_get(__FUNCTION__,$params,$timeout);
   	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// создать каталог 
   	function create_folder($path,$timeout=-1)
   	{
		$params = array( "path" => $path );
		return $this->call_boolean(__FUNCTION__,$params,$timeout);
   	}
	// разбить файл по папкам из первых букв по строковому файлу 
   	function generate_folders_by_strings_file($file,$folder,$timeout=-1) 
   	{
		$params = array( "file" => $file , "folder" => $folder );
		return $this->call_boolean(__FUNCTION__,$params,$timeout);
   	}    	

	// получить все имена файлов в папке 
   	function get_all_files_in_folder($path,$file="",$include_subfolders=false,$only_folders=false,$timeout=-1,$extension="")
   	{
		$params = array( "path" => $path , "file" => $file , "include_subfolders" => $include_subfolders , "only_folders" => $only_folders , "extension" => $extension );
		return $this->call_get(__FUNCTION__,$params,$timeout);
   	}
   	// собрать файлы из подпапок в один файл 
	function collect_from_folders_to_file($infolderpath,$outfilepath,$timeout=-1,$extension="txt")
   	{
		$params = array( "infolderpath" => $infolderpath , "outfilepath" => $outfilepath , "extension" => $extension  );
		return $this->call_boolean(__FUNCTION__,$params,$timeout);
   	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

  	// разделить файл на части 
        function split_to_part($infilepath,$outfilepath,$numparts,$timeout=-1) 
   	{
		$params = array( "infilepath" => $infilepath , "outfilepath" => $outfilepath , "numparts" => $numparts );
		return $this->call_boolean(__FUNCTION__,$params,$timeout);
   	}	
   	// собрать файлы из подпапок в одну папку
   	function collect_from_folders_to_folder($infolderpath,$outfolderpath,$timeout=-1)
   	{
		$params = array( "infolderpath" => $infolderpath , "outfolderpath" => $outfolderpath);
		return $this->call_boolean(__FUNCTION__,$params,$timeout);
   	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// отсортировать файл построчно
   	function sort($infilepath,$outfilepath,$timeout=-1)
   	{
		$params = array( "infilepath" => $infilepath , "outfilepath" => $outfilepath);
		return $this->call_boolean(__FUNCTION__,$params,$timeout);
   	}
  	// убрать дубликаты из файла
   	function dedupe($infilepath,$outfilepath,$timeout=-1)
   	{
		$params = array( "infilepath" => $infilepath , "outfilepath" => $outfilepath);
		return $this->call_boolean(__FUNCTION__,$params,$timeout);
   	}
	// рандомизировать файл
   	function randomize_to($infilepath,$outfilepath,$timeout=-1)
   	{
		$params = array( "infilepath" => $infilepath , "outfilepath" => $outfilepath);
		return $this->call_boolean(__FUNCTION__,$params,$timeout);
   	}
	// помен€ть пор€док строк в текстовом файле 
   	function revert_strings_file($infile,$outfile,$timeout=-1) 
   	{
		$params = array( "infile" => $infile , "outfile" => $outfile );
		return $this->call_boolean(__FUNCTION__,$params,$timeout);
   	}    	
	// заменить строки в текстовом файле
   	function replace_string($infile,$outfile,$old_str,$new_str,$timeout=-1) 
   	{
		$params = array( "infile" => $infile , "outfile" => $outfile , "old_str" => $old_str , "new_str" => $new_str);
		return $this->call_boolean(__FUNCTION__,$params,$timeout);
   	}    	
	// убрать строки из файла
   	function exclude_strings_file_from_file($infile,$excluding_file,$outfile,$timeout=-1) 
   	{
		$params = array( "infile" => $infile , "excluding_file" => $excluding_file , "outfile" => $outfile );
		return $this->call_boolean(__FUNCTION__,$params,$timeout);
   	}    	
	// форматировать случайные строки в текстовом файле
   	function file_links($infilepath,$outfilepath,$num_lines,$type_make="L",$timeout=-1)
   	{
		$params = array( "infilepath" => $infilepath , "outfilepath" => $outfilepath , "num_lines" => $num_lines , "type_make" => $type_make );
		return $this->call_boolean(__FUNCTION__,$params,$timeout);
   	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////

     	// записать файл
   	function write_file($file,$content,$timeout=-1,$create_folders=false,$encoding="") 
   	{
		$params = array( "file" => $file , "content" => $content , "create_folders" => $create_folders , "encoding" => $encoding);
		return $this->call_boolean(__FUNCTION__,$params,$timeout);
   	}
        // добавить строку в файл
   	function add_string_to_file($file,$str,$timeout=-1) 
   	{
		$params = array( "file" => $file , "str" => $str );
		return $this->call_boolean(__FUNCTION__,$params,$timeout);
   	}
        // задать строки в заданном файле
   	function set_string_to_file($file,$str,$line,$add=true,$timeout=-1) 
   	{
		$params = array( "file" => $file , "str" => $str , "line" => $line , "add" => $add );
		return $this->call_boolean(__FUNCTION__,$params,$timeout);
   	}
  	// прочитать файл
   	function read_file($file,$timeout=-1,$encoding="windows-1251") 
   	{
		$params = array( "file" => $file , "encoding" => $encoding );
		$res=$this->call_get(__FUNCTION__,$params,$timeout);
		// PHP PART
		/*global $bUTF8Ver;
		if ($bUTF8Ver)
			$res_1251=iconv($encoding, "utf-8", $res);
		else
			$res_1251=iconv($encoding, "windows-1251", $res);*/
		return $res;
   	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // получить строку из файла
   	function get_line_from_file($file,$rand,$line,$timeout=-1) 
   	{
		$params = array( "file" => $file , "rand" => $rand , "line" => $line );
		return $this->call_get(__FUNCTION__,$params,$timeout);
   	}
        // удалить строку из файла
   	function delete_line_from_file($file,$line,$timeout=-1) 
   	{
		$params = array( "file" => $file , "line" => $line );
		return $this->call_boolean(__FUNCTION__,$params,$timeout);
   	}
        // get lines from file
   	function get_lines_from_file($file,$beg_line,$lines_count,$timeout=-1) 
   	{
		$params = array( "file" => $file , "beg_line" => $beg_line , "lines_count" => $lines_count );
		return $this->call_get(__FUNCTION__,$params,$timeout);
   	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////
};
?>