<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Seluruh Siswa</span>
            <div class="count"><?php echo number_format($all_siswa); ?></div>
            <span class="count_bottom">Sejak <?php echo $sejak['awal'] . ' - ' . $sejak['akhir']; ?></span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-clock-o"></i> Total Siswa Pindah</span>
            <div class="count"><?php echo number_format($all_pindah['pindah']); ?></div>
            <span class="count_bottom">Sejak <?php echo $sejak['awal'] . ' - ' . $sejak['akhir']; ?></span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Siswa Dikeluarkan</span>
            <div class="count"><?php echo number_format($all_dikeluarkan['dikeluarkan']); ?></div>
            <span class="count_bottom">Sejak <?php echo $sejak['awal'] . ' - ' . $sejak['akhir']; ?></span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Alumni</span>
            <div class="count"><?php echo number_format($all_alumni['alumni']); ?></div>
            <span class="count_bottom">Sejak <?php echo $sejak['awal'] . ' - ' . $sejak['akhir']; ?></span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Monitoring Prestasi</span>
            <div class="count green"><?php echo number_format($all_prestasi); ?></div>
            <span class="count_bottom">Sejak <?php echo $sejak['awal'] . ' - ' . $sejak['akhir']; ?></span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Monitoring Pelanggaran</span>
            <div class="count red"><?php echo number_format($all_pelanggaran); ?></div>
            <span class="count_bottom">Sejak <?php echo $sejak['awal'] . ' - ' . $sejak['akhir']; ?></span>
        </div>
    </div>
    <!-- /top tiles -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <!-- <h2>Fixed Header Example <small>Users</small></h2> -->
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div id="kelas-chart"></div>
                    <!-- <table id="datatable-fixed-header" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kelas</th>
                                <th>Total Prestasi</th>
                                <th>Total Pelanggaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php if ($kelas) : ?>
                                <?php foreach ($kelas as $row) : ?>
                                    <tr>
                                        <td width="20"><?php echo $no++; ?></td>
                                        <td><?php echo $row['nama_kelas']; ?></td>
                                        <td><?php echo $row['prestasi']; ?></td>
                                        <td><?php echo $row['pelanggaran']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table> -->
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Grafik Total Prestasi Siswa <small>/ Tahun Akademik</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div id="allgraprestasi-chart"></div>
                </div>
            </div>
        </div>


        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Grafik Total Pelanggaran Siswa <small>/ Tahun Akademik</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div id="allgrapelanggaran-chart"></div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Monitoring Siswa <small><?php echo 'TA ' . $tahun_aktif['tahun_akademik']; ?></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div id="donut-chart"></div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Top 5 Pelanggaran <small><?php echo 'TA' . $tahun_aktif['tahun_akademik']; ?></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <?php if ($top_five_pelanggaran) : ?>
                        <?php foreach ($top_five_pelanggaran as $top_pl) : ?>
                            <div class="row">
                                <div class="col-md-10">
                                    <span><?php echo $top_pl['jenis_pelanggaran']; ?></span>
                                </div>
                                <div class="col-md-2">
                                    <span><?php echo $top_pl['top_5_pelanggaran']; ?></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Aktifitas Terbaru <small>Siswa TA <?php echo $tahun_aktif['tahun_akademik']; ?></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="col-md-12 col-sm-9 col-xs-12">

                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="true">Pelanggaran</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Prestasi</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">

                                <!-- start siswa pindah -->
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content2" aria-labelledby="profile-tab">
                                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Siswa</th>
                                                <th>Pelanggaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php if ($akt_pelanggaran) : ?>
                                                <?php foreach ($akt_pelanggaran as $row) : ?>
                                                    <tr>
                                                        <td width="20"><?php echo $no++; ?></td>
                                                        <td><?php echo $row['nis'] . ' - ' . $row['nama_siswa']; ?></td>
                                                        <td><?php echo $row['id_pelanggaran'] ? $row['jenis_pelanggaran'] : $row['keterangan']; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end siswa pindah -->

                                <!-- start siswa dikeluarkan -->
                                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Siswa</th>
                                                <th>Pelanggaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php if ($akt_prestasi) : ?>
                                                <?php foreach ($akt_prestasi as $rows) : ?>
                                                    <tr>
                                                        <td width="20"><?php echo $no++; ?></td>
                                                        <td><?php echo $rows['nis'] . ' - ' . $rows['nama_siswa']; ?></td>
                                                        <td><?php echo $rows['id_prestasi'] ? $rows['keterangan'] : $rows['jenis_prestasi']; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end siswa dikeluarkan -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /page content -->