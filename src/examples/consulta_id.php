<?php

try{

    $api = require_once('api.php');

    $clientes = new \Locaweb\Message($api);

    $response = $clientes->get(['id' => 25]);

    echo '<pre>';
    print_r($response);
}
catch(\Locaweb\Exception $e){
    
    var_dump($e);
}