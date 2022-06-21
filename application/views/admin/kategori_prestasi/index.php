<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?php echo $page; ?></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <a href="<?php echo base_url('admin/kategoriprestasi/tambah'); ?>" class="btn bg-primary btn-sm pull-right"><i class="fa fa-plus"></i> Tambah Kategori Prestasi</a>

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
                        <h2><?php echo $page; ?> <small>Klik icon panah di sebelah kanan untuk melihat <?php echo strtolower($page); ?></small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content" style="display: none;">
                        <table id="datatable-fixed-header" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kategori Prestasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php if ($katpres) : ?>
                                    <?php foreach ($katpres as $row) : ?>
                                        <tr>
                                            <td width="20"><?php echo $no++; ?></td>
                                            <td><?php echo $row['nama_kategori']; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('admin/kategoriprestasi/edit/' . $row['id_kat_prestasi']); ?>" class="btn btn-sm btn-warning" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="<?php echo base_url('admin/kategoriprestasi/delete/' . $row['id_kat_prestasi']); ?>" class="btn btn-sm btn-danger" data-placement="top" title="Hapus" onclick="return confirm('Apakah Anda benar-benar ingin menghapus kategori ini?');"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Subkat Prestasi -->

            <div class="clearfix"></div>
            <div class="col-md-12">
                <hr>
                <a href="<?php echo base_url('admin/kategoriprestasi/tambah_subkat'); ?>" class="btn btn-danger btn-sm pull-right"><i class="fa fa-plus"></i> Buat Keterangan Kategori Prestasi</a>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <!-- <h2>Keterangan</h2> -->
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
                                    <th>Kategori Prestasi</th>
                                    <th>Keterangan</th>
                                    <th>Poin Prestasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php if ($subkatpres) : ?>
                                    <?php foreach ($subkatpres as $row) : ?>
                                        <tr>
                                            <td width="20"><?php echo $no++; ?></td>
                                            <td><?php echo $row['nama_kategori']; ?></td>
                                            <td><?php echo $row['nama_subkategori']; ?></td>
                                            <td><?php echo $row['poin_prestasi']; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('admin/kategoriprestasi/edit_subkat/' . $row['id_subkat_prestasi']); ?>" class="btn btn-sm btn-warning" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="<?php echo base_url('admin/kategoriprestasi/delete_sub/' . $row['id_subkat_prestasi']); ?>" class="btn btn-sm btn-danger" data-placement="top" title="Hapus" onclick="return confirm('Apakah Anda benar-benar ingin menghapus keterangan kategori prestasi ini?');"><i class="fa fa-trash"></i></a>
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