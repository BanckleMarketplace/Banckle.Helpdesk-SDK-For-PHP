<?php

namespace Banckle\Helpdesk\Models;

class NoteDto {

  static $swaggerTypes = array(
      'Id' => 'string',
      'UserName' => 'string',
      'TimeStamp' => 'DateTime',
      'ParentId' => 'string',
      'Body' => 'string'

    );

  public $Id; // string
  public $UserName; // string
  public $TimeStamp; // DateTime
  public $ParentId; // string
  public $Body; // string
  }

