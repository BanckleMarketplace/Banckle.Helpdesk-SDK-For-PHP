<?php

namespace Banckle\Helpdesk;

class SearchApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * searchByKeywords
	 * Executes the quick search by specified keywords.
   * keywords, String: Keywods to search. (required)

   * pagesize, Int32: Page size. (required)

   * page, Int32: Page number. (required)

   * @return Array[FoundTicketDto]
	 */

   public function searchByKeywords($keywords, $pagesize, $page) {

  		//parse inputs
  		$resourcePath = "/search/quickSearch/{keywords}/{page}/{pagesize}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($keywords != null) {
  			$resourcePath = str_replace("{" . "keywords" . "}",
  			                            $this->apiClient->toPathValue($keywords), $resourcePath);
  		}
  		if($pagesize != null) {
  			$resourcePath = str_replace("{" . "pagesize" . "}",
  			                            $this->apiClient->toPathValue($pagesize), $resourcePath);
  		}
  		if($page != null) {
  			$resourcePath = str_replace("{" . "page" . "}",
  			                            $this->apiClient->toPathValue($page), $resourcePath);
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
  		                                                'array[FoundTicketDto]');
  		return $responseObject;

      }
  

}

