<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class XHEWindowCompatible extends XHEBaseObject
{
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
	// ������ ������ � ���� ��������� ����
	function press_button_by_text_in_window_by_number($number,$text,$exactly,$visibled,$mained)
	{
		$params = array( "number" => $number , "text" => $text , "exactly" => $exactly , "visibled" => $visibled , "mained" => $mained );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// ������ ��������� ���� � ���� ��������� ����
	function set_window_text_by_child_number_in_window_by_number($number,$child_number,$text,$visibled,$mained)
	{
		$params = array( "number" => $number , "text" => $text , "child_number" => $child_number , "visibled" => $visibled , "mained" => $mained );
		return $this->call_boolean(__FUNCTION__,$params);
	}
	// ������� ��������� � ���� ��������� ����
	function send_message_by_number($number,$message,$wparam,$lparam,$visibled,$mained)
	{
		$params = array( "number" => $number , "message" => $message , "wparam" => $wparam , "lparam" => $lparam , "visibled" => $visibled , "mained" => $mained );
		return $this->call_get(__FUNCTION__,$params);
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
};		
?>