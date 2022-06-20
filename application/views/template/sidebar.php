<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo base_url('admin/dashboard'); ?>" class="site_title"><img src="<?php echo base_url('assets/images/icon.png'); ?>" alt="logo" width="30px"> <span>SI Monitoring</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="<?php echo base_url('assets/'); ?>images/admin.jpg" alt="profile" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('username'); ?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <?php if (in_array('ADMIN_DASHBOARD', $this->session->userdata('access'))) : ?>
                        <li class="<?php if (strpos(current_url(), 'dashboard') !== false) echo 'active'; ?>"><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                    <?php endif; ?>

                    <?php if (in_array('USER_ACCESS', $this->session->userdata('access'))) : ?>
                        <li class="<?php if (strpos(current_url(), 'useraccess') !== false) echo 'active'; ?>"><a href="<?php echo base_url('admin/useraccess'); ?>"><i class="fa fa-cog"></i> User Access</a></li>
                    <?php endif; ?>

                    <?php if (
                        in_array('MASTER_DATA_TAHUNAKADEMIK', $this->session->userdata('access'))
                        || in_array('TUKIN_DOSEN_CPNS', $this->session->userdata('access'))
                        || in_array('TUKIN_PEGAWAI_PNS', $this->session->userdata('access'))
                        || in_array('TUKIN_PEGAWAI_CPNS', $this->session->userdata('access'))
                    ) : ?>
                        <li class="<?php if ($menu_open == 'tahunakademik') echo 'active'; ?>"><a><i class="fa fa-bars"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <?php if (in_array('MASTER_DATA_TAHUNAKADEMIK', $this->session->userdata('access'))) : ?>
                                    <li <?php if ($menu_open == 'tahunakademik') echo 'current-page'; ?>><a href="<?php echo base_url('admin/tahunakademik'); ?>">Tahun Akademik</a></li>
                                <?php endif; ?>
                                <li><a href="<?php echo base_url(); ?>">Dashboard2</a></li>
                                <li><a href="<?php echo base_url(); ?>">Dashboard3</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('auth/logout'); ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>