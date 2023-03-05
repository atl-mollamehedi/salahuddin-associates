<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header mobile_display__none">
            <a class="navbar-brand">
                <!-- Logo icon --><b>
                   <!-- Dark Logo icon -->
                    <img src="{{ url(Setting()->logo) }}" alt="homepage" width="100%" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="{{ url(Setting()->logo) }}" alt="homepage" class="light-logo"  width="100%"/>
                </b>
            </a>
                <!--End Logo icon -->
         </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto">
                <!-- This is  -->
                <li class="nav-item">
                     <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)">
                         <i class="icon-menu"></i>
                     </a> 
                </li>
                <li class="nav-item">
                     <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)">
                         <i class="ti-menu"></i>
                    </a>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- End mega menu -->
                <!-- ============================================================== -->
                <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light tex-white" href="{{ route('front.index') }}"><i class="mdi mdi-share"></i> Visit Your Werbsite</a></li>
                <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
            </ul>
        </div>
    </nav>
</header>