<?php

class SettingsApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * putsettingsmailbox
	 * Creates the additional mailbox.
   * body, CreateMailboxRequest:  (optional)

   * @return Void
	 */

   public function putsettingsmailbox($body=null) {

  		//parse inputs
  		$resourcePath = "/settings/mailbox";
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
  		                                                'Void');
  		return $responseObject;

      }
  /**
	 * postsettingsmailbox
	 * Updates the mailbox settings.
   * body, Guid: Mailbox id (required)

   * body, String: Mailbox name (required)

   * body, string: Email provider (required)

   * body, String: Mailbox password for Gmail provider (if used provider Other not need to enter this field) (optional)

   * body, String: SMTP Server name (if used provider Gmail not need to enter this field) (optional)

   * body, String: SMTP Server name (if used provider Gmail not need to enter this field) (optional)

   * body, String: SMTP Password (if used provider Gmail not need to enter this field) (optional)

   * body, Int32: SMTP port number (if used provider Gmail not need to enter this field) (optional)

   * body, bool: Need use SSL for SMTP (if use provider Gmail not need to enter this field) (required)

   * body, string: Email protocol (if use provider Gmail not need to enter this field) (required)

   * body, String: Protocol Server name (if use provider Gmail not need to enter this field) (optional)

   * body, String: Protocol Server name (if use provider Gmail not need to enter this field) (optional)

   * body, String: Protocol Password (if use provider Gmail not need to enter this field) (optional)

   * body, Int32: SMTP port number (if used provider Gmail not need to enter this field) (optional)

   * body, bool: Need use SSL for selected protocol (if used provider Gmail not need to enter this field) (required)

   * @return Void
	 */

   public function postsettingsmailbox($body, $body, $body, $body=null, $body=null, $body=null, $body=null, $body=null, $body, $body, $body=null, $body=null, $body=null, $body=null, $body) {

  		//parse inputs
  		$resourcePath = "/settings/mailbox";
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
	 * deleteSettingsMailbox
	 * Deleted the mailbox by specified id.
   * id, Guid: Mailbox id (required)

   * @return Void
	 */

   public function deleteSettingsMailbox($id) {

  		//parse inputs
  		$resourcePath = "/settings/mailbox/{id}";
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
	 * getSettingsMailbox
	 * Gets the mailbox settings by specified id.
   * id, Guid: Mailbox id (required)

   * @return ExistingMailboxDto
	 */

   public function getSettingsMailbox($id) {

  		//parse inputs
  		$resourcePath = "/settings/mailbox/{id}";
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
  		                                                'ExistingMailboxDto');
  		return $responseObject;

      }
  /**
	 * getSettingsUser
	 * Gets the current user settings.
   * @return UserGeneralSettingsDto
	 */

   public function getSettingsUser() {

  		//parse inputs
  		$resourcePath = "/settings/user";
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
  		                                                'UserGeneralSettingsDto');
  		return $responseObject;

      }
  /**
	 * updateSettingsUserAll
	 * Updates the current user settings.
   * body, bool: Indicating whether show account activity stream (required)

   * body, bool: Indicating whether show banckle news (required)

   * @return Void
	 */

   public function updateSettingsUserAll($body, $body) {

  		//parse inputs
  		$resourcePath = "/settings/user/all";
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
	 * updateSettingsUserValue
	 * Updates the current user single setting.
   * body, String: Path to setting (required)

   * body, Object: Setting value (required)

   * @return Void
	 */

   public function updateSettingsUserValue($body, $body) {

  		//parse inputs
  		$resourcePath = "/settings/user/value";
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
  

}

