<?php

namespace Banckle\Helpdesk\Models;

class CannedResponseDto {

  static $swaggerTypes = array(
      'Id' => 'string',
      'Content' => 'string',
      'Name' => 'string',
      'MailboxId' => 'string',
      'UpdatedAt' => 'DateTime',
      'AccountId' => 'string',
      'CreatedAt' => 'DateTime'

    );

  public $Id; // string
  public $Content; // string
  public $Name; // string
  public $MailboxId; // string
  public $UpdatedAt; // DateTime
  public $AccountId; // string
  public $CreatedAt; // DateTime
  }

