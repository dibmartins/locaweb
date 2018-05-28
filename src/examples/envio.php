<?php

try{

    $api = require_once('api.php');

    $message = new \Locaweb\Message($api);

    $response = $message->post([
        'subject' => 'Teste DNA',
        'body'    => 'ola mundo',
        'from'    => 'noreply@seudominio.com',
        'to'      => 'dibmartins@gmail.com',
        'cc'      => ['cc1@seudominio.com', 'cc2@seudominio.com'],
        'bcc'     => ['bcc1@dominio2.com', 'bcc2@dominio2.com'],
        'headers' => ['Content-Type' => 'text/plain']
    ]);

    echo '<pre>';
    print_r($response);
}
catch(\Locaweb\Exception $e){
    
    var_dump($e);
}