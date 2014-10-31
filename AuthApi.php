<?php

class AuthApi
{
    
    function __construct($apiClient)
    {
        $this->apiClient = $apiClient;
    }
    
    /**
     * getToken
     * Create a new session.
     * 
     * body, array: User credentials that needs to be validated (required)
    
     * @return object
     */ 
    public function getToken($body)
    {  
        //parse inputs
        $resourcePath = "/auth/token";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $queryParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = 'application/json';
        
        //make the API Call
        if (!isset($body)) {
            $body = null;
        }
        $response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $body, $headerParams);
         
        if (!$response) {
            return null;
        }
        
        $responseObject = $this->apiClient->deserialize($response, 'object');
        return $responseObject;
    }
        
}