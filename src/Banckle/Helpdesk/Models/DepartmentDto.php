<?php

namespace Banckle\Helpdesk\Models;

class DepartmentDto {

  static $swaggerTypes = array(
      'Lead' => 'UserShortDto',
      'Members' => 'array[UserShortDto]',
      'Id' => 'string',
      'Name' => 'string'

    );

  public $Lead; // UserShortDto
  public $Members; // array[UserShortDto]
  public $Id; // string
  public $Name; // string
  }

