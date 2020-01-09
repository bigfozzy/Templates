<?php


// for static call of all SYSTEM objects example: SYSTEM::$mouse->move(100,100,false,2);
class SYSTEM
{
	public static $mouse = null; 
	public static $sound = null; 
	public static $keyboard = null; 
	public static $clipboard = null; 
	public static $textfile = null; 
	public static $file_os = null; 
	public static $folder = null; 
};

// initialization
SYSTEM::$mouse = $mouse;
SYSTEM::$sound = $sound;
SYSTEM::$keyboard = $keyboard;
SYSTEM::$clipboard = $clipboard;
SYSTEM::$textfile = $textfile;
SYSTEM::$file_os = $file_os;
SYSTEM::$folder = $folder;

?>