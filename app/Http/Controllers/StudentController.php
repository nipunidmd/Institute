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
}