<?php
	
	$con=mysqli_connect("localhost","root","","hotel_manegment");

	$a=$_POST['name'];
	$b=$_POST['mn'];
	$c=$_POST['sub'];
	$d=$_POST['mg'];

	date_default_timezone_set("asia/kolkata");
	$datetime=date("d/m/y")." ".date("h:i:sa");
	
	$ins="insert into contact(name,e_mail,subject,message,date_time) values('$a','$b','$c','$d','$datetime')";
	if(mysqli_query($con,$ins))
	{
		echo "<script>
				alert('data inserted');
			window.location.href='../contact.php';

			</script>";
	}
	else
	{
		echo "not connected";
	}
?>