<?php
	$con=mysqli_connect("localhost","root","","hotel_manegment");
	$delid=$_REQUEST['id'];
	$del="delete from register where id=$delid";
	mysqli_query($con,$del);
	
?>