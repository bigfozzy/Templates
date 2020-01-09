<?php

class XHEBaseSMS
{
    // сервис
    var $servis;
    // ключ сервиса
    var $api_key;
    // id операции 
    var $id;
    // номер телефона
    var $number;
    // статус активации
    var $status;
    // код
    var $code;
    // код ответа
    var $answer;
    // реф код для программы для сервиса
    var $ref;

    function __construct($api='',$servis='http://sms-activate.ru',$ref='humanemulator') 
    {
      $this->api_key = $api;
      $this->servis = $servis;
      $this->ref = $ref;
    } 

    // изменить сервис
    function change_service($api,$servis,$ref)
    {
      $this->api_key = $api;
      $this->servis = $servis;
      $this->ref = $ref;

      if($servis=='http://sms-activate.ru')
         $this->ref = 'humanemulator';
      else if($servis=='https://cheapsms.ru')
         $this->ref = 'humanem';
      else if($servis=='https://5sim.net')
         $this->ref = 'ze7luo';
    }

    // запрос количества доступных номеров:
    function get_numbers_status($country=0, $operator='any')
    {
      $str_url = $this->servis."/stubs/handler_api.php?api_key=$this->api_key&action=getNumbersStatus&country=$country&operator=$operator";
      $this->answer = file_get_contents($str_url);  

      //$obj=json_decode($this->answer);
      return $this->answer;
    }

    // получить балланас
    function  get_balance()
    {
        $str_url = $this->servis."/stubs/handler_api.php?api_key=".$this->api_key."&action=getBalance";
        $this->answer = file_get_contents($str_url);  
        
        if(strpos($this->answer,"ACCESS_BALANCE")!==false)
        {
            $arr = explode(':',$this->answer);
            return trim($arr[1]); 
        }

        return $this->answer;
    }
   
    // получить номер телефона   
    function get_phone_number($service='ot',$operator='any',$country='0')
    { 
        $str_url = $this->servis."/stubs/handler_api.php?api_key=".$this->api_key."&action=getNumber&service=$service&operator=$operator&country=$country&ref=".$this->ref;
        $this->answer = file_get_contents($str_url);  
        
       if(strpos($this->answer,'ACCESS_NUMBER')===false)
        {
          echo("ОШИБКА: $this->servis ответ $this->answer<br>");
          return false;
        }
        $arr_phone = explode(':',$this->answer);
        
        $this->id = trim($arr_phone[1]);
        $this->number = trim($arr_phone[2]);

        echo("$this->servis номер : $this->number id :  $this->id<br>");  
  
        return true;
    }

    // получить смс с кодом 
    function get_code($wt=10)
    {
        echo("Получить смс код с телефона $this->number<br>");
        $this->answer=trim(file_get_contents($this->servis."/stubs/handler_api.php?api_key=".$this->api_key."&action=getStatus&id=".$this->id));

        for($i=0;$i<$wt;$i++)
        {
            if($this->answer!="STATUS_WAIT_CODE") break;

            if($this->answer=="STATUS_WAIT_CODE")
            {
                echo("Ждем смс телефона.. $this->servis ответ от сервера $this->answer<br>");
                sleep(10);
                $this->answer=file_get_contents($this->servis."/stubs/handler_api.php?api_key=".$this->api_key."&action=getStatus&id=".$this->id);
            }
        }
        // контрольный
        if($this->answer=="STATUS_WAIT_CODE")
        {
            echo("$this->servis Контрольная проверка на ожидание ..<br>");
            sleep(10);
            $this->answer=file_get_contents($this->servis."/stubs/handler_api.php?api_key=".$this->api_key."&action=getStatus&id=".$this->id);
            if($this->answer=="STATUS_WAIT_CODE")
            { 
                echo("Слишком долго ждем смс. $this->servis ответ от сервера $this->answer<br>");
                return false;
            }
        }
    
        echo("$this->servis Получили ответ $this->answer<br>");
        
        $state_acc="";
        $text=""; 
        $code="";

        // разбираем полученные данные
        if(substr_count($this->answer,":")==2)
        {
           list($state_acc, $text, $code)=explode(':',$this->answer);
        }
        else if(substr_count($this->answer,":")==1)
        {
           list($state_acc, $code)=explode(':',$this->answer);
        }


        // если пришел номер телефона
        if($state_acc=="STATUS_OK")
        {
            echo("$this->servis Получили код телефона ".$code.", вводим");
            $this->code=$code;
        }
        else
        {
            echo("$this->servis. Ответ ".$this->answer."<br>");
            return false;
        } 
         
        return true;

    }
    /*
        -1 - отменить активацию
        1 - сообщить о готовности номера (смс на номер отправлено)
        3 - запросить еще один код (бесплатно)
        6 - завершить активацию(если был статус "код получен" - помечает успешно и завершает, если был "подготовка" - удаляет и помечает ошибка, если был статус "ожидает повтора" - переводит активацию в ожидание смс)
        8 - сообщить о том, что номер использован и отменить активацию

        Ответы сервиса:
        ACCESS_READY - готовность номера подтверждена
        ACCESS_RETRY_GET - ожидание нового смс
        ACCESS_ACTIVATION - сервис успешно активирован
        ACCESS_CANCEL - активация отменена
    */
    // сообщить статус активации
    function set_status($status=6)
    {
        echo("сообщаем статус активации c $this->servis<br>");

        $this->answer =file_get_contents($this->servis."/stubs/handler_api.php?api_key=$this->api_key&action=setStatus&status=$status&id=$this->id");

        // разбираем полученные данные
        //list($state_acc, $code)=explode(':',$this->answer);

        // если пришел номер телефона
        if($this->answer=="ACCESS_READY")
        {
            echo("$this->servis готовность номера подтверждена ответ от сервера $this->answer<br>");
        }
        else
        {
            echo("ОШИБКА: Ответ серсвиса".$this->answer."<br>");
            return false;
        } 

        return true;
    }
}
?>