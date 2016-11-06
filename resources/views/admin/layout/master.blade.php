<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JayCommerce |  @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/dist/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/dist/css/kendo.common.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/dist/css/kendo.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/dist/css/kendo.rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/dist/css/back-to-top.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/plugins/datatables/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/plugins/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/plugins/datepicker/datepicker3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/plugins/iCheck/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/plugins/colorpicker/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/plugins/timepicker/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/plugins/select2/select2.min.css')}}">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    @yield('style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('admin.include.header')
    @include('admin.include.sidebar')
    
    <div class="content-wrapper">
    @include('admin.include.contentheader')
        <section class="content">
        @yield('content')
        </section>
    </div>
    @include('admin.include.footer')
    @include('admin.include.controlside')
    <a href="#0" class="cd-top">Top</a>
  
</div>
<script src="{{asset('js/admin/dist/js/back-to-top.js')}}"></script>
<script src="{{asset('js/admin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('js/admin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/fastclick/fastclick.js')}}"></script>
<script src="{{asset('js/admin/dist/js/app.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('js/admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('js/admin/dist/js/demo.js')}}"></script>
<script src="{{asset('js/admin/dist/js/kendo.web.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script src="{{asset('js/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('js/admin/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('js/admin/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{asset('js/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('js/admin/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/admin/plugins/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/iCheck/icheck.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/fastclick/fastclick.js')}}"></script>
@yield('script')
<!-- script -->
<script type="text/javascript">
    //verifyCSRFtoken
   $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>


</body>
</html>
