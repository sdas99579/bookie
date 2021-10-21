<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<?php include 'links.php' ?>

</head>
<body>

	

	
	<img src="img/payment.jpg" class="bgimg"><br><br>
	<div class="container text-center" >
		<h3> Make Payment </h3><br>
		<h5> Payment Options: </h5>
	</div>

		<div class="container mt-3 container text-center">
	  		<input type="radio" data-toggle="collapse" data-target="#cod" name="r1" style="margin: 15px"> Cash On Delivery
	  		<input type="radio" data-toggle="collapse" data-target="#cc" name="r1" style="margin: 15px"> Credit Card
	  		<input type="radio" data-toggle="collapse" data-target="#dc" name="r1" style="margin: 15px"> Debit Card
	  		<input type="radio" data-toggle="collapse" data-target="#ptm" name="r1" style="margin: 15px"> Paytm
	  		<input type="radio" data-toggle="collapse" data-target="#gp" name="r1" style="margin: 15px"> Google Pay
	  		<input type="radio" data-toggle="collapse" data-target="#upi" name="r1" style="margin: 15px"> UPI<br><br>

	  		<div class="border bg-light container" data-aos="flip-left">
				<h3 class=" text-center"> Personal Information </h3>
			</div>

	  		<div class="container border" data-aos="flip-left">
		  		<div id="cod" class="collapse-show row">
		  			<div class="col-xl-6 col-lg-4 col-md-10 col-sm-12 d-block m-auto">
			  			Name :<input type="text" name="" class="form-control text-center" placeholder="Name" required>
			  		</div>

			  		<div class="col-xl-6 col-lg-4 col-md-10 col-sm-12 d-block m-auto">
			  			Vill/Town :<input type="text" name="" class="form-control text-center" placeholder="Vill/Town Name" required>
			  		</div>
		 		 </div><br>

		 		 <div id="cod" class="collapse-show row">
		  			<div class="col-xl-6 col-lg-4 col-md-10 col-sm-12 d-block m-auto">
			  			District/City :<input type="text" name="" class="form-control text-center" placeholder="District/City Name" required>
			  		</div>

			  		<div class="col-xl-6 col-lg-4 col-md-10 col-sm-12 d-block m-auto">
			  			State :<input type="text" name="" class="form-control text-center" placeholder="Sate Name" required>
			  		</div>
		 		 </div><br>

		 		 <div id="cod" class="collapse-show row">
		  			<div class="col-xl-6 col-lg-4 col-md-10 col-sm-12 d-block m-auto">
			  			Pincode :<input type="text" name="" class="form-control text-center" placeholder="Pincode" required>
			  		</div>

			  		<div class="col-xl-6 col-lg-4 col-md-10 col-sm-12 d-block m-auto">
			  			Mobile Number :<input type="text" name="" class="form-control text-center" placeholder="Mobile Number" required>
			  		</div>

		 		 </div><br><br>

		 		 <div id="cod" class="collapse-show row">
		  			<div class="col-xl-6 col-lg-4 col-md-10 col-sm-12 d-block m-auto">
			  			<div class="modal-footer justify-content-center">
				  	 		<button class="btn bg-primary text-white " name="submit"> Pay </button>
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


