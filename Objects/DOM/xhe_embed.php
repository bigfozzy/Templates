<?php
//////////////////////////////////////////////////// Embed //////////////////////////////////////////////////
class XHEEmbed extends XHEBaseDOMVisual
{
        ///////////////////////////////////// ��������� ������� ////////////////////////////////////////////
        // server initialization
        function __construct($server,$password="")
        {    
                $this->server = $server;
                $this->password = $password;
		$this->prefix = "Embed";
        }
	/////////////////////////////////////////////////////////////////////////////////////////////////////

        /////////////////////////////////////////////////////////////////////////////////////////////////////

        // �������� ������ �������� � �������� �������
        function click_in_by_number($number,$x=-1,$y=-1,$frame=-1)
        {
		return $this->z_click_in_by_number($number,$x,$y,$frame);
        }
        // �������� ������ �������� � �������� �����
        function click_in_by_name($name,$x=-1,$y=-1,$frame=-1)
        {
		return $this->z_click_in_by_name($name,$x,$y,$frame);
        }
        // �������� ������ �������� � �������� src
        function click_in_by_src($src,$exactly="true",$x=-1,$y=-1,$frame=-1)
        {
		return $this->z_click_in_by_src($src,$exactly,$x,$y,$frame);
        }
        // �������� ������ �������� � �������� ��������� ���������
        function click_in_by_attribute($attr_name,$attr_value,$exactly="true",$x=-1,$y=-1,$frame=-1)
        {
		return $this->z_click_in_by_attribute($attr_name,$attr_value,$exactly,$x,$y,$frame);
        }

        /////////////////////////////////////////////////////////////////////////////////////////////////////
};      
?>