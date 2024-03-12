<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require_once '../DispositivoDiAllarme.php';

Class DispositiviAllarmeController{

    public function getJsonAllarme(Request $request, Response $response, $args){
        $impianto = new Impianto("Ale", "22.22", "55.55");

        $response->getBody()->write(json_encode($impianto));
        return $response -> withHeader('Content-Type', 'application/json');
    }
    public function getJsonAllarmeId(Request $request, Response $response, $args){
        $impianto = new Impianto("", "22.22", "55.55");

        $response->getBody()->write(json_encode($impianto));
        return $response -> withHeader('Content-Type', 'application/json');
    }
}