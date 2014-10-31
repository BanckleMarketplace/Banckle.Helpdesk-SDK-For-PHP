<?php

class TicketPostCommentDto {

  static $swaggerTypes = array(
      'PostId' => 'string',
      'Body' => 'string',
      'Created' => 'DateTime',
      'From' => 'UserDto'

    );

  public $PostId; // string
  public $Body; // string
  public $Created; // DateTime
  public $From; // UserDto
  }

