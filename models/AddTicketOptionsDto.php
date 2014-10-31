<?php

class AddTicketOptionsDto {

  static $swaggerTypes = array(
      'Departments' => 'array[DepartmentShortDto]',
      'Recipients' => 'array[UserDto]',
      'Priorities' => 'array[string]',
      'MailBoxes' => 'array[MailboxDto]',
      'AssignedToList' => 'array[UserDto]'

    );

  public $Departments; // array[DepartmentShortDto]
  public $Recipients; // array[UserDto]
  public $Priorities; // array[string]
  public $MailBoxes; // array[MailboxDto]
  public $AssignedToList; // array[UserDto]
  }

