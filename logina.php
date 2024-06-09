<?php
include 'dbcon.php';
//session_start();
if(isset($_POST['submit']))
{
	 
	
$a=$_POST["email"];
$b=$_POST["password"];
$b=SHA1($b);
 

 

$sql="SELECT * FROM `login`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$us_id=$row['us_id'];
	?>

	<?php
	if($a==  $row['email']&&$b==$row['pass'])
	{
$_SESSION['email']= $a;
			if($a==  $row['email']&&$b==$row['pass']&&$row['role_id']=='2')
	{
$_SESSION['email']= $a;
$_SESSION['us_id']=$us_id;


		 header('location:userprofile.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE `us_id`=	$us_id";
         $result=mysqli_query($con,$sql1);
		 break;
	}

	else if($a==  $row['email']&&$b==$row['pass']&&$row['role_id']=='3')
	{
  $_SESSION['us_id']=$us_id;
		 header('location:artistprofile.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE `us_id`=	$us_id";
         $result=mysqli_query($con,$sql1);
		 break;
	}
  else if($a==  $row['email']&&$b==$row['pass']&&$row['role_id']=='1')
	{

		$_SESSION['us_id']=$us_id;
		 header('location:admin.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE `us_id`=  $us_id";
         $result=mysqli_query($con,$sql1);
		 break;
	}

	}
	else if($a!=  $row['email']&&$b!=$row['pass'])
	{
   
echo "<script> alert('Invalid username or password..!') </script>";
		header('location:login.php');
	}
	?>



	<?php
}
	
}




?>