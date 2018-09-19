@extends('admin.master')

@section('content')

<section class="content">

<body>


 <div class="panel panel-default">
    <div class="panel-heading">Course Details</div>
    <div class="panel-body">

	<div class="box-body">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
	<form method = "POST" role= "form"  class="form-horizontal">

		<div class="form-group">

			<input type="hidden" name="_token" value = "{{csrf_token() }}"> 
			
			<label for ="" class="control-label"> Name </label>
				<input type="text" class="form-control" id="name"  name="name" value="{{$course->name}}">
				<br>

			<label for ="" class="control-label"> Description </label>
				<input type="text" class="form-control" id="nic" name="nic" value="{{$course->description}}">	
            	<br>

			<label for ="" class="control-label"> NVQ Level  </label>
				
                          <select class="form-control col-md-6 col-sm-6 col-xs-12 name="nvq_level">
                          <option value="Level 1">Level 1</option>
                          <option value="Level 2">Level 2</option>
                          <option value="Level 3">Level 3</option>
                          <option value="Level 4">Level 4</option>
                          <option value="Level 5">Level 5</option>
                          </select>
				<br>

		<a href="{{url('/course/course_list')}}" class="btn btn-primary pull-left"> Back</a>
	</div>
	</form>
 
</div> 

</div><!--END OF box-body -->
</div><!--End of pannel Body-->
</div><!--End of pannel-->
</body>
</section>

@stop