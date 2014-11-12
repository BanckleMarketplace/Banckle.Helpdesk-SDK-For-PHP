<?php

namespace Banckle\Helpdesk\Models;

class TicketDto {

  static $swaggerTypes = array(
      'Id' => 'string',
      'Created' => 'DateTime',
      'MailboxId' => 'string',
      'Title' => 'string',
      'IsDeleted' => 'bool',
      'AssignedToUser' => 'UserDto',
      'Priority' => 'string',
      'Children' => 'array[TicketPostDto]',
      'IsFavorite' => 'bool',
      'From' => 'UserDto',
      'Status' => 'string'

    );

  public $Id; // string
  public $Created; // DateTime
  public $MailboxId; // string
  public $Title; // string
  public $IsDeleted; // bool
  public $AssignedToUser; // UserDto
  public $Priority; // string
  public $Children; // array[TicketPostDto]
  public $IsFavorite; // bool
  public $From; // UserDto
  public $Status; // string
  }

