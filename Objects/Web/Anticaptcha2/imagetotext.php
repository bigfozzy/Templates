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
    
	// ������ ��������� ������������ �� ���������
	public function set_default_params()
	{
		// 0;1	0 = ���� ����� (�������� �� ���������) 1 = ����� ����� ��� �����
		setPhraseFlag(0);
		// 0 = ������� ������ �� ����� �������� (�������� �� ��������� ) 1 = ������� ������ ����� ��������
		setCaseFlag(0);
		// 0 = �������� �� ������������ (�������� �� ���������) 1 = ����� ������� ������ �� ���� 2 = ����� ������� ������ �� ���� 3 = ����� ������� ���� ������ �� ����, ���� ������ �� ����.
		setNumericFlag(0);
		// 0 = �������� �� ������������ (�������� �� ���������) 1 = ��������� ����� ��������� �������������� �������� � �����
		setMathFlag(0);
		// 0 = �������� �� ������������ (�������� �� ���������) 1..20 = ����������� ���������� ������ � ������
		setMinLengthFlag(0);
		// 0 = �������� �� ������������ (�������� �� ���������)	1..20 = ������������ ���������� ������ � ������
		setMaxLengthFlag(0);

		// 0 = �������� �� ������������ (�������� �� ���������) 1 = �� ����� ������ ������������� �����2 = �� ����� ������ ��������� �����
		$this->langusgePool = "rn";
		// �����, ������� ����� ������� ���������. ����� ��������� � ���� ���������� �� �������� �����. ����������� - 140 ��������. ����� ���������� ����� � ��������� UTF-8.
		$this->instructions="";
		// 0 = �������� �� ������������ (�������� �� ��������� ) 1 = �� ����������� ����� ������, �������� ������ �������� �����
		$this->is_question=0;

		return true;
	}
    public function recognize_image($path) 
    {

	$this->setFile($path);
	// �������� ������ �� ����������� �����
	$res=$this->createTask();
	if (!$res) 
	{
	   $this->debout("API v2 send failed - ".$this->getErrorMessage(), "red");
	   return false;
	}

	//������� ������������� ������
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