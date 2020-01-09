<?php
////////////////////////////////////////////// Sound ////////////////////////////////////////////////////////
class XHESound extends XHEBaseObject
{
	///////////////////////////////// —≈–¬»—Ќџ≈ ‘”Ќ ÷»» ////////////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Sound";
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////

	/////////////////////////////////////////////////////////////////////////////////////////////////////

        // подать звуковой сигнал 
	function beep()
	{
		$params = array( );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// проиграть звуковой файл
	function play_sound($path)
	{
		$params = array( "path" => $path );
		return $this->call_boolean(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// конвертировать файл в другой звуковой формат
	function convert_file($src_path,$new_path,$Hz="",$timeout=60)
	{
		$params = array( "src_path" => $src_path , "new_path" => $new_path , "Hz" => $Hz , "timeout" => $timeout );
		return $this->call_boolean(__FUNCTION__,$params,$timeout);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// распознать звуковой файл, состо€щих из звуков английских цифр (0-9)
	function recognize_file_with_digits($path,$timeout=60)
	{
		$params = array( "path" => $path , "timeout" => $timeout );
		return $this->call_get(__FUNCTION__,$params);
	}
	// распознать произвольный звуковой файл, использу€ механизм CMU Sphynx
	function recognize_file($path,$dict,$jsgf,$hmm,$add_params="",$timeout=60)
	{
		$params = array( "path" => $path ,"dict" => $dict ,"jsgf" => $jsgf ,"hmm" => $hmm , "add_params" => $add_params , "timeout" => $timeout );
		return $this->call_get(__FUNCTION__,$params);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////
};	
?>