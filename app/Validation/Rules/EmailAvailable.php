<?php

namespace App\Validation\Rules;

use Respect\Validation\Rules\AbstractRule;
use App\Models\User;

class EmailAvailable extends AbstractRule{

  public function validate($input){
    return User::where('erp_user_email', $input)->count() === 0;
  }
}
