<?php

class ChangeTicketsPriorityRequest {

  static $swaggerTypes = array(
      'TicketsIds' => 'array[Guid]',
      'Priority' => 'string'

    );

  public $TicketsIds; // array[Guid]
  public $Priority; // string
  }

