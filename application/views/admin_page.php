<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<?php

	defined('BASEPATH') OR exit('No direct script access allowed');


	if ($this->ion_auth->logged_in()){

		$user = $this->ion_auth->users()->row_array();
		$username = $user['username'];
		$email = $user['email'];
		$first_name = $user['first_name'];
		$last_name = $user['last_name'];
		
	
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo ucfirst($username).' Homepage'?> HomePage</title>

   <!-- Bootstrap scripts-->
   
   

    <!-- Bootstrap core CSS -->
    <link href=<?php echo base_url("dist/css/bootstrap.min.css")?> rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=<?php echo base_url("dist/css/homepage.min.css")?> rel="stylesheet">

    <!-- Bootstrp Glyphicons-->
    <link href=<?php echo base_url("dist/css/font.css")?> rel="stylesheet">
     <link href=<?php echo base_url("dist/css/font-awesome.min.css")?> rel="stylesheet">
    

   
   
	<title>Admin Page</title>


</head>
<body class="nav-md">
	<div class="container body">	
		<div class="main_container">
			<div class="col-md-3 left_col">
		        <div class="left_col scroll-view">
		            <div class="navbar nav_title" style="border: 0;">
		              <a href="#" class="site_title"><span>DASHBOARD</span></a>
		            </div>

		            <div class="clearfix">
		            	<!-- menu profile quick info -->
		            	<div class="profile clearfix">
		              		<div class="profile_pic">
		                		<img src=<?php echo base_url("dist/img/user_default.png")?> alt="..." class="img-circle profile_img">
		              		</div>
		              		<div class="profile_info">
		                		<span>Welcome,</span>
		                	<h3><?php echo $first_name.' '.$last_name?></h3>
		              		</div>
		            	</div>
		            	<!-- /menu profile quick info -->

		            <br>

			            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    	          			<div class="menu_section active">
        	        			<h3>Main Menu</h3>
            	    				<ul class="nav side-menu" style="">
                	 					<li class=""><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    						<ul class="nav child_menu" style="display: none;">
                      							<li><a href="index.html">Dashboard</a></li>
                      							<li><a href="index2.html">Dashboard2</a></li>
                    						</ul>
                  						</li>
                  						<li class=""><a><i class="fa fa-user"></i> Users <span class="fa fa-chevron-down"></span></a>
                    						<ul class="nav child_menu" style="display: none;">
	                      						<li><a href="<?php echo site_url('Moodle/view_createUser'); ?>">Create User</a></li>
                      						<li><a href=<?php echo site_url('Moodle/view_User');?>>View Users</a></li>
                    						</ul>
                  						</li>
                  						<li><a><i class="fa fa-group"></i> Groups <span class="fa fa-chevron-down"></span></a>
                    						<ul class="nav child_menu" style="">
                      							<li><a href="general_elements.html">Create Groups</a></li>
                      							<li><a href="media_gallery.html">View Groups</a></li>
                    						</ul>
                  						</li>
                  						<li><a><i class="fa fa-folder-open"></i> Documents <span class="fa fa-chevron-down"></span></a>
                    						<ul class="nav child_menu" style="">
	                     						<li><a href=<?php echo site_url('Moodle/view_uploadFiles');?>>Upload Files</a></li>
                      							<li><a href="media_gallery.html">View Groups</a></li>
                    						</ul>
                  						</li>     
                					</ul>
              				</div>
            			</div>
		            </div>

		         </div>
		    </div>
		    <!--top nav-->
		    <div class=top_nav>
		    	<div class="nav_menu">
		    		<nav>
		    			<div class="nav toggle">
		    				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
		    			</div>
		    			<ul class="nav navbar-nav navbar-right">
				                <li class="dropdown">
				              <a data-target="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="dmenu"><?php echo ucfirst($username);?> <span class="caret"></span></a>
				              <ul class="dropdown-menu" aria-labeled-by="dmenu">
				                <li><a href="#">Profile</a></li>
				                <li><a href="#">Settings</a></li>
				                <li><a href="#">Help</a></li>
				                <li><a href=<?php echo base_url('auth/logout');?>>Logout <span class="glyphicon glyphicon-off pull-right"></span></a></li>
				              </ul>
				            </li>
			            </ul>
		    		</nav>
		    	</div>
			</div>
		    <div class="right_col" role="main" style="min-height: 1161px;">
				<div id="profile">
					<?php
						echo "Hello <b id='welcome'><i>" . ucfirst($username) . "</i> !</b>";
						echo "<br/>";
						echo "<br/>";
						echo "Welcome to Admin Page";
						echo "<br/>";
						echo "<br/>";
						echo "Your Username is " . $username;
						echo "<br/>";
						echo "Your Email is " . $email;
						echo "<br/>";
						
					?>
					
				
				</div>
			</div>
		</div>
	</div>

	
<br/>

   <script type="text/javascript" src=<?php echo base_url('dist/js/jquery/jquery.min.js'); ?>></script>
   <script type="text/javascript" src=<?php echo base_url('dist/js/bootstrap/bootstrap.min.js');?>></script>
   <script type="text/javascript" src=<?php echo base_url('dist/js/custom.min.js'); ?>></script>
</body>
</html>
<?php
}
	
	else {
		
		//echo 'No Session';
		header("location:".base_url("Auth/login"));
	}

?>