<?php

namespace Banckle\Helpdesk\Models;

class Note {

  static $swaggerTypes = array(
      'NoteId' => 'string',
      'TimeStamp' => 'DateTime',
      'Body' => 'string'

    );

  public $NoteId; // string
  public $TimeStamp; // DateTime
  public $Body; // string
  }

