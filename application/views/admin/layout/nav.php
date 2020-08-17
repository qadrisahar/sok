<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="../" class="logo">
                    <img
                        src="<?php echo base_url() ?>assets/logo/logobaru.png"
                        width="270"
                        alt="JSOFT Admin"/>
                    <!-- <h4 style="color:#34495e;"><b>PT. PLN (PERSERO)</b></h4> -->
                </a>
                <div
                    class="visible-xs toggle-sidebar-left"
                    data-toggle-class="sidebar-left-opened"
                    data-target="html"
                    data-fire-event="sidebar-left-opened">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">

                <ul class="notifications">
                    <li>
                        <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                            <i class="fa fa-envelope"></i>
                            <span class="badge">4</span>
                        </a> &nbsp; &nbsp;

                        <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                            <i class="fa fa-bell"></i>
                            <span class="badge">2</span>
                        </a>

                        <div class="dropdown-menu notification-menu">
                            <div class="notification-title">
                                <span class="pull-right label label-default"></span>
                                Notifikasi
                            </div>

                            <div class="content">
                                <ul>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <span class="title">Joseph Doe</span>
                                            <span class="message">Lorem ipsum dolor sit.</span>
                                        </a>
                                    </li>
                                </ul>
                                <hr/>
                                <div class="text-right">
                                    <a href="#" class="view-more">View All</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <span class="separator"></span>

                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img
                                src="<?php echo base_url() ?>assets/admin/assets/images/user.png"
                                alt="Joseph Doe"
                                class="img-circle"
                                data-lock-picture="assets/images/!logged-user.jpg"/>
                        </figure>
                        <div
                            class="profile-info"
                            data-lock-name="John Doe"
                            data-lock-email="johndoe@JSOFT.com">
                            <span class="name"><?php echo $this->session->userdata('nama'); ?></span>
                            <span class="role"><?php echo $this->session->userdata('level'); ?></span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="<?php echo base_url('login/logout') ?>">
                                    <i class="fa fa-power-off"></i>
                                    Keluar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div class="inner-wrapper">
            <aside id="sidebar-left" class="sidebar-left">
                <div class="sidebar-header">
                    <div class="sidebar-title" style="color:#fff;">
                        MAIN NAVIGATION
                    </div>
                    <div
                        class="sidebar-toggle hidden-xs"
                        data-toggle-class="sidebar-left-collapsed"
                        data-target="html"
                        data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li class="nav-active">
                                    <a href="<?php echo base_url('admin/dashboard') ?>">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-active">
                                    <a href="<?php echo base_url('admin/vendor') ?>">
                                        <i class="fa fa-university" aria-hidden="true"></i>
                                        <span>Data Vendor</span>
                                    </a>
								</li>
								<li class="nav-active">
                                    <a href="<?php echo base_url('admin/admin') ?>">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span>Data Admin</span>
                                    </a>
                                </li>
                                <li class="nav-active">
                                    <a href="mailbox-folder.html">
                                        <span class="pull-right label label-primary">182</span>
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span>Pesan</span>
                                    </a>
								</li>
								<li class="nav-active">
                                    <a href="<?php echo base_url('login/logout') ?>">
                                        <i class="fa fa-power-off" aria-hidden="true"></i>
                                        <span>Keluar</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </aside>