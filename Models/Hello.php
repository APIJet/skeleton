<?php 

namespace Models;

class Hello extends Base
{
    public function getHelloMessage($name)
    {
        return "Hello ".$name.", I am PHP RESTFul API";
    }
}