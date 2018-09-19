
@extends('admin.master')

@section('content')

<section class="content">

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
                  	
                    <h2>Course List</h2>
                    
                    <div class="clearfix"></div>
                  </div><!--End of X-title-->
                  <div class="x_content">
                    <br>
                    <form id="demo-form2" method = "POST" role= "form" data-parsley-validate class="form-horizontal form-label-left">
                        <input type="hidden" name="_token" value = "{{csrf_token() }}">

	<table class="table table-bordered">
		<div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" id="search" name="search" placeholder="Search for...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button" onclick = "{{route('student.search')}}">Go!</button>>
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
					
				</tr>				
			</thead>
			
			<tbody>
			@foreach($course as $course)
				<tr>
    			<td>{{$course->id}}</td>
    			<td><b>{{$course->name}}</b></td>
    			<td>{{$course->description}}</td>
    			<td><b>{{$course->nvq_level}}</b></td>
    			

    		<td>

    			<a href="{{url('course/course_view')}}/{{$course->id}}" class="btn-dark btn"><i class="fa fa-eye"></i></a>
    			<a class="edit-dark btn btn-dark" href="{{url('course/course_update')}}/{{$course->id}}"><i class="glyphicon glyphicon-edit"></i></a>
        		<a class="btn btn btn-dark" onclick="return confirm('Are you sure?')" href="{{url('course/course_delete')}}/{{$course->id}}"><i class="fa fa-trash"></i></a>
          
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
</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="course Details"></script>


@stop