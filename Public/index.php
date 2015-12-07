<?php 

require "../vendor/autoload.php";

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

$app->run();
