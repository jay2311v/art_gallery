
<?php
include 'dbcon.php';
session_start();
if(isset($_POST['submit']))
{
$a=$_POST["image"];
//echo "<script> alert('hai');</script>";
$b=$_POST["gr"];
$c=$_POST["dob"];
$d=$_POST["mbno"];
$e=$_POST["address"];
$f=$_POST["country"];
$g=$_POST["state"];
$h=$_POST["city"];



$sql1="INSERT INTO `userdetails`( `gender`, `dob`, `mobno`, `address`, `country`, `state`, `city`, `img`) VALUES (	`$b`,`$c`,`$d`,`$e`,`$f`,`$g`,`$h`,`$a`)";
$result1=mysqli_query($con,$sql1);



echo"<script>alert('Data Entered Successfully');</script>)";

}

?>
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
<style>
    body {
    background-image: url("14.jpg");
    background-size: cover;
    background-position: fixed;
    background-repeat: no-repeat;
}
</style>
</style>
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
					<a class="navbar-brand" href="index.html">Gioia - Bootstrap Business Template</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">						
						<li>
							<a href="index.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
						</li>
						<li>
							<a href="index.php"><span aria-hidden="true" class="icon_house"></span><br>Buy Arts</a>
						</li>
						<li>
							<a href="index.php"><span aria-hidden="true" class="icon_house"></span><br>Artists</a>
						</li>
						
						<li>
							<a href="index.php"><span aria-hidden="true" class="icon_mail"></span><br>Logout</a>
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
                        <h1> User Home</h1>
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
                  <div align="left"><img src="us.png" alt="d" width="369" height="433">
                    <form name="form1" method="post" action="">
                      <label for="Upload image">Upload image</label>
                    </form>
                  </div>
                </div>
	                <div class="col-sm-3 about-us-text wow fadeInLeft">
	                  <h3>&nbsp;</h3>
                        
                      <table width="1493" height="1066" border="1" cellpadding="0" cellspacing="0">                      
<form name="myform" action="#" method="POST" id="form" enctype="multipart/form-data" >
                                <form action="">	                    	
								<div class="form-group">
								
   <label for="contact_image"> Select image to upload: </label>
   <input type="file" name="image" id="image" accept="image/*">
    </div>
	 <div class="form-group">
    <label for="contact-name">Firstname</label>
	                       
						 
	<input type="text" name="fname"  id="fname" placeholder="Enter your  Firstname..." class="contact-name form-control""contact-name">
	</div>
	<div class="form-group">
	<label for="contact-email">Lastname</label>
	<input type="text" name="lname" id="lname" placeholder="Enter your  Laststname..." class="contact-email form-control" >
	</div> 
	<div class="form-group">
	<label for="contact_gender">Gender</label> &nbsp; &nbsp;
	
	<input type="radio" name="gr"id="gr" value="Male" >
            Male
            &nbsp;
            <input name="gr"  id="gr"type="radio" value="Female"  />Female</div>
			<div class="form-group">
			 <label for="contact-subject">Email</label>
	 <input type="email" name="email" id="email" placeholder="Enter your email..." class="contact-subject form-control" >
          </div> 
<div class="form-group">		  
    <label for="contact-subject">Date Of Birth</label>
	 <input type="date" name="dob" id="dob" placeholder="Enter your Date Of Birth..." class="contact-subject form-control" required>
     </div>
	 <div class="form-group">
	 <label for="contact-message">Mobile number</label>
	<input type="text" name="mbno" id="mbno" placeholder="Enter your mobile number..." class="contact-message form-control"required>
    </div>
	<div class="form-group">
	<label for="contact-subject">Adress</label>
	<textarea name="address" id="address" rows="3" cols="5" placeholder="Enter your address..." class="contact-subject form-control" required></textarea>
    </div>
	<div class="form-group">
	<label for="contact-name">Country</label>					 
	<input type="text" name="country"  id="country" placeholder="Enter your  Country..." class="contact-name form-control""contact-name"required>
	</div>
	<div class="form-group">
	 <label for="contact-name">State</label>					 
	<input type="text" name="state"  id="state" placeholder="Enter your  State..." class="contact-name form-control""contact-name"required>
	 
	 </div>
	 <div class="form-group">
	 <label for="contact-name">City</label>					 
	<input type="text" name="city"  id="city" placeholder="Enter your  City..." class="contact-name form-control""contact-name"required>
						 </div>
	                    	
	                       <center> <button type="submit"  name="submit"id="submit" class="btn">Save</button></center>
                           
	                    </form>
						</table>
                        
                         
                        
                        
                        
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