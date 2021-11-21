<?php  
	$con=mysqli_connect("localhost","root","","hotel_manegment");

	$a=$_POST['uname'];
	$b=$_POST['password'];
	$sel="select * from adminlog where user_name='$a'";
	$r=mysqli_query($con,$sel);
	$k=mysqli_fetch_array($r,MYSQLI_BOTH);
	if($k['0']==$a)
	{
		if($k['1']==$b)
		{
			session_start();
			$_SESSION['admin']=$a;
			echo "<script>window.location.href='admin.php';</script>";
		}
	}
	else
	{
		echo "User name is not found";
	}
?>