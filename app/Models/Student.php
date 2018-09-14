<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{	//tttt
	//STUDENT TABLE
	use SoftDeletes;

	protected $dates=['deleted_at'];
	
    protected $guarded = [ 'id'];

	protected $table = 'student';

	public function inst()
	{
		return $this->belongsTo('App\Models\Course','course_id','id'); 
	}

}

