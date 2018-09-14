<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Student;
use App\Model\Course;
use DB;

class StudentController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function view()
    {  //Get the list of students from the database table
        //$students = Student::all();      
        $students = Student::with(['student_course'])->get();                 
        return view('student.student_list',compact('students')); 
    }


    public function destroy(Request $request) 
    {
        $student = Student::find($request->id)->delete();
        return redirect('admin/studentlist');
    }

    public function viewedit()
    {
        return view('student.update_student');
    }


    public function edit(Request $request, $id)
    {

     $student = Student::all()->find($request -> id);
     return view('student.update_student', compact('student'));
    }

    public function update(Request $request){
        
        $this->validate($request,[
            'name'=>'required| min:4'
            ]);

        $student = Student::all() -> find($request ->id);
        $student ->id = $request ->id;
        $student ->name = $request ->name;
        $student ->dob = $request ->dob;
        $student ->address = $request ->address;
        $student ->school = $request ->school;
        $student ->nic = $request ->nic;
        $student ->telno = $request ->telno;
        $student ->email = $request ->email;
        $student ->course_id = $request ->course_id;        
        $student ->save();

        return redirect('admin/studentlist');
    }

    // public function search(Request $request){
    //     $student = Student::all()->find($request -> id);
    //     return view('student.student_list', compact('student'));
    // }

    //  public function search(Request $request)
    //  {
    //     $student = DB::table('Student')->where('name','LIKE','%', $request '%')->get();

    //     if($customers){
    //      foreach($students as $key =>$student){
    //        $output.='<tr>'
    //                 '<td>'.$student->id.'</td>'.
    //                 '<td>'.$student->name.'</td>'.
    //                 '<td>'.$student->dob.'</td>'.
    //                 '<td>'.$student->address.'</td>'.
    //                 '<td>'.$student->school.'</td>'.
    //                 '<td>'.$student->nic.'</td>'.
    //                 '<td>'.$student->telno.'</td>'.
    //                 '<td>'.$student->email.'</td>'.
    //                 '<td>'.$student->course_id.'</td>'.
    //                 '</tr>';

    //      }
    //      return Response ($output);
    //  }
    //  }

    
 
// }


//         return view('admin.dashboard');

}

