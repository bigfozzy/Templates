<?php
/////////////////////////////////////////////////////////// rucapcha //////////////////////////////////////////////////////
class XHE2capcha extends XHEBaseCaptcha_1
{

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // constructor
        function __construct($server)
        {
		$this->server = $server;
		$this->soft_id="293";
        }

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// ���������� ����� �� ������ 
	function recognize_text($text)
	{
		return $this->recognize("", $this->api_key, "http://www.".$this->server,  $this->is_verbose, $this->rtimeout, $this->mtimeout, $this->is_phrase, $this->is_regsense, $this->is_numeric, $this->min_len, $this->max_len,$this->language,$this->is_question,$this->is_calc,$this->instructions,$text,0,0);
	}
	// ���������� �������� ������� �� ��������
	function recognize_like_images($filename)
	{
		return $this->recognize($filename, $this->api_key, "http://www.".$this->server,  $this->is_verbose, $this->rtimeout, $this->mtimeout, $this->is_phrase, $this->is_regsense, $this->is_numeric, $this->min_len, $this->max_len,$this->language,$this->is_question,$this->is_calc,$this->instructions,"",23,0);
	}
	// ���������� �������� ���
	function recognize_invoice($filename)
	{
		return $this->recognize($filename, $this->api_key, "http://www.".$this->server,  $this->is_verbose, $this->rtimeout, $this->mtimeout, $this->is_phrase, $this->is_regsense, $this->is_numeric, $this->min_len, $this->max_len,$this->language,$this->is_question,$this->is_calc,$this->instructions,"",0,1);
	}
	// ���������� ReCaptcha v2 (ASIRA) c ���������� ������������
	function recognize_recaptcha_2_with_text($filename,$textinstructions)
	{
		return $this->recognize($filename, $this->api_key, "http://www.".$this->server,  $this->is_verbose, $this->rtimeout, $this->mtimeout, $this->is_phrase, $this->is_regsense, $this->is_numeric, $this->min_len, $this->max_len,$this->language,$this->is_question,$this->is_calc,$this->instructions,"",23,0,1,$textinstructions,"");
	}
	// ���������� ReCaptcha v2 (ASIRA) 
	function recognize_recaptcha_2_with_image($filename,$imageinstructions)
	{
		return $this->recognize($filename, $this->api_key, "http://www.".$this->server,  $this->is_verbose, $this->rtimeout, $this->mtimeout, $this->is_phrase, $this->is_regsense, $this->is_numeric, $this->min_len, $this->max_len,$this->language,$this->is_question,$this->is_calc,$this->instructions,"",23,0,1,"",$imageinstructions);
	}
	// ���������� ClickCaptcha (� ��� ����� ReCaptcha v2)
	function recognize_click_captcha($filename,$textinstructions="")
	{
		return $this->recognize($filename, $this->api_key, "http://www.".$this->server,  $this->is_verbose, $this->rtimeout, $this->mtimeout, $this->is_phrase, $this->is_regsense, $this->is_numeric, $this->min_len, $this->max_len,$this->language,$this->is_question,$this->is_calc,$this->instructions,"",0,0,0,$textinstructions,"",1);
	}
	// ���������� RotateCaptcha (� ��� ����� FunCaptcha)
	function recognize_rotate_captcha($filename,$file_1,$file_2="",$file_3="",$angle=40)
	{
		return $this->recognize($filename, $this->api_key, "http://www.".$this->server,  $this->is_verbose, $this->rtimeout, $this->mtimeout, $this->is_phrase, $this->is_regsense, $this->is_numeric, $this->min_len, $this->max_len,$this->language,$this->is_question,$this->is_calc,$this->instructions,"",0,0,0,$textinstructions,"",0,"rotatecaptcha",$angle,$file_1,$file_2,$file_3);
	}
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // ���������� ����� ������� v2
	function recognize_recaptcha_v2($pageurl, $googlekey, $invisible="0",$proxy="",$proxytype="")
    {
       // ���������� ����� �������
	   return $this->recognize_userrecaptcha($this->api_key,"http://www.".$this->server, $pageurl, $googlekey, $invisible, $proxy, $proxytype);
    }

    // ���������� geetest �����
    function recognize_geetest($pageurl, $gt, $challenge, $api_server="",$proxy="",$proxytype="")
    {
        // ���������� geetest �����
        return $this->recognize_geetest_captcha($this->api_key,"http://www.".$this->server, $pageurl, $gt, $challenge, $api_server, $proxy, $proxytype);
    }
};
?>