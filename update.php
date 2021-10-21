<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
<?php include 'links.php' ?>
</head>
<body>
	<div>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
			<ul class="navbar-nav m-auto ">
				<li class="nav-item active ">
					<a href="sellbooks.php" class="nav-link text-white"> Sell Books </a>
				</li>
			</ul>

			<ul class="navbar-nav m-auto">
				<li class="nav-item">
					<a href="mybooks.php" class="nav-link text-white "> My Books </a>
				</li>
			</ul>

			<ul class="navbar-nav m-auto">
				<li class="nav-item">
					<a href="Viewbooks.php" class="nav-link text-white"> View Books </a>
				</li>
			</ul>

			<ul class="navbar-nav m-auto">
				<li class="nav-item">
					<a href="myorder.php" class="nav-link text-white"> My Orders </a>
				</li>
			</ul>
		</nav>
	</div>

	<div class="">
		<img src="img/cover1.jpg" class="sellbook">
	</div><br><br>

	<div class="border bg-light container">
		<h3 class=" text-left"> Sell Books </h3>
	</div>
	<div class="container border">
		
		<div>
			<form method="POST">
				  <div class="row">

				  	<?php

						include 'connection.php';
						$id = $_GET['id'];
						$selectquery = "select * from sellbooks where id=$id";
						$query = mysqli_query($con,$selectquery);
						$result = mysqli_fetch_assoc($query);

						if (isset($_POST['submit'])) {
						$bookname =$_POST['name'];
						$authorename = $_POST['authore'];
						$category =$_POST['category'];
						$language = $_POST['language'];
						$purchasedate = $_POST['date'];
						$bookcondition = $_POST['condition'];
						$price = $_POST['price'];
						$description = $_POST['desc'];

						$updatequery = " update sellbooks set id=$id, bookname='$bookname',authorename='$authorename',category='$category',language= '$language',purchasedate='$purchasedate',bookcondition='$bookcondition',price='$price',description='$description' where id=$id";
						$query = mysqli_query($con,$updatequery);

						}
					?>


					    <div class="col">
					    	<label> Book Name: </label>
					      <input type="text" class="form-control"  placeholder="Enter Book Name" name="name" value="<?php echo $result['bookname'];?>">
					    </div>
					    <div class="col">
					    	<label> Authore Name: </label>
					      <input type="text" class="form-control" placeholder="Enter Authore Name" name="authore" value="<?php echo $result['authorename'];?>">
					    </div>
				  </div><br>

				  <div class="row">
					    <div class="col">
					    	<label> Category: </label>
					      <input type list="Category" class="form-control" placeholder="--Select Category--" name="category" value="<?php echo $result['category'];?>">
					      <datalist id="Category">
					      	<option value="Arts">
					      	<option value="Commerce">
					      	<option value="Science">
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
					      <input type list="Language" class="form-control" placeholder="--Select Book Language--" name="language" value="<?php echo $result['language'];?>">
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
					      <input type="text" class="form-control" placeholder="Select Purchase Date" name="date" value="<?php echo $result['purchasedate'];?>">
					    </div>
					    <div class="col">
					    	<label> Book Condition: </label>
					      <input type list="Condition" class="form-control" placeholder="--Select Book Conditions--" name="condition" value="<?php echo $result['bookcondition'];?>">
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
					      <input type="text" class="form-control" placeholder="Enter Price" name="price" value="<?php echo $result['price'];?>">
					    </div>
					    <div class="col">
					    	<label> Desciption: </label>
					      <input type="textarea" class="form-control" placeholder="Enter Desciption" name="desc" value="<?php echo $result['description'];?>">
					    </div>
				  </div><br><br>

				  <!-- Upload file : <input type="file" name=""><br><br>
 -->				  <div class="modal-footer justify-content-right">
				  	 <button class="btn bg-primary text-white " name="submit" value="update"> Submit </button>
				  </div>
				 
			</form>
		</div>
	</div>
</body>
</html>