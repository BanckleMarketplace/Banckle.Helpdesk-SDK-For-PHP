<?php

class ExistingMailboxDto {

  static $swaggerTypes = array(
      'MailboxId' => 'string',
      'MailboxName' => 'string',
      'Provider' => 'string',
      'SmtpSettings' => 'EmailSettingsDto',
      'Pop3Settings' => 'EmailSettingsDto',
      'SecuritySettings' => 'SecuritySettingsDto',
      'Protocol' => 'string',
      'EmailAddress' => 'string',
      'ImapSettings' => 'EmailSettingsDto',
      'Type' => 'string'

    );

  public $MailboxId; // string
  public $MailboxName; // string
  public $Provider; // string
  public $SmtpSettings; // EmailSettingsDto
  public $Pop3Settings; // EmailSettingsDto
  public $SecuritySettings; // SecuritySettingsDto
  public $Protocol; // string
  public $EmailAddress; // string
  public $ImapSettings; // EmailSettingsDto
  public $Type; // string
  }

