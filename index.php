<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

include_once("./controllers/ImpiantoApiController.php");
include_once("./controllers/IndexController.php");

$app = AppFactory::create();

$app->get('/', "IndexController:index");

$app->get('/impianto',"ImpiantoApiController:getJsonImpianto");

$app->run();
