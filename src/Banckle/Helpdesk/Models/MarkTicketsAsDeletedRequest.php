<?php

namespace Banckle\Helpdesk\Models;

class MarkTicketsAsDeletedRequest {

  static $swaggerTypes = array(
      'TicketsIds' => 'array[Guid]'

    );

  public $TicketsIds; // array[Guid]
  }

