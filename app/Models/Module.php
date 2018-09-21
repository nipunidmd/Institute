<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
 use SoftDeletes;
	//INSTITUTE TABLE
    protected $guarded = ['id'];
 	protected $dates = ['deleted_at'];
	protected $table = 'module';
	
	
}