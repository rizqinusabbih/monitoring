<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?php echo $page; ?></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <!-- Alert -->
            <div class="col-md-12">
                <?php if ($this->session->flashdata('success')) : ?>
                    <div id="alert" class="alert alert-success" role="alert">
                        <label class="alert-label"><?php echo $this->session->flashdata('success'); ?></label>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('error')) : ?>
                    <div id="alert" class="alert alert-danger" role="alert">
                        <label class="alert-label"><?php echo $this->session->flashdata('error'); ?></label>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-md-3">
                            <select name="tahun_akademik" id="tahun_akademik" class="form-control">
                                <option value="all">Semua Siswa</option>
                                <?php foreach ($tahun_akademik as $ta) : ?>
                                    <option value="<?php echo $ta['id_tahun_akademik']; ?>" <?php echo $ta['id_tahun_akademik'] == $takademik ? 'selected' : ''; ?>>Angkatan TA <?php echo $ta['tahun_akademik'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Tampilkan</button>
                        </div>
                        <div class="col-md-7 text-right">
                            <a href="<?php echo base_url('admin/lapsiswa/pindah'); ?>" class="btn btn-warning">Siswa Pindah</a>
                            <a href="<?php echo base_url('admin/lapsiswa/dikeluarkan'); ?>" class="btn btn-danger">Siswa Dikeluarkan</a>
                        </div>
                    </div>
                </form>
            </div>

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
                        <table id="datatable-fixed-header" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nim</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Angkatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php if ($siswa) : ?>
                                    <?php foreach ($siswa as $row) : ?>
                                        <tr>
                                            <td width="20"><?php echo $no++; ?></td>
                                            <td><?php echo $row['nis']; ?></td>
                                            <td><?php echo $row['nama_siswa']; ?></td>
                                            <td><?php echo $row['nama_kelas'] ? $row['nama_kelas'] . ' - ' . $row['nama_jurusan'] : $row['status'] . ' tahun ' . $row['tahun_lulus_keluar']; ?></td>
                                            <td><?php echo $row['angkatan']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /page content -->