
@extends('admin.master')
@section('css')



  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>


@stop

@section('content')

<section class="content">

<body>


	<div class="panel panel-default">
    	<div class="panel-heading">Lecture Registration Form</div>
 
	<div class="panel-body">

	<div class="box-body">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
			<form method = "POST" role= "form"  class="form-horizontal">
				<div class="form-group">
					<input type="hidden" name="_token" value = "{{csrf_token() }}">


					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12" pattern="[A-Za-z]+">
                        </div>
                     
						<!--check that name -->
						@if($errors->has('name'))
	            			<span class="help-block">{{$errors->first('name')}}</span>
	            		@endif
	            	 </div>	
    				<br>


					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nic"> National identity card number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nic" name="nic" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
						<!--check that nic-->
						@if($errors->has('nic'))
            				<span class="help-block">{{$errors->first('nic')}}</span>
            			@endif
            			</div>	
            		<br>

					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address"> Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="address" name="address" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
					<!--check that address-->
						@if($errors->has('address'))
            				<span class="help-block">{{$errors->first('address')}}</span>
            			@endif
            		</div>
            		<br>


					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Mobile"> Mobile Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Mobile" name="Mobile" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
					<!--check that mobile number-->
						@if($errors->has('Mobile'))
            				<span class="help-block">{{$errors->first('Mobile')}}</span>
            			@endif
            		</div>	
            		<br>

					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Email"> Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Email" name="Email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
					<!--check that email-->
						@if($errors->has('Email'))
            				<span class="help-block">{{$errors->first('Email')}}</span>
            			@endif
            		</div>
            		<br>


					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="qualifications"> Qualification <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="qualifications" name="qualifications" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
					<!--check that qualification -->
						@if($errors->has('qualifications'))
							<span class="help-block">{{$errors->first('qualifications')}}</span>
						@endif
					</div>	
					<br>

					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date"> Date of Birth <span class="required">*</span>
                        </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
								<input class="date form-control" type="text" id="date" name="date">
								<script type="text/javascript">
		    					$('.date').datepicker({  
								format: 'yyyy-mm-dd'
		    					});  		
								</script>
							</div>
						</div>	
					<br>

					<button type="submit" class="btn btn-primary pull-right">Submit</button>
					<a href="http://localhost/Institute/public/lecturer/lecturer_list" class="btn btn-primary pull-right">List</a>
			</form>
		</div> <!--End of col-->
	</div> <!--END OF box-body -->
	</div> <!--End of panel-body-->s
	</div><!--End of panel panel-default-->
</body>
</section>

@stop