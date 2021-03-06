<?php

namespace Locaweb;

/**
 * Define os comportamentos básicos de um endpoint na api
 * 
 * @author Diego Botelho <dibmartins@gmail.com>
 * @copyright (c) 2017
 */
abstract class Endpoint {
    
    protected $api;

    /**
     * @return string o nome do endpoint da model 
     */
    abstract public function getEndpoint();

    /**
     * Construtor.
     * 
     * @param \Locaweb\Api $api
     */
    public function __construct(\Locaweb\Api $api){

        $this->api = $api;
    }

    /**
     * Insere um dado no endpoint
     * 
     * @param array $data = null Parâmetros da requisição
     * @return object Resposta do serviço
     */
    public function post($data = null){
        
        try{
            
            return $this->api->execute('post', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Edita um dado no endpoint
     * 
     * @param array $data = null Parâmetros da requisição
     * @return object Resposta do serviço
     */
    public function put($data = null){
        
        try{
            
            return $this->api->execute('put', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Consulta por registros no endpoint
     * 
     * @param array $data = null Parâmetros da requisição
     * @param array $urlParams = '' Exemplo: $urlParams = '/5/6' => /endpoint/5/6
     * @return object Resposta do serviço
     */
    public function get($data = null, $urlParams = ''){
        
        try{

            $url = $this->getEndpoint() . $urlParams;
            
            return $this->api->execute('get', $url, $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Apaga um registro no endpoint
     * 
     * @param array $data = null Parâmetros da requisição
     * @return object Resposta do serviço
     */
    public function delete($data = null){
        
        try{
            
            return $this->api->execute('delete', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Apaga um registro no endpoint
     * 
     * @param array $data = null Parâmetros da requisição
     * @return object Resposta do serviço
     */
    public function patch($data = null){
        
        try{
            
            return $this->api->execute('patch', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }    
}