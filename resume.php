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
                                <a href="index.html" class="submenu"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Dashboard</a>
                            </li>
                            <li class="sidebar-header">
                                <span class="sidebar-header-title">Admin</span>
                            </li>
                            <li>
                                <a href="#" class="submenu"><i class="gi gi-group sidebar-nav-icon"></i>User</a>
                            </li>
                            <li>
                                <a href="#" class="submenu"><i class="gi gi-building sidebar-nav-icon"></i>Customers</a>
                            </li>
                            <li>
                                <a href="#" class="submenu"><i class="gi gi-saw_blade sidebar-nav-icon"></i>Fans</a>
                            </li>
                            <li>
                                <a href="#" class="submenu"><i class="gi gi-tags sidebar-nav-icon"></i>Accessories</a>
                            </li>
                            <li>
                                <a href="#" class="submenu"><i class="gi gi-blog sidebar-nav-icon"></i>Catalogs</a>
                            </li>
                            <li>
                                <a href="#" class="submenu"><i class="hi hi-lock sidebar-nav-icon"></i>Request Password</a>
                            </li>
                            <li>
                                <a href="#" class="submenu"><i class="gi gi-charts sidebar-nav-icon"></i>Reports</a>
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
                                                <a href="#" class="submenu">Select</a>
                                            </li>
                                            <li>
                                                <a href="#" class="submenu">More Info</a>
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
                                                <a href="#" class="submenu">Select</a>
                                            </li>
                                            <li>
                                                <a href="#" class="submenu">More Info</a>
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
                                                <a href="#" class="submenu">Select</a>
                                            </li>
                                            <li>
                                                <a href="#" class="submenu">More Info</a>
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
                                                <a href="#" class="submenu">Select</a>
                                            </li>
                                            <li>
                                                <a href="#" class="submenu">More Info</a>
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
                                                <a href="#" class="submenu">Select</a>
                                            </li>
                                            <li>
                                                <a href="#" class="submenu">More Info</a>
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
                                                <a href="#" class="submenu">Select</a>
                                            </li>
                                            <li>
                                                <a href="#" class="submenu">More Info</a>
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
                                                <a href="#" class="submenu">Select</a>
                                            </li>
                                            <li>
                                                <a href="#" class="submenu">More Info</a>
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
                                                <a href="#" class="submenu">Select</a>
                                            </li>
                                            <li>
                                                <a href="#" class="submenu">More Info</a>
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
                                                <a href="#" class="submenu">Select</a>
                                            </li>
                                            <li>
                                                <a href="#" class="submenu">More Info</a>
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
                                <i class="gi gi-stopwatch"></i>Selection <strong>Resume</strong>
                                <br>
                                <small>Blade type: <span>B</span></small>
                            </h1>
                        </div>
                    </div>
                    <!-- END Dashboard Header -->
                    
                    <!-- Options Indata -->
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget">
                                        <div class="widget-extra themed-background-dark">
                                            <h3 class="widget-content-light">
                                                <strong>Options</strong>
                                            </h3>
                                        </div>
                                        <div class="widget-extra-full">
                                            <div class="row">
                                                <div class="btn-group btn-group-lg">
                                                    <button class="btn btn-alt btn-primary" data-toggle="tooltip" title="Return To Wizard">
                                                        <i class="gi gi-left_arrow"></i>
                                                    </button>
                                                    <button class="btn btn-alt btn-primary" data-toggle="tooltip" title="General Info">
                                                        <i class="gi gi-circle_exclamation_mark"></i>
                                                    </button>
                                                    <button class="btn btn-alt btn-primary" data-toggle="tooltip" title="List Result" onclick="$('.block').show()">
                                                        <i class="gi gi-list"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="btn-group btn-group-lg">
                                                    <button class="btn btn-alt btn-primary" data-toggle="tooltip" data-placement="left" title="Sketch">
                                                        <i class="gi gi-picture"></i>
                                                    </button>
                                                    <button class="btn btn-alt btn-primary" data-toggle="tooltip" title="Technical Info">
                                                        <i class="gi gi-circle_info"></i>
                                                    </button>
                                                    <button class="btn btn-alt btn-primary" data-toggle="tooltip" data-placement="right" title="IVC">
                                                        <i class="gi gi-notes_2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="btn-group btn-group-lg">
                                                    <button class="btn btn-alt btn-primary" data-toggle="tooltip" data-placement="bottom" title="Price">
                                                        <i class="gi gi-usd"></i>
                                                    </button>
                                                    <button class="btn btn-alt btn-primary" data-toggle="tooltip" data-placement="bottom" title="Full Cost">
                                                        <i class="gi gi-money"></i>
                                                    </button>
                                                    <button class="btn btn-alt btn-primary" data-toggle="tooltip" data-placement="bottom" title="Print">
                                                        <i class="gi gi-print"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget">
                                        <div class="widget-extra themed-background-dark">
                                            <h3 class="widget-content-light">
                                                <strong>Indata</strong>
                                            </h3>
                                        </div>
                                        <div class="widget-extra-full">
                                            <div class="row">
                                                <div class="table-responsive">
                                                    <table class="table table-condensed">
                                                        <tbody>
                                                            <tr>
                                                                <th style="width: 10%;">Departure</th>
                                                                <th style="width: 15%;">Flow</th>
                                                                <th style="width: 15%;">Inlet Pressure</th>
                                                                <th style="width: 15%;">Outlet Pressure</th>
                                                                <th style="width: 15%;">Temp</th>
                                                                <th style="width: 15%;">Cold Start Up</th>
                                                                <th style="width: 15%;">Density Normal</th>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <input type="text" id="txtDeparture" class="form-control input-sm" placeholder="#">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <input type="text" id="txtFlow" class="form-control input-sm">
                                                                        <span class="input-group-addon" style="font-size: 10px;">m3/h</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <input type="text" id="txtInletPressure" class="form-control input-sm">
                                                                        <span class="input-group-addon" style="font-size: 10px;">Pa</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <input type="text" id="txtOutl5tPressure" class="form-control input-sm">
                                                                        <span class="input-group-addon" style="font-size: 10px;">Pa</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <input type="text" id="txtOutl5tPressure" class="form-control input-sm">
                                                                        <span class="input-group-addon" style="font-size: 10px;">C°</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <input type="text" id="txtOutl5tPressure" class="form-control input-sm">
                                                                        <span class="input-group-addon" style="font-size: 10px;">C°</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <input type="text" id="txtOutl5tPressure" class="form-control input-sm" value="1.273">
                                                                        <span class="input-group-addon" style="font-size: 10px;">Kg/nm3</span>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="7" class="text-center">
                                                                    <div class="btn-group btn-group-md">
                                                                        <button class="btn btn-alt btn-primary">
                                                                            <i class="gi gi-search"></i> Search
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Options Indata -->
                    
                    <!-- List Result -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Interactive Block -->
                            <div class="block">
                                <!-- Interactive Title -->
                                <div class="block-title">
                                    <!-- Interactive block controls (initialized in js/app.js -> interactiveBlocks()) -->
                                    <div class="block-options pull-right">
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-content"><i class="fa fa-arrows-v"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-fullscreen"><i class="fa fa-desktop"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-hide"><i class="fa fa-times"></i></a>
                                    </div>
                                    <h2>List <strong>Result</strong></h2>
                                </div>
                                <!-- END Interactive Title -->

                                <!-- Interactive Content -->
                                <!-- The content you will put inside div.block-content, will be toggled -->
                                <div class="block-content">
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-condensed">
                                            <thead>
                                                <tr class="text-primary">
                                                    <th>Select</th>
                                                    <th>No</th>
                                                    <th>Type</th>
                                                    <th>Size</th>
                                                    <th>Eff</th>
                                                    <th>RPM</th>
                                                    <th>HP</th>
                                                    <th>Pressure rice</th>
                                                    <th class="text-center success">Work line</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="switch switch-primary">
                                                            <input type="checkbox" id="ivcIn_1"><span></span>
                                                        </label>
                                                    </td>
                                                    <td>10</td>
                                                    <td>HCGB</td>
                                                    <td>140</td>
                                                    <td>76.2</td>
                                                    <td>791</td>
                                                    <td>49.58</td>
                                                    <td>1127.3</td>
                                                    <td class="text-center success">3.2</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="switch switch-primary">
                                                            <input type="checkbox" id="ivcIn_1"><span></span>
                                                        </label>
                                                    </td>
                                                    <td>10</td>
                                                    <td>HCGB</td>
                                                    <td>140</td>
                                                    <td>76.2</td>
                                                    <td>791</td>
                                                    <td>49.58</td>
                                                    <td>1127.3</td>
                                                    <td class="text-center success">3.2</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="switch switch-primary">
                                                            <input type="checkbox" id="ivcIn_1"><span></span>
                                                        </label>
                                                    </td>
                                                    <td>10</td>
                                                    <td>HCGB</td>
                                                    <td>140</td>
                                                    <td>76.2</td>
                                                    <td>791</td>
                                                    <td>49.58</td>
                                                    <td>1127.3</td>
                                                    <td class="text-center success">3.2</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="switch switch-primary">
                                                            <input type="checkbox" id="ivcIn_1"><span></span>
                                                        </label>
                                                    </td>
                                                    <td>10</td>
                                                    <td>HCGB</td>
                                                    <td>140</td>
                                                    <td>76.2</td>
                                                    <td>791</td>
                                                    <td>49.58</td>
                                                    <td>1127.3</td>
                                                    <td class="text-center success">3.2</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="switch switch-primary">
                                                            <input type="checkbox" id="ivcIn_1"><span></span>
                                                        </label>
                                                    </td>
                                                    <td>10</td>
                                                    <td>HCGB</td>
                                                    <td>140</td>
                                                    <td>76.2</td>
                                                    <td>791</td>
                                                    <td>49.58</td>
                                                    <td>1127.3</td>
                                                    <td class="text-center success">3.2</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <p class="text-muted">Selection Result..</p>
                                <!-- END Interactive Content -->
                            </div>
                            <!-- END Interactive Block -->
                        </div>
                    </div>
                    <!-- End List Result -->

                    <!-- Selected Fan -->
                    <div class="row">
                        <!-- Data Fan -->
                        <div class="col-md-4">
                            <!-- Interactive Block -->
                            <div class="block">
                                <!-- Interactive Title -->
                                <div class="block-title">
                                    <!-- Interactive block controls (initialized in js/app.js -> interactiveBlocks()) -->
                                    <div class="block-options pull-right">
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-content"><i class="fa fa-arrows-v"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-fullscreen"><i class="fa fa-desktop"></i></a>
                                    </div>
                                    <h2>Selected <strong>Fan</strong></h2>
                                </div>
                                <!-- END Interactive Title -->

                                <!-- Interactive Content -->
                                <!-- The content you will put inside div.block-content, will be toggled -->
                                <div class="block-content">
                                    <div class="table-responsive">
                                        <table class="table table-condensed">
                                            <tbody>
                                                <tr>
                                                    <th class="success" colspan="4"><strong>Fan Data</strong></th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Type</strong>
                                                    </td>
                                                    <td><span id="spanType">HCGB</span></td>
                                                    <td>&nbsp;</td>
                                                    <td style="width:40px">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Size</strong>
                                                    </td>
                                                    <td><span id="spanSize">140</span></td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Fan connection area</strong>
                                                    </td>
                                                    <td><span id="spanArea">1.568</span></td>
                                                    <td><span id="spanAreaUnit">m2</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Pd</strong>
                                                    </td>
                                                    <td><span id="spanPd">0</span></td>
                                                    <td><span id="spanPdUnit">Pa</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Accessories</strong>
                                                    </td>
                                                    <td><span id="spanAccessories">0</span></td>
                                                    <td><span id="spanAccessoriesUnit">Pa</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Inlet connection</strong>
                                                    </td>
                                                    <td><span id="spanInConnection">0</span></td>
                                                    <td><span id="spanInConnectionUnit">Pa</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Oulet connection</strong>
                                                    </td>
                                                    <td><span id="spanOutConnection">0</span></td>
                                                    <td><span id="spanOutConnectionUnit">Pa</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <th class="success" colspan="4"><strong>&nbsp;</strong></th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Flow</strong>
                                                    </td>
                                                    <td><span id="spanFlow">0</span></td>
                                                    <td><span id="spanFlowUnit">m3/h</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Total pressure</strong>
                                                    </td>
                                                    <td><span id="spanTotalPressure">0</span></td>
                                                    <td><span id="spanTotalPressureUnit">Pa</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Efficiancy</strong>
                                                    </td>
                                                    <td><span id="spanEff">0</span></td>
                                                    <td><span>%</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>&nbsp;</strong>
                                                    </td>
                                                    <td><span id="spanKomp">0</span></td>
                                                    <td><span>Kp</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Power</strong>
                                                    </td>
                                                    <td><span id="spanPower">0</span></td>
                                                    <td><span>HP</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Power at Cold Star Up</strong>
                                                    </td>
                                                    <td><span id="spanPowerCold">0</span></td>
                                                    <td><span>HP</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Throttle line</strong>
                                                    </td>
                                                    <td><span id="spanLine">0</span></td>
                                                    <td><span></span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Moment of inertia WR2</strong>
                                                    </td>
                                                    <td><span id="spanWr2">0</span></td>
                                                    <td><span id="spanWr2Unit">Kgm2</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Total wight</strong>
                                                    </td>
                                                    <td><span id="spanTotalWeight">0</span></td>
                                                    <td><span id="spanTotalWeightUnit">Kg</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Speed</strong>
                                                    </td>
                                                    <td><span id="spanSpeed">0</span></td>
                                                    <td><span>rpm</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <th class="success" colspan="4"><strong>Start torque</strong></th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>At operation conditions</strong>
                                                    </td>
                                                    <td><span id="spanTorqueOperation">0</span></td>
                                                    <td><span>Nm</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>At 0 flow and 20º C</strong>
                                                    </td>
                                                    <td><span id="spanTorqueFlow">0</span></td>
                                                    <td><span>Nm</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr class="success">
                                                    <th class="success"><strong>Sound</strong></th>
                                                    <td>L wtot</td>
                                                    <td>L ptot at <span style="display: inline;">1</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="control-label">To inlet and outlet</label>
                                                    </td>
                                                    <td><span id="spanSoundA1">0</span></td>
                                                    <td><span id="spanSoundA2">0</span></td>
                                                    <td><span>dB(A)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="control-label">To surrounding - free inlet</label>
                                                    </td>
                                                    <td><span id="spanSoundB1">0</span></td>
                                                    <td><span id="spanSoundB2">0</span></td>
                                                    <td><span>dB(A)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="control-label">To surrounding - ducted intet</label>
                                                    </td>
                                                    <td><span id="spanSoundC1">0</span></td>
                                                    <td><span id="spanSoundC2">0</span></td>
                                                    <td><span>dB(A)</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <p class="text-muted">Data Fan..</p>
                                <!-- END Interactive Content -->
                            </div>
                            <!-- END Interactive Block -->
                        </div>
                        <!-- Data Fan -->

                        <!-- Graphic Fan -->
                        <div class="col-md-8">
                            <!-- Interactive Block -->
                            <div class="block">
                                <!-- Interactive Title -->
                                <div class="block-title">
                                    <!-- Interactive block controls (initialized in js/app.js -> interactiveBlocks()) -->
                                    <div class="block-options pull-right">
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-content"><i class="fa fa-arrows-v"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-fullscreen"><i class="fa fa-desktop"></i></a>
                                    </div>
                                    <h2>Chart <strong>Data</strong></h2>
                                </div>
                                <!-- END Interactive Title -->

                                <!-- Interactive Content -->
                                <!-- The content you will put inside div.block-content, will be toggled -->
                                <div class="block-content">
                                    <div class="table-responsive">
                                        <table class="table table-condensed">
                                            <tbody>
                                                <tr>
                                                    <th class="success" colspan="4"><strong>Fan Data</strong></th>
                                                </tr>
                                                <tr>
                                                    <td><strong>Density</strong></td>
                                                    <td><strong>Flow</strong></td>
                                                    <td><strong>Pressure</strong></td>
                                                    <td><strong>Power</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>0.932 Kg/m3</td>
                                                    <td>m3/h</td>
                                                    <td>Pa</td>
                                                    <td>Hp</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="background-image: url('img/charts/basic.png'); background-repeat: no-repeat; width:602px; height: 432px; margin: auto;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">&nbsp;</div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="background-image: url('img/charts/basic.png'); background-repeat: no-repeat; width:602px; height: 432px; margin: auto;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted">Chart Data..</p>
                                <!-- END Interactive Content -->
                            </div>
                            <!-- END Interactive Block -->
                        </div>
                        <!-- END Graphic Fan -->
                    </div>
                    <!-- End Selected Fan -->                    
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
        <script>
            //Mostrar que link del menu esta activo
            $('.submenu').on('click',function(){
                $('.sidebar-nav').find('li, a').removeClass('active open');
                $('.sidebar-nav').find('ul').css({ display: 'none' });
                $(this).addClass('active');
                $(this).parent().parent().parent().addClass('active');
                $(this).parent().parent().css({ display: 'block' });
            });
        </script>
    </body>
</html>