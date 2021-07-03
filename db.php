<?php

$server="sql212.epizy.com";
$username="epiz_29043383";
$password="myggjUIqqdCQ";
$dbname="epiz_29043383_hospitalappointment";

$conn = mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}
?>