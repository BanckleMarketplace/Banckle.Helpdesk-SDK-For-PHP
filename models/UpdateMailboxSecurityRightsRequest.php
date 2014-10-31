<?php

class UpdateMailboxSecurityRightsRequest {

  static $swaggerTypes = array(
      'MailboxId' => 'string',
      'UsersRights' => 'array[UserRightSaveDto]'

    );

  public $MailboxId; // string
  public $UsersRights; // array[UserRightSaveDto]
  }

