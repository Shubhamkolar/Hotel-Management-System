<?php
	$con=mysqli_connect("localhost","root","","hotel_manegment");
	$delid=$_REQUEST['id'];
	$del="delete from  register where reg_id=$delid";
	if(mysqli_query($con,$del))
	{
		echo "
		<script>
		
		window.location.href='showregisteeruser.php';
		</script>";
	}
	else
	{
		echo "data not deleted";
	}
	
?>