<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/faviconccb.png')}}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/faviconccb.png')}}" />
    <link rel="shortcut icon" href="{{asset('img/faviconccb.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>CMS Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('css/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <!-- load jquery -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{asset('js/demo.js')}}"></script>
    <!--  Charts Plugin -->
    <script src="{{asset('js/chartist.min.js')}}"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-image="{{asset('img/sidebar-1.jpg')}}">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <center><img src="{{asset('img/logo.png')}}" alt="" width="150px"></center>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                        <a href="{{url('dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <p>DASHBOARD</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('jabar') ? 'active' : '' }}">
                        <a href="{{url('back-post')}}">
                            <i class="material-icons">location_on</i>
                            <p>POST</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('jabodetabek1') ? 'active' : '' }}">
                        <a href="{{url('back-portfolio')}}">
                            <i class="material-icons">location_on</i>
                            <p>PORTFOLIO</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('jabodetabek2') ? 'active' : '' }}">
                        <a href="{{url('back-settings')}}">
                            <i class="material-icons">location_on</i>
                            <p>SETTINGS</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> @yield('page-title') </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <!-- <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon" disabled>
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form> -->
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                  <!-- MAIN CONTENT -->
                  @yield('main-content')
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        Content Management System by FR
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/material.min.js')}}" type="text/javascript"></script>
<!--  Dynamic Elements plugin -->
<script src="{{asset('js/arrive.min.js')}}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('js/bootstrap-notify.js')}}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('js/material-dashboard.js?v=1.2.0')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>
