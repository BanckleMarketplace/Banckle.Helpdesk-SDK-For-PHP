<?php

namespace Banckle\Helpdesk;

class ActivityStreamsApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * getActivityStreams
	 * Gets the account activity stream.
   * @return Array[ActivityStreamItemDto]
	 */

   public function getActivityStreams() {

  		//parse inputs
  		$resourcePath = "/activityStreams";
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
  		                                                'array[ActivityStreamItemDto]');
  		return $responseObject;

      }
  

}

