<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class XHEBrowserCompatible extends XHEBaseObject
{
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// clear IE cash (in future will replace -> clear_cache)
	function clear_cash()
	{
		return $this->clear_cache("");
	}
        // запретить диалог выбора пути для скачивания файлов
	function disable_download_file_dialog($enable)
	{
		return $this->enable_download_file_dialog($enable==0);
	}
        // проверить включенность диалога выбора пути для скачивания файлов
	function is_disable_download_file_dialog()
	{		
		return $this->is_enable_download_file_dialog()==0;
	}
     	// изменить папку с кукисами
	function change_cookies_folder($folder)
	{
		$params = array( "folder" => $folder );
		return $this->call_boolean(__FUNCTION__,$params);
	}
     	// изменить папку с кэшем
	function change_cache_folder($folder)
	{
		$params = array( "folder" => $folder );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// задать акцепты (заголовки запроса браузера)
	function set_accept($accept_string)
	{
		$params = array( "accept_string" => $accept_string );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
   	// задать кодировку в акцептах (заголовки запроса браузера)
	function set_accept_encoding($accept_string)
	{
		$params = array( "accept_string" => $accept_string );
		return $this->call_boolean(__FUNCTION__,$params);
   	}
   	// задать набор символов в акцептах (заголовки запроса браузера)
	function set_accept_charset($accept_string)
	{
		$params = array( "accept_string" => $accept_string );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
   	// задать реферер
	function set_referer($referer)
	{
		$params = array( "referer" => $referer );
		return $this->call_boolean(__FUNCTION__,$params);
   	}	
	// разрешить вебсокеты
	function enable_web_socket($enable=true,$refresh=true)
	{
		$params = array( "enable" => $enable , "refresh" => $refresh  );
		return $this->call_boolean(__FUNCTION__,$params);
	}
   	// задать Internationalization API
	function set_internazionalization($locale="",$timeZone="",$calendar="",$numberingSystem="",$year="",$month="",$day="")
	{	
		return $this->set_internationalization($locale,$timeZone,$calendar,$numberingSystem,$year,$month,$day);
   	}	
};		
?>