<?php

class UserRightSaveDto {

  static $swaggerTypes = array(
      'CanViewTickets' => 'bool',
      'CanModifyTickets' => 'bool',
      'CanCreateTickets' => 'bool',
      'UserId' => 'string',
      'CanAnswerTickets' => 'bool'

    );

  public $CanViewTickets; // bool
  public $CanModifyTickets; // bool
  public $CanCreateTickets; // bool
  public $UserId; // string
  public $CanAnswerTickets; // bool
  }

