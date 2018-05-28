<?php
namespace Locaweb;
/**
 * Responsável pela comunicação com a api locaweb
 * 
 * @author Diego Botelho <dibmartins@gmail.com>
 * @copyright (c) 2018
 */
class Api {
    
    private $curl;
    private $url;
    private $authToken;
    private $accessToken;
    private $timeout;
    /**
     * Construtor
     * 
     * @param string $url
     * @param string $authToken
     * @param int $timeout
     */
    public function __construct($url, $authToken, $timeout){
        
        $this->curl      = new \Curl\Curl();
        $this->url       = $url;
        $this->authToken = $authToken;
        $this->timeout   = $timeout;
    }
    
    /**
     * Executa um endpoint
     * 
     * @param string $action post|put|get|delete
     * @param string endpoint
     * @param array $data Parâmetros da requisicao
     * @param array $seconds Tempo em segundos para esperar a resposta do servidor
     * @throws \Exception
     * @return string Resposta do serviço
     */
    public function execute($action, $endpoint, $data){
        
        try{
            
            $this->curl->setOpt(CURLOPT_RETURNTRANSFER , true);
            $this->curl->setOpt(CURLOPT_FOLLOWLOCATION , true);
            $this->curl->setOpt(CURLOPT_SSL_VERIFYPEER , false);
            $this->curl->setOpt(CURLOPT_SSL_VERIFYHOST , false);
            
            $this->curl->setHeader('Content-Type' , 'application/json');
            $this->curl->setHeader('x-auth-token' , $this->authToken);
            
            $this->curl->setConnectTimeout($this->timeout);
            
            $this->curl->$action($this->url . $endpoint, $data);
            
            if($this->curl->error) {
                throw new \Locaweb\Exception($this->curl);
            }
            
            return $this->curl->response;
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }
}