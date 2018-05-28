<?php

try{

    $api = require_once('api.php');

    $message = new \Locaweb\Message($api);

    $hoje = new \DateTime();

    $response = $message->get([
        'id'         => 36258, 
        'status'     => 'all',
        'start_date' => $hoje->format('Y-m-d'),
        'end_date'   => $hoje->format('Y-m-d')
    ]);

    echo '<pre>';
    print_r($response);
}
catch(\Locaweb\Exception $e){
    
    var_dump($e);
}