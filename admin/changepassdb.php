<?php
    
	
	
	$con=mysqli_connect("localhost","root","","hotel_manegment");
	$a=$_POST['olp'];
	$b=$_POST['np'];
	$c=$_POST['cnp'];
	session_start();
	$sesid=$_SESSION['admin'];	
	echo $sesid;
	$sel="select * from adminlog where user_name='$sesid'";
	$r=mysqli_query($con,$sel);
	$k=mysqli_fetch_array($r,MYSQLI_BOTH);
	echo $sel;
	if($k['1']==$a)
	{
		if($b==$c)
		{
			$up="update adminlog set password='$b' where user_name='$sesid'";
			if(mysqli_query($con,$up))
			{
				echo "<script>alert('Password Changed');window.location.href='adminlog.php';</script>";
			}
			else
			{
				echo "password not change";
			}
		}
		else
		{
			echo "new pass and conf pass not match";
		}
	}
	else
	{
		echo "old pass not match";
	}
?>