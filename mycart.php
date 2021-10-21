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
    'item_id'   =>  $_GET["id"],
    'item_name'   =>  $_POST["hidden_name"],
    'item_price'    =>  $_POST["hidden_price"],
    'item_quantity'   =>  $_POST["quantity"]
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
    'item_id'   =>  $_GET["id"],
    'item_name'   =>  $_POST["hidden_name"],
    'item_price'    =>  $_POST["hidden_price"],
    'item_quantity'   =>  $_POST["quantity"]
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
    // echo '<script>alert("Item Removed")</script>';
    ?>

      <script type="">
  
  Swal.fire({
   icon: 'success',
    text: 'Remove successful',

})

</script>


    <?php
    echo '<script>window.location="mycart.php"</script>';
    }
    }
  }
}
 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<?php include'connection.php';?>
<body>


	<style>

				
		body {
  font-family: "Lato", sans-serif;
}

.bgimg{
	 background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.5)) , url(../img/f.jpg);
    background-position: center;
    background-size:cover;
    height:60vh;
    width:100%;
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

.top-left {
   position: absolute;
  top: 8px;
  left: 16px;
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
    <img src="img/w.jpg" class="bgimg">
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

 <div class="container">
  

<div style="clear:both"></div>
    <br />
    <h1 class="cantainer text-center"> My Cart  <i class="fas fa-cart-arrow-down"></i></h1><br>
    <div class="table-responsive">
    <table class="table table-bordered text-center " style="border:3px solid #5cb85c;">
    <tr>
    <th width="30%">Item Name</th>
    <th width="10%">Quantity</th>
    <th width="10%">Price</th>
    <th width="10%">Total</th>
    <th width="20%" colspan="2">Action</th>
    </tr>
    <?php
    if(!empty($_SESSION["shopping_cart"]))
    {
    $total = 0;
    foreach($_SESSION["shopping_cart"] as $keys => $values)
    {
    ?>
    <tr>
    <td><?php echo $values["item_name"]; ?></td>
    <td><?php echo $values["item_quantity"]; ?></td>
    <td>&#x20B9; <?php echo $values["item_price"]; ?></td>
    <td>&#x20B9; <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
    <td><a href="mycart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span  class="text-danger">Remove</span></a><td> <a href="" class="text-danger"> Place Order </a> </td></td>
    </tr>
<!--     <script type="" id="add">
              Swal.fire(
              'Congratulation!',
              'Your order is placed',
             'success'
          )
            
          </script> -->
    <?php
    $total = $total + ($values["item_quantity"] * $values["item_price"]);
    }
    ?>
    <tr>
    <td colspan="3" align="right">Total</td>
    <td align="right">&#x20B9; <?php echo number_format($total, 2); ?></td>
    <td></td>
    </tr>
    <?php
    }
    ?>
    
    </table>
    </div>
    </div>
  </div>
  <br />
</body>
</html>