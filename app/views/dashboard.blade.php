<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> LC admin</title>

    <!-- Bootstrap Core CSS -->
    {{ HTML::style('assets/css/bootstrap.min.css') }}

    <!-- MetisMenu CSS -->
    {{ HTML::style('assets/css/plugins/metisMenu/metisMenu.min.css') }}

    <!-- Custom CSS -->
    {{ HTML::style('assets/css/sb-admin-2.css') }}

    <!-- Custom Fonts -->
    {{ HTML::style('assets/font-awesome-4.1.0/css/font-awesome.min.css') }}


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Lucid Couple Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Master Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="citylist">Kota</a>
                                </li>
                                <li>
                                    <a href="provlist">Provinsi</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="adminlist"><i class="fa fa-dashboard fa-fw"></i> Admin</a>
                        </li>
                        <li>
                            <a href="memberlist"><i class="fa fa-dashboard fa-fw"></i> Member</a>
                        </li>   
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            
                    @yield('content')
                        
        </div>
        <!-- /#page-wrapper -->

    </div>
    
    <!-- jQuery -->
    {{ HTML::script('assets/js/jquery.js')}}

    <!-- Bootstrap Core JavaScript -->
    {{ HTML::script('assets/js/bootstrap.min.js')}}

    <!-- Metis Menu Plugin JavaScript -->
    {{ HTML::script('assets/js/plugins/metisMenu/metisMenu.min.js')}}
    <!-- Custom Theme JavaScript -->
    {{ HTML::script('assets/js/sb-admin-2.js')}}

</body>

</html>
