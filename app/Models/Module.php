<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
 
	//INSTITUTE TABLE
    protected $guarded = ['id'];

	protected $table = 'module';
	
	public function lect()
	{
		return $this->belongsTo('App\Models\Lecturer','lec_id','id'); 
	}

	public function module()
	{
		return $this->belongsTo('App\Models\Module','course_id','id'); 
	}
}