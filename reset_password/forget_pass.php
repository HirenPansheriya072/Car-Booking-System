<?php include('../connection.php');
session_start();
$message = $link = '';
if(isset($_POST['submit'])) {
	$email = $_POST['email'];
	$query = "SELECT * FROM registration WHERE email = '".$email."'";
	$result = mysqli_query($con,$query);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		$phone = $row['phone'];   
		$phone_encode = base64_encode($phone);
		$link = "<a href='Reset_pass.php?RESET_PASSWORD=$phone_encode' class='btn btn-info btn-sm'>Change Password..</a>";
		echo "<script>
					alert('Email match Successfully');
			</script>";
	}
	}else{
		echo "<script>
					alert('Email Not Found');
			</script>";
	}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>forget Password</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

				<style>
					button.close 
                  {
					color: black;
					font-size: 10rem;
					border: none;
					font-weight: 900;
					font-size: 45px;
					font-family: cursive;
					background: transparent;
					outline: none;
					margin-right: 60px;
                  }
				</style>


</head>
<body  class="bg-secondary, color: whitesmoke;">


	
		<a href="../index.php"><button type="btn"  name="close" class="close">X</button></a>


			

		<div class="container w-50 mt-5" style="padding: 105px;">
			<form class="bg-light p-5 shadow-lg" method="post" style="color: white;">
				<!-- <?php echo $message; ?> -->


				<h1 class="text-dark" style="font-size: 25px; text-align: center; background-color: #f9d806; padding: 10px; margin-top: -48px; margin-left: -48px; border-radius: 5px; width: 643px;">Email Verification</h1>
				<!-- <label for="Email" style="font-size: 18px;">Email</label> -->
				<input type="email" name="email" placeholder="Email Address" class="form-control form-control-sm" style="margin-top: 30px; height: 45px; font-size: 18px;" required><br>
				<button type="submit" name="submit" class="btn btn-success btn-sm">Reset Password</button>
				<?php echo $link; ?>
			</form>
		</div>
</body>
</html>
