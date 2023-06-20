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
                        <form action="<?php echo base_url('admin/kelas/do_add'); ?>" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="nama_kelas">Nama Kelas * :</label>
                                    <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" value="<?php echo set_value('nama_kelas'); ?>" />
                                    <small class="form-text text-danger"><?php echo form_error('nama_kelas'); ?></small>
                                </div>
                                <!-- <div class="form-group col-md-12">
                                    <label for="id_jurusan">Jurusan :</label>
                                    <select name="id_jurusan" id="id_jurusan" class="form-control">
                                        <option value="">- Pilih Jurusan -</option>
                                        <?php foreach ($jurusan as $one) : ?>
                                            <option value="<?php echo $one['id_jurusan']; ?>"><?php echo $one['nama_jurusan']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger"><?php echo form_error('id_jurusan'); ?></small>
                                </div> -->
                                <div class="form-group col-md-12">
                                    <label for="tingkat">Tingkat *:</label>
                                    <p>
                                        <?php foreach (tingkat() as $item) : ?>
                                            <?php echo $item; ?>:
                                            <input type="radio" class="flat" name="tingkat" id="tingkat" value="<?php echo $item; ?>" />
                                        <?php endforeach; ?>
                                    </p>
                                    <small class="form-text text-danger"><?php echo form_error('tingkat'); ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="id_guru">Wali Kelas :</label>
                                    <select name="id_guru" id="id_guru" class="form-control">
                                        <option value="">- Pilih Wali Kelas -</option>
                                        <?php foreach ($guru as $two) : ?>
                                            <option value="<?php echo $two['id_guru']; ?>"><?php echo $two['nama_kelas'] ? $two['nama_guru'] . ' - Wali Kelas ' . $two['nama_kelas'] . ' ' . $two['nama_jurusan'] : $two['nama_guru']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger"><?php echo form_error('id_guru'); ?></small>
                                </div>
                                <br>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                                    <a href="<?php echo base_url('admin/kelas'); ?>" class="btn btn-sm btn-dark">Kembali</a>
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