<?php
include 'connection.php';

$id = $_GET['id'];

$deletequery = "delete from sellbooks where id=$id";
$query = mysqli_query($con, $deletequery);

if ($query) {
	?>

	<script>
		alert('deleted successfull');
	</script>

	<?php
	header('location:mybooks.php');
}else{
	?>
	<script type="">
		alert('Not deleted');
	</script>
	<?php
}
?>