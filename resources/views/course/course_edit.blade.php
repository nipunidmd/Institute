<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Edit Course Details</h1>
		
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
			<form method="POST" role="form">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
			<div class="form-group">
				<label for="">Name:</label>
				<input type="text" class="form-control" id="name" name="name" value="{{$course->name}}" required>
			</div>

			<div class="form-group">
				<label for="">Description:</label>
				<input type="text" class="form-control" id="location" name="location" value="{{$course->description}}" required>
			</div>

			<div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input type="text" id="nvq_level" class="form-control col-md-7 col-xs-12" name="nvq_level"> -->
                          <select class="form-control col-md-7 col-xs-12" name="nvq_level">
                          <option value="Level 1">Level 1</option>
                          <option value="Level 2">Level 2</option>
                          <option value="Level 3">Level 3</option>
                          <option value="Level 4">Level 4</option>
                          <option value="Level 5">Level 5</option>
                          </select>
            </div>

			
			<button type="submit" class="btn btn-primary pull-right">Update</button>
			
		</form>
		</div>
		
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="{{asset('assets/bootstrap.min.js')}}" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Academic Details"></script>
	</body>
</html>