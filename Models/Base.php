<?php 

namespace Models;

abstract class Base
{
    public function getDb()
    {
        $app->setSingletonContainer('Db', new Helpers\Db($config->get('Db')));
    }
}