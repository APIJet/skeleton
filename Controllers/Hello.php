<?php 

namespace Controllers;

class Hello extends \APIJet\BaseController
{
    public function get_world($name)
    {
        $hello = new \Models\Hello(); 

        return ["APIJet" => $hello->getHelloMessage($name)];
    }

    public function post_world($name)
    {
        return ["APIJet" => 'This is POST hello world, good job'];
    }

    public function put_world($name)
    {
        return ["APIJet" => 'This is PUT hello world, keep exploring'];
    }

    public function get_my_int()
    {
        return ['APIJet' => 'I am int from 1 to 6'];
    }
}