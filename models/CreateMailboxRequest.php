<?php

class CreateMailboxRequest {

  static $swaggerTypes = array(
      'MailboxName' => 'string',
      'Provider' => 'string',
      'SmtpSettings' => 'EmailSettingsDto',
      'Pop3Settings' => 'EmailSettingsDto',
      'MailBoxId' => 'string',
      'EmailPassword' => 'string',
      'SecuritySettings' => 'SecuritySettingsDto',
      'Protocol' => 'string',
      'EmailAddress' => 'string',
      'ImapSettings' => 'EmailSettingsDto'

    );

  public $MailboxName; // string
  public $Provider; // string
  public $SmtpSettings; // EmailSettingsDto
  public $Pop3Settings; // EmailSettingsDto
  public $MailBoxId; // string
  public $EmailPassword; // string
  public $SecuritySettings; // SecuritySettingsDto
  public $Protocol; // string
  public $EmailAddress; // string
  public $ImapSettings; // EmailSettingsDto
  }

