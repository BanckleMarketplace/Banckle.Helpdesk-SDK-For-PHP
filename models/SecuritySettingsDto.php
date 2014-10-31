<?php

class SecuritySettingsDto {

  static $swaggerTypes = array(
      'Id' => 'string',
      'AccountId' => 'string',
      'MailBoxId' => 'Guid',
      'Users' => 'array[SecuritySettingsUserDto]'

    );

  public $Id; // string
  public $AccountId; // string
  public $MailBoxId; // Guid
  public $Users; // array[SecuritySettingsUserDto]
  }

