<?php

try{

    $api = require_once('api.php');

    $message = new \Locaweb\Message($api);

    $response = $message->getById(37764);

    echo '<pre>';
    print_r($response);
}
catch(\Exception $e){
    
    var_dump($e);
}