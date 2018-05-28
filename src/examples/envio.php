<?php

try{

    $api = require_once('api.php');

    $clientes = new \Locaweb\Message($api);

    $response = $clientes->post([
        'subject' => "qualquer titulo",
        'body'    => "qualquer corpo",
        'from'    => "remetente@dominio.com",
        'to'      => "destinatario@dominio2.com",
        'cc'      => ['cc1@dominio2.com', 'cc2@dominio2.com'],
        'bcc'     => ['bcc1@dominio2.com', 'bcc2@dominio2.com'],
        'headers' => ['Content-Type' => 'text/plain']
    ]);

    echo '<pre>';
    print_r($response);
}
catch(\Locaweb\Exception $e){
    
    var_dump($e);
}