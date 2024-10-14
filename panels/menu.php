<!-- Navbar Start -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo d-flex pt-2" href="index.php"> 
            <img src="assets/images/logo/bds-logo.png" width="68" height="60" class="logo-light-mode" alt="logo">
            <span class="fw-bold fs-5 d-none d-md-block ms-2"> BDS Educational Group</span> 
            <!-- <img src="assets/images/logo-light.png" height="24" class="logo-dark-mode" alt="logo"> -->
        </a> 
        <!-- Logo End -->

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->
        <ul class="buy-button list-inline mb-0">
            <!-- <li class="list-inline-item mb-0">
                <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <div class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="settings" class="fea icon-sm"></i></div>
                </a>
            </li> -->
            <!-- <li class="list-inline-item ps-1 mb-0">
                <a href="https://1.envato.market/landrick" target="_blank">
                    <div class="btn btn-icon btn-pills btn-primary"><i data-feather="shopping-cart" class="fea icon-sm"></i></div>
                </a>
            </li> -->

            <li class="list-inline-item ps-1 mb-0">
                <a href="login.php">
                    <div class="btn btn-primary">Log In</div>
                </a>
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <!-- <li><a href="index.html" class="sub-menu-item">Home</a></li> -->
                <li><a href="about-us.php" class="sub-menu-item">About Us</a></li>
                <li><a href="static_courses.php" class="sub-menu-item">Courses</a></li>
                <li><a href="result.php" class="sub-menu-item">Result</a></li>

                <!-- <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Company </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-aboutus.html" class="sub-menu-item"> About Us</a></li>
                                <li><a href="page-aboutus-two.html" class="sub-menu-item"> About Us Two </a></li>
                                <li><a href="page-services.html" class="sub-menu-item">Services</a></li>
                                <li><a href="page-history.html" class="sub-menu-item">History </a></li>
                                <li><a href="page-team.html" class="sub-menu-item"> Team</a></li>
                                <li><a href="page-pricing.html" class="sub-menu-item">Pricing</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="course-detail.html" class="sub-menu-item">Course Detail </a></li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Login </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                        <li><a href="auth-cover-login.html" class="sub-menu-item">Login Cover</a></li>
                                        <li><a href="auth-login-three.html" class="sub-menu-item">Login Simple</a></li>
                                        <li><a href="auth-bs-login.html" class="sub-menu-item">BS5 Login</a></li>
                                        <li><a href="auth-login-bg-video.html" class="sub-menu-item">Login Five</a></li>
                                    </ul>
                                </li>

                                <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Signup </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                        <li><a href="auth-cover-signup.html" class="sub-menu-item">Signup Cover</a></li>
                                        <li><a href="auth-signup-three.html" class="sub-menu-item">Signup Simple</a></li>
                                        <li><a href="auth-bs-signup.html" class="sub-menu-item">BS5 Singup</a></li>
                                        <li><a href="auth-signup-bg-video.html" class="sub-menu-item">Singup Five</a></li>
                                    </ul>
                                </li>

                                <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Reset password </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                                        <li><a href="auth-cover-re-password.html" class="sub-menu-item">Reset Password Cover</a></li>
                                        <li><a href="auth-re-password-three.html" class="sub-menu-item">Reset Password Simple</a></li>
                                        <li><a href="auth-bs-reset.html" class="sub-menu-item">BS5 Reset Password</a></li>
                                        <li><a href="auth-reset-password-bg-video.html" class="sub-menu-item">Reset Pass Five</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Multi Level Menu</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a></li>
                                <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Level 2.0 </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a></li>
                                        <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> -->

                <li><a href="contact-us.php" class="sub-menu-item">Contact Us</a></li>

            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->