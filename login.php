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
<body style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(img/w.jpg);">

	<style>
		
		.form-control
		{
			border-radius:20px;
			text-align: center;
			width:400px;
		}

	</style>



<?php include 'connection.php';?>
<?php
if (isset($_POST['login'])) 
{
	$email = $_POST['mail'];
	$password = $_POST['pass'];

	$email_search = "select * from registration where email='$email'";
	$query = mysqli_query($con,$email_search);

	$email_check = mysqli_num_rows($query);

	if ($email_check) 
	{
		$email_pass = mysqli_fetch_assoc($query);
		$db_pass = $email_pass['password'];
		$_SESSION['username'] = $email_pass['username'];

		// $pass_decode = password_verify($password, $db_pass);

		if ($db_pass === $password) 
		{
			// echo "Login Successfull";
			?>
			<script>
				location.replace("viewbooks.php");
			</script>

			<?php
		}
		else
		{
			?>
			<script>
				// alert('Password Incorrect');
				Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Something went wrong!',
				  text: 'Your Password is incorrect'
				})
				// location.replace("login.php");
			</script>

			<?php
		}
	}
	else
	{
		?>
			<script>
				// alert('Email Invalid');
				Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Something went wrong!',
				  text: 'Email Invalid'
				})
				// location.replace("login.php");
			</script>

		<?php
	}
}


?>
 
	
	<div class="container"  data-aos="zoom-in">
	<div class="row" style=" background-color:#fff; border-radius:20px; margin-top:100px;">
		<div class="col-sm-12 col-xl-6 col-lg-6 col-md-6"><img src="img/login.png" style="height:100%; width:100%;"></div>
			
		<div class="col-sm-12 col-xl-6 col-lg-6 col-md-6"> <br><br>
			<form  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method ="POST">
				<h1 class="text-center"> Welcome Back :) </h1>
				<p class="text-center"> To keep connected with us please login with your personal information by email address and password </p><br><br>

				<div class="form-group">
					<input type="text" name="mail" class="form-control" placeholder="Enter your Email" required>
				</div>

				<div class="form-group">
					<input type="password" name="pass" class="form-control" placeholder="Enter your Password" required>
				</div>

				<div>
					
					<a href="getpass.php" class="nav-link" style="float:right"> forgot password? </a>
					<a href="index.php" class="nav-link" style="float:right"> Home </a>
				</div>

				<div class="text-center">
					<button class="btn btn-md btn-outline-primary  justify-content-center" name="login"> Login </button>
				</div>
			</form>

			<div class="text-center">
				<a href="register.php"><button class="btn btn-md btn-outline-primary mb-2 justify-content-center" style="margin-top:20px; margin-bottom: 30px;"> Signup </button></a>
			</div>

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