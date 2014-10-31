<?php

class UpdateContactRequest {

  static $swaggerTypes = array(
      'LastName' => 'string',
      'AdditionalContacts' => 'array[AdditionalContact]',
      'FirstName' => 'string',
      'UserId' => 'string',
      'EmailAddress' => 'string',
      'DisplayName' => 'string'

    );

  public $LastName; // string
  public $AdditionalContacts; // array[AdditionalContact]
  public $FirstName; // string
  public $UserId; // string
  public $EmailAddress; // string
  public $DisplayName; // string
  }

