@extends('admin.master')

@section('content')

<section class="content">

<body>


<!-- page content -->


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
                    <h2>Task</h2>
                    <ul class="nav navbar-center panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div><!--End of X-title-->
                  <div class="x_content">
                    <br>
                    <form id="demo-form2" method = "POST" role= "form" data-parsley-validate class="form-horizontal form-label-left">
                        <input type="hidden" name="_token" value = "{{csrf_token() }}">
				
		
		
			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Task Name<span class="required">*</span></label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" class="form-control" pattern="" required="required" id="name" name="name" required>
			</div>
				
			</div>
			 <br>
             <br>

			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Start Date<span class="required">*</span></label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="date" class="form-control" id="dob" name="dob" required></div>
				
			</div>
			 <br>
             <br>
             <div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Dead line<span class="required">*</span></label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="date" class="form-control" id="dob" name="dob" required></div>
				
			</div>
			 <br>
             <br>

			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Module name<span class="required">*</span></label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" class="form-control" id="nic" name=""  pattern="" required></div>
				
			</div>
			 <br>
             <br>

			<div class="form-group">
				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Assigned by<span class="required">*</span></label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<select type="option" class="form-control" id="mobno" name="telno" required></div>
				
			</div>
			 <br>
             <br>	
			 <br>
             <br>
			
			<div class="ln_solid"></div>
                      <div class="form-group">
                         <button type="submit" class="btn btn-primary pull-right">Submit</button>
          			  </div>
                      </div>
			
		</form>
                  </div>
                </div>
              </form>
                </div>
              </div>
            </div>

@stop