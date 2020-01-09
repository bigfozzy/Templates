<?php

// for static call of all WEB objects example: WEB::$browser->get_count();
class WEB
{
	public static $anticapcha = null; 
	public static $captchabot = null; 
	public static $browser = null; 
	public static $webpage = null; 
	public static $raw = null; 
	public static $seo = null; 
	public static $connection = null; 	
	public static $ftp = null; 
	public static $submitter = null; 
	public static $proxycheker = null; 
	public static $bypasscaptcha = null; 
	public static $captcha24 = null; 
	public static $ripcaptcha = null; 
	public static $rucaptcha = null; 
};

// initialization
WEB::$anticapcha = $anticapcha;
WEB::$captchabot = $captchabot;
WEB::$browser = $browser;
WEB::$webpage = $webpage;
WEB::$raw = $raw;
WEB::$seo = $seo;
WEB::$connection = $connection;
WEB::$ftp = $ftp;
WEB::$submitter = $submitter;
WEB::$proxycheker = $proxycheker;
WEB::$bypasscaptcha = $bypasscaptcha; 
WEB::$captcha24 = $captcha24; 
WEB::$ripcaptcha = $ripcaptcha; 
WEB::$rucaptcha = $rucaptcha; 

?>