<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerifyTransactionMail extends Mailable implements ShouldQueue
{
  use Queueable, SerializesModels;

  public $code;
  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($code)
  {
    $this->code = $code;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->markdown('email.verifyTransaction', [
      'code' => $this->code
    ]);
  }
}
