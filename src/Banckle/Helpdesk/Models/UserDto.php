<?php

namespace Banckle\Helpdesk\Models;

class UserDto {

  static $swaggerTypes = array(
      'UserId' => 'string',
      'FullName' => 'string',
      'AccountId' => 'string',
      'Email' => 'string'

    );

  public $UserId; // string
  public $FullName; // string
  public $AccountId; // string
  public $Email; // string
  }

