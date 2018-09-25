<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Lecturer;
use App\Models\Module;


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

    /**
     * Show the task list for the lecturer.
     *
     * @param  null
     * @return task.task_list.blade.php
     */
    public function taskList()
    {
        $tasks =Task::with('lect','module')->get();//GETING ALL LIST FROM TASK TABLE
        return view('task.task_list',['tasks'=>$tasks]);
    }

    /**
     * Show the task details according to the relevant id.
     *
     * @param  null
     * @return Response
     */
    public function taskView(Request $request)
    {
        
        $task = Task::with('lect','module')->find($request->id);
        return view('task.task_view')->with(['task'=>$task]);
    }


    /**
     * Show the profile for the given user.
     *
     * @param  null
     * @return Response
     */
    public function lecturerSearch()

    {
 
        $search = Task::all();
        if($search1 !== ''){
            $search = $search->where('search1','LIKE', '%' . $search1 . '%');
        }
        
        $search->orderBy('created_at','desc');
        return view('task.task_view')->with(['search'=>$search]);
    }
    

    /**
     * Show the edit blade for the given user.
     *
     * @param  Request
     * @return task.task_update.blade.php
     */
    public function taskEdit(Request $request)
    {

            $modules = Module::whereNull('deleted_at')->get();
            $lecturers = Lecturer::whereNull('deleted_at')->get();
            $task =Task::with('lect','module')->find($request ->id);
            return view('task.task_update',compact('task','modules','lecturers'));

    }

    /**
     * Save the updates of task.
     *
     * @param  Request
     * @return task.task_list.blade.php
     */
    public function taskUpdate(Request $request)
    {
        $this->validate($request,[
                'name'=>'required|min:3|max:255',
                'module'=>'required',
                'sdate'=>'required',
                'ddate'=>'required',
                'inst'=>'required',
                'lecturer'=>'required'
        ]);   

            $task =Task::with('lect','module')->find($request ->id);
            $task->name = $request->name;
            $task->module_id = $request->module;
            $task->startDate = $request->sdate;
            $task->deadline = $request->ddate;
            $task->instructions = $request->inst;
            $task->lec_id = $request->lecturer;
            $task->save();

            return redirect('task/task_list');
    }

    /**
     * Delete the selected task.
     *
     * @param  Request
     * @return task.task_list.blade.php
     */
    public function taskDelete(Request $request)
    {
        $task = Task::find($request->id)->delete();

        return redirect('task/task_list');
    }

}