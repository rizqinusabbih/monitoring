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
                        <form action="<?php echo base_url('admin/guru/do_edit/' . $guru['id_guru']); ?>" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="nama_guru">Nama Guru * :</label>
                                    <input type="text" name="nama_guru" id="nama_guru" class="form-control" value="<?php echo $guru['nama_guru']; ?>" required />
                                    <small class="form-text text-danger"><?php echo form_error('nama_guru'); ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="nip">NIP :</label>
                                    <input type="text" name="nip" id="nip" class="form-control" value="<?php echo $guru['nip']; ?>" />
                                    <small class="form-text text-danger"><?php echo form_error('nip'); ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="username">Username*</label>
                                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $guru['username']; ?>">
                                    <small class="form-text text-danger"><?php echo form_error('username'); ?></small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password1">Password*</label>
                                    <input type="password" name="password1" id="password1" class="form-control" value="<?php echo set_value('password1'); ?>">
                                    <small class="form-text text-danger"><?php echo form_error('password1'); ?></small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password2">Re-type Password*</label>
                                    <input type="password" name="password2" id="password2" class="form-control" value="<?php echo set_value('password2'); ?>">
                                    <small class="form-text text-danger"><?php echo form_error('password2'); ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="level">Jabatan*</label>
                                    <select name="level" id="level" class="form-control">
                                        <option value="">- Pilih Jabatan -</option>
                                        <?php foreach ($level as $one) : ?>
                                            <option value="<?php echo $one; ?>" <?php echo $one == $guru['level'] ? 'selected' : ''; ?>><?php echo level($one); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger"><?php echo form_error('level'); ?></small>
                                </div>
                                <br>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                    <a href="<?php echo base_url('admin/guru'); ?>" class="btn btn-sm btn-dark">Kembali</a>
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