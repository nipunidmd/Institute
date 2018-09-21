@extends('admin.master')

@section('css')
	

@stop

@section('content')



<div class="col-md-20 col-sm-20 col-xs-20">
     <div class="x_panel">
         <div class="x_title">
			<h1 class="text-center">Task List</h1>
 				<form method="POST" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
					<div class="form-group">

						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Task No</th>
									<th>Task Name</th>
									<th>Module</th>
									<th>Start date</th>
									<th>Deadline</th>	
									<th>Instructions</th>
									<th>Assigned by</th>
									<th>Actions</th>			
								</tr>				
							</thead>
							<tbody>
							@foreach($tasks as $task)
								<tr >
								    <td>{{$task->id}}</td>
								    <td><b>{{$task->name}}</b></td>
								    @if(count($task->module) > 0)
											<td>{{$task->module->name}}</td>
									@else
											<td>null</td>
									@endif 
								    <td>{{$task->startDate}}</td>
								    <td>{{$task->deadline}}</td>
								    <td><b>{{$task->instructions}}</b></td>
								    @if(count($task->lect) > 0)
											<td>{{$task->lect->name}}</td>
									@else
											<td>null</td>
									@endif 
								    <td>

										<a href="{{url('task/task_view')}}/{{$task->id}}" class="btn-primary btn"><i class="fa fa-eye"></i></a>
										<a class="edit-modal btn btn-info" href="{{url('task/		task_update')}}/{{$task->id}}"><i class="glyphicon glyphicon-edit"></i></a>
				        			<a class="btn btn-round btn-danger" onclick="return confirm('Are you sure?')" href="{{url('task/task_delete')}}/{{$task->id}}"><i class="fa fa-trash"></i></a>		


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
 		<script src="student Details"></script>


@stop
