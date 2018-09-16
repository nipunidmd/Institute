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

<script type= "text/JavaScript">
	$('#search').on('keyup',function(){
		$value =$(this).val();
		$.ajax({
			type:'get',
			url :'{{URL::to('search')}}',
			data : {'search':$value},
			success:function(data){
				$('tbody').html(data);
			}
		});
	})
  
 </script>

<div class="col-md-20 col-sm-20 col-xs-20">
                <div class="x_panel">
                  <div class="x_title">
<h1 class="text-center">Student List</h1>
 <form method="POST" action="{{ route('student.update') }}" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
<div class="form-group">

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
					<th>Date of Birth</th>
					<th>Address</th>
					<th>School</th>
					<th>NIC</th>
					<th>Telephone No</th>
					<th>E-mail</th>
					<th>Course Name</th>
					
									
				</tr>				
			</thead>
			<tbody>
			@foreach($students as $student)
	<tr >
    <td>{{$student->id}}</td>
    <td><b>{{$student->name}}</b></td>
    <td>{{$student->dob}}</td>
    <td>{{$student->address}}</td>
    <td>{{$student->school}}</td>
    <td><b>{{$student->nic}}</b></td>
    <td>{{$student->telno}}</td>
    <td>{{$student->email}}</td>
    <td>{{$student->student_course->name }}</td>
    <td><a class="btn btn-dark" href="{{url('admin/editstudent/'.$student->id)}}">
        <i class="glyphicon glyphicon-edit "></i></a>
        <a class="btn btn-dark" onclick="return confirm('Are you sure?')" href="{{url('student/delete')}}/{{$student->id}}"><i class="fa fa-trash"></i></a>
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
 		<script src="student Details"></script>

 		
		
		
		
	



@stop



