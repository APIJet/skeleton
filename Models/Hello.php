<?php 

namespace Models;

class Hello extends Base
{
    public function getHelloMessage($name)
    {
    	// exmaple of calling db
        $this->getDb()->execQuery('SELECT 1');

        return "Hello ".$name.", I am PHP RESTFul API";
    }
}