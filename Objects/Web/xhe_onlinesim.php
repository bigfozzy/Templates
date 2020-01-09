<?php
//////////////////////////////////////////////////////// anticapcha ///////////////////////////////////////////////////////
class XHEOnlineSimRu extends XHEBaseObject
{
	var $dev_key= "513747";
	var $dev_id = "513747";
	var $apikey="";
	var $timeout=60;

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // constructor
        function __construct()
        {
		$this->server = "onlinesim.ru/api";
        }

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	// аторизаци€ (получение ключа разработчика)
        function login($user,$password,$email)
	{
		$params = array( "user" => $user , "password" => $password , "email" => $email , "dev_key" => $this->dev_key , "dev_id" => $this->dev_key );
	    	$res=$this->call_get(__FUNCTION__.".php",$params,$this->timeout);
		return json_decode($res,JSON_UNESCAPED_UNICODE);
	}
	// получение списка доступных сервисов
        function getServiceList()
	{
		$params = array( "apikey" => $this->apikey );
	    	$res=$this->call_get(__FUNCTION__.".php",$params,$this->timeout);
		return json_decode($res,JSON_UNESCAPED_UNICODE);
	}
	// запрос виртуального номера, создает операцию
	function getNum($service,$form="",$forward_number="",$forward_minutes="",$clean_call="",$simoperator="",$extension="",$region="")
	{
		$params = array( "apikey" => $this->apikey , "service" => $service , "form" => $form,"forward_number" => $forward_number,"forward_minutes" => $forward_minutes, "clean_call" => $clean_call, "simoperator" => $simoperator, "extension" => $extension,"region" => $region , "dev_key" => $this->dev_key , "dev_id" => $this->dev_key);
	    	$res=$this->call_get(__FUNCTION__.".php",$params,$this->timeout);
		return json_decode($res,JSON_UNESCAPED_UNICODE);
	}
	// подтверждает переадресацию
	function setForwardStatusEnable($tzid)
	{
		$params = array( "apikey" => $this->apikey , "tzid" => $tzid );
	    	$res=$this->call_get(__FUNCTION__.".php",$params,$this->timeout);
		return json_decode($res,JSON_UNESCAPED_UNICODE);
	}
	// возвращает состо€ние выбранной операции
	function getState($tzid,$message_to_code="",$form="",$orderby="")
	{
		$params = array( "apikey" => $this->apikey , "tzid" => $tzid , "message_to_code" => $message_to_code , "form" => $form , "orderby" => $orderby);
	    	$res=$this->call_get(__FUNCTION__.".php",$params,$this->timeout);
		return json_decode($res,JSON_UNESCAPED_UNICODE);
	}
	// возвращает список и состо€ние всех операции.
	function getOperations()
	{
		$params = array( "apikey" => $this->apikey );
	    	$res=$this->call_get(__FUNCTION__.".php",$params,$this->timeout);
		return json_decode($res,JSON_UNESCAPED_UNICODE);
	}
	// cоздает запрос на уточнение ответа по операции.
	function setOperationRevise($tzid)
	{
		$params = array( "apikey" => $this->apikey , "tzid" => $tzid );
	    	$res=$this->call_get(__FUNCTION__.".php",$params,$this->timeout);
		return json_decode($res,JSON_UNESCAPED_UNICODE);
	}
	// отправл€ет уведомление об успешном получении кода и завершает операцию
	function setOperationOk($tzid)
	{
		$params = array( "apikey" => $this->apikey , "tzid" => $tzid );
	    	$res=$this->call_get(__FUNCTION__.".php",$params,$this->timeout);
		return json_decode($res,JSON_UNESCAPED_UNICODE);
	}
	// возвращает информацию о состо€нии баланса.
	function getBalance()
	{
		$params = array( "apikey" => $this->apikey );
	    	$res=$this->call_get(__FUNCTION__.".php",$params,$this->timeout);
		return json_decode($res,JSON_UNESCAPED_UNICODE);
	}
	// получение списка сервисов дл€ повторного заказа —ћ—
	function getService()
	{
		$params = array( "apikey" => $this->apikey );
	    	$res=$this->call_get(__FUNCTION__.".php",$params,$this->timeout);
		return json_decode($res,JSON_UNESCAPED_UNICODE);
	}
	// получает список номеров дл€ указанного сервиса.
	function getServiceNumber($service)
	{
		$params = array( "apikey" => $this->apikey , "service" => $service);
	    	$res=$this->call_get(__FUNCTION__.".php",$params,$this->timeout);
		return json_decode($res,JSON_UNESCAPED_UNICODE);
	}
	// cоздает запрос на повторное использование виртуального номера
	function getNumRepeat($service,$number)
	{
		$params = array( "apikey" => $this->apikey , "service" => $service , "number" => $number);
	    	$res=$this->call_get(__FUNCTION__.".php",$params,$this->timeout);
		return json_decode($res,JSON_UNESCAPED_UNICODE);
	}
	// выводит список всех переадресаций
	function forwardingList($id="",$page="",$sort="")
	{
		$params = array( "apikey" => $this->apikey , "id" => $id , "page" => $page , "sort" => $sort );
	    	$res=$this->call_get(__FUNCTION__.".php",$params,$this->timeout);
		return json_decode($res,JSON_UNESCAPED_UNICODE);
	}
	// измен€ет параметры переадресации
	function forwardingSave($id,$minutes="",$auto="",$forward_number="",$max_minutes="")
	{
		$params = array( "apikey" => $this->apikey , "id" => $id , "minutes" => $minutes , "auto" => $auto , "forward_number" => $forward_number, "max_minutes" => $max_minutes );
	    	$res=$this->call_get(__FUNCTION__.".php",$params,$this->timeout);
		return json_decode($res,JSON_UNESCAPED_UNICODE);
	}
	// удал€ет (выключает) переадресацию
	function forwardingRemove($id)
	{
		$params = array( "apikey" => $this->apikey , "id" => $id  );
	    	$res=$this->call_get(__FUNCTION__.".php",$params,$this->timeout);
		return json_decode($res,JSON_UNESCAPED_UNICODE);
	}
	// выводит список всех автоматических платежей
        function getForwardPaymentsList($id)
	{
		$params = array( "apikey" => $this->apikey , "id" => $id  );
	    	$res=$this->call_get(__FUNCTION__.".php",$params,$this->timeout);
		return json_decode($res,JSON_UNESCAPED_UNICODE);
	}
};

?>