	<?php
		$con=mysqli_connect("localhost","root","","hotel_manegment");

		$a=$_POST['un'];
		$b=$_POST['mn'];
		$c=$_POST['eml'];
		$d=$_POST['ps'];
		$e=$_POST['gnd'];
		$f=$_POST['ct'];
		date_default_timezone_set("asia/kolkata");
		$datetime=date("d/m/y")." ".date("h:i:sa");

		$ins="insert into register(reg_name,reg_mobile,reg_email,reg_password,reg_gender,reg_city,reg_date) values('$a','$b','$c','$d','$e','$f','$datetime')";
		if(mysqli_query($con,$ins))
		{
			echo "<script>
				alert('data inserted');
			window.location.href='../register.php';

			</script>";
		}
		else
		{
			echo "stringn";
		}
	?>