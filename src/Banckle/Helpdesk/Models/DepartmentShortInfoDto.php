<?php

namespace Banckle\Helpdesk\Models;

class DepartmentShortInfoDto {

  static $swaggerTypes = array(
      'Lead' => 'UserShortDto',
      'MembersCount' => 'int',
      'Id' => 'string',
      'Name' => 'string'

    );

  public $Lead; // UserShortDto
  public $MembersCount; // int
  public $Id; // string
  public $Name; // string
  }

