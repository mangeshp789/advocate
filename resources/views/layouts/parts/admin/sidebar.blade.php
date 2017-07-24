<!-- page loading spinner -->
<div class="pageload">
    <div class="pageload-inner">
        <div class="sk-rotating-plane"></div>
    </div>
</div>
<!-- /page loading spinner -->
<div class="app layout-fixed-header">
    <!-- sidebar panel -->
    <div class="sidebar-panel offscreen-left">
        <div class="brand">
            <!-- toggle small sidebar menu -->
            <a href="javascript:;" class="toggle-apps hidden-xs" data-toggle="quick-launch">
                <i class="icon-grid"></i>
            </a>
            <!-- /toggle small sidebar menu -->
            <!-- toggle offscreen menu -->
            <div class="toggle-offscreen">
                <a href="javascript:;" class="visible-xs hamburger-icon" data-toggle="offscreen" data-move="ltr">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <!-- /toggle offscreen menu -->
            <!-- logo -->
            <a class="brand-logo">
                <span>Reactor</span>
            </a>
            <a href="#" class="small-menu-visible brand-logo">R</a>
            <!-- /logo -->
        </div>
        <ul class="quick-launch-apps hide">
            <li>
                <a href="apps-gallery.html">
            <span class="app-icon bg-danger text-white">
            G
            </span>
                    <span class="app-title">Gallery</span>
                </a>
            </li>
            <li>
                <a href="apps-messages.html">
            <span class="app-icon bg-success text-white">
            M
            </span>
                    <span class="app-title">Messages</span>
                </a>
            </li>
            <li>
                <a href="apps-social.html">
            <span class="app-icon bg-primary text-white">
            S
            </span>
                    <span class="app-title">Social</span>
                </a>
            </li>
            <li>
                <a href="apps-travel.html">
            <span class="app-icon bg-info text-white">
            T
            </span>
                    <span class="app-title">Travel</span>
                </a>
            </li>
        </ul>
        <!-- main navigation -->
        <nav role="navigation">
            <ul class="nav">
                <!-- dashboard -->
                <li>
                    <a href="{{route('admin.users')}}">
                        <i class="icon-compass"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <!-- /dashboard -->


                <!-- clients -->
                <li>
                    <a href="javascript:;">
                        <i class="icon-user"></i>
                        <span>Clients</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('admin.client.form')}}">
                                <span>Add Client</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.client.view')}}">
                                <span>View Clients</span>
                            </a>
                        </li>



                    </ul>
                </li>
                <!-- /clients -->

            </ul>
        </nav>
        <!-- /main navigation -->
    </div>
    <!-- /sidebar panel -->