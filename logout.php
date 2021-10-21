
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<title></title>
	 <meta http-equiv = "refresh" content = "1.5; url = http://localhost/college/index.php" />
	 <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>

	<?php

session_start();

session_destroy();

?>
<script type="">
	
	Swal.fire({
 	 icon: 'success',
  	text: 'You have successfully logged out',
  	footer: '<a href ="login.php">Do you want login again ?</a>'

})

</script>

<?php
	// header('location:login.php');
?>

</body>
</html>

