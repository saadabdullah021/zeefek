<?php


session_start();
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>ZEEFEK</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/jquery.qtip.css" />
	<link rel="stylesheet" type="text/css" href="style/jquery-ui.min.css" />
	<link rel="stylesheet" type="text/css" href="style/superfish.css" />
	<link rel="stylesheet" type="text/css" href="style/flexnav.css" />
	<link rel="stylesheet" type="text/css" href="style/DateTimePicker.min.css" />
	<link rel="stylesheet" type="text/css" href="style/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" type="text/css" href="style/fancybox/helpers/jquery.fancybox-buttons.css" />
	<link rel="stylesheet" type="text/css" href="style/revolution/layers.css" />
	<link rel="stylesheet" type="text/css" href="style/revolution/settings.css" />
	<link rel="stylesheet" type="text/css" href="style/revolution/navigation.css" />
	<link rel="stylesheet" type="text/css" href="style/base.css" />
	<link rel="stylesheet" type="text/css" href="style/responsive.css" />
	<script type="text/javascript" src="script/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="./media/image/bg.jpg" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" class="my-login-validation" action="userlogin.php">
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="forgotpassword.php" class="float-right">
											Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div>

								<div class="form-group m-0">
									<input type="submit" class="btn btn-primary btn-block" value="Login" name="submit" />

								</div>
								<div class="mt-4 text-center">
									Don't have an account? <a href="userregister.php">Create One</a>
								</div>
								<?php
								if (isset($_GET['error'])) {
									print $_GET['error'];
								}

								?>
							</form>


							<br>
							<br>
							<?php
							$error = "";
							if (isset($_POST['submit'])) {
								$email = $_POST['email'];
								$pass = $_POST['password'];
								$select = mysqli_query($conn, "SELECT * from userregistration where user_email = '$email' AND user_password = '$pass'");

								if (mysqli_num_rows($select) === 1) {

									$row = mysqli_fetch_assoc($select);
									if ($row['user_email'] = $email && $row['user_password'] == $pass) {
										header("Location:bookingform.php");
										$_SESSION['user_name'] = $row['user_name'];
										$_SESSION['email'] = $row['user_email'];
										$_SESSION['password'] = $row['user_password'];
									} else {
										header("Location:userlogin.php?error=Invalid Email or Password");
									}
								}
								mysqli_close($conn);
							}
							?>

							<div class="form-group ">
								<button type="submit" onclick="backToBookingPage() " class="btn btn-primary btn-block">
									Back to Booking Page
								</button>
							</div>
						</div>

					</div>

					<div class="footer">
						By <a href="http://ZEEFEK.com" target="_blank">ZEEFEK</a> &copy; 2020
					</div>
				</div>
			</div>
		</div>
	</section>

	<script>
		function backToBookingPage() {
			window.location.href = "book-your-wash.php";
		}
	</script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>