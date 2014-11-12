<?php

namespace Banckle\Helpdesk\Models;

class UserShortDto {

  static $swaggerTypes = array(
      'Id' => 'string',
      'FullName' => 'string',
      'Email' => 'string'

    );

  public $Id; // string
  public $FullName; // string
  public $Email; // string
  }

