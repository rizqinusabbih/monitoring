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
                        <form action="<?php echo base_url('admin/tahunakademik/do_add'); ?>" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="tahun_akademik">Tahun Akademik * :</label>
                                    <input type="text" name="tahun_akademik" id="tahun_akademik" class="form-control" placeholder="2022/2023" value="<?php echo set_value('tahun_akademik'); ?>" required />
                                    <small class="form-text text-danger"><?php echo form_error('tahun_akademik'); ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="angkatan">Tahun Angkatan * :</label>
                                    <input type="text" name="angkatan" id="angkatan" class="form-control" placeholder="2022" value="<?php echo set_value('angkatan'); ?>" required />
                                    <small class="form-text text-danger"><?php echo form_error('angkatan'); ?></small>
                                </div>
                                <br>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                                    <a href="<?php echo base_url('admin/tahunakademik'); ?>" class="btn btn-sm btn-dark">Kembali</a>
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