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
                <div class="x_panel">
                    <div class="x_title">
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form action="<?php echo base_url('admin/siswa/do_add'); ?>" method="post">
                            <div class="form-row">
                                <input type="hidden" name="id_tahun_akademik" id="id_tahun_akademik" class="form-control" value="<?php echo $tahun_akademik['id_tahun_akademik']; ?>" readonly />
                                <div class="form-group col-md-12">
                                    <label for="nis">NIS * :</label>
                                    <input type="text" name="nis" id="nis" class="form-control" value="<?php echo set_value('nis'); ?>" required />
                                    <small class="form-text text-danger"><?php echo form_error('nis'); ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="nama_siswa">Nama Siswa * :</label>
                                    <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" value="<?php echo set_value('nama_siswa'); ?>" required />
                                    <small class="form-text text-danger"><?php echo form_error('nama_siswa'); ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="id_kelas">Kelas * :</label>
                                    <select name="id_kelas" id="id_kelas" class="form-control">
                                        <option value="">- Pilih Kelas -</option>
                                        <?php foreach ($kelas as $one) : ?>
                                            <option value="<?php echo $one['id_kelas']; ?>"><?php echo $one['nama_kelas'] . ' - ' . $one['nama_jurusan']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger"><?php echo form_error('id_kelas'); ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="nama_ibu">Nama Ibu :</label>
                                    <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" value="<?php echo set_value('nama_ibu'); ?>" />
                                    <small class="form-text text-danger"><?php echo form_error('nama_ibu'); ?></small>
                                </div>
                                <br>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                                    <a href="<?php echo base_url('admin/siswa'); ?>" class="btn btn-sm btn-dark">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /page content -->