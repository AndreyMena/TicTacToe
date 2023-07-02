<?php

require_once 'TicTacToe.class.php';
function autoinclude($className) {
	$className = str_replace('\\', '/', $className) . '.php';
	require_once $className;
}
spl_autoload_register('autoinclude');
//ini_set('soap.wsdl_cache_enabled', '0');
//ini_set('soap.wsdl_cache_ttl', '0');

if (isset($_GET['wsdl'])) {
	header('Content-Type: application/soap+xml; charset=utf-8');
	echo file_get_contents('TicTacToe.wsdl');
}
else {
	
	session_start();
	if (!isset($_SESSION['service'])) {
		$_SESSION['service'] = new TicTacToe();
	}
	$servidorSoap = new SoapServer('https://titanic.ecci.ucr.ac.cr/~ec04740/TicTacToe/?wsdl');
	if(!@file_get_contents('php://input')){
        $servidorSoap->fault('SOAP-ENV:Client', 'Invalid Request');
        exit;
    }
	$servidorSoap->setClass('TicTacToe');
	$servidorSoap->setPersistence(SOAP_PERSISTENCE_SESSION);
	$servidorSoap->setObject(new Zend\Soap\Server\DocumentLiteralWrapper($_SESSION['service']));
	$servidorSoap->handle();
	/*
	$autodiscover = new Zend\Soap\AutoDiscover(new \Zend\Soap\Wsdl\ComplexTypeStrategy\ArrayOfTypeSequence());
	$autodiscover->setClass('TicTacToe')
	->setUri('https://titanic.ecci.ucr.ac.cr/~ec04740/TicTacToe/')
	->setServiceName('DW_TicTacToe')
	->setBindingStyle(array('style' => 'document'))
	->setOperationBodyStyle(array('use' => 'literal', 'namespace' => 'urn:DW_TicTacToe'));
	$wsdl = $autodiscover->generate();
	$wsdl->dump('TicTacToe.wsdl'); // Guarda el WSDL en un archivo.
	*/	
}


?>