<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
 
 use SoftDeletes;
	//Task TABLE
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
	protected $table = 'task';

	public function lect()
	{
		return $this->belongsTo('App\Models\Lecturer','lec_id','id'); 
	}

	public function module()
	{
		return $this->belongsTo('App\Models\Module','module_id','id'); 
	}


}