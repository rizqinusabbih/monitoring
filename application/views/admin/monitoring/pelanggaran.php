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
                <div class="x_panel" style="height: auto;">
                    <div class="x_title">
                        <h2>Form Input Pelanggaran <small>Klik icon panah di sebalah kanan untuk membuka/menutup form</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content" style="display: none;">
                        <form action="<?php echo base_url('admin/mpelanggaran/do_add'); ?>" method="post">
                            <div class="form-row">
                                <input type="hidden" name="id_tahun_akademik" id="id_tahun_akademik" class="form-control" value="<?php echo $tahunakademik['id_tahun_akademik']; ?>" readonly />
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
                                    <label for="id_pelanggaran">Pelanggaran * :</label>
                                    <select name="id_pelanggaran" id="id_pelanggaran" class="form-control">
                                        <option value="">- Pilih Jenis Pelanggaran -</option>
                                        <?php foreach ($pelanggaran as $two) : ?>
                                            <option value="<?php echo $two['id_pelanggaran']; ?>"><?php echo $two['kode_pelanggaran'] . ' - ' . $two['jenis_pelanggaran']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger"><?php echo form_error('id_pelanggaran'); ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="jml_poin">Poin* :</label>
                                    <input type="text" name="jml_poin" id="jml_poin" class="form-control" readonly></input>
                                    <small class="form-text text-danger"><?php echo form_error('jml_poin'); ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="keterangan">Keterangan :</label>
                                    <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
                                    <small class="form-text text-danger"><?php echo form_error('keterangan'); ?></small>
                                </div>
                                <br>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <!-- <h2>Daftar Siswa</h2> -->
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
                                    <th>Nis</th>
                                    <th>Nama Siswa</th>
                                    <th>Jumlah Pelanggaran</th>
                                    <th>Total Point</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php if ($pelanggaran_siswa) : ?>
                                    <?php foreach ($pelanggaran_siswa as $row) : ?>
                                        <tr>
                                            <td width="20"><?php echo $no++; ?></td>
                                            <td><?php echo $row['nis']; ?></td>
                                            <td><?php echo $row['nama_siswa']; ?></td>
                                            <td><?php echo $row['prestasi']; ?></td>
                                            <td><?php echo $row['point']; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('admin/mpelanggaran/detail/' . $row['id_siswa']); ?>" class="btn btn-sm btn-warning" data-placement="top" title="Detail"><i class="fa fa-search"></i></a>
                                            </td>
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