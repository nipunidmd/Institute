<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-user"></i>Add New<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href="{{url('/student/student_add')}}">Add Student</a></li>
                      <li><a href="{{url('/lecturer/lecturer_add')}}">Add Lecturer</a></li>
                      <li><a href="{{url('/course/course_add')}}">Add Course</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-sign-in"></i> Create Login <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/login/createstulogin')}}">Student Login</a></li>
                      <li><a href="{{url('/login/createleclogin')}}">Lecturer Login</a></li>
                    </ul>
                  </li>


                  <li><a><i class="fa fa-list-alt"></i> Show list <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">


                      <li><a href="{{url('/student/student_list')}}">Student list</a></li>
                      <li><a href="{{url('/lecturer/lecturer_list')}}">Lecturer list</a></li>
                      <li><a href="{{url('/course/course_list')}}">Course list</a></li>
                    
                    </ul>
                  </li>

                  <!-- <li><a><i class="fa fa-hand-pointer-o"></i> Select Module <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Student Module</a></li>
                      <li><a href="tables_dynamic.html">Lecturer Module</a></li>
                    </ul>
                  </li> -->
                    
                </ul>
              </div>

            </div>