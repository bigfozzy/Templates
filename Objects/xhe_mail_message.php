<?php

class XHEMailMessage
{
	var $from=false;
	var $subject=false;
	var $date=false;
	var $body=false;
	var $text_body=false;

	//  initialization
	function __construct($content)
	{    
		if ($content!="")
		{			
			$vars=explode("#@#@@!@@#@#",$content);
			$this->from=$vars[0];
			$this->subject=$vars[1];
			$this->date=$vars[2];
			$this->body=$vars[3];
			$this->text_body=$vars[4];
		}
	}
}
?>