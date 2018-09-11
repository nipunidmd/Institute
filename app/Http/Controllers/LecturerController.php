<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Lecturer;

/**
 * 
 */
class LecturerController extends Controller
{
	
	/**
     * Show the profile for the given user.
     *
     * @param  null
     * @return Response
     */
	public function lecturerAdd()
	{
		
		return view ('Lecturer.lecturer_add');
		
	}



	/**
     * Show the profile for the given user.
     *
     * @param  null
     * @return Response
     */
	public function lecturerSave(Request $request)
	{
		
		$this->validate($request,[
               
                'name'=>'required|min:3|max:255',
                'nic'=>'required|regex:/[0-9]{9}V/',
                'address'=>'required|min:3|max:255',
                'mobno'=>'required |regex:/0[0-9]{9}/',
                'email'=>'required|regex:/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}/',	
                'qulifications'=>'required| min:3|max:255',
                
                
                
               
               
                
        ]);

	$student = Student::create([
            'name' => $request->name,
            'nic' => $request->nic,
            'address' => $request->address,
            'mobileNo' => $request->Mobile,
            'email' => $request->Email,
            'qualification' => $request->qulifications,
            'dob'=> $request->date
            
        ]);


		// dd($requset->all());

			// return view ('Lecturer.lecturer_add');
	}


	/**
     * Show the profile for the given user.
     *
     * @param  null
     * @return Response
     */
	public function lecturerViewHome()

	{
		# code...
	}
	


/**
     * Show the profile for the given user.
     *
     * @param  null
     * @return Response
     */
	public function lecturerList()

	{
		# code...
	}


	/**
     * Show the profile for the given user.
     *
     * @param  null
     * @return Response
     */
	public function lecturerView()

	{
		# code...
	}


	/**
     * Show the profile for the given user.
     *
     * @param  null
     * @return Response
     */
	public function lecturerSearch()

	{
		# code...
	}


/**
     * Show the profile for the given user.
     *
     * @param  null
     * @return Response
     */
	public function lecturerUpdate()

	{
		# code...
	}



	/**
     * Show the profile for the given user.
     *
     * @param  null
     * @return Response
     */
	public function lecturerDelete()

	{
		# code...
	}
}
