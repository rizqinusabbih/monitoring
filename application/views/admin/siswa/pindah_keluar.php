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
            <div class="col-md-8 col-sm-12 col-xs-12">
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
                        <form action="<?php echo base_url('admin/siswa/do_out'); ?>" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="id_siswa">Siswa * :</label>
                                    <select name="id_siswa" id="id_siswa" class="form-control">
                                        <option value="">- Pilih Siswa -</option>
                                        <?php foreach ($siswa as $one) : ?>
                                            <option value="<?php echo $one['id_siswa']; ?>"><?php echo $one['nis'] . ' - ' . $one['nama_siswa']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger"><?php echo form_error('id_siswa'); ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="status">Status * :</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="">- Pilih Status -</option>
                                        <option value="pindah">Pindah</option>
                                        <option value="dikeluarkan">Dikeluarkan</option>
                                    </select>
                                    <small class="form-text text-danger"><?php echo form_error('status'); ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="keterangan_keluar">Keterangan* :</label>
                                    <textarea name="keterangan_keluar" id="keterangan_keluar" class="form-control"></textarea>
                                    <small class="form-text text-danger"><?php echo form_error('keterangan_keluar'); ?></small>
                                </div>
                                <br>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-sm btn-primary">Keluarkan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12">
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
                        <ul class="list-group">
                            <li class="list-group-item active" aria-current="true">Catatan !</li>
                            <li class="list-group-item">Siswa yang namanya telah dimasukkan ke dalam daftar siswa pindah / keluar, akan dianggap keluar dari sekolah dan tidak akan dapat dimonitoring. <br> <b class="text-danger">Pastikan siswa terlebih dahulu sebelum mengklik tombol KELUARKAN!</b></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Daftar Siswa Pindah / Keluar <small>TA <?php echo $tahun_aktif['tahun_akademik']; ?></small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
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
                                    <li role="presentation" class="active"><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="true">Siswa Pindah</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Siswa Dikeluarkan</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">

                                    <!-- start siswa pindah -->
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content2" aria-labelledby="profile-tab">
                                        <table id="datatable-fixed-header" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nim</th>
                                                    <th>Nama Siswa</th>
                                                    <th>Tahun Pindah</th>
                                                    <th>Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php if ($pindah) : ?>
                                                    <?php foreach ($pindah as $row) : ?>
                                                        <tr>
                                                            <td width="20"><?php echo $no++; ?></td>
                                                            <td><?php echo $row['nis']; ?></td>
                                                            <td><?php echo $row['nama_siswa']; ?></td>
                                                            <td><?php echo $row['tahun_lulus_keluar']; ?></td>
                                                            <td><?php echo $row['keterangan_keluar']; ?></td>
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
                                                    <th>Nim</th>
                                                    <th>Nama Siswa</th>
                                                    <th>Tahun Dikeluarkan</th>
                                                    <th>Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php if ($dikeluarkan) : ?>
                                                    <?php foreach ($dikeluarkan as $rows) : ?>
                                                        <tr>
                                                            <td width="20"><?php echo $no++; ?></td>
                                                            <td><?php echo $rows['nis']; ?></td>
                                                            <td><?php echo $rows['nama_siswa']; ?></td>
                                                            <td><?php echo $rows['tahun_lulus_keluar']; ?></td>
                                                            <td><?php echo $rows['keterangan_keluar']; ?></td>
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

</div>
<!-- /page content -->