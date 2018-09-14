@extends('admin.master')

@section('content')

<section class="content">

 <div class="panel panel-default">
  <div class="panel-heading">Lecture Home</div>
    <div class="panel-body">

        <div class="row tile_count">
            <div class="col-md-6 col-sm-6 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Number of Lectures</span>
              <div class="count">2500</div>
              <span class="count_bottom"><i class="green">10% </i> From last year</span>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Number of Students</span>
              <div class="count">20,000</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>25% </i> From last year</span>
            </div>

              <!--User profile-->
                <div class="x_content">

                      <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                        <img class="img-responsive avatar-view" href ="{{asset('/images/icon.png')}}" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>Samuel Doe</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Kandy Rd, Malabe
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Senior Lecturer
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                        </li>
                      </ul>
                      <br />
                    </div>
                  </div>
                </div>


             <!-- Start to do list -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>To Do List <small> : Tasks</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <!-- <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul> -->
                       <!--  </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li> -->
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                  

                      <div class="">
                        <ul class="to_do">
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Schedule SPM task</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Assign tasks for DCCN</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> mark the mid papers</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> assign instroctors for labs</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> schedule final exams</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> schedule upcoming tasks</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End to do list -->
    </div>        

@stop