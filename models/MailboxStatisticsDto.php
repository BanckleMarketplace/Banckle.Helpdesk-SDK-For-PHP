<?php

class MailboxStatisticsDto {

  static $swaggerTypes = array(
      'MailboxId' => 'string',
      'UnassignedNewCount' => 'int',
      'MailboxName' => 'string',
      'AssignedToOtherNewCount' => 'int',
      'AssignedToMeNewCount' => 'int',
      'AssignedToOtherCount' => 'int',
      'AssignedToMeCount' => 'int',
      'UnassignedCount' => 'int',
      'EmailAddress' => 'string'

    );

  public $MailboxId; // string
  public $UnassignedNewCount; // int
  public $MailboxName; // string
  public $AssignedToOtherNewCount; // int
  public $AssignedToMeNewCount; // int
  public $AssignedToOtherCount; // int
  public $AssignedToMeCount; // int
  public $UnassignedCount; // int
  public $EmailAddress; // string
  }

