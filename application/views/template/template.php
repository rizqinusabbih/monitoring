<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>
<?php $this->load->view('template/topbar'); ?>
<!-- start content -->
<?php if (!empty($content)) : ?>
    <?php $this->load->view($content); ?>
<?php endif; ?>
<!-- end content -->
<?php $this->load->view('template/footer'); ?>