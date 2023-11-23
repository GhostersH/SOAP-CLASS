<?php
// Desactiva el caché WSDL para el desarrollo
ini_set("soap.wsdl_cache_enabled", "0");

// Crea el servidor SOAP
$server = new SoapServer("http://localhost:8089/soap/calculator.wsdl");

// Añade la función o clase que maneja las operaciones
$server->addFunction("add");
// O si tienes una clase, usarías $server->setClass('Calculator');

// Maneja las solicitudes SOAP
$server->handle();

// Asegúrate de tener una función o clase llamada 'Calculator' definida que pueda manejar la operación 'add'
function add($a, $b) {
    return $a + $b;
}
?>
