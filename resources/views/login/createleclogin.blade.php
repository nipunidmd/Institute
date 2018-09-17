@extends('admin.master')




@section('content')


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
              <h2>Create Lecturer Account</h2>
                <ul class="nav navbar-center panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a> 
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div><!--End of X-title-->
            <div class="x_content">
            <br>
            <form id="demo-form2" method = "POST" role= "form" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="_token" value = "{{csrf_token() }}">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lid">Lecturer_ID<span class="required">*</span>
                </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" name='lid' placeholder="Lecturer_ID" class="form-control col-md-7 col-xs-12"required>        
                      @foreach($lecturers as $key => $lecturer)
                        <option value="{{ $lecturer->id}}">{{ $lecturer->id}} </option>
                      @endforeach
                    </select>
                  </div>
                  <!--check that lid-->
                  @if($errors->has('lid'))
                  <span class="help-block">{{$errors->first('lid')}}</span>
                  @endif
              </div> 
              <br>
           
              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username"> User Name<span class="required">*</span>
                  </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="username" name="username" required="required" class="form-control col-md-7 col-xs-12"> 
                    </div> 
                    @if($errors->has('username'))
                    <span class="help-block">{{$errors->first('username')}}</span>
                    @endif
              </div> 

              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"> Email<span class="required">*</span>
                  </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12"> 
                    </div> 
                    @if($errors->has('email'))
                    <span class="help-block">{{$errors->first('email')}}</span>
                    @endif
              </div> 

              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password<span class="required">*</span>
                  </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="password" id="password" name="password" required="required" class="form-control col-md-7 col-xs-12"> 
                    </div> 
                    @if($errors->has('password'))
                    <span class="help-block">{{$errors->first('password')}}</span>
                    @endif
              </div> 
                
             <button type="submit" class="btn btn-primary pull-right">Submit</button>
          <a href="http://localhost/Institute/public/lecturer/lecturer_list" class="btn btn-primary pull-right">List</a>

              </form>
              </div>
             </div>
            </div>
          </div>
       </div>
</div><!--End of class--> 

@stop