<?php

namespace Banckle\Helpdesk\Models;

class AddTicketsToFavoritesRequest {

  static $swaggerTypes = array(
      'TicketsIds' => 'array[Guid]'

    );

  public $TicketsIds; // array[Guid]
  }

