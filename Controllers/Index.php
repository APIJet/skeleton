<?php 

namespace Controllers;

class Index extends \APIJet\BaseController
{
    public function get_index()
    {
        return ["APIJet" => "I am response form Index controller and get_Index action"];
    }
}