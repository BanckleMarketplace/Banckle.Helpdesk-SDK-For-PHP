<?php

class AccountDto {

  static $swaggerTypes = array(
      'AccountId' => 'string',
      'AccountMailboxes' => 'array[MailboxDto]',
      'Tags' => 'array[string]'

    );

  public $AccountId; // string
  public $AccountMailboxes; // array[MailboxDto]
  public $Tags; // array[string]
  }

