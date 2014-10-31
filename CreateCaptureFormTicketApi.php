<?php

class CreateCaptureFormTicketApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * createCaptureFormTicket
	 * Creates ticket from capture Form
   * body, CreateCaptureFromTicketRequest:  (optional)

   * @return Guid
	 */

   public function createCaptureFormTicket($body) {

  		//parse inputs
  		$resourcePath = "/createCaptureFormTicket";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "POST";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      //make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'Guid');
  		return $responseObject;

      }
  

}

