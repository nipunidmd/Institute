@extends('admin.master')


@section('content')

<section class="content">
	<body>
		<div class="panel panel-default">
    		<div class="panel-heading">View Task</div>
    			<div class="panel-body">
					<div class="box-body">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">

						
						  <pre> <h4>Task Name         - {{$task->name}}</h4>
								<h4>Module            - {{$task->module->name}}</h4>
								<h4>Task start date   - {{$task->startDate}}</h4>
								<h4>Task deadline     - {{$task->deadline}}</h4>
								<h4>Task instructions - {{$task->instructions}}</h4>
								<h4>Assigned by       - {{$task->lect->name}}</h4></pre>
									
						</div> <!--End of col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3-->
					</div><!--END OF box-body -->
				</div><!--End of pannel Body-->
		</div><!--End of pannel-->
	</body>
</section>

@stop