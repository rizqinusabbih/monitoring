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
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Monitoring Siswa <small><?php echo 'TA' . $tahun_aktif['tahun_akademik']; ?></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div id="pie-chart"></div>
                    <!-- <canvas id="speedChart"></canvas> -->
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Monitoring Siswa <small><?php echo 'TA' . $tahun_aktif['tahun_akademik']; ?></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div id="total-monitoring"></div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /page content -->