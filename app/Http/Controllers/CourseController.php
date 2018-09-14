<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Module;
use App\Models\Lecturer;

class CourseController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
  public function courseAdd()
    {
        $lecturers= Lecturer::whereNull('deleted_at')->get();
        return view('course.course_add',compact('lecturers'));

        //return the data to the view
        
    }
     /**
     * save the course details to the database.
     *
     * @param  Request
     * @return course.lists.blade.php view 
     */
    public function courseSave(Request $request)
    {
        // return $request->all();
        //validation
      
        $this->validate($request,[
                'name'=>'required',
                'description'=>'required',
                'nvq_level'=>'required'      
        ]);

        $this->validate($request,[
                'mname'=>'required',
                'content'=>'required'

               
        ]);

        //add new course

        $course = Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'nvq_level' => $request->nvq_level
            
        ]);

        $module = Module::create([
            'name' => $request->mname,
            'content' => $request->content,
            'lec_id' => $request->id,
            'course_id' => $course->id
            // 'course_id' => $request->lastInsertId()
            
        ]);

        //redirect to the course list page
        return redirect('course/course_add');
    }

         
     public function courseList(){

        //MODEL please give me list of students
       
        $course = Course::all();//GETTING ALL LIST FROM INSTITUTE TABLE
        return view('course.course_list',['course'=>$course]);
    }



     /**
     * view the course details.
     *
     * @param  Request
     * @return course.show.blade.php view 
     */
    public function courseView(Request $request)
    {
        $course = Course::find($request->id);
        return view('course.course_view')->with(['course' => $course]);;
    }

     /**
     * display the course detils which are editable.
     *
     * @param  Request
     * @return course.edit.blade.php view 
     */
    public function courseEdit(Request $request)
    {
        $course = Course::find($request->id);
        return view('course.course_edit',compact('course'));

    }


     /**
     * update and save the institute detils to database.
     *
     * @param  Request
     * @return course.lists.blade.php view 
     */
    public function courseUpdate(Request $request)
    {
        $course = Course::find($request->id);
        $course->name=$request->name;
        $course->description=$request->description;
        $course->save();

        return redirect('course/course_list');
    }


     /**
     * delete the institute detils from the database.
     *
     * @param  Request
     * @return student.lists.blade.php view 
     */
    public function courseDelete(Request $request) 
    {
        $course = Course::find($request->id)->delete();
        
        // Session::put('success', 'Your Record Deleted Successfully.');
        return redirect('course/course_list');
    }

}