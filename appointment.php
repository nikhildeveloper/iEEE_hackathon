<!doctype html>
<html lang="en">
  <head>
    <title>Hackathon</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body style="background-image: url(https://wallpaperaccess.com/full/186176.png); background-size: cover; background-repeat: no-repeat;">

  <nav class="navbar navbar-expand-sm navbar-dark">
      <a class="navbar-brand" href="index.php">Hospital</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                  <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="register.php">Register</a>
              </li>
          </ul>
      </div>
  </nav>

  <div class="main">
            <div class="header" align="center">
                    
            <div class="a">
                <h2><br/>Patients Admission Form</h2>
                <form method="POST" enctype="application/x-www-form-urlencoded" action="" align="center" style="width: 75%; text-align: left;">

                    <h3><br/><u>Patients Name</u></h3>    
                    <p>
                            <label>First Name:  
                            <input type="text" name="first_name" placeholder="Enter first name" required style="margin-left: 50px;">
                            </label> 

                            <label>Middle Name: 
                            <input type="text" name="middle_name" placeholder="Enter middle name" style="margin-left: 20px;">
                            </label>

                            <label>Last Name: 
                            <input type="text" name="Last_name" placeholder="Enter last name" required style="margin-left: 53px;">
                            </label>
                    </p>


                    <h3><br/><u>Patients Info</u></h3> 

                        <p>
                            <label>Age:
                            <input type="number" name="age" required style="margin-left: 125px;">
                            </label>
                        </p> 
                    
                        <p>
                        <legend>Gender:
                        <input type="text" name="gender" required style="margin-left: 125px;">
                        </label>
                        </p>
                        <label>Blood Group:
                        <input type="text" name="bgroup" required style="margin-left: 125px;">
                        </label> 
                        </p>

                        <p>
                        <label>Phone Number:
                        <input type="tel" name="phone_number" minlength="10" maxlength="10" required style="margin-left: 5px;">
                        </label>
                        </p>
        
                        <p>
                        <label>Email:
                        <input type="email" name="email_address" required style="margin-left: 115px;">
                        </label>
                        </p>
        

                        
                    <p>
                    <label>Disease Name<br> and Severity:
                    <input type="text" name="disease" required style="margin-left: 40px;">
                    </label>
                    </p>
                    
                    <p>
                    <label>Special Note:
                    <textarea name="comments" maxlength="500" required style="margin-left: 40px;"></textarea>
                    </label>
                    </p>
                    <p><button type="submit" name="submit" class="btn">Submit form</button></p>
                    
                    </form>
              </div>
            
            
        </div>
        </div>
        <?php

        $con = mysqli_connect('localhost','root','','userregistration');

        if(isset($_POST['submit']))
        {
            $first_name = $_POST['first_name'];
            $middle_name = $_POST['middle_name'];
            $Last_name = $_POST['Last_name'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $bgroup = $_POST['bgroup'];
            $phone_number = $_POST['phone_number'];
            $email_address = $_POST['email_address'];
            $disease = $_POST['disease'];
            $comments = $_POST['comments'];

            $query = "INSERT INTO `pat_details`(`first_name`,`middle_name`,`Last_name`,`age`,`gender`,`bgroup`,`phone_number`,`email_address`,`disease`,`comments`) VALUES('$first_name','$middle_name','$Last_name','$age','$gender','$bgroup','$phone_number','$email_address','$disease','$comments')";
            $query_run = mysqli_query($con,$query);
            
            if($query_run)
            {
                header('location: index.php');
                $to_email = $email_address;
                $subject = "Appointment confirmation";
                $body = "Hi, You have successfully booked your appointment at the hospital";
                $headers = "From: sb6905@srmist.edu.in";
                if (mail($to_email, $subject, $body, $headers)) {
                    echo "Email successfully sent to $to_email...";
                } 
                else {
                    echo "Email sending failed...";
                }
      
            }
            else
            {
                header('location: data.php');
            }
        }
        ?>
   <footer>
       <div class="footer-left">
           <i class="fa fa-hospital-o fa-3x text-black"></i>
           <h4>About Us</h4>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, nam unde maiores facere numquam, ipsa dignissimos earum, suscipit vel quaerat laborum aut iste dolorum eius maxime necessitatibus perferendis soluta temporibus.</p>
       </div>

       <div class="footer-middle">
           <i class="fa fa-map-pin fa-2x text-white"></i>
           <p>No:4, Vivekhanandha Street, Dubai Main Road, Dubai<p>
           <i class="fa fa-phone fa-2x text-white"></i>
           <p>+46416515</p>
           <i class="fa fa-envelope fa-2x text-white"></i>
           <p>pichumani@gmail.com</p>
       </div>

       <div class="footer-right">
           <h4>Follow Us</h4>
           <a href="https://www.facebook.com/"><i class="fa fa-facebook-official fa-2x text-blue"></i></a>
           <a href="https://www.instagram.com/"><i class="fa fa-instagram fa-2x text-white"></i></a>
           <a href="https://www.twitter.com/"><i class="fa fa-twitter fa-2x"></i></a>
           <a href="https://youtube.com/"><i class="fa fa-youtube-square fa-2x text-white"></i></a>
           <a href="#" style="text-decoration: none; color: white;"><h5>Provide your feedback</h5></a>
           <p>All copyrights &copy; are reserved 2021.</p>
       </div>
   </footer>

<?php
$con = mysqli_connect('localhost','root','','userregistration');

if(isset($_POST['submit']))
{

}
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>