<?php

class EmailSettingsDto {

  static $swaggerTypes = array(
      'UserName' => 'string',
      'ServerName' => 'string',
      'Password' => 'string',
      'Port' => 'int',
      'Ssl' => 'bool'

    );

  public $UserName; // string
  public $ServerName; // string
  public $Password; // string
  public $Port; // int
  public $Ssl; // bool
  }

