@extends('admin.master')



@section('css')
<!-- Bootstrap -->
    <!-- <link href="public/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Font Awesome -->
    <!-- <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- NProgress -->
    <!-- <link href="../vendors/nprogress/nprogress.css" rel="stylesheet"> -->
    
    <!-- Custom Theme Style -->
    <!-- <link href="../build/css/custom.min.css" rel="stylesheet"> -->
@stop

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Student Details <small></small></h2>                    
                    <div class="clearfix">
                    </div>

                  </div>
                  <div class="x_content">
                    <br>
                    <form method="POST" action="{{ url('student/student_update')}}/{{$student->id}}" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                    	<input type="hidden" name="_token" value="{{ csrf_token() }}">

                    	 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Student ID
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" id="id" name="id" value="{{$student->id}}" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Name 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  class="form-control col-md-7 col-xs-12" id="name" name="name" value="{{$student->name}}">
                          
                        </div>
                        
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Date of Birth 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="date-picker form-control col-md-7 col-xs-12" id="dob" name="dob" value="{{$student->dob}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Address
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" id="address" name="address" value="{{$student->address}}">
                        </div>
                      </div>                    
                       
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">School 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" id="school" name="school" value="{{$student->school}}">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">NIC
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" id="nic" name="nic" value="{{$student->nic}}">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telephone
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12"  id="telno" name="telno" value="{{$student->telno}}">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12"  id="email" name="email" value="{{$student->email}}">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Course ID
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12"  id="course_id" name="course_id" value="{{$student->course_id}}">
                      </div>
                      <br>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-6">
                           <button type="submit" class="btn btn-primary" >Submit</button>       <button class="btn btn-primary" type="reset">Reset</button>
                            <button class="btn btn-primary" type="button" onClick="history.back()"> Cancel </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="student Details"></script>







@stop