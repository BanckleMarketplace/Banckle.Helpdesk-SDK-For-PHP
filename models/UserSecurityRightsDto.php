<?php

class UserSecurityRightsDto {

  static $swaggerTypes = array(
      'UserId' => 'string',
      'UserFullName' => 'string',
      'UserEmail' => 'string',
      'RightsForMailboxes' => 'array[MailboxRightDto]'

    );

  public $UserId; // string
  public $UserFullName; // string
  public $UserEmail; // string
  public $RightsForMailboxes; // array[MailboxRightDto]
  }

