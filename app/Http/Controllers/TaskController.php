<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TaskController extends Controller
{

 public function addtask(Request $request)
    {   	
    		 return view('task.add_task');
    }

 public function savetask(Request $request)
 {
 		//Add new task
    	$task = Task::create([
            'id' => $request->id,
            'name'=>$request->name,
            'startDate'=>$request->startDate,
            'deadline'=>$request->deadline,
            'module_id'=>$request->module_id,
            'lec_id'=>$request->lec_id            
        ]);
 }




}