<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	 <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

</head>
<body class="bgimg"><br><br><br>

<style>
	
.bgimg{
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.2)), url(img/t.jpg);
	height:100vh;
	background-size:cover;
	background-position:center;
}


.form-control
		{
			border-radius:20px;
			text-align: center;
			width:400px;
		}


</style>

<?php 
	include 'connection.php';
	if (isset($_POST['register'])) {
	
	$username = mysqli_real_escape_string($con, $_POST['user']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$contect = mysqli_real_escape_string($con,$_POST['mobile']);
	$password = mysqli_real_escape_string($con, $_POST['pass']);
	$confirmpass = mysqli_real_escape_string($con, $_POST['cpass']);
	
	// $pass = password_hash($password, PASSWORD_BCRYPT);
	// $cpassword = password_hash($confirmpass, PASSWORD_BCRYPT);

	$emailquery = "select * from registration where email='$email'";
	$query = mysqli_query($con,$emailquery);

	$emailcount = mysqli_num_rows($query);

	if ($emailcount>0) 
		{
			?>
			<script type="">
				alert('Email already exist');
			</script>

			<?php
		}
	else
		{
			if ($password === $confirmpass) 
				{
					$insertquery = "insert into registration(username,email,contect,password,confirmpass) values('$username','$email','$contect','$password','$confirmpass')";
					$iquery = mysqli_query($con,$insertquery);

							if ($iquery)
							 {
								?>

									<script >
										Swal.fire(
  											'Good job!',
  											'Your Account is created!',
 											 'success'
										)
									</script>

								<?php
							}
							else
							{
								?>
								<script>
									alert('No Inserted');
								</script>
								<?php
							}

				}
					else
						{
							?>
							<script>
								alert('password are not matching');
							</script>
							<?php
		}				}
	
}
?>



<div class="container"  data-aos="fade-down">
	<div class="row" style=" background-color:#fff; border-radius:20px;">
		<div class="col-sm-12 col-xl-6 col-lg-6 col-md-10"><img src="img/register.png" style="height:100%; width:100%;"></div>
			
		<div class="col-sm-12 col-xl-4 col-lg-6 col-md-10"> <br><br>
			<form  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method ="POST">
				<h1 class="text-center"> Bookie 😀</h1><br>
				<div class="form-group">
					<input type="text" name="user" class="form-control" placeholder="Enter your Username" required>
				</div>

				<div class="form-group">
					<input type="text" name="email" class="form-control" placeholder="Enter your Email" required>
				</div>

				<div class="form-group">
					<input type="text" name="mobile" class="form-control" placeholder="Enter your Mobile no" required>
				</div>

				<div class="form-group">
					<input type="password" name="pass" class="form-control" placeholder="Enter your Password" required>
				</div>

				<div class="form-group">
					<input type="password" name="cpass" class="form-control" placeholder="Enter your Confirm Password" required>
				</div>

				<div class="text-center">
					<button class="btn btn-md btn-outline-primary mb-4 justify-content-center" name="register"> Create Account </button>
				</div>
			</form>

			<div class="text-center">
				<a href="login.php"><button class="btn btn-md btn-outline-primary mb-4 justify-content-center"> Login </button></a>
			</div>
		</div>
		
	</div>

</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 300,
      duration:2000
    });
  </script>


</body>
</html>