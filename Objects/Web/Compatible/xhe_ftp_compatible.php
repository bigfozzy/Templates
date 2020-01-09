<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class XHEFTPCompatible extends XHEBaseObject
{
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// create dirrectory on server
	function create_directoy($server,$dir_name)
	{
		return $this->call("FTP.CreateDirectory?server=".base64_encode($server)."&dir_name=".base64_encode($dir_name));
	}
	// отсоединится от фтп сервера
	function disconect($server)
	{	   	
	    	return $this->disconnect($server);
	}        
	// отсоединится от всех подключеннных фтп серверов
	function disconect_all()
	{
	   	return $this->disconnect_all();
	}
};		
?>