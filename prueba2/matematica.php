<?php


    require __DIR__ . "/vendor/autoload.php"; // Biblioteca cargada mediante composer

    //require_once "./TicTacToe.php";

    use PhpXmlRpc\Server;
    use PhpXmlRpc\Response;
    use PhpXmlRpc\Value;
    use PhpXmlRpc\Wrapper;

    function factorial($params){ 
        $number = $params->getParam(0);
        $factorial = 1; 
        for ($i = 1; $i <= $number->scalarval(); $i++){ 
            $factorial = $factorial * $i; 
        } 
        return new Response(new Value($factorial, Value::$xmlrpcInt)); 
    } 

    
    class matematica{
        public function factorial($params){ 
            $number = $params->getParam(0);
            $factorial = 1;
            for ($i = 1; $i <= $number->scalarval(); $i++){ 
                $factorial = $factorial * $i; 
            } 
            return new Response(new Value($factorial, Value::$xmlrpcInt)); 
        } 

        public function factorial2($params){ 
            $number = $params->getParam(0);
            $factorial = 1;
            for ($i = 1; $i <= $number->scalarval(); $i++){ 
                $factorial = $factorial * $i; 
            } 
            return new Response(new Value($factorial, Value::$xmlrpcInt)); 
        } 
    }


    // wrap php class
    $methods = array();
    $wrapper = new Wrapper();
    $cm = new matematica();
    $wrappMethods = $wrapper->wrapPhpClass($cm/*,
    array(
        'method_type' => 'nonstatic',
        'return_source' => true,
        // this is used to encode php NULL values into xml-rpc <NIL/> elements. If the partner does not support that, disable it
        'encode_nulls' => true,
    )*/);

    /*
    foreach($wrappMethods as $methodName => $methodDef) {
        //echo $methodName;
        //echo $methodDef['function'];
        //file_put_contents($targetClassFile, '  ' . str_replace(array('function ', "\n"), array('public static function ', "\n  "), $methodDef['source']) . "\n\n", FILE_APPEND) || die('uh oh');
        $wrappMethods[$methodName]['function'] = 'matematica::factorial' . $methodDef['function'];
        unset($wrappMethods[$methodName]['source']);
        
        //echo "<br />";
        //echo $wrappMethods[$methodName]['function'];
    }
    */
    //echo $wrappMethods['tictactoe.factorial']['function'];
    //$srv = new Server($wrappMethods);

    if ($wrappMethods)
        $methods['tictactoe.factorial'] = $wrappMethods;
        $srv = new Server($methods);
    
    echo $srv->getDispatchMap();
/*
    foreach($wrappMethods as $methodName => $methodDef) {
        file_put_contents($targetClassFile, '  ' . str_replace(array('function ', "\n"), array('public static function ', "\n  "), $methodDef['source']) . "\n\n", FILE_APPEND) || die('uh oh');
        $wrappMethods[$methodName]['function'] = 'matematica::' . $methodDef['function'];
        unset($wrappMethods[$methodName]['source']);
    }

    if ($findstate_sig)
        $methods['matematica.tictactoe'] = $findstate_sig;
    //$srv = new Server($wrappMethods);    

    $factorial_sig=array([Value::$xmlrpcInt, Value::$xmlrpcInt]); // Lo que devuelve, lo que recibe
    $factorial_doc='Factorial del numero.';
    */

    //$s=new Server( ["matematica.factorial" => ["function" => "factorial"]]);
?>