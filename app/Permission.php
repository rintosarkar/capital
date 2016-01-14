<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    

    /**
    * Many to Many Relationship Method
    *
    * @return Query builder object
    */

    public function roles()
    {
    	return $this->belongsToMany(Role::class);
    }
}
