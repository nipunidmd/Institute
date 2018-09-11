
@extends('admin.master')

@section('css')


  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>


@stop

@section('content')

<section class="content">

<body>


<div class="box-header with-border">
    <h1 class="text-center">Lecturer Registration Form</h1>
</div>

<div class="box-body">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
	<form method = "POST" role= "form"  class="form-horizontal">
		<div class="form-group">
			<input type="hidden" name="_token" value = "{{csrf_token() }}">
			<label for ="" class="control-label required"> Name </label>
				<input type="text" class="form-control" id="name" pattern="[A-Za-z]+" name="name" required>
				@if($errors->has('name'))
	            		<span class="help-block">{{$errors->first('name')}}</span>
	            @endif
    		<br>
			<label for ="" class="control-label required"> National Identicard Number  </label>
			<input type="text" class="form-control" id="nic" name="nic" required>
			@if($errors->has('nic'))
            		<span class="help-block">{{$errors->first('nic')}}</span>
            @endif	
            <br>
			<label for ="" class="control-label required"> Address  </label>
			<input type="text" class="form-control" id="address" name="address"required>
			@if($errors->has('address'))
            		<span class="help-block">{{$errors->first('address')}}</span>
            @endif
            <br>
			<label for ="" class="control-label required"> Mobile No </label>
			<input type="text" class="form-control" id="Mobile" name="Mobile" required>@if($errors->has('Mobile'))
            		<span class="help-block">{{$errors->first('Mobile')}}</span>
            @endif
            <br>
			<label for ="">  Email </label>
			<input type="text" class="form-control" id="Email" name="Email">
			@if($errors->has('Email'))
            		<span class="help-block">{{$errors->first('Email')}}</span>
            @endif
            <br>
			<label for ="" class="control-label required"> Qulification  </label>
			<input type="text" class="form-control" id="qulifications" name="qulifications">
			@if($errors->has('qulifications'))
				<span class="help-block">{{$errors->first('qulifications')}}</span>
			@endif
			<br>
		<label for ="" class="control-label required"> Date of Birth  </label>
		<input class="date form-control" type="text" id="date" name="date">

		<script type="text/javascript">
		    $('.date').datepicker({  
			format: 'mm-dd-yyyy'
		    });  		
		</script>
		<br>
		<button type="submit" class="btn btn-primary"> Submit</button>
	</form>
</div> <!--END OF box-body -->
</div> 

<!-- END OF box-->
</body>
</section>

@stop