<?php
include_once "config.php";
if (isset($_POST['save'])) {
    $firstname = $_POST['bookingformfirstname'];
    $lastname = $_POST['bookingformsecondname'];
    $email = $_POST['bookingformemail'];
    $phone_number = $_POST['bookingformphone'];
    $vehicle_make = $_POST['bookingformvehiclemake'];
    $vechile_model = $_POST['"bookingformvehiclemodel'];
    $booking_date = $_POST['bookingformdate'];
    $message = $_POST['bookingformmessage'];
    $query = "INSERT INTO booking(
user_first_name , user_last_name , user_email_address , user_phone_number , user_vehicle_make , user_vehicle_model , 
user_booking_date  , user_message)
 VALUES ('$firstname' , '$lastname' , '$email' , '$phone_number' , '$vehicle_make' , '$vechile_model' , 
'$booking_date' , '$message'
)";
    if (mysqli_query($conn, $query)) {
        echo 'Data inserted successfully';
    }
    mysqli_close($conn);
}
