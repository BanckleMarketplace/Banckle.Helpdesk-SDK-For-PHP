<?php

namespace Banckle\Helpdesk\Models;

class CreateTicketPostRequest {

  static $swaggerTypes = array(
      'CloseAfterReply' => 'bool',
      'Title' => 'string',
      'Attachments' => 'array[AttachmentDto]',
      'Recipients' => 'array[string]',
      'Body' => 'string',
      'TicketId' => 'string',
      'AttachedFiles' => 'array[Guid]',
      'RecipientEmail' => 'string',
      'CannedResponseId' => 'string'

    );

  public $CloseAfterReply; // bool
  public $Title; // string
  public $Attachments; // array[AttachmentDto]
  public $Recipients; // array[string]
  public $Body; // string
  public $TicketId; // string
  public $AttachedFiles; // array[Guid]
  public $RecipientEmail; // string
  public $CannedResponseId; // string
  }

