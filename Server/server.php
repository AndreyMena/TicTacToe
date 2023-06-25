<?php
    require __DIR__ . "/vendor/autoload.php"; // Biblioteca cargada mediante composer
    include_once './Services/TicTacToe.php';
    
    use PhpXmlRpc\Server;
    use PhpXmlRpc\Response;
    use PhpXmlRpc\Value;

    $server = new Laminas\XmlRpc\Server();
    $server->sendArgumentsToAllMethods(false);
    $server->setClass(TicTacToe::class, 'tictactoe');    // access any method in client as post.*
    $server->getFunctions();
    echo $server->handle();



    
?>