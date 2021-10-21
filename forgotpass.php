<!-------Forget Password----->


<?php include 'getpass.php';   ?>
<?php
if(isset($_POST['getpass']))
{

	 $email= mysqli_real_escape_string($con, $_POST['mail']);
	 $mobile= mysqli_real_escape_string($con, $_POST['contect']);
	 
	 $email_search = "select * from registration where email='$email' ";
	 $query = mysqli_query($con, $email_search);

	 $email_check = mysqli_num_rows($query);

	if($email_check)
	 	{
		 	$email_mob= mysqli_fetch_assoc($query);          ////Fetching Corresponding Mobile

		 	$db_mob = $email_mob['contect'];
			
			$email_pass= mysqli_fetch_assoc($query);      //// Fetching Corresponding Password
			$db_pass = $email_mob['password'];
		

	 	if($db_mob===$mobile)
	 	{         									///Verifying Mobile
	 		?>
	 		<script> 
	 			alert("Your Password is = "+ '<?php echo $db_pass ?>');
				location.replace("login.php");
			</script>
			<?php
	 	}
	 	else
	 	{
		 	?>
			 	<script> 
			 		// alert("This Mobile Is Not Registered");
			 		Swal.fire({
					  icon: 'error',
					  title: 'Oops...',
					  text: 'This Mobile Is Not Registered',
					  // footer: '<a href>Why do I have this issue?</a>'
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

			 		Swal.fire({
					  icon: 'error',
					  title: 'Oops...',
					  text: 'Email not Registered',
					  // footer: '<a href>Why do I have this issue?</a>'
					})

			 	// 	alert("Email not Registered")
					// location.replace("login.php")
				</script>
				<?php
		}
}
?>