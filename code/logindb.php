<?php
	$con=mysqli_connect("localhost","root","","hotel_manegment");

	$a=$_POST['uname'];
	$b=$_POST['email'];
	$c=$_POST['pass'];
	$sel="select * from register where reg_email='$b'";
	$r=mysqli_query($con,$sel);
	$k=mysqli_fetch_array($r,MYSQLI_BOTH);
	if($k['reg_email']==$b)
	{	
		if($k['reg_password']==$c)
		{
				echo "<script>window.location.href='../profile.php';</script>";
		}
		else 
		{
			echo "password erreo";
		}
	}
	else
	{
		echo "User name is not found";
	}
?>