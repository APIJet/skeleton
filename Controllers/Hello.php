<?php 

namespace Controllers;

class Hello extends \APIJet\BaseController
{
    public function get_world($s1, $s2)
    {
        $hello = new \Models\Hello(); 
        
        return ["APIJet" => $hello->getHelloMessage()];
    }
}