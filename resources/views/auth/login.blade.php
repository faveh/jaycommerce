<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JayCommerce | Admin Login</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/bootstrap/css/bootstrap.min.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/dist/css/skins/_all-skins.min.css')}}">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>Login</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        
        <form class="form-horizontl" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
               @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" name="password" class="form-control" placeholder="Password">
                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="{{ url('/register') }}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-user-plus"></i> Register a new membership</a>
            <a href="{{ url('/password/reset') }}" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-key"></i>I forgot my password</a>
        </div>
 

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
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



