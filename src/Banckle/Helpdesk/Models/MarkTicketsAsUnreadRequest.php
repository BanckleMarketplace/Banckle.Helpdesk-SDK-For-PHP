<?php

namespace Banckle\Helpdesk\Models;

class MarkTicketsAsUnreadRequest {

  static $swaggerTypes = array(
      'TicketsIds' => 'array[Guid]'

    );

  public $TicketsIds; // array[Guid]
  }

