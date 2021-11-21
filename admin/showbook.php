<?php

	$con=mysqli_connect("localhost","root","","hotel_manegment");
	$sel="select * from book_room";
	$r=mysqli_query($con,$sel);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../css/font-awesome.css"/>
		<link rel="stylesheet" href="../css/imagehover.css"/>
        <link rel="stylesheet" href="../css/animate.css"/>
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<script src="../js/jquery-3.3.1.slim.min.js"></script>
		<script src="../js/popper.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
        <script src="../js/wow.js"></script> 
</head>
<body>
	<Div class="container-fluid p-0">
		<div class="row " style="box-shadow: 4px 4px 4px black;">
			<div class="col-sm-8 col-xs-8 col-lg-8">
				<div class="btn-group mt-2" role="group" aria-label="Basic example">
					<a href="admin.php" role="button" type="button" class="btn  rounded btn-danger text-light"><span class="fa fa-home"></span> <big>Home</big></a>
					<a href="showregisteeruser.php" target="_self" role="button"type="button" class="btn  text-light  btn-danger rounded"><span class="fa fa-pencil"></span> <big>All Register User</big></a>
					<a href="showcontact.php" role="button" type="button" class="btn btn-danger text-light rounded"><span class="fa fa-phone"></span> <big>All Contact User</big></a>
					<a href="" role="button" type="button" class="btn btn-danger text-light rounded"><span class="fa fa-book"></span> <big>Booked Deatails</big></a>
				</div>
			</div>
			<div class="col-sm-4 col-xs-4 col-lg-4">
				<div class="dropdown">
				    <a href="" role="button" class="btn btn-light dropdown-toggle mt-2   bg-danger text-light float-right rounded" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <span class="fa fa-user"></span> <big>admin</big>
				    </a>
				    <br/><br/>
			        <div class="dropdown-menu bg-danger" aria-labelledby="dropdownMenuButton" >
				   	    <a class="dropdown-item text-light" href="changepass.php"><span class="fa fa-lock"></span> Change Password</a>
				        <a class="dropdown-item text-light" href="adminlog.php" target="_blank"><span class="fa fa-power-off"></span> Logout</a>
		            </div>
				</div>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-xs-12 col-lg-12">
				<p class="display-4 text-center" style="font-family: Courier New;">BOOKING DETAILS</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-xs-12 col-lg-12">
					<table border="1px" bgcolor="yellow" class="table">
						<tr>
							<th>Id</th>
							<th>First_name</th>
							<th>Last_Name</th>
							<th>E-Mail</th>
							<th>Mobile</th>
							<th>Check_In_Date & Time</th>
							<th>Check-Out-Date & Time</th>
							<th>Pickup-Address</th>
							<th>Destination-Address</th>
							<th>Rent</th>
							<td colspan="2">Tools</td>
						</tr>
					
					
						<?php
							while($k=mysqli_fetch_array($r,MYSQLI_BOTH))
							{
						?>
						<tr>
							<td><?php echo $k[0]; ?></td>
							<td><?php echo $k[1]; ?></td>
							<td><?php echo $k[2]; ?></td>
							<td><?php echo $k[3]; ?></td>
							<td><?php echo $k[4]; ?></td>
							<td><?php echo $k[5]; ?></td>
							<td><?php echo $k[6]; ?></td>
							<td><?php echo $k[7]; ?></td>
							<td><?php echo $k[8]; ?></td>
							<td><?php echo $k[9]; ?></td>
							<td><a href="delbook.php?id=<?php echo $k[0];?>" style="text-decoration: none;">DELETE</td>
						</tr>
						<?php
							}
						?>
					</table>
				
			</div>
		</div>
	</Div>
</body>
</html>