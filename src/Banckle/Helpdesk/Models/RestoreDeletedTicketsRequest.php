<?php

namespace Banckle\Helpdesk\Models;

class RestoreDeletedTicketsRequest {

  static $swaggerTypes = array(
      'TicketsIds' => 'array[Guid]'

    );

  public $TicketsIds; // array[Guid]
  }

