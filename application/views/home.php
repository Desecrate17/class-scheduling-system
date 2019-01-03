<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Class Scheduling System</title>
	 <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/dist/css/bootstrap.css">
	 <link rel="stylesheet" type="text/css" href="assets/css/style.css">


</head>
<body class="bg-dark">

  <div class="sufee-login d-flex align-content-center flex-wrap">     
    <div class="container">       
      <div class="login-content">
        <div class="login-logo">
          <a href="index.html">
              <img class="align-content" src="<?php echo base_url('assets/images/tup.jpg'); ?>">
          </a>
        </div>  
        <div class="section-page-wrap">
          <div class="banner-full-image">
            <div class="login-form">
              <?php
                $error_msg = $this->session->flashdata('error_msg');
                if ($error_msg) {
                  ?>
                    <div style="font-size: 12px; margin-bottom: 12px" class="text-danger">
                      <?php echo $error_msg; ?>
                    </div>
                  <?php
                }
              ?>
          	<form class="form" action="<?php echo site_url('Home/login'); ?>" method='post'>
              <div class="form-group">
                <label>Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username">             
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password">
              </div><br>
              <input type="submit" name="submit" value="Submit" class="btn btn-success btn-flat m-b-30 m-t-30">
            </form> 
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>      

</body>
</html>