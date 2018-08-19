<?php

use App\Container;

require_once __DIR__ . '/../vendor/autoload.php';

$container = new Container();

$app = new \Slim\App($container);

$app->map(['GET'], '/', function(ServerRequestInterface $request, Response $response) {

});

$app->run();
