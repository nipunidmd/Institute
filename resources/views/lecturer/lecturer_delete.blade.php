@extends('admin.master')

@section('content')


<section class="content">
	<div class="panel panel-default">
    	<div class="panel-heading">Lecture Details</div>
    	<div class="panel-body">
  			<div class="box-body">
	 			<div class="col-sm-6">
					<h4>Lecturer Registration Number : {{$lecturer->id}}</h4>
					<h4>Lecturer Name : {{$lecturer->name}}</h4>
					<h4>Lecturer National Identity Card : {{$lecturer->nic}}</h4>
					<h4>Lecturer Address No : {{$lecturer->address}}</h4>
					<h4>Lecturer Mobile Number : {{$lecturer->mobileNo}}</h4>
					<h4>Lecturer Email : {{$lecturer->email}}</h4>
					<h4>Lecturer Qualifications : {{$lecturer->qualification}}</h4>
					<h4>Lecturer Date of Birth : {{$lecturer->dob}}</h4>
              		 <button class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('lecturer/lecturer_delete')}}/{{$lecturer->id}}"><i class="fa fa-trash"></i>DELETE</a></td> ></button>
    			</div> <!--End of col-sm-6-->          
    		</div><!--End of box-body-->
    	</div><!--End of panel-body-->
	</div><!--End of panel-default-->
</section>
@stop