<?php
	$con=mysqli_connect("localhost","root","","hotel_manegment");
	$a=$_POST['fn'];
	$b=$_POST['ln'];
	$c=$_POST['eml'];
	$d=$_POST['mn'];
	$e=$_POST['cid'];
	$f=$_POST['cod'];
	$g=$_POST['pad'];
	$h=$_POST['dad'];
	$i=$_POST['pay'];

	$ins="insert into book_room(first_name,last_name,email,mobile,check_in_date,check_out_date,pickup_address,destination_address,rent) values('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
	if(mysqli_query($con,$ins))
	{
		echo "<script>
		alert('Room Booked');
		window.location.href='../index.php';</script>";
	}
	else
	{
		echo "error";
	}
?>