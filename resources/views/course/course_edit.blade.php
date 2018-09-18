@extends('admin.master')


@section('content')
<section class="content">

<body>


 <div class="panel panel-default">
    <div class="panel-heading">Update Course</div>
    <div class="panel-body">

<div class="box-body">
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
  <form method = "POST" role= "form"  class="form-horizontal">

    <div class="form-group">

		<div class="form-group">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
			<div class="form-group">
				<label for="">Name:</label>
				<input type="text" class="form-control" id="name" name="name" value="{{$course->name}}" required>
			</div>

			<div class="form-group">
				<label for="">Description:</label>
				<input type="text" class="form-control" id="description" name="description" value="{{$course->description}}" required>
			</div>

			<div class="form-group">
                    <!-- <input type="text" id="nvq_level" class="form-control col-md-7 col-xs-12" name="nvq_level"> -->
        <label for="">NVQ Level:</label>
        <select class="form-control col-md-6 col-sm-6 col-xs-12" name="nvq_level">
    <option value="Level 1" {{ $course->nvq_level == 'Level 1'? 'selected' : '' }}>Level 1</option>
    <option value="Level 2"  {{ $course->nvq_level == 'Level 2'? 'selected' : '' }}>Level 2</option>
    <option value="Level 3"  {{ $course->nvq_level == 'Level 3'? 'selected' : '' }}>Level 3</option>
    <option value="Level 4"  {{ $course->nvq_level == 'Level 4'? 'selected' : '' }}>Level 4</option>
    <option value="Level 5"  {{ $course->nvq_level == 'Level 5'? 'selected' : '' }}>Level 5</option>
        </select>
      </div>
      
  <button type="submit" class="btn btn-primary pull-right"> Submit</button>
    <a href="http://localhost:8080/Institute/public/course/course_list" class="btn btn-primary pull-right">List</a>
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