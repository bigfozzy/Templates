<?php

// for static call of all WINDOW objects example: WINDOW::$app->set_title("title");
class WINDOW
{
	public static $app = null; 
	public static $windows = null;
	public static $window = null;
	public static $debug = null;
	public static $scheduler=null;
};

// initialization
WINDOW::$app = $app;
WINDOW::$windows = $windows;
WINDOW::$window = $window;
WINDOW::$debug = $debug;
WINDOW::$scheduler = $scheduler;

?>