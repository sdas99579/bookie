<!DOCTYPE html>
<html>
<head>
	<title>
	</title>

	

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

</head>
<body>


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
  color: #f1f1f1;
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
		<img src="img/t.jpg" style="width:100%; height:60vh;" class="bgimg"><br><br>
    <h1 class="container text-center"> My Books </h1>
    <div id="main" class="top-left">
        <button class="openbtn" onclick="openNav()">☰ Menu</button> 
    </div>
</div><br><br><br>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="profile.php"> My profile </a>
  <a href="mybooks.php"> Mybooks </a>
  <a href="sellbooks.php"> Sell Books </a>
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

	

	<div class="center-div container bg-primary" style="border-radius: 10px">
		<div class="table-responsive text-center bg-light" style="border-radius: 10px">
			
			<table>
				<thead>
					<h5><th style="padding: 15px">ID</th></h5>
					<th style="padding: 15px">Book Name</th>
					<th style="padding: 15px">Authore Name</th>
					<th style="padding: 15px">Category</th>
					<th style="padding: 15px">Language</th>
					<th style="padding: 15px">Purchase Date</th>
					<th style="padding: 15px">Book Condition</th>
					<th style="padding: 15px">Price</th>
					<th style="padding: 15px">Description</th>
					<th style="padding: 15px" colspan="2">Action</th>
				</thead>
				<tbody>

					<?php

					include 'connection.php';
					$selectquery = "select * from sellbooks";
					$query = mysqli_query($con,$selectquery);
					
					while ($result = mysqli_fetch_assoc($query)) {
					?>

					<tr>
						<td> <?php  echo $result['id'];  ?> </td>
						<td> <?php  echo $result['bookname'];  ?> </td>
						<td> <?php  echo $result['authorename'];  ?> </td>
						<td> <?php  echo $result['category'];  ?> </td>
						<td> <?php  echo $result['language'];  ?> </td>
						<td> <?php  echo $result['purchasedate'];  ?> </td>
						<td> <?php  echo $result['bookcondition'];  ?> </td>
						<td> <?php  echo $result['price'];  ?> </td>
						<td> <?php  echo $result['description'];  ?> </td>
						<td><a href="update.php?id= <?php  echo $result['id'];?>"> <i class="fa fa-edit" style="color:green"></i> </a></td>
						<td><a href="delete.php?id= <?php  echo $result['id'];?>"> <i class="fa fa-trash" style="color:red"></i> </a></td>
					</tr>
				<?php
				}
				?>

				</tbody>
			</table>

		</div>
		
	</div>
</body>
</html>