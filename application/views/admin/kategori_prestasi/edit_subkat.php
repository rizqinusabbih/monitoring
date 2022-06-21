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
                        <form action="<?php echo base_url('admin/kategoriprestasi/do_edit_subkat/' . $ketpres['id_subkat_prestasi']); ?>" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="id_kat_prestasi">Kategori Prestasi * :</label>
                                    <select name="id_kat_prestasi" id="id_kat_prestasi" class="form-control">
                                        <option value="">- Pilih Kategori Prestasi -</option>
                                        <?php foreach ($katpres as $one) : ?>
                                            <option value="<?php echo $one['id_kat_prestasi']; ?>" <?php echo $one['id_kat_prestasi'] == $ketpres['id_kat_prestasi'] ? 'selected' : ''; ?>><?php echo $one['nama_kategori']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger"><?php echo form_error('nama_subkategori'); ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="nama_subkategori">Keterangan * :</label>
                                    <input type="text" name="nama_subkategori" id="nama_subkategori" class="form-control" value="<?php echo $ketpres['nama_subkategori']; ?>" required />
                                    <small class="form-text text-danger"><?php echo form_error('nama_subkategori'); ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="poin_prestasi">Point * :</label>
                                    <input type="number" name="poin_prestasi" id="poin_prestasi" class="form-control" value="<?php echo $ketpres['poin_prestasi']; ?>" required />
                                    <small class="form-text text-danger"><?php echo form_error('poin_prestasi'); ?></small>
                                </div>
                                <br>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                    <a href="<?php echo base_url('admin/kategoriprestasi'); ?>" class="btn btn-sm btn-dark">Kembali</a>
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