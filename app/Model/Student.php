<?php 
namespace App\Model;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

class Student extends Model{
	protected $table = 'student';

	public function student_course()
	{
		//if you belongs ton1 param is forrign key 2nd primary key

		return $this->belongsTo('App\Model\Course','course_id', 'id');
	}
}


