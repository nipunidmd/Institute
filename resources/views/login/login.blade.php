<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Institute Login</title>

     <!-- Bootstrap -->
    <link href="{{asset('/assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('/assets/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <!-- Animate.css -->
    <link href="{{asset('/assets/animate.css/animate.min.css')}}" rel="stylesheet">
   <!-- Custom Theme Style -->
    <link href="{{asset('/admin_template/custom.min.css')}}" rel="stylesheet">
 
  </head>

  <body>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="login" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <h1>Institute Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Email" name="email" required />
                @if($errors->has('email'))
                    <span class="help-block">{{$errors->first('email')}}</span>
                @endif
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name= "password" required />
                @if($errors->has('password'))
                    <span class="help-block">{{$errors->first('password')}}</span>
                @endif
              </div>
              <div>
               <button type="submit" class="btn btn-primary pull-right">Log in</button> 
              </div>
              <br>
              <br>
              <div class="separator">
                <div>
                  <h1><i class="fa fa-paw"></i> AANSY!</h1>
                  <p>©2018 All Rights Reserved. Privacy and Terms.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
