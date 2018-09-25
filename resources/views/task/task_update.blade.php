@extends('admin.master')


@section('content')

<section class="content">
	<body>
		<div class="panel panel-default">
    		<div class="panel-heading">Update Task</div>
    			<div class="panel-body">
					<div class="box-body">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
							<form method = "POST" role= "form"  class="form-horizontal">
							<div class="form-group">

							<input type="hidden" name="_token" value = "{{csrf_token() }}"> 
							

							<label for ="" class="control-label">Task Name</label>
								<input type="text" class="form-control" id="name" name="name" value="{{$task->name}}">
								@if($errors->has('name'))
                				<span class="help-block">{{$errors->first('name')}}</span>
                				@endif	
				            <br>

				            <div class="form-group">
							<label for="">Module:</label>
							<select class="form-control" name='module'>					
								@foreach($modules as $module)
									@if($module->id == $task->module_id)
									<option value="{{ $module->id}}" selected>{{$module->name}}</option>
									@else
									<option value="{{ $module->id}}"> {{$module->name}} </option>
									@endif
								@endforeach
							</select>
							</div>


							<label for ="" class="control-label"> Start date </label>
								<input type="date" class="form-control" id="sdate" name="sdate" value="{{$task->startDate}}">
								@if($errors->has('sdate'))
                				<span class="help-block">{{$errors->first('sdate')}}</span>
                				@endif
				            <br>

							<label for =""> Deadline </label>
								<input type="date" class="form-control" id="ddate" name="ddate" value="{{$task->deadline}}">
								@if($errors->has('ddate'))
                				<span class="help-block">{{$errors->first('ddate')}}</span>
                				@endif
							<br>

							<label for ="" class="control-label"> Instructions</label>
								<input type="text" class="form-control" id="inst" name="inst" value="{{$task->instructions}}">
								@if($errors->has('inst'))
                				<span class="help-block">{{$errors->first('inst')}}</span>
                				@endif
							<br>

							<div class="form-group">
							<label for="">Assigned by:</label>
							<select class="form-control" name='lecturer'>					
								@foreach($lecturers as $lecturer)
									@if($lecturer->id == $task->lec_id)
									<option value="{{ $lecturer->id}}" selected>{{$lecturer->name}}</option>
									@else
									<option value="{{ $lecturer->id}}"> {{$lecturer->name}} </option>
									@endif
								@endforeach
							</select>
							</div>

							<button type="submit" class="btn btn-primary pull-right"> Submit</button>
							<a href="{{url('/task/task_list')}}" class="btn btn-primary pull-right">List</a>

							<button type="cancel" class="btn btn-primary" onClick="history.back()">Back</button>

							</div>
							</form>
 
						</div> <!--End of col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3-->
					</div><!--END OF box-body -->
				</div><!--End of pannel Body-->
		</div><!--End of pannel-->
	</body>
</section>

@stop