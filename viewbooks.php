<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "college");
 
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
		$count = count($_SESSION["shopping_cart"]);
		$item_array = array(
		'item_id'		=>	$_GET["id"],
		'item_name'		=>	$_POST["hidden_name"],
		'item_price'		=>	$_POST["hidden_price"],
		'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
		echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
		'item_id'		=>	$_GET["id"],
		'item_name'		=>	$_POST["hidden_name"],
		'item_price'		=>	$_POST["hidden_price"],
		'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}
 
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
		if($values["item_id"] == $_GET["id"])
		{
		unset($_SESSION["shopping_cart"][$keys]);
		echo '<script>alert("Item Removed")</script>';
		echo '<script>window.location="viewbooks.php"</script>';
		}
		}
	}
}
 
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	</head>
	<body>



		<style>

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size:5rem;
  font-family: 'Piedra', cursive;
}

.footer-brand{
  font-size:2.5rem;
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

.fa-facebook:hover{
  color: #3B5998;
}

.fa-instagram:hover{
  color: #125688;
}

.fa-twitter:hover{
  color: #55ACEE;
}

.fa-youtube:hover{
  color: #bb0000;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

.logoimg{
  background-position:center;
  background-size:cover;
  height:180px;
  width:200px;
}

</style>
<div style="position: relative;text-align: center;color:white;">
  <img src="img/y.jpg" style="width:100%; height:80vh;">
    <div id="main" class="top-left">
        <button class="openbtn" onclick="openNav()">☰ Menu</button>
  </div>
</div><br><br>

	<div class="container text-center">
		<h1> Viewbooks </h1>
	</div>

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
		<div class="container">
		<?php
		$query = "SELECT * FROM viewbooks ORDER BY id ASC";
		$result = mysqli_query($connect, $query);
		if(mysqli_num_rows($result) > 0)
		{
		while($row = mysqli_fetch_array($result))
		{
		?>
		<div class="col-md-3">
		<form method="post" style="margin-top:20px;margin-bottom: 20px" action="viewbooks.php?action=add&id=<?php echo $row["id"]; ?>">
		<div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; padding:16px;" align="center">
		<img src="<?php echo $row["image"]; ?>" style="height:170px;width:150px" class="img-fluid" /><br />
 
		<h4 class="text-info"><?php echo $row["name"]; ?></h4>
 
		<h4 class="text-danger">&#x20B9; <?php echo $row["price"]; ?></h4>
 
		<input type="text" name="quantity" value="1" class="form-control" />
 
		<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
 
		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
 
		<input type="submit"  name="add_to_cart"  style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
 
		</div>
		</form>
		</div>
		<?php
		}
		}
		?>
		
	</body>
</html>