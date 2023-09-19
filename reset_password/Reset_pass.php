<?php include('../connection.php');
session_start();
$phone = $_GET['RESET_PASSWORD'];
$message = $Home = '';
$_SESSION['user'] = $phone;
if ($_SESSION['user'] == '') {
		header("location:forget_pass.php");
}
else
{
if(isset($_POST['submit'])) {
	$password = $_POST['password'];
	$Repassword = $_POST['Repassword'];

	if ($password !== $Repassword) {
		echo "<script>
					alert('Password Not Match..!!');
					
			</script>";
	}
	else{
	$phone_decode = base64_decode($phone);
	$query = "UPDATE registration SET password = '$password' WHERE phone = '$phone_decode'";
	$result = mysqli_query($con,$query);
		if($result){
			echo "<script>
					alert('Reset Your Password Successfully');
					window.location.href = '../user_login.php';
			</script>";
			 $Home = "<a href='index.php' class='btn btn-success btn-sm'>Login</a>";
	}else{
		echo "<script>
					alert('Email match Successfully');
			</script>";
	}
	}
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
<body class="bg-secondary, color: whitesmoke;">


<a href="../user_login.php"><button type="btn"  name="close" class="close">X</button></a>




		<div class="container w-50 mt-5" style="padding: 105px;">
			<form class="bg-light p-5 shadow-lg" method="post" style="color: white;">
				<?php echo $message; ?>
				<h1 class="text-dark" style="font-size: 25px; text-align: center; background-color: #f9d806; padding: 10px; margin-top: -48px; margin-left: -48px; border-radius: 5px; width: 643px;">Forget Password</h1>
				<input type="text" name="password" placeholder="Password" class="form-control form-control-sm" style="margin-top: 30px; height: 45px; font-size: 18px;"required><br>
				<input type="text" name="Repassword" placeholder="Retype Password" class="form-control form-control-sm" style="margin-top: 7px; height: 45px; font-size: 18px;"required><br>
				<button type="submit" name="submit" class="btn btn-success btn-sm">Reset Password</button>
				 <?php echo $Home; ?>
			</form>
		</div>
</body>
</html>
