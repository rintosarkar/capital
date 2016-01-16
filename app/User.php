<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    public $timestamps = false;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = ['name', 'email', 'password'];
       protected $fillable = ['username', 'full_name', 'gender', 'email', 'address', 'phone_number', 
                              'country', 'referrar_id','upline_id','is_block','block_issue', 'last_login_ip',
                              'is_logged','status','signup_date','last_login_time'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token','pin'];

    
    /*  
        |---------------------------------------------------------
        | Relationship methods
        |----------------------------------------------------------
    */


        /**
           * Many to many relationship method for accessing the User->roles
           *
           * @return Query builder object
           *
        */

        public function roles()
        {
            return $this->belongsToMany(Role::class);
        }


        /**
           * Relation with news table
        */

        public function news()
        {
            return $this->belongsToMany(News::class);
        }

        /**
           * Relation with withdrawals table
        */

        public function withdrawals()
        {
            return $this->belongsToMany(Withdrawal::class);
        }

        

        /**
           * Relation with support table
        */

        public function supports()
        {
            return $this->belongsToMany(Support::class);
        }

        /**
           * Relation with account table
        */

        public function accounts()
        {
            return $this->belongsToMany(Account::class);
        }

        /**
           * Relation with deposit table
        */

        public function deposit()
        {
            return $this->belongsToMany(Diposit::class);
        }

        /**
           * Relation with roirecords table
        */

        public function roirecords()
        {
            return $this->belongsToMany(Roirecord::class);
        }

        /**
           * Relation with downlines table
        */

        public function downlines()
        {
            return $this->belongsToMany(Downline::class);
        }

        /**
           * Relation with carries table
        */

        public function carries()
        {
            return $this->belongsToMany(Carry::class);
        }

        /**
           * Relation with transactions table
        */

        public function transactions()
        {
            return $this->belongsToMany(Transaction::class);
        }




        /**
        * Checking the assigned roles
        *
        * @return Boolean
        *
        */

        public function hasRole( $role )
        {
            if( is_string( $role)){
                return $this->roles->contains('name', $role);
            }

            return !! $role->intersect( $this->roles)->count();

            /*foreach( $role as $r )
            {
                if( $this->hasRole( $r->name )){

                    return true;
                }
            }

            return false;*/
        }



        /**
        * Assign Role
        *
        * @return String
        */
        public function assign( $role )
        {
            if ( is_string( $role )){

                return $this->roles()->save(

                        Role::whereName( $role )->firstOrFail()
                    );
            }

            return $this->roles()->save($role);

        }

        



}
