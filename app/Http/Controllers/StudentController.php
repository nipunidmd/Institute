<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class StudentController extends Controller
{
    /**
     * Show student registration to admin.
     *
     * @param  null
     * @return student.add_student.blade.php
     */
    public function studentAdd()
    {
         $courses = Course::whereNull('deleted_at')
            ->get();
        return view('student.student_add',compact('courses'));
    }


    /**
     * Save student registration.
     *
     * @param  Request
     * @return student.add_student.blade.php
     */
    public function studentSave(Request $request)
    {
        //validation
        
        $this->validate($request,[
                'name'=>'required|min:3|max:255|regex:/[A-Za-z0-9. _%+]/',
                'dob'=>'required',
                'address'=>'required',
                'school'=>'required',
                'nic'=>'required|regex:/[0-9]{9}v/',
                'telno'=>'required |regex:/[0-9]{10}/',
                'email'=>'required|regex:/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}/',
                'course'=>'required',
        ]);
        //add new student
        $student = Student::create([
            'name' => $request->name,
            'dob'=>$request->dob,
            'address' => $request->address,
            'school' => $request->school,
            'nic' => $request->nic,
            'telno' => $request->telno,
            'email' => $request->email, 
            'course_id'=>$request->course,
        ]);

        //redirect to the student list page
        return redirect('student/student_add');
    }


    public function studentlist()
    {  //Get the list of students from the database table
        // $students = Student::all();
        
        $students = Student::with(['student_course'])->get();                 
        return view('student.student_list',compact('students')); 
    }


    public function studentDelete(Request $request) 
    {
        $student = Student::find($request->id)->delete();

        return redirect('/student/student_list');

        
    }

   


    public function studentUpdate(Request $request, $id)
    {

     $student = Student::all()->find($request -> id);
     return view('student.update_student', compact('student'));
    }

    public function studentSaveUpdate(Request $request){
        
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


        return redirect('/student/student_list');



    }

    // public function search(Request $request){
    //     $student = Student::all()->find($request -> id);
    //     return view('student.student_list', compact('student'));
    // }

     public function search(Request $request)
     {
        
        // $student = DB::table('Student')->where('name','LIKE','%', $request '%')->get();         
        //  foreach($students as $key =>$student){
        //    $output.='<tr>'
        //             '<td>'.$student->id.'</td>'.
        //             '<td>'.$student->name.'</td>'.
        //             '<td>'.$student->dob.'</td>'.
        //             '<td>'.$student->address.'</td>'.
        //             '<td>'.$student->school.'</td>'.
        //             '<td>'.$student->nic.'</td>'.
        //             '<td>'.$student->telno.'</td>'.
        //             '<td>'.$student->email.'</td>'.
        //             '<td>'.$student->course_id.'</td>'.
        //             '</tr>';
        //  }
        //  return Response ($output);
     
     // }
     }


         
 }


    
 



    
 
// }
//         return view('admin.dashboard');
//}
    



