<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>A S M K | Login</title>
    <link href='<?php echo base_url('assets/img/favicon.ico'); ?>' rel='shortcut icon' type='image/x-icon'/>
     <!--Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
   
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">

        <div style="color:#3c8dbc" class="login-logo">
       <!-- <img style="margin-top:-12px" src="<?php echo base_url()?>" alt="Logo" height="50"> --> <b>A S M K</b>
      </div><!-- /.login-logo -->

        <?php
        if($this->session->flashdata('pesan') <> ''){
        ?>
          <div class="alert alert-dismissible alert-danger">
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <?php echo $this->session->flashdata('pesan');?>
          </div>
        <?php
        }
      ?>

      <div class="login-box-body">
        <p class="login-box-msg">Silahkan Login</p>
        <form action="<?php echo base_url('login/masuk');?>" method="POST">
          <div class="form-group has-feedback">
            <input type="text" name="username" autofocus required="" class="form-control" placeholder="Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" required="" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat"><span class="fa fa-sign-in"></span> Log In</button>
            </div><!-- /.col -->
          </div>
       </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
   
  </body>
</html>