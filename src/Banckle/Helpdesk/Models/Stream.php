<?php

namespace Banckle\Helpdesk\Models;

class Stream {

  static $swaggerTypes = array(
      'CanWrite' => 'bool',
      'Length' => 'int',
      'Position' => 'int',
      'WriteTimeout' => 'int',
      'CanTimeout' => 'bool',
      'CanRead' => 'bool',
      'ReadTimeout' => 'int',
      'CanSeek' => 'bool'

    );

  public $CanWrite; // bool
  public $Length; // int
  public $Position; // int
  public $WriteTimeout; // int
  public $CanTimeout; // bool
  public $CanRead; // bool
  public $ReadTimeout; // int
  public $CanSeek; // bool
  }

