<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/template/back/'); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/template/back/'); ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/template/back/'); ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('assets/template/back/'); ?>vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Icon -->
    <link rel="icon" href="<?php echo base_url('assets/images/icon.png'); ?>">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/template/back/'); ?>build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="<?php echo base_url('auth'); ?>" method="post">
                        <h1>Login Form</h1>
                        <?php echo $this->session->flashdata('message'); ?>
                        <div>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required />
                        </div>
                        <small class="form-text text-danger"><?php echo form_error('username'); ?></small>
                        <div>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required />
                        </div>
                        <small class="form-text text-danger"><?php echo form_error('password'); ?></small>
                        <div>
                            <button type="submit" class="btn btn-default btn-sm">Log in</button>
                            <!-- <a class="reset_pass" href="#">Lupa password?</a> -->
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><?php echo $title; ?></h1>
                                <p>©2022 - <?php echo date('Y'); ?> All Rights Reserved</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>