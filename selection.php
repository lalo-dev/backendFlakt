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
            <h1 class="push-top-bottom text-light text-center"><strong>FLAKT</strong>Fans</h1>
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
                                <i class="gi gi-stopwatch"></i>Wizard <strong>Selection</strong>
                                <br>
                                <small></small>
                            </h1>
                        </div>
                    </div>
                    <!-- END Dashboard Header -->

                    <!-- Clickable Wizard Block -->
                    <div class="block">
                        <!-- Clickable Wizard Title -->
                        <div class="block-title">
                            <h2><strong>Wizard</strong></h2>
                        </div>
                        <!-- END Clickable Wizard Title -->
                        
                        <!-- Clickable Wizard Content -->
                        <form id="clickable-wizard" action="#" method="post" class="form-horizontal">
                            <!-- First Step -->
                            <div id="clickable-first" class="step">
                                <!-- Step Info -->
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <ul class="nav nav-pills nav-justified clickable-steps">
                                            <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-first"><strong>1. Customer</strong></a></li>
                                            <li><a href="javascript:void(0)" data-gotostep="clickable-second"><strong>2. Units</strong></a></li>
                                            <li><a href="javascript:void(0)" data-gotostep="clickable-third"><strong>3. Accessories</strong></a></li>
                                            <li><a href="javascript:void(0)" data-gotostep="clickable-four"><strong>3. Selection data</strong></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END Step Info -->
                                <h4 class="page-header">&nbsp;</h4>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">#</label>
                                    <div class="col-md-5">
                                        <input type="text" id="txtNumber" name="txtNumber" class="form-control input-sm" placeholder="0000">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="txtCustomer">Customer</label>
                                    <div class="col-md-5">
                                        <select id="slcCustomer" name="slcCustomer" class="form-control input-sm">
                                            <option value="0">Select</option>
                                            <option value="1">Customer 01</option>
                                            <option value="2">Customer 02</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="txtReference">Reference</label>
                                    <div class="col-md-5">
                                        <input type="text" id="txtReference" name="txtReference" class="form-control input-sm" placeholder="Reference">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="txtProposal">No. Proposal</label>
                                    <div class="col-md-5">
                                        <input type="text" id="txtProposal" name="txtProposal" class="form-control input-sm" placeholder="No Proposal">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="slcContact">Contact</label>
                                    <div class="col-md-5">
                                        <select id="slcContact" name="slcContact" class="form-control input-sm">
                                            <option value="0">Select</option>
                                            <option value="1">Contact 01</option>}
                                            <option value="2">Contact 02</option>
                                        </select>
                                        <input type="text" id="txtContact" name="txtContact" class="form-control input-sm" placeholder="Contact optional">
                                    </div>
                                </div>
                            </div>
                            <!-- END First Step -->

                            <!-- Second Step -->
                            <div id="clickable-second" class="step">
                                <!-- Step Info -->
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <ul class="nav nav-pills nav-justified clickable-steps">
                                            <li><a href="javascript:void(0)" data-gotostep="clickable-first"><i class="fa fa-check"></i> <strong>1. Customer</strong></a></li>
                                            <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-second"><strong>2. Units</strong></a></li>
                                            <li><a href="javascript:void(0)" data-gotostep="clickable-third"><strong>3. Accessories</strong></a></li>
                                            <li><a href="javascript:void(0)" data-gotostep="clickable-four"><strong>3. Selection data</strong></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END Step Info -->

                                <h4 class="page-header">&nbsp;</h4>
                                <!-- Default Style -->
                                <div class="row">
                                    <div class="col-sm-4">
                                        <table class="table table-borderless table-condensed text-center">
                                            <thead>
                                                <tr>
                                                    <th class="text-center text-primary">System International</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>C°</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>m³/h - Nm³/h</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>mmwg - Pa</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Kg/m³ - Kg/Nm³</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>mmHg - mBar - m</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>m/s</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>m²</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Kw</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Kgm²</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Kg</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Nm</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>m</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>dB(A)</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-angle-right"></i> Select <i class="fa fa-angle-left"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-sm-4">
                                        <table class="table table-borderless table-condensed text-center">
                                            <thead>
                                                <tr>
                                                    <th class="text-center text-primary"><i class="gi gi-ruller"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>Temperature</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Flow</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Pressure</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Density</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Ambient pressure</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Air velocity</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Area</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Power</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Inertia</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Weight</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Torque</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Sound distance</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Sound</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-sm-4">
                                        <table class="table table-borderless table-condensed text-center">
                                            <thead>
                                                <tr>
                                                    <th class="text-center text-primary">System American</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>F°</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>acfm - scfm</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>inwg - lb/in²</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>lb/ft³ - slb/ft³</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>inHg - ft</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>fpm</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>ft²</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Hp</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>lbft²</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Lb</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>lbft</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>ft</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>dB(A)</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-angle-right"></i> Select <i class="fa fa-angle-left"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END Default Style -->
                            </div>
                            <!-- END Second Step -->

                            <!-- Third Step -->
                            <div id="clickable-third" class="step">
                                <!-- Step Info -->
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <ul class="nav nav-pills nav-justified clickable-steps">
                                            <li><a href="javascript:void(0)" data-gotostep="clickable-first"><i class="fa fa-check"></i> <strong>1. Customer</strong></a></li>
                                            <li><a href="javascript:void(0)" data-gotostep="clickable-second"><i class="fa fa-check"></i> <strong>2. Units</strong></a></li>
                                            <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-third"><strong>3. Accessories</strong></a></li>
                                            <li><a href="javascript:void(0)" data-gotostep="clickable-four"><strong>3. Selection data</strong></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END Step Info -->

                                <h4 class="page-header">&nbsp;</h4>
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr class="text-primary">
                                                <th>Description</th>
                                                <th>Inlet</th>
                                                <th>Oulet</th>
                                                <th>Value</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>IVC</td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="ivcIn_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="ivcOut_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>0.3</td>
                                                <td>
                                                    <img src="img/placeholders/accessories/ivc.jpg" style="width:40px; height:40px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>DMBG</td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="ivcOut_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="dmbgOut_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>0.2</td>
                                                <td>
                                                    <img src="img/placeholders/accessories/difusor.jpg" style="width:40px; height:40px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flexible</td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="flexibleIn_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="flexibleOut_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>0</td>
                                                <td>
                                                    <img src="img/placeholders/accessories/flexible.jpg" style="width: 40px; height:40px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Screen</td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="screenIn_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="screenOut_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>0.2</td>
                                                <td>
                                                    <img src="img/placeholders/accessories/screen.jpg" style="width: 40px; height:40px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Damper</td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="damperIn_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="damperOut_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>0</td>
                                                <td>
                                                    <img src="img/placeholders/accessories/damper.jpg" style="width: 40px; height:40px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Diffusor Default</td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="diffusorIn_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="diffusorOut_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>0</td>
                                                <td>
                                                    <img src="img/placeholders/accessories/diffusor.jpg" style="width: 40px; height:40px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Louver</td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="louverIn_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="louverOut_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>0.15</td>
                                                <td>
                                                    <img src="img/placeholders/accessories/louver.jpg" style="width: 40px; height:40px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Silencer</td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="silencerIn_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="silencerOut_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>0.15</td>
                                                <td>
                                                    <img src="img/placeholders/accessories/silencer.jpg" style="width: 40px; height:40px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Inlet Box</td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="inletBoxIn_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="inletBoxOut_1"><span></span>
                                                    </label>
                                                </td>
                                                <td>0.15</td>
                                                <td>
                                                    <img src="img/placeholders/accessories/inletbox.jpg" style="width: 40px; height:40px;">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END Third Step -->

                            <!-- Four Step -->
                            <div id="clickable-four" class="step">
                                <!-- Step Info -->
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <ul class="nav nav-pills nav-justified clickable-steps">
                                            <li><a href="javascript:void(0)" data-gotostep="clickable-first"><i class="fa fa-check"></i> <strong>1. Customer</strong></a></li>
                                            <li><a href="javascript:void(0)" data-gotostep="clickable-second"><i class="fa fa-check"></i> <strong>2. Units</strong></a></li>
                                            <li><a href="javascript:void(0)" data-gotostep="clickable-third"><i class="fa fa-check"></i> <strong>3. Accessories</strong></a></li>
                                            <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-four"><strong>3. Selection data</strong></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END Step Info -->

                                <h4 class="page-header">&nbsp;</h4>
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr class="text-primary">
                                                <th>Description</th>
                                                <th>Data</th>
                                                <th>Units</th>
                                                <th>Include</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Blade Type</strong></td>
                                                <td>
                                                    <select class="form-control input-sm" id="slcBlade">
                                                        <option value="1">B</option>
                                                        <option value="2">P</option>
                                                        <option value="3">T</option>
                                                        <option value="4">C</option>
                                                    </select>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Flow</strong></td>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <select class="form-control input-sm" id="slcBlade">
                                                        <option class="uSI" value="m3h">m3/h</option>
                                                        <option class="uSI" value="m3s">m3/s</option>
                                                        <option class="uSI" value="nm3h">Nm3/h</option>
                                                        <option class="uSA" value="acfm">acfm</option>
                                                        <option class="uSA" value="scfm">scfm</option>
                                                    </select>
                                                </td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Pressure</strong></td>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <select class="form-control input-sm" id="slcBlade">
                                                        <option class="uSI" value="Pa">Pa</option>
                                                        <option class="uSI" value="mmwg">mmwg</option>
                                                        <option class="uSA" value="inwg">inwg</option>
                                                        <option class="uSA" value="lbin2">lb/in2</option>
                                                    </select>
                                                </td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Density Normal</strong></td>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <select class="form-control input-sm" id="slcBlade">
                                                        <option class="uSI" value="kgnm3">Kg/Nm3</option>
                                                        <option class="uSI" value="kgm3">Kg/m3</option>
                                                        <option class="uSA" value="lbft3" style="display: none;">lb/ft3</option>
                                                        <option class="uSA" value="slbft3" style="display: none;">slb/ft3</option>
                                                    </select>
                                                </td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Fan Arrangment</strong></td>
                                                <td>
                                                    <select class="form-control input-sm" id="slcFanArragment">
                                                        <option value="1">1 Amca</option>
                                                        <option value="4">4 Amca</option>
                                                    </select>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Ambient Pressure</strong></td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="txtAmbientPressure">
                                                </td>
                                                <td>
                                                <select class="form-control input-sm" id="slcAmbientPressureUnit">
                                                        <option class="uSI" value="mmHg">mmHg</option>
                                                        <option class="uSI" value="mBar">mBar</option>
                                                        <option class="uSI" value="m">m</option>
                                                        <option class="uSA" value="inHg">inHg</option>
                                                        <option class="uSA" value="ft">ft</option>
                                                    </select>
                                                </td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Pressure Definition Inlet</strong></td>
                                                <td>
                                                    <select class="form-control input-sm" id="slcPressureIn">
                                                        <option value="S">Static</option>
                                                        <option value="T">Total</option>
                                                    </select>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Pressure Definition Outlet</strong></td>
                                                <td>
                                                    <select class="form-control input-sm" id="slcPressureOut">
                                                        <option value="S">Static</option>
                                                        <option value="T">Total</option>
                                                    </select>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Connections - Max Air Velocity</strong></td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="txtConnectionMax">
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="slcMaxAir">
                                                        <option class="uSI" value="ms">m/s</option>
                                                        <option class="uSA" value="fpm">fpm</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" id="slcMaxAirYn">
                                                        <option value="N">No</option>
                                                        <option value="Y">Yes</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Motors</strong></td>
                                                <td>
                                                    <select class="form-control input-sm" id="slcMotor">
                                                        <option value="siemens">Siemens</option>
                                                        <option value="us">US</option>
                                                        <option value="abb">ABB</option>
                                                    </select>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Sound Pressure - Distance</strong></td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="txtSoundDistance">
                                                </td>
                                                <td>
                                                    <span class="uSI">m</span>
                                                    <span class="uSA">ft</span>
                                                </td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Sound Pressure - Max Sound</strong></td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" id="txtSoundMax">
                                                </td>
                                                <td>db(A)</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END Third Step -->

                            <!-- Form Buttons -->
                            <div class="form-group form-actions">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="reset" class="btn btn-lg btn-warning" id="back4">Previous</button>
                                    <button type="submit" class="btn btn-lg btn-primary" id="next4">Next</button>
                                </div>
                            </div>
                            <!-- END Form Buttons -->
                        </form>
                        <!-- END Clickable Wizard Content -->
                    </div>
                    <!-- END Clickable Wizard Block -->
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

            /* Initialize Clickable Wizard */
            var clickableWizard = $('#clickable-wizard');

            clickableWizard.formwizard({disableUIStyles: true, inDuration: 0, outDuration: 0});

            $('.clickable-steps a').on('click', function(){
                var gotostep = $(this).data('gotostep');

                clickableWizard.formwizard('show', gotostep);
            });
        </script>
    </body>
</html>