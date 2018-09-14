<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{	
	//STUDENT TABLE
	use SoftDeletes;

	protected $dates=['deleted_at'];
	
    protected $guarded = [ 'id'];

	protected $table = 'student';

		public function student_course()
	{
		//if you belongs ton1 param is forrign key 2nd primary key

		return $this->belongsTo('App\Models\Course','course_id', 'id');
	}
}

