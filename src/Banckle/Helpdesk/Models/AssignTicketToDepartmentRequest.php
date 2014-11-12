<?php

namespace Banckle\Helpdesk\Models;

class AssignTicketToDepartmentRequest {

  static $swaggerTypes = array(
      'DepartmentId' => 'string',
      'TicketsIds' => 'array[Guid]'

    );

  public $DepartmentId; // string
  public $TicketsIds; // array[Guid]
  }

