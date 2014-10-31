<?php

class TicketPostDto {

  static $swaggerTypes = array(
      'Created' => 'DateTime',
      'Title' => 'string',
      'PostId' => 'string',
      'Attachments' => 'array[AttachmentDto]',
      'TicketId' => 'string',
      'From' => 'UserDto'

    );

  public $Created; // DateTime
  public $Title; // string
  public $PostId; // string
  public $Attachments; // array[AttachmentDto]
  public $TicketId; // string
  public $From; // UserDto
  }

