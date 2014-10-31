<?php

class ContactsApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * getContacts
	 * Gets all contacts.
   * @return Array[ContactDto]
	 */

   public function getContacts() {

  		//parse inputs
  		$resourcePath = "/contacts";
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
  		                                                'array[ContactDto]');
  		return $responseObject;

      }
  /**
	 * createContact
	 * Updates contact.
   * body, UpdateContactRequest:  (optional)

   * @return Void
	 */

   public function createContact($body=null) {

  		//parse inputs
  		$resourcePath = "/contacts";
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
	 * getContactNoteById
	 * Gets contact note by specified id.
   * contactId, string: Contact id (required)

   * noteId, string: Note id (required)

   * @return NoteDto
	 */

   public function getContactNoteById($contactId, $noteId) {

  		//parse inputs
  		$resourcePath = "/contacts/{contactId}/notes/{noteId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($contactId != null) {
  			$resourcePath = str_replace("{" . "contactId" . "}",
  			                            $this->apiClient->toPathValue($contactId), $resourcePath);
  		}
  		if($noteId != null) {
  			$resourcePath = str_replace("{" . "noteId" . "}",
  			                            $this->apiClient->toPathValue($noteId), $resourcePath);
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
  		                                                'NoteDto');
  		return $responseObject;

      }
  /**
	 * deleteTicketNote
	 * Deletes ticket note.
   * contactId, Guid: Contact id (required)

   * noteId, string: Note id (required)

   * body, DeleteContactNote:  (optional)

   * @return Void
	 */

   public function deleteTicketNote($contactId, $noteId, $body=null) {

  		//parse inputs
  		$resourcePath = "/contacts/{contactId}/notes/{noteId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "DELETE";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($contactId != null) {
  			$resourcePath = str_replace("{" . "contactId" . "}",
  			                            $this->apiClient->toPathValue($contactId), $resourcePath);
  		}
  		if($noteId != null) {
  			$resourcePath = str_replace("{" . "noteId" . "}",
  			                            $this->apiClient->toPathValue($noteId), $resourcePath);
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
	 * getContact
	 * Gets contact by id.
   * id, string: Contact id (required)

   * @return ContactDto
	 */

   public function getContact($id) {

  		//parse inputs
  		$resourcePath = "/contacts/{id}";
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
  		                                                'ContactDto');
  		return $responseObject;

      }
  /**
	 * deleteContact
	 * Deletes contact by id.
   * id, string: Contact id (required)

   * @return Void
	 */

   public function deleteContact($id) {

  		//parse inputs
  		$resourcePath = "/contacts/{id}";
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
	 * getContactNotesByContactId
	 * Gets contact notes by specified contact id.
   * id, string: Contact id (required)

   * @return Array[NotesByUsersDto]
	 */

   public function getContactNotesByContactId($id) {

  		//parse inputs
  		$resourcePath = "/contacts/{id}/notes";
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
  		                                                'array[NotesByUsersDto]');
  		return $responseObject;

      }
  /**
	 * updateContactNote
	 * Updates contact note.
   * body, string: Contact id (required)

   * body, string: Note Info (required)

   * @return Guid
	 */

   public function updateContactNote($body, $body) {

  		//parse inputs
  		$resourcePath = "/contacts/note";
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
	 * postcontactsnote
	 * Updates contact note.
   * body, Guid: Note id (required)

   * body, Guid: Contact id (required)

   * body, string: Agent email (do not set field if you don't want to change author of note) (optional)

   * body, string: The text of the note (do not set field if you don't want to change text of note) (required)

   * @return Guid
	 */

   public function postcontactsnote($body, $body, $body=null, $body) {

  		//parse inputs
  		$resourcePath = "/contacts/note";
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
	 * getContactsByKeywords
	 * Search contacts by keywords.
   * keywords, String: Keywords (required)

   * @return Array[ContactDto]
	 */

   public function getContactsByKeywords($keywords) {

  		//parse inputs
  		$resourcePath = "/contacts/search/{keywords}";
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
  		                                                'array[ContactDto]');
  		return $responseObject;

      }
  

}

