<?php

class CreateTicketRequest {

  static $swaggerTypes = array(
      'AssignedToDepartmentId' => 'string',
      'MailboxId' => 'string',
      'Title' => 'string',
      'Recipients' => 'array[string]',
      'AssignedToId' => 'string',
      'Body' => 'string',
      'Priority' => 'string',
      'Tags' => 'array[string]',
      'AttachedFiles' => 'array[Guid]',
      'RecipientEmail' => 'string',
      'CannedResponseId' => 'string'

    );

  public $AssignedToDepartmentId; // string
  public $MailboxId; // string
  public $Title; // string
  public $Recipients; // array[string]
  public $AssignedToId; // string
  public $Body; // string
  public $Priority; // string
  public $Tags; // array[string]
  public $AttachedFiles; // array[Guid]
  public $RecipientEmail; // string
  public $CannedResponseId; // string
  }

