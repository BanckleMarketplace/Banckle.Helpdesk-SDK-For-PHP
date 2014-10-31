<?php

class AssignTicketToDepartmentRequest {

  static $swaggerTypes = array(
      'DepartmentId' => 'string',
      'TicketsIds' => 'array[Guid]'

    );

  public $DepartmentId; // string
  public $TicketsIds; // array[Guid]
  }

