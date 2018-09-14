
@extends('admin.master')

@section('content')

<section class="content">

 <div class="panel panel-default">
 	<div class="panel-heading">Course List</div>
    <div class="panel-body">


    <table class="table table-bordered">
		<div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

 <form method="POST" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
<div class="form-group">

	<table class="table table-bordered">
		<div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      
                    </span>
                  </div>
                </div>
              </div>
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Description</th>
					<th>NVQ Level</th>
					<th>Actions</th>
					<!-- <th>Modules</th> -->
					
					
				</tr>				
			</thead>
			<tbody>
			@foreach($course as $course)
				<tr>
    			<td>{{$course->id}}</td>
    			<td><b>{{$course->name}}</b></td>
    			<td>{{$course->description}}</td>
    			<td>{{$course->nvq_level}}</td>
    			<!-- <td>{{$course->Modules}}</td> -->

    	<td>
    		<a href="{{url('course/course_view')}}/{{$course->id}}" class="btn-primary btn"><i class="fa fa-eye"></i></a>
    		<a class="edit-modal btn btn-info" href="{{url('course/course_update')}}/{{$course->id}}"><i class="glyphicon glyphicon-edit"></i></a>
        <a class="btn btn-round btn-danger" onclick="return confirm('Are you sure?')" href="{{url('course/course_delete')}}/{{$course->id}}"><i class="fa fa-trash"></i></a>
         
    </td>
    </tr>

			@endforeach
		</tbody>
		</table>
		</div>
		
		<button type="button" class="btn btn-primary pull-left" onClick="history.back()">Back</button>
	</form>
</div>
</div>
</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="course Details"></script>


@stop