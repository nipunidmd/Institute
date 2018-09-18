@extends('admin.master')


@section('content')

<section class="content">

<body>


<!-- page content -->


        <div class="title_center" role="main">
          
            <div class="page-title">
             <div class="title_center">
                <div class="col-md-6 col-sm-6 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    
                  </div><!--End of input group-->
                </div><!--End of col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search-->
              </div><!--End of title right-->
            </div><!--End of page title-->
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Student Registration</h2>
                    
                    <div class="clearfix"></div>
                  </div><!--End of X-title-->
                  <div class="x_content">
                    <br>
                    <form id="demo-form2" method = "POST" role= "form" data-parsley-validate class="form-horizontal form-label-left">
                        <input type="hidden" name="_token" value = "{{csrf_token() }}">
				
		
		
			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Name<span class="required">*</span></label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" class="form-control" pattern="[A-Za-z]+" required="required" id="name" name="name" placeholder="Ex: Tharindu Pathirana" required>
			</div>
				@if($errors->has('name'))
                		<span class="help-block">{{$errors->first('name')}}</span>
                @endif
			</div>
			 <br>
                      <br>

			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Date of birth<span class="required">*</span></label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="date" class="form-control" id="dob" name="dob" placeholder="Select your birth date" required></div>
				@if($errors->has('dob'))
                		<span class="help-block">{{$errors->first('dob')}}</span>
                @endif
			</div>
			 <br>
                      <br>

			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Address<span class="required">*</span></label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" class="form-control" id="address" name="address" placeholder="Ex: 12,Temple Lane,Kotte" required></div>
				@if($errors->has('address'))
                		<span class="help-block">{{$errors->first('address')}}</span>
                @endif
			</div>
			 <br>
                      <br>

			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">School<span class="required">*</span></label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" class="form-control" id="school" name="school" placeholder="Ex: Colombo Central College" required></div>
				@if($errors->has('school'))
                		<span class="help-block">{{$errors->first('school')}}</span>
                @endif
			</div>
			 <br>
             <br>

			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">NIC<span class="required">*</span></label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" class="form-control" id="nic" name="nic" maxlength=12 pattern="[v0-9]+" placeholder="Ex: xxxxxxxxx v" required></div>
				@if($errors->has('nic'))
                		<span class="help-block">{{$errors->first('nic')}}</span>
                @endif
			</div>
			 <br>
             <br>

			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Mobile No<span class="required">*</span></label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="number" class="form-control" id="mobno" name="telno" placeholder="Ex: 07x xxxxxxx" required></div>
				@if($errors->has('telno'))
                		<span class="help-block">{{$errors->first('telno')}}</span>
                @endif
			</div>
			 <br>
             <br>

			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Email<span class="required">*</span></label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" class="form-control" id="email" name="email" placeholder="Ex: xxx@xxx.xxx" required></div>
				@if($errors->has('email'))
                		<span class="help-block">{{$errors->first('email')}}</span>
                @endif
			</div>
			 <br>
             <br>

			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Course<span class="required">*</span></label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<select class="form-control" name='course'>					
					@foreach($courses as $key => $course)
						<option value="{{ $course->id}}">{{ $course->name }} </option>
					@endforeach
				</select></div>
			</div>
			 <br>
                      <br>
			
			<div class="ln_solid"></div>
                      <div class="form-group">
                         <button type="submit" class="btn btn-primary pull-right">Submit</button>
          				<a href="http://localhost:8080/Institute/public/student/student_list" class="btn btn-primary pull-right">List</a>
                        </div>
                      </div>
			
		</form>
                  </div>
                </div>
              </form>
                </div>
              </div>
            </div>

@stop