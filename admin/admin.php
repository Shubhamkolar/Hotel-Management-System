<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
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
        <script>
           wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
        </script>
        <style>
        	#sk
        	{
        		animation: avi 2s linear infinite;
        		transform: rotate(180deg);
        	}
        	.card p:hover
        	{
        		font-size: 120px;
        	}
        </style>
	</head>
	<body>
		<div class="container-fluid p-0">
			<div class="row ">
				<div class="col-sm-8 col-xs-8 col-lg-8">
					<div class="btn-group mt-2" role="group" aria-label="Basic example">
						<a href="admin.php" role="button" type="button" class="btn btn-danger rounded"><span class="fa fa-home"></span> <big>Home</big></a>
						<a href="showregisteeruser.php" target="_self" role="button"type="button" class="btn btn-danger rounded"><span class="fa fa-pencil"></span> <big>All Register User</big></a>
						<a href="showcontact.php" role="button" type="button" class="btn btn-danger rounded"><span class="fa fa-phone"></span> <big>All Contact User</big></a>
						<a href="showbook.php" role="button" type="button" class="btn btn-danger rounded"><span class="fa fa-book"></span> <big>Booked Details</big></a>
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
				<div class="container" id="body">
					<br/>
					<div class="row">
						<div class="col-sm-3">
							<div class="card border-0" style="box-shadow: 3px 3px 3px blue;">
								<p class="display-1 fa fa-cart-plus text-center text-primary"></p>
								<b class="fa fa-2x text-center">120</b>
								<b class="text-center">New Cart</b>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="card border-0" style="box-shadow: 3px 3px 3px orange;">
								<p class="display-1 fa fa-comments text-center text-warning"></p>
								<b class="fa fa-2x text-center">52</b>
								<b class="text-center">New Comment</b>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="card border-0" style="box-shadow: 3px 3px 3px green;">
								<p class="display-1 fa fa-users text-center text-success"></p>
								<b class="fa fa-2x text-center">24</b>
								<b class="text-center">New Users</b>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="card border-0" style="box-shadow: 3px 3px 3px red;">
								<p class="display-1 fa fa-search text-center text-danger"></p>
								<b class="fa fa-2x text-center">25.2k</b>
								<b class="text-center">New Search</b>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>