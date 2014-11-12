<?php

namespace Banckle\Helpdesk\Models;

class AttachmentDto {

  static $swaggerTypes = array(
      'Id' => 'string',
      'FileName' => 'string',
      'FileSize' => 'int'

    );

  public $Id; // string
  public $FileName; // string
  public $FileSize; // int
  }

