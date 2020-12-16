<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Selamat Datang!</title>

  <!-- Favicons -->
  <link href="<?= base_url() ?>/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url() ?>/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?= base_url() ?>/assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
  <div class="container">
    <form class="form-login" action="<?php echo base_url().'auth/proses'?>" method="post">
        <h2 class="form-login-heading">Silahkan Login</h2>
        <div class="login-wrap">
        <input id="user_name" name="user_name" type="text" class="form-control" placeholder="Masukkan Username" autofocus="autofocus" required="required">
        

        <br>
        <input id="user_password" name="user_password" type="password" class="form-control" placeholder=" Masukkan Password" required="required">
        
        
          <!--label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
            </span>
            </label-->
      <br>
        <button name="login" class="btn btn-theme btn-block" type="submit">Masuk</button>
      <hr>
          <!--div class="login-social-link centered">
            <p>or you can sign in via your social network</p>
            <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
            <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
          </div-->
          
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?= base_url() ?>/assets/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>/assets/lib/bootstrap/js/bootstrap.min.js"></script>

  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="<?= base_url() ?>/assets/lib/jquery.backstretch.min.js"></script>

  <script>
    $.backstretch("<?= base_url() ?>/assets/img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
