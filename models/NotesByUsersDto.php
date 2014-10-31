<?php

class NotesByUsersDto {

  static $swaggerTypes = array(
      'UserName' => 'string',
      'Notes' => 'array[Note]'

    );

  public $UserName; // string
  public $Notes; // array[Note]
  }

