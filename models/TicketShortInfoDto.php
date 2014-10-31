<?php

class TicketShortInfoDto {

  static $swaggerTypes = array(
      'Id' => 'string',
      'Created' => 'string',
      'Title' => 'string',
      'Updated' => 'string',
      'IsDeleted' => 'bool',
      'IsSeen' => 'bool',
      'AssignedToUser' => 'UserDto',
      'Priority' => 'string',
      'IsFavorite' => 'bool',
      'From' => 'UserDto',
      'LastComment' => 'TicketPostCommentDto',
      'Status' => 'string'

    );

  public $Id; // string
  public $Created; // string
  public $Title; // string
  public $Updated; // string
  public $IsDeleted; // bool
  public $IsSeen; // bool
  public $AssignedToUser; // UserDto
  public $Priority; // string
  public $IsFavorite; // bool
  public $From; // UserDto
  public $LastComment; // TicketPostCommentDto
  public $Status; // string
  }

