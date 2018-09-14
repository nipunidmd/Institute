@extends('admin.master')


@section('content')
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
      <form method="POST" role="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Course Registration<small>Add new course</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-center">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Course Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" required="required" name="name" class="form-control col-md-7 col-xs-12">
                        </div>
                        <br>
                        <br>
                      
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Description">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="description" name="description" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <br>
                        <br>
                      
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="NVQ level">NVQ Level</label>
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
                        <br>
                        <br>
                        <br>
                         <h2>Module Registration<small> Add new module</small></h2>
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
                                  <input type="text" name="mname[]">
                                <td>
                                <input type="text" name="content[]">
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

                          <!-- <div class="form-group">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="mname">Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nvq_level" class="form-control col-md-7 col-xs-12" name="mname">
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Content</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nvq_level" class="form-control col-md-7 col-xs-12" name="content">
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Lecturer</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name='lecturer'>          
                                   @foreach($lecturers as $key => $lecturer)
                                  <option value="{{ $lecturer->id}}">{{ $lecturer->name}} </option>
                                  @endforeach
                          </select>
                        </div>
                      </div>
                      <br>
                      <br> -->
                    

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" onClick="history.back()">Cancel</button>
						              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
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