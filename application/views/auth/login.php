<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  
  <?php

   if($this->ion_auth->logged_in())
    {
      header("location:".base_url("Moodle/Admin_page"));
    }

    
  ?>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href=<?php echo base_url("dist/css/bootstrap.min.css");?> rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=<?php echo base_url("assets/css/ie10-viewport-bug-workaround.css");?> rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=<?php echo base_url("assets/css/signin.css");?> rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src=<?php echo base_url("assets/js/ie-emulation-modes-warning.js");?>></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

       <?php
        if (isset($message)) {
          echo "<div class='alert alert-danger' align='center' id='infoMessage'>";
          echo $message;
          echo "</div>";
        }
        ?>
      <div class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="username" class="sr-only">Username</label>

        <?php echo form_open("auth/login");?>

        <?php 

        $identity = array(
                      'name' => 'identity',
                      'id'   => 'identity',
                      'class'=> 'form-control',
                      'placeholder' => 'E-mail'
                    );
        $identity_attr = 'required autofocus';
        echo form_input($identity,'',$identity_attr);

        
        $password = array(
                      'name' => 'password',
                      'id'   => 'password',
                      'class'=> 'form-control',
                      'placeholder' => 'Password'
                    );
        $password_attr = 'required';

        echo form_password($password,'',$password_attr);
        ?>

        <div class="checkbox">
            <label>
                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> Remember Me
            </label>
        </div>

        <?php 

        $submit_attr = 'class="btn btn-lg btn-primary btn-block"';
        echo form_submit('submit', 'Login', $submit_attr);

        ?>

        <?php echo form_close();?>

        <a href="forgot_password" class="pull-center"><?php echo lang('login_forgot_password');?></a>

      </div>
    </div>    
  </body>
</html>