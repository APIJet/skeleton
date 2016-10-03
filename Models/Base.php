<?php 

namespace Models;

abstract class Base
{
    /**
     * @var APIJet
     */
    private $app;
    
    public function __construct()
    {
        global $app;

        $this->app = $app;
    }

    public function getDb()
    {
    	return $this->app->getSingletonContainer('Db');
    }
}