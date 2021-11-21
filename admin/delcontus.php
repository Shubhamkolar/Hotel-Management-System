<?php
	$con=mysqli_connect("localhost","root","","hotel_manegment");
	$delid=$_REQUEST['id'];
	$del="delete from contact where id=$delid";
	if(mysqli_query($con,$del))
	{
		echo "
		<script>
		alert('data deleted');
		window.location.href='showcontact.php';
		</script>";
	}
	else
	{
		echo "data not deleted";
	}
	
?>