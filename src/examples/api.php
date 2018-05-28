<?php

require_once('../vendor/autoload.php');

// Obtenha o token em: https://smtplw.com.br/panel/settings/api
return new \Locaweb\Api('https://api.smtplw.com.br/v1/', 'seu_auth_token', 120);