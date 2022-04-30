<?php

include_once 'config.php';
if (!session_start()) {
    header("Location:userlogin.php");
}

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

                    <div class="card fat">
                        <div class="card-body" style="text-align: center;">
                            <div style="text-align: center;">


                                <i class="fas fa-check-circle" style="font-size: 45px; color:green ;margin:20px 0px"></i>
                            </div>
                            <span style="color: green; text-align:center; padding:10px ;">Your password have been changed successfully.</span>

                            <div class="form-group">


                                <div class="form-group m-0">
                                    <input onclick="backtoLogin()" type="button" class="btn btn-primary btn-block" value=" Back to Login " />


                                </div>

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


</body>

</html>