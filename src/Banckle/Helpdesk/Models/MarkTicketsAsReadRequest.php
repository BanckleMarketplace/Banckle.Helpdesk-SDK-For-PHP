<?php

namespace Banckle\Helpdesk\Models;

class MarkTicketsAsReadRequest {

  static $swaggerTypes = array(
      'TicketsIds' => 'array[Guid]'

    );

  public $TicketsIds; // array[Guid]
  }

