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

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="css/my-login.css" />
</head>

<body class="my-login-page">
  <section class="h-100">
    <div class="container h-100">
      <div class="row justify-content-md-center align-items-center h-100">
        <div class="card-wrapper">
          <div class="brand">
          <img src="./media/image/bg.jpg" alt="logo">
          </div>
          <div class="card fat">
            <div class="card-body">
              <h4 class="card-title">Forgot Password</h4>
              <form method="POST" class="my-login-validation" novalidate="" action="forgotpassword.php ">
                <div class="form-group">
                  <label for="email">E-Mail Address</label>
                  <input id="email" type="email" class="form-control" name="email" required autofocus />
                  <div class="invalid-feedback">Email is invalid</div>

                  <div class="form-text text-muted">
                    By clicking "Reset Password" we will send a password reset
                    link
                  </div>
                  <?php
                  if (isset($_POST['checkemail'])) {
                    $error = "";
                    $email = $_POST['email'];
                    $query = "SELECT * from `userregistration` where user_email ='" . $email . "'";
                    $select = mysqli_query($conn, $query);

                    $row = mysqli_num_rows($select);

                    if ($row == 1) {
                      $data = mysqli_fetch_assoc($select);
                      $_SESSION['user_id'] = $data['user_id'];
                      $_SESSION['user_email'] = $data['user_email'];
                      header("Location:resetpassword.php");
                    } else {
                      echo "<p style ='color:red'>  Invalid Email </p>";
                    }

                    mysqli_close($conn);
                  }

                  ?>
                </div>

                <div class="form-group m-0">
                  <input type="submit" class="btn btn-primary btn-block" value=" Click to Proceed " name="checkemail" />


                </div>


                <br>
                <br>
                <div class="form-group m-0">
                  <input onclick="backtoLogin()" type="button" class="btn btn-primary btn-block" value=" Back to Login " />


                </div>
              </form>
            </div>
          </div>
          <div class="footer">
            By <a href="http://ZEEFEK.com" target="_blank">ZEEFEK</a> &copy;
            2020
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    function backtoLogin() {
      window.location.href = "userlogin.php";
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</body>

</html>