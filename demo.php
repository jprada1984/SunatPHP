<?php

require_once 'curl.php';
require_once 'sunat.php';



$cliente = new Sunat();
$ruc="10427300540";
$dni="42730054";
header('Content-Type: application/json');
//echo "---------RUC----------\n";
//echo json_encode( $cliente->BuscaDatosSunat($ruc), JSON_PRETTY_PRINT );
//echo "\n---------DNI----------\n";
echo json_encode( $cliente->BuscaDatosSunat($dni), JSON_PRETTY_PRINT );
?>
