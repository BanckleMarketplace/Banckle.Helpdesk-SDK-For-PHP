<?php

namespace Banckle\Helpdesk\Models;

class MailboxDto {

  static $swaggerTypes = array(
      'MailboxId' => 'string',
      'AccountId' => 'string',
      'MailboxName' => 'string',
      'EmailAddress' => 'string'

    );

  public $MailboxId; // string
  public $AccountId; // string
  public $MailboxName; // string
  public $EmailAddress; // string
  }

