<?php
include "lib/nusoap.php"; //Soap Library.
try {
// Create a soap client using SoapClient class
// Set the first parameter as null, because we are operating in non-WSDL mode.
// Pass array containing url and uri of the soap server as second parameter.
$client = new soapclient(null, array(
'location' => "http://localhost:81/nusoap-demo/SimpleServer.php",
'uri' => "http://localhost:81/nusoap-demo"));
// Read request parameter
$param = "Quoc Huy lam";
// Invoke AddHello() method of the soap server (HelloServer)
$result = $client->AddHello($param);
echo $result; // Process the the result
}
catch(SoapFault $ex) {
$ex->getMessage();
}

?>