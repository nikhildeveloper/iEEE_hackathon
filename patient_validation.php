<?php

session_start();

$con = mysqli_connect('localhost','root','','userregistration');

if(isset($_POST['submit']))
{
    $name = $_POST['user'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM `pat` WHERE name='$name' && password='$pass'";
    $query_run = mysqli_query($con,$query);

    if(mysqli_fetch_array($query_run)>0)
    {
        echo '<script type="text/javascript"> alert("Successfully signed up") </script>';
        $_SESSION['username']=$name;
        header('location: patient_data.php');
    }
    else
    {
        echo '<script type="text/javascript"> alert("Signup failed") </script>';
        header('location: patient_login.php');
    }
}

?>