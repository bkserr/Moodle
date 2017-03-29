<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Moodle</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href=<?php echo base_url("dist/css/bootstrap.min.css");?> rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=<?php echo base_url("dist/css/welcome.min.css");?> rel="stylesheet">

    <!-- Bootstrp Glyphicons-->
    <link href=<?php echo base_url("dist/css/font.css");?> rel="stylesheet">
     <link href=<?php echo base_url("dist/css/font-awesome.min.css");?> rel="stylesheet">
    

   
   
	

</head>
<body>

<header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Read On!</h1>
            <h3>Document Repository</h3>
            <br>
            <a href=<?php echo base_url("Auth/login")?> class="btn btn-dark btn-lg">Login</a>
        </div>
</header>
</body>
</html>