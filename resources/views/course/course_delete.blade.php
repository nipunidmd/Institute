@extends('admin.master')

@section('content')


<section class="content">
	<div class="panel panel-default">
    	<div class="panel-heading">Lecture Details</div>
    	<div class="panel-body">
  			<div class="box-body">
	 			<div class="col-sm-6">
					<h4>Course ID : {{$course->id}}</h4>
					<h4>Course Name : {{$course->name}}</h4>
					<h4>Course Description : {{$course->description}}</h4>
					<h4>NVQ Level : {{$course->nvq_leve}}</h4>
					              		 <button class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('lecturer/lecturer_delete')}}/{{$lecturer->id}}"><i class="fa fa-trash"></i>DELETE</a></td> ></button>
    			</div> <!--End of col-sm-6-->          
    		</div><!--End of box-body-->
    	</div><!--End of panel-body-->
	</div><!--End of panel-default-->
</section>
@stop