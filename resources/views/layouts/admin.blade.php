<!DOCTYPE html>
<html lang="en" class="no-js">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/img/head.png">
    <title>Dunia Aksesoris</title>
    <!-- External fonts -->
    <link href="https://brick.a.ssl.fastly.net/Montserrat:300,400,500,600,700" rel="stylesheet">
    <!-- NPM Packages -->
    <link href="{{asset ('/spark/node_modules/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset ('/spark/node_modules/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{asset ('/spark/node_modules/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{asset ('/spark/node_modules/summernote/dist/summernote.css') }}" rel="stylesheet">
    <link href="{{asset ('/spark/node_modules/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{asset ('/spark/node_modules/morris.js/morris.css') }}" rel="stylesheet">
    <link href="{{asset ('/bigbag/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Vendor -->
    <link href="{{asset ('/spark/assets/vendor/md-snackbars/md-snackbars.min.css')}}" rel="stylesheet">
    <link href="{{asset ('/spark/assets/vendor/zabuto/zabuto_calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset ('/spark/assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <!-- Theme -->
    <link href="{{asset ('/spark/assets/css/spark.css')}}" rel="stylesheet">
    <!-- [if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif] -->
  </head>
  <body class="">
    <!-- right-to-left -->
    <div class="splash active">
      <div class="icon"></div>
    </div>
    <div class="wrapper">
      <!-- Navbar -->
      @include('partials.backend.navbar')
      <!-- End Navbar -->
      <div class="content">
        <header class="page-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-9 page-title-wrapper">
                <h1 class="page-title">@yield('title')</h1>
                <h2 class="page-subtitle">@yield('subtitle')</h2>
              </div>
              <div class="col-sm-3" align="text-center">
                @yield('breadcrumb')
              </div>
            </div>
          </div>
        </header>
        <div class="page-body">
          <div class="container-fluid">
            <!-- Sidebar -->
            @include('partials.backend.sidebar')
            <!-- End Sidebar -->
            <div class="page-content">
              <div class="row">
                <!-- Content -->
                @yield('content')
                <!-- End Content -->
              <!-- </div>
              <footer class="site-footer text-center">
                <p>&copy; 2018 Spark</p>
              </footer> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /#wrapper -->
    <!-- NPM Packages -->
    <script src="{{asset ('/spark/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset ('/spark/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset ('/spark/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset ('/spark/node_modules/flot/jquery.flot.js')}}"></script>
    <script src="{{asset ('/spark/node_modules/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset ('/spark/node_modules/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset ('/spark/node_modules/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset ('/spark/node_modules/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset ('/spark/node_modules/bxslider/dist/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset ('/spark/node_modules/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset ('/spark/node_modules/moment/min/moment.min.js')}}"></script>
    <script src="{{asset ('/spark/node_modules/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
    <script src="{{asset ('/spark/node_modules/summernote/dist/summernote.min.js')}}"></script>
    <script src="{{asset ('/spark/node_modules/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{asset ('/spark/node_modules/morris.js/morris.min.js')}}"></script>
    <script src="{{asset ('/spark/node_modules/raphael/raphael.min.js')}}"></script>
    <!-- Vendor -->
    <script src="{{asset ('/spark/assets/vendor/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset ('/spark/assets/vendor/mark/jquery.mark.min.js')}}"></script>
    <script src="{{asset ('/spark/assets/vendor/md-snackbars/md-snackbars.min.js')}}"></script>
    <script src="{{asset ('/spark/assets/vendor/zabuto/zabuto_calendar.min.js')}}"></script>
    <script src="{{asset ('/spark/assets/vendor/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
    <script src="{{asset ('/spark/assets/vendor/jvectormap/jquery-jvectormap-africa-mill.js')}}"></script>
    <script src="{{asset ('/spark/assets/vendor/jvectormap/jquery-jvectormap-asia-mill.js')}}"></script>
    <script src="{{asset ('/spark/assets/vendor/jvectormap/jquery-jvectormap-cn-mill.js')}}"></script>
    <script src="{{asset ('/spark/assets/vendor/jvectormap/jquery-jvectormap-europe-mill.js')}}"></script>
    <script src="{{asset ('/spark/assets/vendor/jvectormap/jquery-jvectormap-in-mill.js')}}"></script>
    <script src="{{asset ('/spark/assets/vendor/jvectormap/jquery-jvectormap-north_america-mill.js')}}"></script>
    <script src="{{asset ('/spark/assets/vendor/jvectormap/jquery-jvectormap-oceania-mill.js')}}"></script>
    <script src="{{asset ('/spark/assets/vendor/jvectormap/jquery-jvectormap-south_america-mill.js')}}"></script>
    <script src="{{asset ('/spark/assets/vendor/jvectormap/jquery-jvectormap-uk_countries-mill.js')}}"></script>
    <script src="{{asset ('/spark/assets/vendor/jvectormap/jquery-jvectormap-us-aea.js')}}"></script>
    <script src="{{asset ('/spark/node_modules/gmaps/gmaps.min.js')}}"></script>
    <!-- Theme -->
    <script src="{{asset ('/spark/assets/js/spark.js')}}"></script>
    <script src="{{asset ('/spark/assets/js/pages/dashboard.js')}}"></script>
    <script>
      $(document).ready(function () {
      	Spark.init();
      	Page.init();
      });
    </script>
  </body>
</html>