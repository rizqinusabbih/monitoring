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

        </div>
    </div>

</div>
<!-- /page content -->