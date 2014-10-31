<?php

class CannedApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * getCanned
	 * Gets all canned responses.
   * @return Array[CannedResponseDto]
	 */

   public function getCanned() {

  		//parse inputs
  		$resourcePath = "/canned";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
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
  		                                                'array[CannedResponseDto]');
  		return $responseObject;

      }
  /**
	 * updateCanned
	 * Updates canned response.
   * body, CreateCannedResponseRequest:  (optional)

   * @return Guid
	 */

   public function updateCanned($body=null) {

  		//parse inputs
  		$resourcePath = "/canned";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "PUT";
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
  /**
	 * createCanned
	 * Creates canned response.
   * body, UpdateCannedResponseRequest:  (optional)

   * @return Guid
	 */

   public function createCanned($body=null) {

  		//parse inputs
  		$resourcePath = "/canned";
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
  /**
	 * getCanned_CannedApi_0
	 * Gets canned response by id.
   * id, string: Canned response id (required)

   * @return CannedResponseDto
	 */

   public function getCanned_CannedApi_0($id) {

  		//parse inputs
  		$resourcePath = "/canned/{id}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($id != null) {
  			$resourcePath = str_replace("{" . "id" . "}",
  			                            $this->apiClient->toPathValue($id), $resourcePath);
  		}
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
  		                                                'CannedResponseDto');
  		return $responseObject;

      }
  /**
	 * deleteCanned
	 * Deletes canned response by id.
   * id, Guid: Canned response id (required)

   * @return Void
	 */

   public function deleteCanned($id) {

  		//parse inputs
  		$resourcePath = "/canned/{id}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "DELETE";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($id != null) {
  			$resourcePath = str_replace("{" . "id" . "}",
  			                            $this->apiClient->toPathValue($id), $resourcePath);
  		}
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
  		                                                'Void');
  		return $responseObject;

      }
  /**
	 * getCannedMailbox
	 * Gets all canned responses attached to mailbox.
   * mailboxId, string: Mailbox id (required)

   * @return Array[CannedResponseDto]
	 */

   public function getCannedMailbox($mailboxId) {

  		//parse inputs
  		$resourcePath = "/canned/mailbox/{mailboxId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($mailboxId != null) {
  			$resourcePath = str_replace("{" . "mailboxId" . "}",
  			                            $this->apiClient->toPathValue($mailboxId), $resourcePath);
  		}
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
  		                                                'array[CannedResponseDto]');
  		return $responseObject;

      }
  

}

