<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lecturer;

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
		
		return view ('lecturer/lecturer_add');
		
	}



	/**
     * Show the profile for the given user.
     *
     * @param  null
     * @return Response
     */
	public function lecturerSave(Request $request)
	{
		
		// $this->validate($request,[
               
  //               'name'=>'required|min:3|max:255',
  //               // 'nic'=>'required',
  //               // 'address'=>'required|min:3|max:255',
  //               // 'mobno'=>'required |regex:/0[0-9]{10}/',
  //               // 'email'=>'required|regex:/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}/',	
  //               // 'qualifications'=>'required| min:3|max:255'     
                          
  //       ]);

	$lecturer = Lecturer::create([
            'name' => $request->name,
            'nic' => $request->nic,
            'address' => $request->address,
            'mobileNo' => $request->Mobile,
            'email' => $request->Email,
            'qualification' => $request->qualifications,
            'dob'=>  date("Y-m-d", strtotime($request->date))
            
        ]);
	


            //return ($request->all());

			 return view ('lecturer.lecturer_add');
	}


	/**
     * Show the profile for the given user.
     *
     * @param  null
     * @return Response
     */
	public function lecturerViewHome()

	{
		return view ('lecturer/lecturer_home');
	}
	


/**
     * Show the profile for the given user.
     *
     * @param  null
     * @return Response
     */
	public function lecturerList()

	{
	 //MODEL list of lecturer
       
        $lecturer = Lecturer::all();//GETING ALL LIST FROM lecture TABLE
        return view('lecturer.lecturer_list',['lecturer'=>$lecturer]);
	}


	/**
     * Show the profile for the given user.
     *
     * @param  null
     * @return Response
     */
	public function lecturerView(Request $request)

	{
		
		// $btnRqst = $request->view;
		//show the lecturer details according to the relevant id
        $lecturer = Lecturer::all()->find($request->id);
        return view('lecturer.lecturer_view')->with(['lecturer'=>$lecturer]);
        // 'btn'=> $btnRqst

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
	public function lecturerEdit(Request $request){


        	$lecturer =Lecturer::all()->find($request ->id);
			return view('lecturer.lecturer_update',compact('lecturer'));

		}
/**
     * Show the profile for the given user.
     *
     * @param  null
     * @return Response
     */
	public function lecturerUpdate(Request $request){


		// return $request->all();
		
		$lecturer =Lecturer::all()->find($request ->id);
			$lecturer->name = $request->name;
            $lecturer->nic = $request->nic;
            $lecturer->address = $request->address;
            $lecturer->mobileNo = $request->Mobile;
            $lecturer->email = $request->Email;
            $lecturer->qualification = $request->qualifications;
            $lecturer->dob= date("Y-m-d", strtotime($request->date));
            $lecturer->save();


            return redirect('lecturer/lecturer_list');
		
	}



	/**
     * Show the profile for the given user.
     *
     * @param  null
     * @return Response
     */
	public function lecturerDelete(Request $request)

	{
		$lecturer = Lecturer::find($request->id)->delete();

		return redirect('lecturer/lecturer_list');
	}
}
