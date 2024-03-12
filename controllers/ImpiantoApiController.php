<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

include_once("./Impianto.php");

class ImpiantoApiController{
    function getJsonImpianto(Request $request, Response $response,$args){
        $impianto = new Impianto("Lol","dad","dada");
        $response->getBody()->write(json_encode($impianto));
        return $response->withHeader("Content-Type","application/json");
    }
}

?>