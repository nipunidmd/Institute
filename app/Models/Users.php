<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cartalyst\Sentinel\Users\EloquentUser;

class Users extends EloquentUser
{	
	//STUDENT TABLE

    protected $fillable = [
    	'uid',
        'username',
    	'email',
    	'password'
    ];

	protected $table = 'users';

	public function stu()
	{
		return $this->belongsTo('App\Models\Student','uid','id'); 
	}
    public function lec()
    {
        return $this->belongsTo('App\Models\Lecturer','lid','id'); 
    }

	// public function roles()
 //    {
 //        return $this->belongsToMany
 //        (static::$rolesModel, 'role_users', 'user_id', 'role_id')->withTimestamps();
 //    }

}