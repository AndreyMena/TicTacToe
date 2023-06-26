<?php


    require __DIR__ . "/vendor/autoload.php"; // Biblioteca cargada mediante composer

    //require_once "./TicTacToe.php";

    use PhpXmlRpc\Server;
    use PhpXmlRpc\Response;
    use PhpXmlRpc\Value;

    function factorial($params){ 
        $number = $params->getParam(0);
        $factorial = 1; 
        for ($i = 1; $i <= $number->scalarval(); $i++){ 
            $factorial = $factorial * $i; 
        } 
        return new Response(new Value($factorial, Value::$xmlrpcInt)); 
    } 

    
    class tictactoe{
        function factorial($params){ 
            $number = $params->getParam(0);
            $factorial = 1;
            for ($i = 1; $i <= $number->scalarval(); $i++){ 
                $factorial = $factorial * $i; 
            } 
            return new Response(new Value($factorial, Value::$xmlrpcInt)); 
        } 
    }

    $factorial_sig=array([Value::$xmlrpcInt, Value::$xmlrpcInt]); // Lo que devuelve, lo que recibe
    $factorial_doc='Factorial del numero.';
    $s=new Server( ["matematica.factorial" => ["function" => "factorial"]]);
    
?>