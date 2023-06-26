<?php
require __DIR__ . "/vendor/autoload.php";

use PhpXmlRpc\Client;
use PhpXmlRpc\Request;

// Crea una instancia del cliente y establece la URL del servidor
$client = new Client('http://localhost:84/prueba3/server.php');

$client->setDebug(1);

// Crea una petición para llamar a la función 'sumar' en el servidor
$request = new Request('sumar', [new PhpXmlRpc\Value(2, 'int'), new PhpXmlRpc\Value(3, 'int')]);

// Envía la petición al servidor y obtén la respuesta
$response = $client->send($request);

// Procesa la respuesta del servidor
if ($response->faultCode()) {
    echo 'Error: ' . $response->faultString();
} else {
    $resultado = $response->value()->scalarval();
    echo 'Resultado: ' . $resultado;
}