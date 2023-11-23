<?php
try {
    // Crea el cliente SOAP
    $client = new SoapClient("http://localhost:8089/soap/calculator.wsdl");

    // Llama a la operación 'add'
    $result = $client->add(5, 10);

    // Muestra el resultado
    echo "Resultado: " . $result;
} catch (SoapFault $exception) {
    echo "Error al llamar al servicio SOAP: " . $exception->getMessage();
}
?>
