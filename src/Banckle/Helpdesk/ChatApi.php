<?php

namespace Banckle\Helpdesk;

class ChatApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * addChatTranscript
	 * Attach chat transcript link.
   * body, string: Chat Transcript Info (required)

   * @return Guid
	 */

   public function addChatTranscript($body) {

  		//parse inputs
  		$resourcePath = "/chat/transcript";
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

