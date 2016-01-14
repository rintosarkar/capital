<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    	/**
        * Many to Many Relationship Method
        *
        * @return Query builder object
        */

        public function permissions()
        {
        	return $this->belongsToMany(Permission::class);
        }

        /**
        * Assign Permission to users i.e: admin, manager
        *
        * @return string
        */

        public function assign(Permission $permission){
        	return $this->permissions()->save($permission);
        }
}
