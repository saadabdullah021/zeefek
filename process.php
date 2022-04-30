<?php



//Load Composer's autoloader
require 'vendor/autoload.php';

include_once "config.php";
require 'vendor/autoload.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = $_POST['bookingformfirstname'];
    $lastname = $_POST['bookingformsecondname'];
    $email = $_POST['bookingformemail'];
    $phone_number = $_POST['bookingformphone'];
    $vehicle_make = $_POST['bookingformvehiclemake'];
    $vechile_model = $_POST['bookingformvehiclemodel'];
    $booking_date = $_POST['bookingformdate'];
    $passcode = $_POST['bookingformpasscode'];
    $vechile_no_plate = $_POST['bookingformenoplate'];
    $message = $_POST['bookingformmessage'];
    $order_description = $_POST['orderdescription'];
    $query =  " INSERT INTO `booking`( `user_first_name`, `user_last_name`, `user_email_address`,
 `user_phone_number`, `user_vehice_make`, `user_vehicle_model`,     `vehicle_number_plate` , `passcode` , `user_booking_date`, `user_message`, `order_description`) VALUES
  ('$firstname' , '$lastname' , '$email' , '$phone_number' , '$vehicle_make' , '$vechile_model' ,'$vechile_no_plate','$passcode', '$booking_date' , '$message' , '$order_description' )";
    /* Mail Function  */





    if (mysqli_query($conn, $query)) {


        header("Location:bookconfirmationpage.php");
    }


    mysqli_close($conn);
}
