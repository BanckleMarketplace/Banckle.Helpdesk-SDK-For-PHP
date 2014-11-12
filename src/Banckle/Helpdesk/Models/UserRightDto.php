<?php

namespace Banckle\Helpdesk\Models;

class UserRightDto {

  static $swaggerTypes = array(
      'UserEmail' => 'string',
      'CanViewTickets' => 'bool',
      'CanModifyTickets' => 'bool',
      'CanCreateTickets' => 'bool',
      'UserId' => 'string',
      'CanAnswerTickets' => 'bool',
      'UserFullName' => 'string'

    );

  public $UserEmail; // string
  public $CanViewTickets; // bool
  public $CanModifyTickets; // bool
  public $CanCreateTickets; // bool
  public $UserId; // string
  public $CanAnswerTickets; // bool
  public $UserFullName; // string
  }

