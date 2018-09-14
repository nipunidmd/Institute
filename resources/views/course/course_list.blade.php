@extends('admin.master')



@section('css')
	<!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

@stop

@section('content')

<script>
  
 </script>

<div class="col-md-20 col-sm-20 col-xs-20">
                <div class="x_panel">
                  <div class="x_title">
<h1 class="text-center">Course List</h1>
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

    <td><a class="edit-modal btn btn-info" href="{{url('course/course_show'.$course->id)}}">
        <i class="glyphicon glyphicon-edit"></i></a>
        <a class="btn btn-round btn-danger" onclick="return confirm('Are you sure?')" href="{{url('course/course_delete')}}/{{$course->id}}"><i class="fa fa-trash"></i></a>
    </td>
    </tr>

			@endforeach
		</tbody>
		</table>
		</div>
		
		<button type="button" class="btn btn-primary pull-right" onClick="history.back()">Back</button>
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