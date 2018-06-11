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
    
    /**
     * Pesquisa por id da mensagem: GET https://api.smtplw.com.br/v1/messages/25
     * A consulta por id funciona apenas passando o id na url. A consulta comum não tem o campo id disponível.
     * 
     * @param $id Id da mensagem a ser obtida
     * @param $data parametros opcionais de pesquisa
     * 
     * @return array
     */
    public function getById($id, $data = null){

        if(empty($id)){
            throw new \InvalidArgumentException('O parâmetro id é obrigatório');
        }
        
        return $this->get($data, "/$id");
    }
}