<?php

namespace Banckle\Helpdesk;

class AccountsApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * getAccounts
	 * Gets the account related to current user.
   * @return AccountDto
	 */

   public function getAccounts() {

  		//parse inputs
  		$resourcePath = "/accounts";
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
  		                                                'AccountDto');
  		return $responseObject;

      }
  /**
	 * createAccount
	 * Creates the helpdesk account.
   * body, CreateAccountRequest:  (optional)

   * @return Guid
	 */

   public function createAccount($body) {

  		//parse inputs
  		$resourcePath = "/accounts";
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
	 * getAccountTags
	 * Gets collection of users's account tags.
   * @return AccountTags
	 */

   public function getAccountTags() {

  		//parse inputs
  		$resourcePath = "/accounts/tags";
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
  		                                                'AccountTags');
  		return $responseObject;

      }
  /**
	 * postaccountstags
	 * Updates collection of users's account tags.
   * body, array[of string]: Collection of tags (required)

   * @return 
	 */

   public function addAccountTags($body) {

  		//parse inputs
  		$resourcePath = "/accounts/tags";
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


      }
  /**
	 * deleteAccountTags
	 * Deletes collection of uesrs's account tags.
   * body, array[of string]: Collection of tags (required)

   * @return 
	 */

   public function deleteAccountTags($body) {

  		//parse inputs
  		$resourcePath = "/accounts/tags";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "DELETE";
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


      }
  

}

