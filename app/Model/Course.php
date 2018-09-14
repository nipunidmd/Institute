<?php 
namespace App\Model;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

class Course extends Model{
	
	protected $table = 'course';

	public function student()
	{
		return $this->hasMany('App\Model\Student','course_id', 'id');
	}

}


