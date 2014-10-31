<?php

class AssignTicketToUserRequest {

  static $swaggerTypes = array(
      'UserId' => 'string',
      'TicketsIds' => 'array[Guid]'

    );

  public $UserId; // string
  public $TicketsIds; // array[Guid]
  }

