<?php

class ImageToText extends Anticaptcha implements AntiCaptchaTaskProtocol {

    private $body;
    private $phrase = false;
    private $case = false;
    private $numeric = false;
    private $math = 0;
    private $minLength = 0;
    private $maxLength = 0;
    
    
    public function getPostData() {
        return array(
            "type"      =>  "ImageToTextTask",
            "body"      =>  str_replace("\n", "", $this->body),
            "phrase"    =>  $this->phrase,
            "case"      =>  $this->case,
            "numeric"   =>  $this->numeric,
            "math"      =>  $this->math,
            "minLength" =>  $this->minLength,
            "maxLength" =>  $this->maxLength
        );
    }
    
    public function setTaskInfo($taskInfo) {
        $this->taskInfo = $taskInfo;
    }
    
    public function getTaskSolution() {
        return $this->taskInfo->solution->text;
    }
    
    public function setFile($fileName) 
    {
        $this->last_capcha_filename=$fileName;
        if (file_exists($fileName)) {
            
            if (filesize($fileName) > 100) {
                $this->body = base64_encode(file_get_contents($fileName));
                return true;
            } else {
                $this->setErrorMessage("file $fileName too small or empty");
            }
            
        } else {
            $this->setErrorMessage("file $fileName not found");
        }
        return false;
        
    }
    
    public function setPhraseFlag($value) {
        $this->phrase = $value;
    }
    
    public function setCaseFlag($value) {
        $this->case = $value;
    }
    
    public function setNumericFlag($value) {
        $this->numeric = $value;
    }
    
    public function setMathFlag($value) {
        $this->math = $value;
    }
    
    public function setMinLengthFlag($value) {
        $this->minLength = $value;
    }
    
    public function setMaxLengthFlag($value) {
        $this->maxLength = $value;
    }
    
	// задать параметры распозаннри€ по умолчанию
	public function set_default_params()
	{
		// 0;1	0 = одно слово (значение по умлочанию) 1 = капча имеет два слова
		setPhraseFlag(0);
		// 0 = регистр ответа не имеет значени€ (значение по умолчанию ) 1 = регистр ответа имеет значение
		setCaseFlag(0);
		// 0 = параметр не задействован (значение по умолчанию) 1 = капча состоит только из цифр 2 =  апча состоит только из букв 3 =  апча состоит либо только из цифр, либо только из букв.
		setNumericFlag(0);
		// 0 = параметр не задействован (значение по умолчанию) 1 = работнику нужно совершить математическое действие с капчи
		setMathFlag(0);
		// 0 = параметр не задействован (значение по умолчанию) 1..20 = минимальное количество знаков в ответе
		setMinLengthFlag(0);
		// 0 = параметр не задействован (значение по умолчанию)	1..20 = максимальное количество знаков в ответе
		setMaxLengthFlag(0);

		// 0 = параметр не задействован (значение по умолчанию) 1 = на капче только кириллические буквы2 = на капче только латинские буквы
		$this->langusgePool = "rn";
		// “екст, который будет показан работнику. ћожет содержать в себе инструкции по разгадке капчи. ќграничение - 140 символов. “екст необходимо слать в кодировке UTF-8.
		$this->instructions="";
		// 0 = параметр не задействован (значение по умолчанию ) 1 = на изображении задан вопрос, работник должен написать ответ
		$this->is_question=0;

		return true;
	}
    public function recognize_image($path) 
    {

	$this->setFile($path);
	// создадим задачу по распозаннию капчи
	$res=$this->createTask();
	if (!$res) 
	{
	   $this->debout("API v2 send failed - ".$this->getErrorMessage(), "red");
	   return false;
	}

	//получим идентификатор задачи
	$taskId = $this->getTaskId();

	if (!$this->waitForResult()) 
	{
    		$this->debout("could not solve captcha", "red");
    		$this->debout($this->getErrorMessage());
		return false;
	} 
	else 
	{
		$this->debout("got captcha :".$this->getTaskSolution(), "green");
    		return $this->getTaskSolution();
	}
    }
}