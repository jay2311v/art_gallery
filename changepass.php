<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>





<?php

$email=$_SESSION['email'];
//echo $us_id;

//echo $id;
$sql2="SELECT * from login where `email`='$email'";
$res=mysqli_query($con,$sql2);
$row4 = mysqli_fetch_array($res);
if(isset($_POST['submit']))
{
$email=$_POST["uname"];
$oldpss=$_POST["old"];
$newpass=$_POST["new"];
$conpass=$_POST["con"];
$b=SHA1($oldpss);
$p=SHA1($newpass);
	if($row4['pass']==$b)
	{
		
$sql="UPDATE `login` SET `pass`='$p' WHERE `email`='$email'";
//echo $sql;
mysqli_query($con,$sql);
echo '<script type="text/javascript">'; 
echo 'alert("Password  Updated Successfully!!");'; 
echo 'window.location = "userprofile.php";';
echo '</script>';;

	}
	else
	{
		echo '<script type="text/javascript">'; 
echo 'alert(" Current Password Incorrect  !!");'; 
echo '</script>';;
	}


}
?>




<script>
function validation()
{
if (document.changepassword.old.value=="")
	 {
		 document.changepassword.old.focus();
		 alert("enter old password");
		 return false;
	 }
if (document.changepassword.new.value=="")
	 {
		 document.changepassword.new.focus();
		 alert("provide a new password");
		 return false;
	 }
if (document.changepassword.con.value=="")
	 {
		 	 alert("provide confirm password");
		 document.changepassword.new.focus();
		 return false;
	 }
	// if (document.changepassword.old.value=document.changepassword.new.value) {
		// alert("same passwords");
		 //document.changepassword.new.focus();
		 //return false;

	 //}

if (document.changepassword.new.value!=document.changepassword.con.value)
	 {
		 alert("Mismatch password");
		 document.changepassword.con.focus();

		 return false;
	 }
}

</script>

<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:700,400">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/elegant-font/code/style.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<img src="assets/img/logo2.png" style="background-position:left top; width:91px";>
					<!-- <a class="navbar-brand" style="background-image: url(assets/img/logo2.png);" href="index.php"></a> -->
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">						
						<li>
							<a href="UserProfile.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
						</li>
						<li>
							<a href="buyerhome.php"><span aria-hidden="true" class="icon_camera"></span><br>Buy Arts</a>
						</li>
						
						<li class="active">
							<a href="#"><span aria-hidden="true" class="icon_profile"></span><br>Change Password</a>
						</li>
						
						<li>
							<a href="logout.php"><span aria-hidden="true" class="icon_tools"></span><br>Logout</a>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>

        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 page-title wow fadeIn">
                        <span aria-hidden="true" class="icon_profile"></span>
                        <h1> Change Password</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us Text -->
        <div class="about-us-container">
        	<div class="container">
	            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-3" >
                </div>
	                <div class="col-sm-3 about-us-text wow fadeInLeft">
                    
	                    <h3>&nbsp;</h3>
                        
                        
 <form name="changepassword" action="#" method="POST" id="changepassword" enctype="multipart/form-data" onSubmit="return validation()">
                               	                    	<div class="form-group">
	                  		<label for="contact-name">Email</label>
	                       	<input type="email" name="uname"  id="uname" placeholder="Enter your  Firstname..." class="contact-name form-control""contact-name" readonly value ='<?php echo $email ?> ' >
	                      </div>
	                    	<div class="form-group">
	                    		<label for="contact-email">Old Password</label>
	                	<input type="password" name="old" id="old" placeholder="Enter your  Laststname..." class="contact-email form-control" id="contact-email">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-subject">New Password</label>
	              	<input type="password" name="new" id="new" placeholder="Enter your email..." class="contact-subject form-control" id="contact-subject">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-message">Confirm Password</label>
	          	<input type="password" name="con" id="con" placeholder="Enter your password..." class="contact-message form-control" id="contact-message">
	                        </div> 
	                       <center> <button type="submit"  name="submit"  class="btn" onClick="login.php">Change Password</button></center>
                           
                        
                        
                        </form>
                        
                        
                  </div>
	            </div>
	        </div>
        </div>

       
	              
	        </div>
        </div>


<!-- Footer --><!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/flexslider/jquery.flexslider-min.js"></script>
        <script src="assets/js/jflickrfeed.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>