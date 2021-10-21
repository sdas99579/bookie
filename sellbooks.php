<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body >

<style>
	body {
  font-family: "Lato", sans-serif;
}

.bgimg{
    background-position: center;
    background-size:cover;
    height:60vh;
    width:100%;
}

.top-left {
   position: absolute;
  top: 8px;
  left: 16px;
}

	.sidebar {
  height:100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top:0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color:#f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

.fab{
    padding:12px;
}

.fab:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-snapchat {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
	

</style>

<div>
	<img src="img/v.jpg" style="width:100%; height:60vh;" class="bgimg">
    <div id="main" class="top-left">
        <button class="openbtn" onclick="openNav()">☰ Menu</button> 
    </div>
</div><br><br><br>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="profile.php"> My profile </a>
  <a href="mybooks.php"> Mybooks </a>
  
  <a href="viewbooks.php">Viewbooks</a>
  <a href="myorder.php">Myorder</a>
  <a href="mycart.php"><i class="fas fa-cart-arrow-down"></i>   Mycart</a>
  
  <a href="gallery.php"><i class="far fa-image"></i>   Gallery </a>
  <a href="logout.php"><i class="fas fa-power-off"></i>  Logout</a>
  <a href="about.php"><i class="fas fa-info-circle"></i>  About us</a>
</div>


<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>



	<div class="container text-center"> <h1> Sellbooks </h1> </div>
	<div class="container border">
		<div>
			<form method="POST">
				  <div class="row">
					    <div class="col">
					    	<label> Book Name: </label>
					      <input type="text" class="form-control"  placeholder="Enter Book Name" name="name" required/>
					    </div>
					    <div class="col">
					    	<label> Authore Name: </label>
					      <input type="text" class="form-control" placeholder="Enter Authore Name" name="authore" required/>
					    </div>
				  </div><br>

				  <div class="row">
					    <div class="col">
					    	<label> Category: </label>
					      <input type list="Category" class="form-control" placeholder="--Select Category--" name="category" required/>
					      <datalist id="Category">
					      	<option value="Arts">
					      	<option value="Commerce">
					      	<option value="Science">
					      	<option value="Technology">
							<option value="Drama">
							<option value="Action and Adventure">
							<option value="Romance">
							<option value="Mystry">
							<option value="Horror">
							<option value="Health">
							<option value="Travel">
							<option value="Children">
							<option value="Dictionaries">
							<option value="History">
							<option value="Cookbooks">
							<option value="Mathematics">
							<option value="Autobiographies">
							<option value="Fantacy">
							<option value="Comics">
							<option value="Other">
					      </datalist>
					    </div>
					    <div class="col">
					    	<label> Book Language: </label>
					      <input type list="Language" class="form-control" placeholder="--Select Book Language--" name="language" required/>
					       <datalist id="Language">
						      	<option value="English">
								<option value="Hindi">
								<option value="Bengali">
								<option value="Assamese">
							</datalist>
					    </div>
				  </div><br>

				  <div class="row">
					    <div class="col">
					    	<label> Purchase Date: </label>
					      <input type="text" class="form-control" placeholder="Select Purchase Date" name="date" required/>
					    </div>
					    <div class="col">
					    	<label> Book Condition: </label>
					      <input type list="Condition" class="form-control" placeholder="--Select Book Conditions--" name="condition" required/>
					      <datalist id="Condition">
					      	<option> New </option>
					      	<option> Good </option>
					      	<option> Fair </option>
					      	<option> Poor </option>
					      </datalist>
					    </div>
				  </div>

				   <div class="row">
					    <div class="col">
					    	<label> Price: </label>
					      <input type="text" class="form-control" placeholder="Enter Price" name="price" required/>
					    </div>
					    <div class="col">
					    	<label> Desciption: </label>
					      <textarea class="form-control" rows="5" id="comment" name="desc" required/></textarea>
					    </div>
				  </div><br><br>

				  Upload file : <input type="file" name="file"><br><br>
				  <div class="modal-footer justify-content-right">
				  	 <button class="btn bg-primary text-white " name="submit" id="add" > Add your book </button>
				  </div>
				<!-- <script type="" id="add">
				  		Swal.fire(
  						'Congratulation!',
  						'Your book is added',
 						 'success'
					)
				  	
				  </script> -->
			</form>
		</div>
	</div>
</body>
</html>

<?php

	include 'connection.php';
	if (isset($_POST['submit'])) {
	
	$bookname =$_POST['name'];
	$authorename = $_POST['authore'];
	$category =$_POST['category'];
	$language = $_POST['language'];
	$purchasedate = $_POST['date'];
	$bookcondition = $_POST['condition'];
	$price = $_POST['price'];
	$description = $_POST['desc'];

		$insertquery = "insert into sellbooks(bookname,authorename,category,language,purchasedate,bookcondition,price,description) values('$bookname','$authorename','$category','$language','$purchasedate','$bookcondition','$price','$description')";
		$query = mysqli_query($con,$insertquery);
}
?>