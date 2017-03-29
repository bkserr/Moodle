<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  
  <?php

   if(isset($this->session->userdata['logged_in']))
    {
      header("location:".base_url("User_Authentication/user_login_process"));

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
    <link href=<?php echo base_url("dist/css/bootstrap.min.css")?> rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=<?php echo base_url("dist/css/signin.css")?> rel="stylesheet">

    
  </head>

  <body>

    <div class="container">

      <div class="form-signin">
      <?php


        //echo form_open('User_Authentication/user_login_process');
        echo form_open('auth/login');
      ?>
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="username" class="sr-only">Username</label>
        <input type="text" name="username" id="username" placeholder="username" class="form-control" required autofocus>
        <label for="Password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" placeholder="**********" class="form-control"  required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value='Login' name='submit'/>
        <?php echo form_close(); ?>
      </div>
     <?php
        if (isset($error_message)) {
          echo "<div class='alert alert-danger' align='center'>";
          echo $error_message;
          echo "</div>";
        }
        if (isset($message_display)) {
          echo "<div class='alert alert-success' align='center'>";
          echo $message_display;
          echo "</div>";
        }
      ?>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=<?php echo base_url("dist/js/ie10-viewport-bug-workaround.js")?>></script>
  </body>
</html>
