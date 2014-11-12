<?php

namespace Banckle\Helpdesk\Models;

class ActivityStreamItemDto {

  static $swaggerTypes = array(
      'Id' => 'Guid',
      'Text' => 'string',
      'Created' => 'DateTime'

    );

  public $Id; // Guid
  public $Text; // string
  public $Created; // DateTime
  }

