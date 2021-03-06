<?php 

namespace Helpers\Traits;

trait ErrorResponse
{
    private $errorCode = null;
    
    public function getErrorCode()
    {
        return $this->errorCode;
    }
    
    public function getErrorMessage()
    {
        return self::$errorList[$this->getErrorCode()];
    }
    
    public function hasError()
    {
        return ($this->errorCode !== null);
    }
    
    protected function setError($newError) 
    {
        $this->errorCode = $newError;
    }
    
    public function getErrorInfo()
    {
        return [
            'error_code' => $this->getErrorCode(),
            'error_message' => $this->getErrorMessage(),
        ];
    }
    
    public function setErrorInfo($controller)
    {
        $controller->setResponseCode(400);
        
        return $this->getErrorInfo();
    }
}

