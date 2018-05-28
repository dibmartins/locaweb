<?php

require_once('../../vendor/autoload.php');

// Obtenha os tokens de teste em: https://smtplw.com.br/panel/settings/api
return new \Locaweb\Api('https://api.smtplw.com.br/v1/', 'your_app_token');