<!-- ?cfggdfb -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>IMS</title>

     <!-- Bootstrap -->
    <link href="{{asset('/assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">


<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->


    <!-- Font Awesome -->
    <link href="{{asset('/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('/assets/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('/assets/iCheck/skins/flat/green.css')}}" rel="stylesheet">
        <!-- bootstrap-progressbar -->
    <link href="{{asset('/assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('/assets/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('/assets/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('/admin_template/custom.min.css')}}" rel="stylesheet">

    @yield('css')
  </head>

  <body class="nav-md">

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="http://localhost:8080/Institute/public/admin/master" class="site_title"><i class="fa fa-graduation-cap"></i> <span>IMS</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('/assets/images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Tharindu Pathirana</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('admin.includes.menu')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>
        
        <!-- top navigation -->
        @include('admin.includes.top_nav')
        <!-- /top navigation -->

       <!-- page content -->

        <div class="right_col" role="main" style="padding-bottom: 200px;">

   
          

         @yield('content')
         
        </div>
        <!-- /page content -->



        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Institute Management System by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->


      </div>
    </div>

    <!-- NProgress -->
    <script src="{{asset('/assets/nprogress/nprogress.css')}}"></script>
    <!-- jQuery -->
    <script src="{{asset('/assets/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('/assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('/assets/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('/assets/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('/assets/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('/assets/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('/assets/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('/assets/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('/assets/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('/assets/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('/assets/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('/assets/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('/assets/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('/assets/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('/assets/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('/assets/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('/assets/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('/assets/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('/assets/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('/assets/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('/assets/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('/assets/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('/assets/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('/admin_template/custom.min.js')}}"></script>
    
  </body>
</html>