<?php

namespace Banckle\Helpdesk\Models;

class MailboxRightDto {

  static $swaggerTypes = array(
      'MailboxId' => 'string',
      'MailboxName' => 'string',
      'CanViewTickets' => 'bool',
      'CanModifyTickets' => 'bool',
      'CanCreateTickets' => 'bool',
      'CanAnswerTickets' => 'bool'

    );

  public $MailboxId; // string
  public $MailboxName; // string
  public $CanViewTickets; // bool
  public $CanModifyTickets; // bool
  public $CanCreateTickets; // bool
  public $CanAnswerTickets; // bool
  }

