<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Student;
use App\Models\Lecturer;
use Sentinel;
use Activation;


class LoginController extends Controller
{   
    /**
     * Show create student login view to admin.
     *
     * @param  null
     * @return login/createstulogin.blade.php
     */
    public function createStuLogin()
    {
        $students = Student::whereNull('deleted_at')->get();
        return view('login/createstulogin',compact('students'));
    }

    /**
     * Save the student login.
     *
     * @param  Request
     * @return Response
     */
    public function saveStuLogin(Request $request)
    { 
            $this->validate($request,[
                'sid'=>'required',
                'username'=>'required',
                'email'=>'required|regex:/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}/',
                'password'=>'required',
            ]);    

            $credentials = [
                    'email'     => $request->email,
                    'username'=>$request->username,
                    'password'  => $request->password,
                    'uid' => $request->sid
            ];
            $user = Sentinel::registerAndActivate($credentials);    
            return view('login/createstulogin');
    }

    /**
     * Show create lecturer login view to admin.
     *
     * @param  null
     * @return login/createleclogin.blade.php
     */
    public function createLecLogin()
    {   
        $lecturers = Lecturer::whereNull('deleted_at')->get();
        return view('login/createleclogin',compact('lecturers'));
    }

    /**
     * Save the lecturer login.
     *
     * @param  Request
     * @return Response
     */
    public function saveLecLogin(Request $request)
    { 
            $this->validate($request,[
                'lid'=>'required',
                'username'=>'required',
                'email'=>'required|regex:/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}/',
                'password'=>'required',
            ]);    

            $credentials = [
                    'email'     => $request->email,
                    'username'=>$request->username,
                    'password'  => $request->password,
                    'uid' => $request->lid
            ];
            $user = Sentinel::registerAndActivate($credentials);    
            return view('login/createleclogin');
    }

}