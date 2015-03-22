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
                <img src="assets/img/placeholders/avatars/avatarPersona.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                <li class="dropdown-header text-center">Account</li>
                <li>
                    <a href="page_ready_user_profile.html">
                        <i class="fa fa-user fa-fw pull-right"></i>
                        Profile
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="page_ready_lock_screen.html"><i class="fa fa-lock fa-fw pull-right"></i> Lock Account</a>
                    <a href="javascript:cerrarSesion();"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                </li>
            </ul>
        </li>
        <!-- END User Dropdown -->
    </ul>
    <!-- END Right Header Navigation -->
</header>