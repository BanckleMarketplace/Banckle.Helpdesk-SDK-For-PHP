<?php

namespace Banckle\Helpdesk;

class TicketsApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * createTicket
	 * Creates ticket.
   * body, CreateTicketRequest:  (optional)

   * @return Guid
	 */

   public function createTicket($body) {

  		//parse inputs
  		$resourcePath = "/tickets";
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
	 * getTicket
	 * Gets ticket by specified ticket id.
   * id, Guid: Ticket id (required)

   * @return TicketDto
	 */

   public function getTicket($id) {

  		//parse inputs
  		$resourcePath = "/tickets/{id}";
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
  		                                                'TicketDto');
  		return $responseObject;

      }
  /**
	 * getTicketNotes
	 * Gets ticket notes by specified ticket id.
   * id, Guid: Ticket id (required)

   * @return Array[NotesByUsersDto]
	 */

   public function getTicketNotes($id) {

  		//parse inputs
  		$resourcePath = "/tickets/{id}/notes";
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
	 * getTicketPosts
	 * Gets ticket posts by specified ticket id.
   * id, Guid: Ticket id (required)

   * @return TicketPostDto
	 */

   public function getTicketPosts($id) {

  		//parse inputs
  		$resourcePath = "/tickets/{id}/posts";
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
  		                                                'TicketPostDto');
  		return $responseObject;

      }
  /**
	 * getTicketByMailboxSection
	 * Gets tickets by specified mailbox id and section.
   * mailboxid, Guid: MailBox Id (required)

   * section, string: Type of the ticket (required)

   * pagesize, Int32: Page size. (required)

   * page, Int32: Page number. (required)

   * @return Array[TicketShortInfoDto]
	 */

   public function getTicketByMailboxSection($mailboxid, $section, $pagesize, $page) {

  		//parse inputs
  		$resourcePath = "/tickets/{mailboxid}/{section}/{page}/{pagesize}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($mailboxid != null) {
  			$resourcePath = str_replace("{" . "mailboxid" . "}",
  			                            $this->apiClient->toPathValue($mailboxid), $resourcePath);
  		}
  		if($section != null) {
  			$resourcePath = str_replace("{" . "section" . "}",
  			                            $this->apiClient->toPathValue($section), $resourcePath);
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
  		                                                'array[TicketShortInfoDto]');
  		return $responseObject;

      }
  /**
	 * getTicketNotesByNoteId
	 * Gets ticket note by specified id.
   * ticketId, Guid: Ticket id (required)

   * noteId, Guid: Note id (required)

   * @return NoteDto
	 */

   public function getTicketNotesByNoteId($ticketId, $noteId) {

  		//parse inputs
  		$resourcePath = "/tickets/{ticketId}/notes/{noteId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($ticketId != null) {
  			$resourcePath = str_replace("{" . "ticketId" . "}",
  			                            $this->apiClient->toPathValue($ticketId), $resourcePath);
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
   * ticketId, Guid: Ticket id (required)

   * noteId, Guid: Note id (required)

   * @return Void
	 */

   public function deleteTicketNote($ticketId, $noteId) {

  		//parse inputs
  		$resourcePath = "/tickets/{ticketId}/notes/{noteId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "DELETE";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($ticketId != null) {
  			$resourcePath = str_replace("{" . "ticketId" . "}",
  			                            $this->apiClient->toPathValue($ticketId), $resourcePath);
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
	 * getTicketPostBodyById
	 * Gets ticket post body by specified id.
   * ticketid, Guid: Ticket id (required)

   * postid, Guid: Ticket post id (required)

   * @return string
	 */

   public function getTicketPostBodyById($ticketid, $postid) {

  		//parse inputs
  		$resourcePath = "/tickets/{ticketid}/posts/{postid}/body";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($ticketid != null) {
  			$resourcePath = str_replace("{" . "ticketid" . "}",
  			                            $this->apiClient->toPathValue($ticketid), $resourcePath);
  		}
  		if($postid != null) {
  			$resourcePath = str_replace("{" . "postid" . "}",
  			                            $this->apiClient->toPathValue($postid), $resourcePath);
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
	 * assignTicket
	 * Assign tickets to user.
   * body, AssignTicketToUserRequest:  (optional)

   * @return Void
	 */

   public function assignTicket($body=null) {

  		//parse inputs
  		$resourcePath = "/tickets/assign";
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
	 * assignTicketToDepartment
	 * Assign tickets to department.
   * body, AssignTicketToDepartmentRequest:  (optional)

   * @return Void
	 */

   public function assignTicketToDepartment($body=null) {

  		//parse inputs
  		$resourcePath = "/tickets/assignToDepartment";
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
	 * addTicketToFavorite
	 * Adds tickets to user favorite list.
   * body, AddTicketsToFavoritesRequest:  (optional)

   * @return Void
	 */

   public function addTicketToFavorite($body=null) {

  		//parse inputs
  		$resourcePath = "/tickets/favorite";
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
	 * markAsDeleted
	 * Marks tickets as deleted.
   * body, MarkTicketsAsDeletedRequest:  (optional)

   * @return Void
	 */

   public function markAsDeleted($body=null) {

  		//parse inputs
  		$resourcePath = "/tickets/markAsDeleted";
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
	 * createTicketNote
	 * Creates ticket note.
   * body, string: Ticket Note Info (required)

   * @return Guid
	 */

   public function createTicketNote($body) {

  		//parse inputs
  		$resourcePath = "/tickets/note";
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
	 * updateTicketNote
	 * Updates ticket note.
   * body, string: Ticket Note Info (required)

   * @return Guid
	 */

   public function updateTicketNote($body) {

  		//parse inputs
  		$resourcePath = "/tickets/note";
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
	 * getTicketsOptions
	 * Gets options for creating ticket.
   * @return AddTicketOptionsDto
	 */

   public function getTicketsOptions() {

  		//parse inputs
  		$resourcePath = "/tickets/options";
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
  		                                                'AddTicketOptionsDto');
  		return $responseObject;

      }
  /**
	 * createTicketPost
	 * Creates ticket post.
   * body, CreateTicketPostRequest:  (optional)

   * @return Guid
	 */

   public function createTicketPost($body=null) {

  		//parse inputs
  		$resourcePath = "/tickets/posts";
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
	 * createTicketPriority
	 * Change tickets priority.
   * body, ChangeTicketsPriorityRequest:  (optional)

   * @return Void
	 */

   public function createTicketPriority($body=null) {

  		//parse inputs
  		$resourcePath = "/tickets/priority";
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
	 * marksTicketAsRead
	 * Marks tickets as read.
   * body, MarkTicketsAsReadRequest:  (optional)

   * @return Void
	 */

   public function marksTicketAsRead($body=null) {

  		//parse inputs
  		$resourcePath = "/tickets/read";
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
	 * restoreDeletedTickets
	 * Restore tickets which are marked as deleted.
   * body, RestoreDeletedTicketsRequest:  (optional)

   * @return Void
	 */

   public function restoreDeletedTickets($body=null) {

  		//parse inputs
  		$resourcePath = "/tickets/restore";
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
	 * changeTicketStatus
	 * Change ticket status.
   * body, ChangeTicketStatusRequest:  (optional)

   * @return Void
	 */

   public function changeTicketStatus($body=null) {

  		//parse inputs
  		$resourcePath = "/tickets/status";
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
	 * createTicketTags
	 * Updates collection of ticket's tags.
   * body, Guid: Ticket id (required)

   * body, array[of string]: Collection of tags (required)

   * @return Void
	 */

   public function createTicketTags($body, $body) {

  		//parse inputs
  		$resourcePath = "/tickets/tags";
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
	 * deleteTicketTags
	 * Deletes collection of ticket's tags.
   * body, Guid: Ticket id (required)

   * body, array[of string]: Collection of tags (required)

   * @return Void
	 */

   public function deleteTicketTags($body, $body) {

  		//parse inputs
  		$resourcePath = "/tickets/tags";
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


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'Void');
  		return $responseObject;

      }
  /**
	 * unmarkTicketsFavorite
	 * Remove tickets from user favorite list.
   * body, RemoveTicketsFromFavoritesRequest:  (optional)

   * @return Void
	 */

   public function unmarkTicketsFavorite($body=null) {

  		//parse inputs
  		$resourcePath = "/tickets/unfavorite";
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
	 * markTicketsUnread
	 * Mark tickets as unread.
   * body, MarkTicketsAsUnreadRequest:  (optional)

   * @return Void
	 */

   public function markTicketsUnread($body=null) {

  		//parse inputs
  		$resourcePath = "/tickets/unread";
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

