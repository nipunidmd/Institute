@extends('admin.master')



@section('css')

@stop

@section('content')

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
      <form method="POST" role="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Student Registration<small>Add new student</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

				
		
		
			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Name:</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" class="form-control" pattern="[A-Za-z]+" id="name" name="name" required>
			</div>
				@if($errors->has('name'))
                		<span class="help-block">{{$errors->first('name')}}</span>
                @endif
			</div>
			 <br>
                      <br>

			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Date of birth:</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="date" class="form-control" id="dob" name="dob" required></div>
				@if($errors->has('dob'))
                		<span class="help-block">{{$errors->first('dob')}}</span>
                @endif
			</div>
			 <br>
                      <br>

			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Address:</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" class="form-control" id="address" name="address"  required></div>
				@if($errors->has('address'))
                		<span class="help-block">{{$errors->first('address')}}</span>
                @endif
			</div>
			 <br>
                      <br>

			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">School:</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" class="form-control" id="school" name="school" required></div>
				@if($errors->has('school'))
                		<span class="help-block">{{$errors->first('school')}}</span>
                @endif
			</div>
			 <br>
                      <br>

			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">NIC:</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" class="form-control" id="nic" name="nic" maxlength=12 pattern="[v0-9]+" required></div>
				@if($errors->has('nic'))
                		<span class="help-block">{{$errors->first('nic')}}</span>
                @endif
			</div>
			 <br>
                      <br>

			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Mobile No:</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="number" class="form-control" id="mobno" name="telno" required></div>
				@if($errors->has('telno'))
                		<span class="help-block">{{$errors->first('telno')}}</span>
                @endif
			</div>
			 <br>
                      <br>

			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Email:</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" class="form-control" id="email" name="email" required></div>
				@if($errors->has('email'))
                		<span class="help-block">{{$errors->first('email')}}</span>
                @endif
			</div>
			 <br>
                      <br>

			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Course:</label>
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
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" onClick="history.back()">Cancel</button>
						              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
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