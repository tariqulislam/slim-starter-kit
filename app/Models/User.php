<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{

  protected $table = 'erp_user';

  protected $fillable=[
    'erp_user_email',
    'erp_user_name'
  ];

}
