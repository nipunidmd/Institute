@extends('admin.master')


@section('content')

<section class="content">

<body>


 <div class="panel panel-default">
    <div class="panel-heading">Update Lecturer</div>
    <div class="panel-body">

<div class="box-body">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
	<form method = "POST" role= "form"  class="form-horizontal">

		<div class="form-group">

			<input type="hidden" name="_token" value = "{{csrf_token() }}"> 
			
			<label for ="" class="control-label"> Name </label>
				<input type="text" class="form-control" id="name"  name="name" value="{{$lecturer->name}}">
				<br>

			<label for ="" class="control-label"> National Identity Card Number  </label>
				<input type="text" class="form-control" id="nic" name="nic" value="{{$lecturer->nic}}">	
            	<br>

			<label for ="" class="control-label"> Address  </label>
				<input type="text" class="form-control" id="address" name="address" value="{{$lecturer->address}}">
				<br>

			<label for ="" class="control-label"> Mobile No </label>
				<input type="text" class="form-control" id="Mobile" name="Mobile" value="{{$lecturer->nic}}">
            	<br>

			<label for =""> Email </label>
				<input type="text" class="form-control" id="Email" name="Email" value="{{$lecturer->email}}">
				<br>

			<label for ="" class="control-label"> Qulification  </label>
				<input type="text" class="form-control" id="qulifications" name="qulifications" value="{{$lecturer->qualification}}">
				<br>

			<label for ="" class="control-label"> Date of Birth  </label>
				<input class="date form-control" type="text" id="date" name="date" value="{{$lecturer->dob}}">

					<script type="text/javascript">
		    			$('.date').datepicker({  
						format: 'yyyy-mm-dd'
		    			});  		
					</script>
				<br>

		<button type="submit" class="btn btn-primary"> Submit</button>
		<a href="http://localhost/Institute/public/lecturer/lecturer_list" class="btn btn-primary pull-right">List</a>
		<button type="cancel" class="btn btn-primary" onClick="history.back()">Back</button>
	</div>
	</form>
 
</div> <!--End of col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3-->


</div><!--END OF box-body -->
</div><!--End of pannel Body-->
</div><!--End of pannel-->
</body>
</section>

@stop