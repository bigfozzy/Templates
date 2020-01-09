<?php

class NoCaptchaProxyless extends Anticaptcha implements AntiCaptchaTaskProtocol {

    private $websiteUrl;
    private $websiteKey;
    private $websiteSToken;
    
    public function getPostData() {
        return array(
            "type"          =>  "NoCaptchaTaskProxyless",
            "websiteURL"    =>  $this->websiteUrl,
            "websiteKey"    =>  $this->websiteKey,
            "websiteSToken" =>  $this->websiteSToken,
        );
    }
    
    public function setTaskInfo($taskInfo) {
        $this->taskInfo = $taskInfo;
    }
    
    public function getTaskSolution() {
        if(isset($this->taskInfo->solution->gRecaptchaResponse))
            return $this->taskInfo->solution->gRecaptchaResponse;
        else
        if(isset($this->taskInfo->solution->text))
            return $this->taskInfo->solution->text;
        //return $this->taskInfo->solution->text;
    }
    
    public function setWebsiteURL($value) {
        $this->websiteUrl = $value;
    }
    
    public function setWebsiteKey($value) {
        $this->websiteKey = $value;
    }
    
    public function setWebsiteSToken($value) {
        $this->websiteSToken = $value;
    }
    
}
