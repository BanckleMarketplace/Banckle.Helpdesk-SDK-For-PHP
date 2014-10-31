<?php

class AttachmentInfoDto {

  static $swaggerTypes = array(
      'Id' => 'string',
      'Name' => 'string',
      'UpdatedAt' => 'DateTime',
      'Size' => 'int',
      'CreatedAt' => 'DateTime',
      'ContentType' => 'string'

    );

  public $Id; // string
  public $Name; // string
  public $UpdatedAt; // DateTime
  public $Size; // int
  public $CreatedAt; // DateTime
  public $ContentType; // string
  }

