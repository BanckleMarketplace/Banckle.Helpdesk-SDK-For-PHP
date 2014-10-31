<?php

class SecurityApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * createSecurityMailbox
	 * Update company users security rights for specified mailbox.
   * body, UpdateMailboxSecurityRightsRequest:  (optional)

   * @return Void
	 */

   public function createSecurityMailbox($body=null) {

  		//parse inputs
  		$resourcePath = "/security/mailbox";
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
  		                                                'Void');
  		return $responseObject;

      }
  /**
	 * getSecurityMailbox
	 * Gets the mailbox security rights.
   * id, Guid: Mailbox id (required)

   * @return MailboxSecurityRightsDto
	 */

   public function getSecurityMailbox($id) {

  		//parse inputs
  		$resourcePath = "/security/mailbox/{id}";
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
  		                                                'MailboxSecurityRightsDto');
  		return $responseObject;

      }
  /**
	 * getSecurityMailboxByUserId
	 * Gets the user security rights for specified mailbox.
   * mailboxId, Guid: Mailbox id (required)

   * userId, Guid: User id (required)

   * @return string
	 */

   public function getSecurityMailboxByUserId($mailboxId, $userId) {

  		//parse inputs
  		$resourcePath = "/security/mailbox/{mailboxId}/user/{userId}";
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
  		if($userId != null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $this->apiClient->toPathValue($userId), $resourcePath);
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
  		                                                'string');
  		return $responseObject;

      }
  /**
	 * getSecurityUser
	 * Gets the user security rights for different mailboxes.
   * id, string: User id (required)

   * @return UserSecurityRightsDto
	 */

   public function getSecurityUser($id) {

  		//parse inputs
  		$resourcePath = "/security/user/{id}";
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
  		                                                'UserSecurityRightsDto');
  		return $responseObject;

      }
  

}

