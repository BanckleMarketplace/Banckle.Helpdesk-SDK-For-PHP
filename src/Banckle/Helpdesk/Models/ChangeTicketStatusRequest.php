<?php

namespace Banckle\Helpdesk\Models;

class ChangeTicketStatusRequest {

  static $swaggerTypes = array(
      'TicketId' => 'string',
      'Status' => 'string'

    );

  public $TicketId; // string
  public $Status; // string
  }

