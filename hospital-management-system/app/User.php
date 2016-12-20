<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public $table="users";
    public static function check_login($user_input,$password){
        $array1 = array('user_input'=>$user_input);
        $rules = array("user_input"=>"email");
        if(Validator::make($array1,$rules)->fails())
            $check=User::where("username","=",$user_input)->where("password","=",$password)->count();
        else
            $check=User::where("email","=",$user_input)->where("password","=",$password)->count();
        if($check>0){
            return true;
        }

        else
            return false;
    }
}

