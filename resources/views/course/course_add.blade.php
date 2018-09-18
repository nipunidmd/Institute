
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
                    <h2>Course Registration</h2>
                   
                    <div class="clearfix"></div>
                  </div><!--End of X-title-->
                  <div class="x_content">
                    <br>
                    <form id="demo-form2" method = "POST" role= "form" data-parsley-validate class="form-horizontal form-label-left">
                        <input type="hidden" name="_token" value = "{{csrf_token() }}">
                    

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Course Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" pattern="[A-Za-z]+" required="required" placeholder = "ex: IT"name="name" class="form-control col-md-7 col-xs-12">
                        </div>
                        <br>
                        <br>
                      
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Description">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="description" name="description" required="required" placeholder = "ex: Foundation Course" class="form-control col-md-7 col-xs-12">
                        </div>
                        <br>
                        <br>
                      
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="NVQ level">NVQ Level</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input type="text" id="nvq_level" class="form-control col-md-7 col-xs-12" name="nvq_level"> -->
                          <select class="form-control col-md-6 col-sm-6 col-xs-12" name="nvq_level">
                          <option value="Level 1">Level 1</option>
                          <option value="Level 2">Level 2</option>
                          <option value="Level 3">Level 3</option>
                          <option value="Level 4">Level 4</option>
                          <option value="Level 5">Level 5</option>
                          </select>
                        </div>
                        <br>
                        <br>
                        <br>
                         <h2>Module Registration<small> Add new module</small></h2>
                         <label>Add the module name, content and the relevant qualified lecturer for the module</label>
                         <br>
                        <tr>
                           <table border=1 class="table" id="myTable">
                          <thead>
                            <tr>
                                <th class="text-center">Name</th>
                                <th>Content</th>
                                <th>Lecturer</th>
                            </tr>
                          </thead>
                          <tbody>
                            @for($i=0;$i < 5;$i++)
                              <tr class="active">
                                <td class="text-center last">
                                  <input type="text" placeholder = "ex: IPE" class="form-control col-md-7 col-xs-12" name="mname[]">
                                <td>
                                  <input type="text" placeholder = "ex: Introduction to Programming" class="form-control col-md-7 col-xs-12" name="content[]">
                                </td>
                               <td>
                                <select class="form-control" name='lecturer[]'>          
                                  @foreach($lecturers as $key => $lecturer)
                                   <option value="{{ $lecturer->id}}">{{ $lecturer->name}} </option>
                                  @endforeach
                                </select>
                                </td>
                              </tr>
                            @endfor
                          </tbody>
                        </table>

                         
                      <div class="ln_solid"></div>
                      <div class="form-group">
                      
 
           <button type="submit" class="btn btn-primary pull-right">Submit</button>
          <a href="http://localhost:8080/Institute/public/course/course_list" class="btn btn-primary pull-right">List</a>
                        </form>
                        </div>
                      </div>
                </div>
              </div>
            </div>
</div><!--End of class-->
</body>
</section>

@stop