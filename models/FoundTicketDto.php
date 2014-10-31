<?php

class FoundTicketDto {

  static $swaggerTypes = array(
      'Created' => 'DateTime',
      'Title' => 'string',
      'PostId' => 'string',
      'TicketId' => 'string',
      'From' => 'UserDto'

    );

  public $Created; // DateTime
  public $Title; // string
  public $PostId; // string
  public $TicketId; // string
  public $From; // UserDto
  }

