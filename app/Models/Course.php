<?php
	
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

	//INSTITUTE TABLE
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

	protected $table = 'course';


}