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
        	
        </style>
	</head>
	<body>
		<div class="container-fluid" style="background-color: black; height: 100%;">
			<div class="row" >
				<div class="col-sm-12 col-xs-12 col-lg-12">
					<br/><br/><br/><br/><br/><br/>
					<p class="display-4 text-light text-center" style="text-shadow: 3px 3px 3px black">ADMIN LOGIN</p>
				</div>
			</div>
			<div class="row ">

				<div class="col-sm-4 col-xs-4 col-lg-4 ">
					
				</div>
				<div class="col-sm-4 col-xs-4 col-lg-4 ">
					<br/><br/><br/><br/><br/>
					<div class="card border-0"style=" background-color: transparent;">
						<div class="card-body">

							<form action="adminlogdb.php" method="post">
								<label class="text-light" style="text-shadow: 3px 3px 3px black;">User Name</label>
								<div class="input-group">
								  <div class="input-group-prepend">
								    <span class="input-group-text" id="basic-addon1"style="background-color: transparent; color: white;">@</span>
								  </div>
								  <input type="email" class="form-control"  aria-label="Username" name="uname" aria-describedby="basic-addon1" style="background-color: transparent; color: white;">
								</div>
								<br/>
								<label class="text-light">Password</label>
								<div class="input-group">
								  <div class="input-group-prepend">
								    <span class="input-group-text fa fa-lock" id="basic-addon1" style="background-color: transparent; color: white;"></span>
								  </div>
								  <input type="Password" class="form-control"  name="password" aria-label="Username" aria-describedby="basic-addon1"style="background-color: transparent; color: white;">
								</div>
								<br/>
								<button class="btn btn-outline-warning btn-block ">Login</button> 
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-xs-4 col-lg-4 ">
					
				</div>
			</div>
			<br/><br/><br/><br/><br/><br/><br/>
		</div>
	</body>
</html>