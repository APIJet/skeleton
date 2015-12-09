<?php 

define('ROOT_DIR', realpath('..'.DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR);

require ROOT_DIR.'/vendor/autoload.php';

use APIJet\APIJet;
use APIJet\Router;

APIJet::registerAutoload();

$app = new APIJet([
    'Router' => [
        'globalPattern' => [
            '{id}' => '([0-9]+)',
        ],
        'routes' => [
            'hello_world' => [Router::GET, 'hello\world'],
        ]
    ]
]);

$config->loadByJsonFile(ROOT_DIR.'config.json');
$app->run();
