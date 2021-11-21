<!DOCTYPE html>
<html>
<head>
	<title>changepass</title>
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
	<div class="container-fluid p-0">
		<div class="row" style="box-shadow:3px 3px 3px black;">
			<div class="col-sm-8 col-xs-8 col-lg-8">
				<div class="btn-group mt-2" role="group" aria-label="Basic example">
					<a href="admin.php" role="button" type="button" class="btn btn-danger rounded"><span class="fa fa-home"></span> <big>Home</big></a>
					<a href="showregisteeruser.php" target="_self" role="button"type="button" class="btn btn-danger rounded"><span class="fa fa-pencil"></span> <big>All Register User</big></a>
					<a href="showcontact.php" role="button" type="button" class="btn btn-danger rounded"><span class="fa fa-phone"></span> <big>All Contact User</big></a>
					<a href="" role="button" type="button" class="btn btn-danger rounded"><span class="fa fa-bell"></span> <big>All Notification User</big></a>
				</div>
			</div>
			<div class="col-sm-4 col-xs-4 col-lg-4">
				<div class="dropdown">
				    <a href="" role="button" class="btn btn-danger dropdown-toggle mt-2 border float-right rounded" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <span class="fa fa-user"></span> <big>admin</big>
				    </a>
				    <br/><br/>
			        <div class="dropdown-menu bg-danger" aria-labelledby="dropdownMenuButton">
				   	    <a class="dropdown-item" href="changepass.php"><span class="fa fa-lock"></span> Change Password</a>
				        <a class="dropdown-item" href="adminlog.php" target="_blank"><span class="fa fa-power-off"></span> Logout</a>
				  </div>
				</div>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-am-12 col-xs-12 col-lg-12">
						<p class="display-4 text-center" style="font-family: Courier New;">Change Password</p>
					</div>
				</div>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-sm-2 col-xs-2 col-lg-2">
			</div>
			<div class="col-sm-8 col-xs-8 col-lg-8">
				<form action="changepassdb.php" method="post">
					<div class="form-group">
						<div class="form-row">
							<div class="col-12">
								<label>Old Password</label>
								<input type="password" name="olp" class="form-control"/>
							</div>
						</div>
						<div class="form-row">
							<div class="col-12">
								<label>New Password</label>
								<input type="password" name="np" class="form-control"/>
							</div>
						</div>
						<div class="form-row">
							<div class="col-12">
								<label>Confirm Password</label>
								<input type="password" name="cnp" class="form-control"/>
							</div>
						</div>
						<br/>
						<center><button class="btn btn-danger">Change</button></center>
					</div>
				</form>
			</div>
			<div class="col-sm-2 col-xs-2 col-lg-2"></div>
		</div>
	</div>
</body>
</html>