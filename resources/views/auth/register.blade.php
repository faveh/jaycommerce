<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JayCommerce | Admin Login</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/dist/css/skins/_all-skins.min.css')}}">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>Signup</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form class="form-horizontl" role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <input type="text" class="form-control" placeholder="Full name" id="name" name="name" value="{{ old('name') }}" required autofocus> 
            @if ($errors->has('name'))
                <span class="help-block">
                     <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
      </div>
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" id="email" class="form-control" placeholder="Email"  name="email" value="{{ old('email') }}" required>
        
         @if ($errors->has('email'))
            <span class="help-block">
                 <strong>{{ $errors->first('email') }}</strong>
            </span>
         @endif
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
       
         @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
         @endif
      </div>
      <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
         <input id="password-confirm" type="password" class="form-control" placeholder="Re-type Password"name="password_confirmation" required>
        
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif  
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <a href="{{url('/login')}}" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>

<script src="{{asset('js/admin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('js/admin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/fastclick/fastclick.js')}}"></script>
<script src="{{asset('js/admin/dist/js/app.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/iCheck/icheck.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('js/admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('js/admin/dist/js/pages/dashboard2.js')}}"></script>
<script src="{{asset('js/admin/dist/js/demo.js')}}"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>