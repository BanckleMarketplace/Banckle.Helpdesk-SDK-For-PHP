<?php

class SecuritySettingsUserDto {

  static $swaggerTypes = array(
      'CanAccesMailBox' => 'bool',
      'Name' => 'string',
      'CanChangeMailBox' => 'bool',
      'CanCreateMailBox' => 'bool',
      'UserId' => 'string'

    );

  public $CanAccesMailBox; // bool
  public $Name; // string
  public $CanChangeMailBox; // bool
  public $CanCreateMailBox; // bool
  public $UserId; // string
  }

