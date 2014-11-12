<?php

namespace Banckle\Helpdesk\Models;

class UserGeneralSettingsDto {

  static $swaggerTypes = array(
      'ShowAccountActivityStream' => 'bool',
      'ShowBanckleActivityStream' => 'bool'

    );

  public $ShowAccountActivityStream; // bool
  public $ShowBanckleActivityStream; // bool
  }

