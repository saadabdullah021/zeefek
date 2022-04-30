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
      <div class="row justify-content-md-center h-100">
        <div class="card-wrapper">
          <div class="brand">
            <img src="img/logo.jpg" alt="bootstrap 4 login page" />
          </div>
          <div class="card fat">
            <div class="card-body">
              <h4 class="card-title">Register</h4>
              <form method="POST" class="my-login-validation" action="register.php">
                <div class="form-group">
                  <label for="username">Name</label>
                  <input id="name" type="text" class="form-control" name="username" required autofocus />
                  <div class="invalid-feedback">What's your name?</div>
                </div>

                <div class="form-group">
                  <label for="useremail">E-Mail Address</label>
                  <input id="email" type="email" class="form-control" name="useremail" required />
                  <div class="invalid-feedback">Your email is invalid</div>
                </div>

                <div class="form-group">
                  <label for="userpassword">Password</label>
                  <input id="password" type="password" class="form-control" name="userpassword" required data-eye />
                  <div class="invalid-feedback">Password is required</div>
                </div>

                <div class="form-group">
                  <div class="custom-checkbox custom-control">
                    <input type="checkbox" name="agree" id="agree" class="custom-control-input" required="" />
                    <label for="agree" class="custom-control-label">I agree to the
                      <a href="#">Terms and Conditions</a></label>
                    <div class="invalid-feedback">
                      You must agree with our Terms and Conditions
                    </div>
                  </div>
                </div>

                <div class="form-group m-0">
                  <input type="submit" class="btn btn-primary btn-block" name="submit" value="Register">

                  </input>
                </div>
                <div class="mt-4 text-center">
                  Already have an account? <a href="userlogin.php">Login</a>
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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/my-login.js"></script>
</body>

</html>