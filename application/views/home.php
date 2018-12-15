<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Class Scheduling System</title>
	 <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.1.3/dist/css/bootstrap.css">
	 <link rel="stylesheet" type="text/css" href="assets/css/style.css">


</head>
<body>
  <div class="section-page-wrap">
    <div class="banner-full-image">
      <div class="banner-title">
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
        Username:<br>
        <input type="text" name="username" placeholder="Username">
        <br>
        </div>
        Password:<br>
        <input type="password" name="password" placeholder="Password">
        <br><br>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
      </form> 
      </div>
    </div>
  </div>

</body>
</html>