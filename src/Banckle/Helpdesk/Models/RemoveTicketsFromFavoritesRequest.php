<?php

namespace Banckle\Helpdesk\Models;

class RemoveTicketsFromFavoritesRequest {

  static $swaggerTypes = array(
      'TicketsIds' => 'array[Guid]'

    );

  public $TicketsIds; // array[Guid]
  }

