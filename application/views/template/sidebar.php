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
                <?php if ($this->session->userdata('level') == 0) : ?>
                    <h3>General</h3>
                <?php endif; ?>
                <ul class="nav side-menu">
                    <?php if (in_array('ADMIN_DASHBOARD', $this->session->userdata('access'))) : ?>
                        <li class="<?php if (strpos(current_url(), 'dashboard') !== false) echo 'active'; ?>"><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                    <?php endif; ?>

                    <?php if (in_array('USER_ACCESS', $this->session->userdata('access'))) : ?>
                        <li class="<?php if (strpos(current_url(), 'useraccess') !== false) echo 'active'; ?>"><a href="<?php echo base_url('admin/useraccess'); ?>"><i class="fa fa-cog"></i> User Access</a></li>
                    <?php endif; ?>

                    <?php if (
                        in_array('MASTER_DATA_TAHUNAKADEMIK', $this->session->userdata('access'))
                        || in_array('MASTER_DATA_JURUSAN', $this->session->userdata('access'))
                        || in_array('MASTER_DATA_KELAS', $this->session->userdata('access'))
                        || in_array('MASTER_DATA_GURU', $this->session->userdata('access'))
                        || in_array('MASTER_DATA_SISWA', $this->session->userdata('access'))
                        || in_array('MASTER_DATA_PRESTASI', $this->session->userdata('access'))
                        || in_array('MASTER_DATA_PELANGGARAN', $this->session->userdata('access'))
                    ) : ?>
                        <li class="<?php if ($menu_open == 'tahunakademik' or $menu_open == 'guru' or $menu_open == 'jurusan' or $menu_open == 'kelas' or $menu_open == 'siswa' or $menu_open == 'prestasi' or $menu_open == 'pelanggaran') echo 'active'; ?>"><a><i class="fa fa-bars"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu" style="<?php if ($menu_open == 'tahunakademik' or $menu_open == 'guru' or $menu_open == 'jurusan' or $menu_open == 'kelas' or $menu_open == 'siswa' or $menu_open == 'prestasi' or $menu_open == 'pelanggaran') echo 'display: block;'; ?>">
                                <?php if (in_array('MASTER_DATA_TAHUNAKADEMIK', $this->session->userdata('access'))) : ?>
                                    <li <?php if ($menu_open == 'tahunakademik') echo "class='current-page'"; ?>><a href="<?php echo base_url('admin/tahunakademik'); ?>">Tahun Akademik</a></li>
                                <?php endif; ?>
                                <?php if (in_array('MASTER_DATA_GURU', $this->session->userdata('access'))) : ?>
                                    <li <?php if ($menu_open == 'guru') echo "class='current-page'"; ?>><a href="<?php echo base_url('admin/guru'); ?>">Guru</a></li>
                                <?php endif; ?>
                                <?php if (in_array('MASTER_DATA_JURUSAN', $this->session->userdata('access'))) : ?>
                                    <li <?php if ($menu_open == 'jurusan') echo "class='current-page'"; ?>><a href="<?php echo base_url('admin/jurusan'); ?>">Jurusan</a></li>
                                <?php endif; ?>
                                <?php if (in_array('MASTER_DATA_KELAS', $this->session->userdata('access'))) : ?>
                                    <li <?php if ($menu_open == 'kelas') echo "class='current-page'"; ?>><a href="<?php echo base_url('admin/kelas'); ?>">Kelas</a></li>
                                <?php endif; ?>
                                <?php if (in_array('MASTER_DATA_SISWA', $this->session->userdata('access'))) : ?>
                                    <li <?php if ($menu_open == 'siswa') echo "class='current-page'"; ?>><a href="<?php echo base_url('admin/siswa'); ?>">Siswa</a></li>
                                <?php endif; ?>
                                <?php if (in_array('MASTER_DATA_PRESTASI', $this->session->userdata('access'))) : ?>
                                    <li <?php if ($menu_open == 'prestasi') echo "class='current-page'"; ?>><a href="<?php echo base_url('admin/prestasi'); ?>">Kategori Prestasi</a></li>
                                <?php endif; ?>
                                <?php if (in_array('MASTER_DATA_PELANGGARAN', $this->session->userdata('access'))) : ?>
                                    <li <?php if ($menu_open == 'pelanggaran') echo "class='current-page'"; ?>><a href="<?php echo base_url('admin/pelanggaran'); ?>">Kategori Pelanggaran</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>

                <!-- Wali Kelas -->
                <?php if (
                    in_array('MONITORING_PRESTASI', $this->session->userdata('access'))
                    || in_array('MONITORING_PELANGGARAN', $this->session->userdata('access'))
                ) : ?>
                    <h3>Wali Kelas</h3>
                    <ul class="nav side-menu">
                        <li class="<?php if ($menu_open == 'mprestasi' or $menu_open == 'mpelanggaran') echo 'active'; ?>"><a><i class="fa fa-pencil-square-o"></i> Monitoring <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu" style="<?php if ($menu_open == 'mprestasi' or $menu_open == 'mpelanggaran') echo 'display: block;'; ?>">
                                <?php if (in_array('MONITORING_PRESTASI', $this->session->userdata('access'))) : ?>
                                    <li <?php if ($menu_open == 'mprestasi') echo "class='current-page'"; ?>><a href="<?php echo base_url('admin/mprestasi'); ?>">Prestasi Siswa</a></li>
                                <?php endif; ?>
                                <?php if (in_array('MONITORING_PELANGGARAN', $this->session->userdata('access'))) : ?>
                                    <li <?php if ($menu_open == 'mpelanggaran') echo "class='current-page'"; ?>><a href="<?php echo base_url('admin/mpelanggaran'); ?>">Pelanggaran Siswa</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if (in_array('PINDAH_KELUAR', $this->session->userdata('access'))) : ?>
                        <li class="<?php if (strpos(current_url(), 'pindah_keluar') !== false) echo 'active'; ?>"><a href="<?php echo base_url('admin/siswa/pindah_keluar'); ?>"><i class="fa fa-arrows-alt"></i> Pindah / Keluar</a></li>
                    <?php endif; ?>
                    </ul>

                    <!-- Kepala Sekolah -->
                    <?php if (
                        in_array('LAPORAN_PRESTASI', $this->session->userdata('access'))
                        || in_array('LAPORAN_PELANGGARAN', $this->session->userdata('access'))
                        || in_array('LAPORAN_SISWA', $this->session->userdata('access'))
                        || in_array('LAPORAN_SISWA_ALUMNI', $this->session->userdata('access'))
                    ) : ?>
                        <h3>Kepala Sekolah</h3>
                        <ul class="nav side-menu">
                            <li class="<?php if ($menu_open == 'lapprestasi' or $menu_open == 'lappelanggaran' or $menu_open == 'lapsiswa' or $menu_open == 'lapsiswa_alumni') echo 'active'; ?>"><a><i class="fa fa-download"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="<?php if ($menu_open == 'lapprestasi' or $menu_open == 'lappelanggaran' or $menu_open == 'lapsiswa' or $menu_open == 'lapsiswa_alumni') echo 'display: block;'; ?>">
                                    <?php if (in_array('LAPORAN_PRESTASI', $this->session->userdata('access'))) : ?>
                                        <li <?php if ($menu_open == 'lapprestasi') echo "class='current-page'"; ?>><a href="<?php echo base_url('admin/lapprestasi'); ?>">Prestasi Siswa</a></li>
                                    <?php endif; ?>
                                    <?php if (in_array('LAPORAN_PELANGGARAN', $this->session->userdata('access'))) : ?>
                                        <li <?php if ($menu_open == 'lappelanggaran') echo "class='current-page'"; ?>><a href="<?php echo base_url('admin/lappelanggaran'); ?>">Pelanggaran Siswa</a></li>
                                    <?php endif; ?>
                                    <?php if (in_array('LAPORAN_SISWA', $this->session->userdata('access'))) : ?>
                                        <li <?php if ($menu_open == 'lapsiswa') echo "class='current-page'"; ?>><a href="<?php echo base_url('admin/lapsiswa'); ?>">Jumlah Siswa</a></li>
                                    <?php endif; ?>
                                    <?php if (in_array('LAPORAN_SISWA_ALUMNI', $this->session->userdata('access'))) : ?>
                                        <li <?php if ($menu_open == 'lapsiswa_alumni') echo "class='current-page'"; ?>><a href="<?php echo base_url('admin/lapsiswa/alumni'); ?>">Alumni</a></li>
                                    <?php endif; ?>
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