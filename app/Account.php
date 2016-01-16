<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    
    public function createAccounts()
    {
      return $lastRegUserId = User::get()->last()->id;
    }
}
