<?php

namespace Banckle\Helpdesk\Models;

class ContactDto {

  static $swaggerTypes = array(
      'LastName' => 'string',
      'FirstName' => 'string',
      'AccountId' => 'string',
      'UserId' => 'string',
      'EmailAddress' => 'string',
      'UserType' => 'string',
      'DisplayName' => 'string'

    );

  public $LastName; // string
  public $FirstName; // string
  public $AccountId; // string
  public $UserId; // string
  public $EmailAddress; // string
  public $UserType; // string
  public $DisplayName; // string
  }

