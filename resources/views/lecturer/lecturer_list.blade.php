
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
                  	
                    <h2>Lecturer List</h2>
                    
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
					<td><b>{{$lecturer->name}}</b></td>
					<!-- <td>{{$lecturer->nic}}</td> -->
					<!-- <td>{{$lecturer->address}}</td> -->
					<td>{{$lecturer->mobileNo}}</td>
					<td>{{$lecturer->email}}</td>
					<td><b>{{$lecturer->qualification}}</b></td>
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
	
</div>
</div>
</div>
</div><!--End of panel-body-->
</body><!--End of panel-default-->
</section>
@stop