<?php

namespace Banckle\Helpdesk;

class MailboxesApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * getmMilboxes
	 * Gets the account mailboxes.
   * @return Array[MailboxDto]
	 */

   public function getmMilboxes() {

  		//parse inputs
  		$resourcePath = "/mailboxes";
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
  		                                                'array[MailboxDto]');
  		return $responseObject;

      }
  /**
	 * getMailbox
	 * Gets the account mailbox by specified mailbox id.
   * id, string: Mailbox id (required)

   * @return MailboxDto
	 */

   public function getMailbox($id) {

  		//parse inputs
  		$resourcePath = "/mailboxes/{id}";
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
  		                                                'MailboxDto');
  		return $responseObject;

      }
  /**
	 * getMailboxesStatistics
	 * Gets all account mailboxes statistics.
   * @return Array[MailboxStatisticsDto]
	 */

   public function getMailboxesStatistics() {

  		//parse inputs
  		$resourcePath = "/mailboxes/statistics";
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
  		                                                'array[MailboxStatisticsDto]');
  		return $responseObject;

      }
  /**
	 * getMailboxStatistics
	 * Gets the mailbox statistics by mailbox id.
   * id, string: Mailbox id (required)

   * @return MailboxStatisticsDto
	 */

   public function getMailboxStatistics($id) {

  		//parse inputs
  		$resourcePath = "/mailboxes/statistics/{id}";
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
  		                                                'MailboxStatisticsDto');
  		return $responseObject;

      }
  

}

