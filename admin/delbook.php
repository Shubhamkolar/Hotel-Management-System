<?php
	$con=mysqli_connect("localhost","root","","hotel_manegment");
	$delid=$_REQUEST['id'];
	$del="delete from book_room where id=$delid";
	if(mysqli_query($con,$del))
	{
		echo "
		<script>
		
		window.location.href='showbook.php';
		</script>";
	}
	else
	{
		echo "data not deleted";
	}
	
?>