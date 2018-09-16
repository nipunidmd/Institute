<?php
	
namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

	//INSTITUTE TABLE
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

	protected $table = 'course';

	public function student()
	{
		return $this->hasMany('App\Models\Student','course_id', 'id');
	}

}