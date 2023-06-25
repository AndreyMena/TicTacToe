<?php

require __DIR__ . "/vendor/autoload.php";

$client = new Laminas\XmlRpc\Client('http://localhost:84/TicTacToe/TicTacToe/Server/server.php');
$params = $_REQUEST['params'] ?? [];
$args = array_values($params);

$client->call($_REQUEST['tictactoe.PrintBoard']);
//var_dump($client->call('tictactoe.PrintBoard'));

/*
try {
    $result = $client->call($_REQUEST['operation'], $args);
    echo $client->getLastResponse();   // return xml response
} catch (Laminas\XmlRpc\Client\Exception\FaultException $e) {
    echo $e->getCode();
    echo $e->getMessage();
}*/


    
?>