<?php

session_start();

$con = mysqli_connect('localhost','root','','userregistration');

if(isset($_POST['submit']))
{
    $name = $_POST['user'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $email = $_POST['email'];

    if($pass == $cpass)
    {
        $query = "SELECT * FROM pat WHERE email='$email'";
        $query_run = mysqli_query($con,$query);

        if(mysqli_num_rows($query_run)>0)
        {
            echo '<script type="text/javascript"> alert("Email ID Already Exists... Try another Email ID")</script>';
        }
        else
        {

        $query = "INSERT INTO `pat`(`name`,`password`,`cpassword`,`email`) VALUES('$name','$pass','$cpass','$email')";
        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            echo '<script type="text/javascript"> alert("Successfully signed in")</script>';
            header('location: patient_login.php');
            $to_email = $email;
            $subject = "Registration confirmation";
            $body = "Hi, You have successfully registered at the hospital";
            $headers = "From: sb6905@srmist.edu.in";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
        }
        else
        {
            echo '<script type="text/javascript"> alert("Registration failed")</script>';
            header('location :patient_register.php');
        }
        }
    }
    else{
        echo '<script type="text/javascript"> alert("Passwords does not match")</script>';
        header('location: patient_register.php');
    }
}

?>