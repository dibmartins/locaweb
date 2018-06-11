<?php

try{

    $api = require_once('api.php');

    $message = new \Locaweb\Message($api);

    $hoje = new \DateTime();

    $response = $message->get([
        'status'     => 'all',
        'start_date' => $hoje->format('Y-m-d'),
        'end_date'   => $hoje->format('Y-m-d'),
        'page'       => 1,
        'per'        => 100
    ]);

    echo '<pre>';
    print_r($response);
}
catch(\Locaweb\Exception $e){
    
    var_dump($e);
}