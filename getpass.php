<!DOCTYPE html>
<html>
<head>
	<title></title>


	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body class="bgimg"><br><br><br><br><br>


	<style>
		
		.bgimg{
			background-image: url(img/q.jpg);
			background-position: center;
			background-size: cover;
			height:100vh;
			width:100%;
		}

		.container{
			width:70%;
			margin-bottom:30px;
		}

		.form-control
		{
			border-radius:20px;
			text-align: center;
			width:400px;
		}

	</style>

<?php include 'connection.php';  ?>


<div class="container" data-aos="flip-up">
	<div class="row" style=" background-color:#fff; border-radius:20px;">
		<div class="col-sm-12 col-xl-6 col-lg-6 col-md-10"><img src="img/fp.png" style="height:100%; width:100%;"></div>
			
		<div class="col-sm-12 col-xl-6 col-lg-6 col-md-10"> <br><br>
			<form  action="forgotpass.php" method ="POST">
				<h1 class="text-center"> Recover Your Password </h1><br><br>

				<div class="form-group">
					<input type="text" name="mail" class="form-control" placeholder="Enter your Email" required>
				</div>

				<div class="form-group">
					<input type="text" name="contect" class="form-control" placeholder="Enter your Contect" required>
				</div>


				<div class="text-center">
					<button class="btn btn-md btn-outline-primary mb-3 justify-content-center" name="getpass"> Get Password </button>
				</div>
			</form>

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