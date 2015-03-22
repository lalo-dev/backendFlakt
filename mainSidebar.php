<div id="sidebar">
    <!-- Wrapper for scrolling functionality -->
    <div class="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Brand -->
            <a href="dashboard.php" class="sidebar-brand">
                <strong> Flakt</strong> <small>Fans</small><img src="assets/img/icon-blanco.png" style="margin-left:15px;" alt="FLAKT">
            </a>
            <!-- END Brand -->

            <!-- User Info -->
            <div class="sidebar-section sidebar-user clearfix">
                <div class="sidebar-user-avatar">
                    <a href="javascript:void(0)">
                        <img src="assets/img/placeholders/avatars/avatarPersona.jpg" alt="avatar">
                    </a>
                </div>
                <div class="sidebar-user-name"><?php echo $_SESSION["userName"]; ?></div>
                <div class="sidebar-user-links">
                    <a href="page_ready_user_profile.html" data-toggle="tooltip" data-placement="bottom" title="Profile">
                    	<i class="gi gi-user"></i>
                    </a>
                    <a href="page_ready_inbox.html" data-toggle="tooltip" data-placement="bottom" title="Messages">
                    	<i class="gi gi-envelope"></i>
                    </a>
                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="Logout" onclick="cerrarSesion()">
                        <i class="gi gi-exit"></i>
                    </a>
                </div>
            </div>
            <!-- END User Info -->

            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
                <li>
                    <a href="dashboard.php" class="submenu"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Dashboard</a>
                </li>
                <li>
                    <a href="selection.php" class="submenu"><i class="gi gi-magic sidebar-nav-icon"></i>Wizard Selection</a>
                </li>
                <li>
                    <a href="resume.php" class="submenu"><i class="gi gi-list sidebar-nav-icon"></i>View Resume</a>
                </li>
                <li class="sidebar-header">
                    <span class="sidebar-header-title">Admin</span>
                </li>
                <li>
                    <a href="javascript:void(0)" class="submenu"><i class="gi gi-group sidebar-nav-icon"></i>User</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="submenu"><i class="gi gi-building sidebar-nav-icon"></i>Customers</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="submenu"><i class="gi gi-saw_blade sidebar-nav-icon"></i>Fans</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="submenu"><i class="gi gi-tags sidebar-nav-icon"></i>Accessories</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="submenu"><i class="gi gi-blog sidebar-nav-icon"></i>Catalogs</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="submenu"><i class="hi hi-lock sidebar-nav-icon"></i>Request Password</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="submenu"><i class="gi gi-charts sidebar-nav-icon"></i>Reports</a>
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
                                    <a href="javascript:void(0)" class="submenu">Select</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="submenu">More Info</a>
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
                                    <a href="javascript:void(0)" class="submenu">Select</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="submenu">More Info</a>
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
                                    <a href="javascript:void(0)" class="submenu">Select</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="submenu">More Info</a>
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
                                    <a href="javascript:void(0)" class="submenu">Select</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="submenu">More Info</a>
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
                                    <a href="javascript:void(0)" class="submenu">Select</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="submenu">More Info</a>
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
                                    <a href="javascript:void(0)" class="submenu">Select</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="submenu">More Info</a>
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
                                    <a href="javascript:void(0)" class="submenu">Select</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="submenu">More Info</a>
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
                                    <a href="javascript:void(0)" class="submenu">Select</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="submenu">More Info</a>
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
                                    <a href="javascript:void(0)" class="submenu">Select</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="submenu">More Info</a>
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