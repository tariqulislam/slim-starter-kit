<?php

namespace App\Validation;

class Confirmation{
  public $output;
  public $message;
  public $payload;

  public function __construct($output,$message,$payload){
    $this->output = $output;
    $this->message= $message;
    $this->payload =$payload;
  }


}
