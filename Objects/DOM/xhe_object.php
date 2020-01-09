<?php
///////////////////////////////////////////////// Object ////////////////////////////////////////////////////
class XHEObject extends XHEBaseDOMVisual
{
        /////////////////////////////////// СЕРВИСНЫЕ ФУНКЦИИ //////////////////////////////////////////////
        // server initialization
        function __construct($server,$password="")
        {    
                $this->server = $server;
                $this->password = $password;
		$this->prefix = "Object";
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////////

        /////////////////////////////////////////////////////////////////////////////////////////////////////

        // кликнуть внутри элемента с заданным номером
        function click_in_by_number($number,$x=-1,$y=-1,$frame=-1)
        {
		return $this->z_click_in_by_number($number,$x,$y,$frame);
        }
        // кликнуть внутри элемента с заданным именем
        function click_in_by_name($name,$x=-1,$y=-1,$frame=-1)
        {
		return $this->z_click_in_by_name($name,$x,$y,$frame);
        }
        // кликнуть внутри элемента с заданным значением аттрибута
        function click_in_by_attribute($attr_name,$attr_value,$exactly="true",$x=-1,$y=-1,$frame=-1)
        {
		return $this->z_click_in_by_attribute($attr_name,$attr_value,$exactly,$x,$y,$frame);
        }

        /////////////////////////////////////////////////////////////////////////////////////////////////////
};      
?>