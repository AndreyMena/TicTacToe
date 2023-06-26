<?php
require __DIR__ . "/vendor/autoload.php";

use PhpXmlRpc\Server;
use PhpXmlRpc\Request;
use PhpXmlRpc\Response;
use PhpXmlRpc\Value;

class MiServidor
{
    public function sumar($params)
    {
        $num1 = $params[0]->scalarval();
        $num2 = $params[1]->scalarval();
        $resultado = $num1 + $num2;
        return new Response(new Value($resultado, 'int'));
    }
}

// Crea una instancia de la clase MiServidor
$miServidor = new MiServidor();

// Crea una instancia del servidor
$server = new Server();

// Registra el método sumar() de la clase MiServidor en el servidor
$server->addMethod('sumar', [$miServidor, 'sumar']);

// Procesa la petición del cliente
$request = Request::createFromGlobals();
$server->handleRequest();