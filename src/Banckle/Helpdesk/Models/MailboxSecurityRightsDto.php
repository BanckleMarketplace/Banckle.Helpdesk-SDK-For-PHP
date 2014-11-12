<?php

namespace Banckle\Helpdesk\Models;

class MailboxSecurityRightsDto {

  static $swaggerTypes = array(
      'MailboxId' => 'string',
      'MailboxName' => 'string',
      'UsersRights' => 'array[UserRightDto]'

    );

  public $MailboxId; // string
  public $MailboxName; // string
  public $UsersRights; // array[UserRightDto]
  }

