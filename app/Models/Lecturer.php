<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lecturer extends Model
{
 
 use SoftDeletes;
	//lecturer TABLE
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

	protected $table = 'lecturer';


}