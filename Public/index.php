<?php 

// set root dir
define('ROOT_DIR', realpath('..'.DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR);

// include autoload from composer
require ROOT_DIR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

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
            /**
             * @desc pattern for setting a route
             * '<url>' => ['<method_of_request>', '<Controller>\<Action>', '<LocalPatternNotReqired>'],
             */
            '' => [Router::GET, 'index\index'], // default router  

            /**
             * @desc route using a local pattern
             * @example 
             *      of valid situation /hello_world/MyName, /hello_world/You, etc
             *      of invalid /hello_world/5221, /hello_world/52f2add, etc
             */
            'hello_world/{name}' => [Router::GET, 'hello\world', ['{name}' => '([a-zA-Z]+)']],

            /**
             * @desc route overwriting the global pattern path with a local one
             * @example 
             *      of valid situation /hello_my_int/123456, /hello_world/11111, etc
             *      of invalid /hello_world/1234567, hello_world/AAA32, etc
             */
            'hello_my_int/{id}' => [Router::GET, 'hello\my_int', ['{id}' => '([1-6]+)']],

            /**
             * @desc match only specificy type of request
             * @example only POST and PUT 
             */
            'hello_world' => [Router::POST | Router::PUT, 'hello\world'],
        ]
    ]
]);

// load config file from external file
// $config->loadByJsonFile(ROOT_DIR.'config.json');

// will create instance immediately 
$app->setSingletonContainer('Db', new Helpers\Db($config->get('Db')));

// will create instance on demand
$app->setSingletonContainer('Db2', function() use ($config) {
    return new Helpers\Db($config->get('Db'));
});

// run the application
$app->run();
