<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <meta name="author" content="Dashboard">

    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Salon</title>

    <!-- Flat admin core CSS -->

    <link href="{{asset('assets/css/vendor.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/flat-admin.css')}}" rel="stylesheet">


    <!--Theme css-->
    <link href="{{asset('assets/css/theme/blue-sky.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/theme/blue.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/theme/red.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/theme/yellow.css')}}" rel="stylesheet">


    <!-- Login js -->
    <script src="{{ asset('assets/js/login.js')}}" type="text/javascript"></script>


</head>

<body>
<div class="app app-default">
    <aside class="app-sidebar" id="sidebar">
        <div class="sidebar-header"> <a class="sidebar-brand" href="home.php"><img src="images/<?php //echo APP_LOGO;?>" alt="app logo" /></a>
            <button type="button" class="sidebar-toggle"> <i class="fa fa-times"></i> </button>
        </div>
        <div class="sidebar-menu">
            <ul class="sidebar-nav">
                <li class="active"> <a href="#">
                        <div class="icon"> <i class="fa fa-dashboard" aria-hidden="true"></i> </div>
                        <div class="title">Dashboard</div>
                    </a>
                </li>
                <li class="active"> <a href="#">
                        <div class="icon"> <i class="fa fa-sitemap" aria-hidden="true"></i> </div>
                        <div class="title">Categories</div>
                    </a>
                </li>

                <li class="active"> <a href="#">
                        <div class="icon"> <i class="fa fa-map-marker" aria-hidden="true"></i> </div>
                        <div class="title">Places</div>
                    </a>
                </li>

                <li class="active"> <a href="#">
                        <div class="icon"> <i class="fa fa-users" aria-hidden="true"></i> </div>
                        <div class="title">Users</div>
                    </a>
                </li>

                <li class="active"> <a href="#">
                        <div class="icon"> <i class="fa fa-bell" aria-hidden="true"></i> </div>
                        <div class="title">Notification</div>
                    </a>
                </li>

                <li class="active"> <a href="#">
                        <div class="icon"> <i class="fa fa-cog" aria-hidden="true"></i> </div>
                        <div class="title">Settings</div>
                    </a>
                </li>

                <li class="active"> <a href="#">
                        <div class="icon"> <i class="fa fa-exchange" aria-hidden="true"></i> </div>
                        <div class="title">API URLS</div>
                    </a>
                </li>

                <li class="active"> <a href="#">
                        <div class="icon"> <i class="fa fa-exchange" aria-hidden="true"></i> </div>
                        <div class="title">Logout</div>
                    </a>
                </li>

            </ul>
        </div>

    </aside>
    <div class="app-container">
        <nav class="navbar navbar-default" id="navbar">
            <div class="container-fluid">
                <div class="navbar-collapse collapse in">
                    <ul class="nav navbar-nav navbar-mobile">
                        <li>
                            <button type="button" class="sidebar-toggle"> <i class="fa fa-bars"></i> </button>
                        </li>
                        <li class="logo"> <a class="navbar-brand" href="#"><?php //echo APP_NAME;?></a> </li>
                        <li>
                            <button type="button" class="navbar-toggle">
                                 <!--  Add php profile code here -->
                                <!-- <img class="profile-img" src="images/   "> -->

                                <img class="profile-img" src="assets/images/profile.png">


                            </button>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-left">
                        <li class="navbar-title"><?php //echo APP_NAME;?></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown profile"> <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown"> <?php //if(PROFILE_IMG){?>
                                <img class="profile-img" src="images/<?php// echo PROFILE_IMG;?>">

                                <img class="profile-img" src="assets/images/profile.png">

                                <div class="title">Profile</div>
                            </a>
                            <div class="dropdown-menu">
                                <div class="profile-info">
                                    <h4 class="username">{{ Auth::user()->name }}</h4>
                                </div>
                                <ul class="action">
                                    <li><a href="profile.php">Profile</a></li>
                                    <li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                 Logout
                                             </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>                                             
                                         </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> <a href="manage_category.php" class="card card-banner card-green-light">
                    <div class="card-body"> <i class="icon fa fa-sitemap fa-4x"></i>
                        <div class="content">
                            <div class="title">Categories</div>
                            <div class="value"><span class="sign"></span>5</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> <a href="manage_places.php" class="card card-banner card-yellow-light">
                    <div class="card-body"> <i class="icon fa fa-map-marker fa-4x"></i>
                        <div class="content">
                            <div class="title">Places</div>
                            <div class="value"><span class="sign"></span>5</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> <a href="manage_places.php" class="card card-banner card-blue-light">
                    <div class="card-body"> <i class="icon fa fa-users"></i>
                        <div class="content">
                            <div class="title">Users</div>
                            <div class="value"><span class="sign"></span>5</div>
                        </div>
                    </div>
                </a>
            </div>


        </div>





            <footer class="app-footer">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer-copyright">Copyright © 2018 <a href="http://www.swifttechsoft.com/" target="_blank">Swift Tech Soft</a>. All Rights Reserved.</div>
                    </div>
                </div>
            </footer>
        </div>