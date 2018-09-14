
@extends('admin.master')

@section('content')

<section class="content">

 <div class="panel panel-default">
 	<div class="panel-heading">Lecturer List</div>
    <div class="panel-body">


    <table class="table table-bordered">
		<div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">

                    <input type="text" class="form-control" id="search" name="search" placeholder="Search for...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button" onclick = "{{route('student.search')}}">Go!</button>>

                    <input type="text" class="form-control" placeholder="Search...">
                     <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Search</button>

                    </span>
             
                  </div><!--End of title-right-->
                </div><!--End of col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search-->
              </div><!--End of nput-group-->
 
			<thead>
				<tr>
					<th width="5%">ID</th>
					<th>Name</th>
					<th>Mobile No</th>
					<th>Email</th>
					<th>Qualification</th>
					<th>Actions</th>
				</tr>
			</thead>

			<tbody>

		@foreach($lecturer as $lecturer)		
				<tr>
					<td>{{$lecturer->id}}</td>
					<td>{{$lecturer->name}}</td>
					<!-- <td>{{$lecturer->nic}}</td> -->
					<!-- <td>{{$lecturer->address}}</td> -->
					<td>{{$lecturer->mobileNo}}</td>
					<td>{{$lecturer->email}}</td>
					<td>{{$lecturer->qualification}}</td>
					<!-- <td>{{$lecturer->dob}}</td> -->

					<td>
						<a href="{{url('lecturer/lecturer_view')}}/{{$lecturer->id}}" class="btn-primary btn"><i class="fa fa-eye"></i></a>
						<a class="edit-modal btn btn-info" href="{{url('lecturer/		lecturer_update')}}/{{$lecturer->id}}"><i class="glyphicon glyphicon-edit"></i></a>
        			<a class="btn btn-round btn-danger" onclick="return confirm('Are you sure?')" href="{{url('lecturer/lecturer_delete')}}/{{$lecturer->id}}"><i class="fa fa-trash"></i></a>		

					</td>
				</tr>
		@endforeach

			</tbody>
		</table>
		<br>

		<button type="button" class="btn btn-primary pull-left" onClick="history.back()">Back</button>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="lecturer Details"></script>
	

</div><!--End of panel-body-->
</body><!--End of panel-default-->
</section>
@stop