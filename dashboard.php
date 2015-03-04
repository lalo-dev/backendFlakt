<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>FLAKT MÉXICO</title>

        <meta name="description" content="FLAKT MÉXICO - FAN SELECTOR">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->
        <link rel="stylesheet" href="css/themes/spring.css">

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
        <style>
            .bordeVerde{
                border: 1px solid #27ae60;
            }
        </style>
    </head>
    <!-- In the PHP version you can set the following options from inc/config file -->
    <!--
        Available body classes:

        'page-loading'      enables page preloader
    -->
    <body>
        <!-- Preloader -->
        <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
        <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in body element (HTML version) -->
        <div class="preloader themed-background">
            <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
            <div class="inner">
                <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
                <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
            </div>
        </div>
        <!-- END Preloader -->

        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available #page-container classes:

            '' (None)                                       for a full main and alternative sidebar hidden by default (> 991px)

            'sidebar-visible-lg'                            for a full main sidebar visible by default (> 991px)
            'sidebar-partial'                               for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
            'sidebar-partial sidebar-visible-lg'            for a partial main sidebar which opens on mouse hover, visible by default (> 991px)

            'sidebar-alt-visible-lg'                        for a full alternative sidebar visible by default (> 991px)
            'sidebar-alt-partial'                           for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
            'sidebar-alt-partial sidebar-alt-visible-lg'    for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)

            'sidebar-partial sidebar-alt-partial'           for both sidebars partial which open on mouse hover, hidden by default (> 991px)

            'sidebar-no-animations'                         add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!

            'style-alt'                                     for an alternative main style (without it: the default style)
            'footer-fixed'                                  for a fixed footer (without it: a static footer)

            'disable-menu-autoscroll'                       add this to disable the main menu auto scrolling when opening a submenu

            'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
            'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar
        -->
        <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations header-fixed-top">

            <!-- Main Sidebar -->
            <div id="sidebar">
                <!-- Wrapper for scrolling functionality -->
                <div class="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Brand -->
                        <a href="index.html" class="sidebar-brand">
                            <strong> Flakt</strong> <small>Fans</small><img src="img/icon-blanco.png" style="margin-left:15px;" alt="FLAKT">
                        </a>
                        <!-- END Brand -->

                        <!-- User Info -->
                        <div class="sidebar-section sidebar-user clearfix">
                            <div class="sidebar-user-avatar">
                                <a href="page_ready_user_profile.html">
                                    <img src="img/placeholders/avatars/avatarPersona.jpg" alt="avatar">
                                </a>
                            </div>
                            <div class="sidebar-user-name">Administrador</div>
                            <div class="sidebar-user-links">
                                <a href="page_ready_user_profile.html" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                                <a href="page_ready_inbox.html" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="gi gi-envelope"></i></a>
                                <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                <a href="#modal-user-settings" data-toggle="modal" class="enable-tooltip" data-placement="bottom" title="Settings"><i class="gi gi-cogwheel"></i></a>
                                <a href="login.html" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                            </div>
                        </div>
                        <!-- END User Info -->

                        <!-- Sidebar Navigation -->
                        <ul class="sidebar-nav">
                            <li>
                                <a href="index.html" class=" active"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Dashboard</a>
                            </li>
                            <li class="sidebar-header">
                                <span class="sidebar-header-title">Admin</span>
                            </li>
                            <li>
                                <a href="#"><i class="gi gi-group sidebar-nav-icon"></i>User</a>
                            </li>
                            <li>
                                <a href="#"><i class="gi gi-building sidebar-nav-icon"></i>Customers</a>
                            </li>
                            <li>
                                <a href="#"><i class="gi gi-saw_blade sidebar-nav-icon"></i>Fans</a>
                            </li>
                            <li>
                                <a href="#"><i class="gi gi-tags sidebar-nav-icon"></i>Accessories</a>
                            </li>
                            <li>
                                <a href="#"><i class="gi gi-blog sidebar-nav-icon"></i>Catalogs</a>
                            </li>
                            <li>
                                <a href="#"><i class="hi hi-lock sidebar-nav-icon"></i>Request Password</a>
                            </li>
                            <li>
                                <a href="#"><i class="gi gi-charts sidebar-nav-icon"></i>Reports</a>
                            </li>
                            <li class="sidebar-header">
                                <span class="sidebar-header-title">Fans Family</span>
                            </li>
                            <li>
                                <a href="#" class="sidebar-nav-menu">
                                    <i class="fa fa-angle-left sidebar-nav-indicator"></i>
                                    <i class="gi gi-certificate sidebar-nav-icon"></i>Centrifugal
                                </a>
                                <ul>
                                    <li>
                                        <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>HA</a>
                                        <ul>
                                            <li>
                                                <a href="#">Select</a>
                                            </li>
                                            <li>
                                                <a href="#">More Info</a>
                                            </li>
                                            <li>
                                                <img src="img/placeholders/photos/photo24.jpg" style="width:200px;" alt="">
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>HC</a>
                                        <ul>
                                            <li>
                                                <a href="#">Select</a>
                                            </li>
                                            <li>
                                                <a href="#">More Info</a>
                                            </li>
                                            <li>
                                                <img src="img/placeholders/photos/photo24.jpg" style="width:200px;" alt="">
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>HBDD</a>
                                        <ul>
                                            <li>
                                                <a href="#">Select</a>
                                            </li>
                                            <li>
                                                <a href="#">More Info</a>
                                            </li>
                                            <li>
                                                <img src="img/placeholders/photos/photo24.jpg" style="width:200px;" alt="">
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>HD</a>
                                        <ul>
                                            <li>
                                                <a href="#">Select</a>
                                            </li>
                                            <li>
                                                <a href="#">More Info</a>
                                            </li>
                                            <li>
                                                <img src="img/placeholders/photos/photo24.jpg" style="width:200px;" alt="">
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>GL</a>
                                        <ul>
                                            <li>
                                                <a href="#">Select</a>
                                            </li>
                                            <li>
                                                <a href="#">More Info</a>
                                            </li>
                                            <li>
                                                <img src="img/placeholders/photos/photo24.jpg" style="width:200px;" alt="">
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>LH</a>
                                        <ul>
                                            <li>
                                                <a href="#">Select</a>
                                            </li>
                                            <li>
                                                <a href="#">More Info</a>
                                            </li>
                                            <li>
                                                <img src="img/placeholders/photos/photo24.jpg" style="width:200px;" alt="">
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>STDM</a>
                                        <ul>
                                            <li>
                                                <a href="#">Select</a>
                                            </li>
                                            <li>
                                                <a href="#">More Info</a>
                                            </li>
                                            <li>
                                                <img src="img/placeholders/photos/photo24.jpg" style="width:200px;" alt="">
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="sidebar-nav-menu">
                                    <i class="fa fa-angle-left sidebar-nav-indicator"></i>
                                    <i class="gi gi-certificate sidebar-nav-icon"></i>Axial
                                </a>
                                <ul>
                                    <li>
                                        <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>FZ</a>
                                        <ul>
                                            <li>
                                                <a href="#">Select</a>
                                            </li>
                                            <li>
                                                <a href="#">More Info</a>
                                            </li>
                                            <li>
                                                <img src="img/placeholders/photos/photo24.jpg" style="width:200px;" alt="">
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="sidebar-nav-menu">
                                    <i class="fa fa-angle-left sidebar-nav-indicator"></i>
                                    <i class="gi gi-certificate sidebar-nav-icon"></i>RGML
                                </a>
                                <ul>
                                    <li>
                                        <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>RGML</a>
                                        <ul>
                                            <li>
                                                <a href="#">Select</a>
                                            </li>
                                            <li>
                                                <a href="#">More Info</a>
                                            </li>
                                            <li>
                                                <img src="img/placeholders/photos/photo24.jpg" style="width:200px;" alt="">
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- END Sidebar Navigation -->
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Main Sidebar -->

            <!-- Main Container -->
            <div id="main-container">
                <!-- Header -->
                <!-- In the PHP version you can set the following options from inc/config file -->
                <!--
                    Available header.navbar classes:

                    'navbar-default'            for the default light header
                    'navbar-inverse'            for an alternative dark header

                    'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                        'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                    'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                        'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                -->
                <header class="navbar navbar-default navbar-fixed-top">
                    <!-- Left Header Navigation -->
                    <ul class="nav navbar-nav-custom">
                        <!-- Main Sidebar Toggle Button -->
                        <li>
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                                <i class="fa fa-bars fa-fw"></i>
                            </a>
                        </li>
                        <!-- END Main Sidebar Toggle Button -->
                    </ul>
                    <!-- END Left Header Navigation -->

                    <!-- Search Form -->
                    <form action="page_ready_search_results.html" method="post" class="navbar-form-custom" role="search">
                        <div class="form-group">
                            <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                        </div>
                    </form>
                    <!-- END Search Form -->

                    <!-- Right Header Navigation -->
                    <ul class="nav navbar-nav-custom pull-right">
                        <!-- User Dropdown -->
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="img/placeholders/avatars/avatarPersona.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>
                                <li>
                                    <a href="page_ready_user_profile.html">
                                        <i class="fa fa-user fa-fw pull-right"></i>
                                        Profile
                                    </a>
                                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                    <a href="#modal-user-settings" data-toggle="modal">
                                        <i class="fa fa-cog fa-fw pull-right"></i>
                                        Settings
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="page_ready_lock_screen.html"><i class="fa fa-lock fa-fw pull-right"></i> Lock Account</a>
                                    <a href="login.html"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                        <!-- END User Dropdown -->
                    </ul>
                    <!-- END Right Header Navigation -->
                </header>
                <!-- END Header -->

                <!-- Page content -->
                <div id="page-content">
                    <!-- Dashboard Header -->
                    <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="gi gi-stopwatch"></i>Bienvenido <strong>Eduardo Martínez</strong>
                                <br>
                                <small>Dashboard</small>
                            </h1>
                        </div>
                    </div>
                    <!-- END Dashboard Header -->

                    <!-- Mini Top Stats Row -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget">
                                        <div class="widget-extra themed-background-dark">
                                            <h3 class="widget-content-light">
                                                Start <strong>Selection</strong>
                                            </h3>
                                        </div>
                                        <div class="widget-extra-full">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!-- Widget -->
                                                    <a href="page_ready_article.html" class="widget widget-hover-effect1">
                                                        <div class="widget-simple themed-background-dark">
                                                            <div class="widget-icon pull-left themed-background animation-fadeIn">
                                                                <i class="gi gi-magic"></i>
                                                            </div>
                                                            <h3 class="widget-content text-right animation-pullDown">
                                                                Wizard <strong>Selection</strong>
                                                            </h3>
                                                        </div>
                                                    </a>
                                                    <!-- END Widget -->
                                                </div>
                                                <div class="col-md-12">
                                                    <!-- Widget -->
                                                    <a href="page_ready_article.html" class="widget widget-hover-effect1">
                                                        <div class="widget-simple themed-background-dark">
                                                            <div class="widget-icon pull-left themed-background animation-fadeIn">
                                                                <i class="gi gi-list"></i>
                                                            </div>
                                                            <h3 class="widget-content text-right animation-pullDown">
                                                                View <strong>Resume</strong>
                                                            </h3>
                                                        </div>
                                                    </a>
                                                    <!-- END Widget -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget">
                                        <div class="widget-extra themed-background-dark">
                                            <h3 class="widget-content-light">
                                                Your <strong>Admin</strong>
                                            </h3>
                                        </div>
                                        <div class="widget-extra-full">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <!-- Widget -->
                                                    <a href="page_ready_article.html" class="widget widget-hover-effect1">
                                                        <div class="widget-simple bordeVerde">
                                                            <div class="widget-icon pull-left themed-background animation-fadeIn">
                                                                <i class="fa fa-file-text"></i>
                                                            </div>
                                                            <h3 class="widget-content text-right animation-pullDown">
                                                                Admin <strong>Users</strong>
                                                            </h3>
                                                        </div>
                                                    </a>
                                                    <!-- END Widget -->
                                                </div>
                                                <div class="col-md-4">
                                                    <!-- Widget -->
                                                    <a href="page_ready_article.html" class="widget widget-hover-effect1">
                                                        <div class="widget-simple bordeVerde">
                                                            <div class="widget-icon pull-left themed-background animation-fadeIn">
                                                                <i class="fa fa-file-text"></i>
                                                            </div>
                                                            <h3 class="widget-content text-right animation-pullDown">
                                                                Admin <strong>Customers</strong>
                                                            </h3>
                                                        </div>
                                                    </a>
                                                    <!-- END Widget -->
                                                </div>
                                                <div class="col-md-4">
                                                    <!-- Widget -->
                                                    <a href="page_comp_charts.html" class="widget widget-hover-effect1">
                                                        <div class="widget-simple bordeVerde">
                                                            <div class="widget-icon pull-left themed-background animation-fadeIn">
                                                                <i class="gi gi-usd"></i>
                                                            </div>
                                                            <h3 class="widget-content text-right animation-pullDown">
                                                                Admin <strong>Fans</strong>
                                                            </h3>
                                                        </div>
                                                    </a>
                                                    <!-- END Widget -->
                                                </div>
                                                <div class="col-md-4">
                                                    <!-- Widget -->
                                                    <a href="page_ready_inbox.html" class="widget widget-hover-effect1">
                                                        <div class="widget-simple bordeVerde">
                                                            <div class="widget-icon pull-left themed-background animation-fadeIn">
                                                                <i class="gi gi-envelope"></i>
                                                            </div>
                                                            <h3 class="widget-content text-right animation-pullDown">
                                                                Admin <strong>Accessories</strong>
                                                            </h3>
                                                        </div>
                                                    </a>
                                                    <!-- END Widget -->
                                                </div>
                                                <div class="col-md-4">
                                                    <!-- Widget -->
                                                    <a href="page_ready_inbox.html" class="widget widget-hover-effect1">
                                                        <div class="widget-simple bordeVerde">
                                                            <div class="widget-icon pull-left themed-background animation-fadeIn">
                                                                <i class="gi gi-envelope"></i>
                                                            </div>
                                                            <h3 class="widget-content text-right animation-pullDown">
                                                                Admin <strong>Catalogs</strong>
                                                            </h3>
                                                        </div>
                                                    </a>
                                                    <!-- END Widget -->
                                                </div>
                                                <div class="col-md-4">
                                                    <!-- Widget -->
                                                    <a href="page_comp_charts.html" class="widget widget-hover-effect1">
                                                        <div class="widget-simple bordeVerde">
                                                            <div class="widget-icon pull-left themed-background animation-fadeIn">
                                                                <i class="gi gi-usd"></i>
                                                            </div>
                                                            <h3 class="widget-content text-right animation-pullDown">
                                                                Request <strong>Password</strong>
                                                            </h3>
                                                        </div>
                                                    </a>
                                                    <!-- END Widget -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Mini Top Stats Row -->

                    <!-- Widgets Row -->
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Timeline Widget -->
                            <div class="widget">
                                <div class="widget-extra themed-background-dark">
                                    <h3 class="widget-content-light">
                                        Latest <strong>Users Log</strong>
                                    </h3>
                                </div>
                                <div class="widget-extra">
                                    <!-- Timeline Content -->
                                    <div class="timeline">
                                        <ul class="timeline-list">
                                            <li class="active">
                                                <div class="timeline-icon"><i class="gi gi-user"></i></div>
                                                <div class="timeline-time"><small># 1</small></div>
                                                <div class="timeline-content">
                                                    <p class="push-bit"><a href="#"><strong>Eduardo Martínez</strong></a></p>
                                                    <p class="push-bit"><strong>Last Signed</strong><span style="margin-left:30px">12-03-2015</span></p>
                                                    <p class="push-bit"><strong>Last Selection</strong><span style="margin-left:15px">100012 M0012</span></p>
                                                    <p class="push-bit"><strong>System Login</strong><span style="margin-left:19px">13</span></p>
                                                    <p class="push-bit"><strong>Status</strong><span style="margin-left:65px">Active</span></p>
                                                    <p class="push-bit"><a href="#" class="btn btn-xs btn-primary">
                                                        <i class="gi gi-eye_open"></i> View All</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="active">
                                                <div class="timeline-icon"><i class="gi gi-user"></i></div>
                                                <div class="timeline-time"><small># 2</small></div>
                                                <div class="timeline-content">
                                                    <p class="push-bit"><a href="#"><strong>Nombre Apellido</strong></a></p>
                                                    <p class="push-bit"><strong>Last Signed</strong><span style="margin-left:30px">12-03-2015</span></p>
                                                    <p class="push-bit"><strong>Last Selection</strong><span style="margin-left:15px">100012 M0012</span></p>
                                                    <p class="push-bit"><strong>System Login</strong><span style="margin-left:19px">13</span></p>
                                                    <p class="push-bit"><strong>Status</strong><span style="margin-left:65px">Active</span></p>
                                                    <p class="push-bit"><a href="#" class="btn btn-xs btn-primary">
                                                        <i class="gi gi-eye_open"></i> View All</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="active">
                                                <div class="timeline-icon"><i class="gi gi-user"></i></div>
                                                <div class="timeline-time"><small># 3</small></div>
                                                <div class="timeline-content">
                                                    <p class="push-bit"><a href="#"><strong>Nombre Apellido</strong></a></p>
                                                    <p class="push-bit"><strong>Last Signed</strong><span style="margin-left:30px">12-03-2015</span></p>
                                                    <p class="push-bit"><strong>Last Selection</strong><span style="margin-left:15px">100012 M0012</span></p>
                                                    <p class="push-bit"><strong>System Login</strong><span style="margin-left:19px">13</span></p>
                                                    <p class="push-bit"><strong>Status</strong><span style="margin-left:65px">Active</span></p>
                                                    <p class="push-bit"><a href="#" class="btn btn-xs btn-primary">
                                                        <i class="gi gi-eye_open"></i> View All</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="active">
                                                <div class="timeline-icon"><i class="gi gi-user"></i></div>
                                                <div class="timeline-time"><small># 4</small></div>
                                                <div class="timeline-content">
                                                    <p class="push-bit"><a href="#"><strong>Nombre Apellido</strong></a></p>
                                                    <p class="push-bit"><strong>Last Signed</strong><span style="margin-left:30px">12-03-2015</span></p>
                                                    <p class="push-bit"><strong>Last Selection</strong><span style="margin-left:15px">100012 M0012</span></p>
                                                    <p class="push-bit"><strong>System Login</strong><span style="margin-left:19px">13</span></p>
                                                    <p class="push-bit"><strong>Status</strong><span style="margin-left:65px">Active</span></p>
                                                    <p class="push-bit"><a href="#" class="btn btn-xs btn-primary">
                                                        <i class="gi gi-eye_open"></i> View All</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="active">
                                                <div class="timeline-icon"><i class="gi gi-user"></i></div>
                                                <div class="timeline-time"><small># 5</small></div>
                                                <div class="timeline-content">
                                                    <p class="push-bit"><a href="#"><strong>Nombre Apellido</strong></a></p>
                                                    <p class="push-bit"><strong>Last Signed</strong><span style="margin-left:30px">12-03-2015</span></p>
                                                    <p class="push-bit"><strong>Last Selection</strong><span style="margin-left:15px">100012 M0012</span></p>
                                                    <p class="push-bit"><strong>System Login</strong><span style="margin-left:19px">13</span></p>
                                                    <p class="push-bit"><strong>Status</strong><span style="margin-left:65px">Active</span></p>
                                                    <p class="push-bit"><a href="#" class="btn btn-xs btn-primary">
                                                        <i class="gi gi-eye_open"></i> View All</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="active">
                                                <div class="timeline-icon"><i class="gi gi-user"></i></div>
                                                <div class="timeline-time"><small># 6</small></div>
                                                <div class="timeline-content">
                                                    <p class="push-bit"><a href="#"><strong>Nombre Apellido</strong></a></p>
                                                    <p class="push-bit"><strong>Last Signed</strong><span style="margin-left:30px">12-03-2015</span></p>
                                                    <p class="push-bit"><strong>Last Selection</strong><span style="margin-left:15px">100012 M0012</span></p>
                                                    <p class="push-bit"><strong>System Login</strong><span style="margin-left:19px">13</span></p>
                                                    <p class="push-bit"><strong>Status</strong><span style="margin-left:65px">Active</span></p>
                                                    <p class="push-bit"><a href="#" class="btn btn-xs btn-primary">
                                                        <i class="gi gi-eye_open"></i> View All</a>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END Timeline Content -->
                                </div>
                            </div>
                            <!-- END Timeline Widget -->
                        </div>
                        <div class="col-md-8">
                            <!-- Your Selection -->
                            <div class="widget">
                                <div class="widget-extra themed-background-dark">
                                    <h3 class="widget-content-light">
                                        My <strong>Selections</strong>
                                    </h3>
                                </div>
                                <div class="widget-extra-full">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-vcenter table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th>Date</th>
                                                        <th>Customer</th>
                                                        <th>Reference</th>
                                                        <th>Fan Type</th>
                                                        <th>Fan Size</th>
                                                        <th style="width: 150px;" class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">01</td>
                                                        <td>01-01-2015</td>
                                                        <td>Cementos de México</td>
                                                        <td>10000112 M11223</td>
                                                        <td>HCGB</td>
                                                        <td>40</td>
                                                        <td class="text-center">
                                                            <div class="btn-group btn-group-xs">
                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="View" class="btn btn-primary"><i class="gi gi-eye_open"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">02</td>
                                                        <td>01-01-2015</td>
                                                        <td>Cementos de México</td>
                                                        <td>10000112 M11223</td>
                                                        <td>HCGB</td>
                                                        <td>40</td>
                                                        <td class="text-center">
                                                            <div class="btn-group btn-group-xs">
                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="View" class="btn btn-primary"><i class="gi gi-eye_open"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">03</td>
                                                        <td>01-01-2015</td>
                                                        <td>Cementos de México</td>
                                                        <td>10000112 M11223</td>
                                                        <td>HCGB</td>
                                                        <td>40</td>
                                                        <td class="text-center">
                                                            <div class="btn-group btn-group-xs">
                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="View" class="btn btn-primary"><i class="gi gi-eye_open"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">04</td>
                                                        <td>01-01-2015</td>
                                                        <td>Cementos de México</td>
                                                        <td>10000112 M11223</td>
                                                        <td>HCGB</td>
                                                        <td>40</td>
                                                        <td class="text-center">
                                                            <div class="btn-group btn-group-xs">
                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="View" class="btn btn-primary"><i class="gi gi-eye_open"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">05</td>
                                                        <td>01-01-2015</td>
                                                        <td>Cementos de México</td>
                                                        <td>10000112 M11223</td>
                                                        <td>HCGB</td>
                                                        <td>40</td>
                                                        <td class="text-center">
                                                            <div class="btn-group btn-group-xs">
                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="View" class="btn btn-primary"><i class="gi gi-eye_open"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Your Selection -->
                            <!-- Your Selection -->
                            <div class="widget">
                                <div class="widget-extra themed-background-dark">
                                    <h3 class="widget-content-light">
                                        All <strong>Selections</strong>
                                    </h3>
                                </div>
                                <div class="widget-extra-full">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-vcenter table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th>Date</th>
                                                        <th>Customer</th>
                                                        <th>User</th>
                                                        <th>Reference</th>
                                                        <th>Fan Type</th>
                                                        <th>Fan Size</th>
                                                        <th style="width: 150px;" class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">01</td>
                                                        <td>01-01-2015</td>
                                                        <td>Cementos de México</td>
                                                        <td>Nombre Apellido</td>
                                                        <td>10000112 M11223</td>
                                                        <td>HCGB</td>
                                                        <td>40</td>
                                                        <td class="text-center">
                                                            <div class="btn-group btn-group-xs">
                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="View" class="btn btn-primary"><i class="gi gi-eye_open"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">02</td>
                                                        <td>01-01-2015</td>
                                                        <td>Cementos de México</td>
                                                        <td>Nombre Apellido</td>
                                                        <td>10000112 M11223</td>
                                                        <td>HCGB</td>
                                                        <td>40</td>
                                                        <td class="text-center">
                                                            <div class="btn-group btn-group-xs">
                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="View" class="btn btn-primary"><i class="gi gi-eye_open"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">03</td>
                                                        <td>01-01-2015</td>
                                                        <td>Nombre Apellido</td>
                                                        <td>Cementos de México</td>
                                                        <td>10000112 M11223</td>
                                                        <td>HCGB</td>
                                                        <td>40</td>
                                                        <td class="text-center">
                                                            <div class="btn-group btn-group-xs">
                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="View" class="btn btn-primary"><i class="gi gi-eye_open"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">04</td>
                                                        <td>01-01-2015</td>
                                                        <td>Nombre Apellido</td>
                                                        <td>Cementos de México</td>
                                                        <td>10000112 M11223</td>
                                                        <td>HCGB</td>
                                                        <td>40</td>
                                                        <td class="text-center">
                                                            <div class="btn-group btn-group-xs">
                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="View" class="btn btn-primary"><i class="gi gi-eye_open"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">05</td>
                                                        <td>01-01-2015</td>
                                                        <td>Nombre Apellido</td>
                                                        <td>Cementos de México</td>
                                                        <td>10000112 M11223</td>
                                                        <td>HCGB</td>
                                                        <td>40</td>
                                                        <td class="text-center">
                                                            <div class="btn-group btn-group-xs">
                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="View" class="btn btn-primary"><i class="gi gi-eye_open"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Your Selection -->
                        </div>
                    </div>
                    <!-- END Widgets Row -->
                </div>
                <!-- END Page Content -->

                <!-- Footer -->
                <footer class="clearfix">
                    <div class="pull-left">
                        <span id="">2015</span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">Flakt México Fans</a>
                    </div>
                </footer>
                <!-- END Footer -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="index.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <fieldset>
                                <legend>Vital Info</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Username</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">Admin</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
                                    <div class="col-md-8">
                                        <label class="switch switch-primary">
                                            <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Settings -->

        <!-- Remember to include excanvas for IE8 chart support -->
        <!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

    </body>
</html>