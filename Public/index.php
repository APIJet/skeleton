<?php 

// set root dir
define('ROOT_DIR', realpath('..'.DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR);

// include autoload from compouser
require ROOT_DIR.'/vendor/autoload.php';

use APIJet\APIJet;
use APIJet\Router;

APIJet::registerAutoload();

// initialize the application
$app = new APIJet();

// load all configs
$config = $app->getConfigContainer();
$config->set([
    'Router' => [
        'globalPattern' => [
            '{id}' => '([0-9]+)',
        ],
        'routes' => [
            'hello_world' => [Router::GET, 'hello\world'],
        ]
    ]
]);

// load config file from external file
$config->loadByJsonFile(ROOT_DIR.'config.json');

// set all external singleton containers
$app->setSingletonContainer('Db', new Helpers\Db($config->get('Db')));

// run the application
$app->run();
