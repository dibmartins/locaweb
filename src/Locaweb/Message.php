<?php

namespace Locaweb;

/**
 * Endpoint de mensagens
 * 
 * @author Diego Botelho <dibmartins@gmail.com>
 * @copyright (c) 2018
 */
class Message extends Endpoint{
    
    /**
     * @return string o nome do endpoint da model 
     */
    public function getEndpoint(){
        
        return 'messages';
    }
}