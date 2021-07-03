<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #0BA7AF ;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body style="background-image: url(https://medicalmarketingsolved.com/wp-content/uploads/2015/09/Medical-Marketing-1600x700.jpeg); background-size: cover; background-repeat: no-repeat;">
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

<div class="container" style="color: black;">
  <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, consequatur. Rerum quia architecto exercitationem perspiciatis odit quisquam nihil sit blanditiis amet dicta nesciunt, quibusdam nisi, quae fugiat repellat aliquam provident.</h5>
  <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, consequatur. Rerum quia architecto exercitationem perspiciatis odit quisquam nihil sit blanditiis amet dicta nesciunt, quibusdam nisi, quae fugiat repellat aliquam provident.</h5>
  <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, consequatur. Rerum quia architecto exercitationem perspiciatis odit quisquam nihil sit blanditiis amet dicta nesciunt, quibusdam nisi, quae fugiat repellat aliquam provident.</h5>
  <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, consequatur. Rerum quia architecto exercitationem perspiciatis odit quisquam nihil sit blanditiis amet dicta nesciunt, quibusdam nisi, quae fugiat repellat aliquam provident.</h5>
  <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, consequatur. Rerum quia architecto exercitationem perspiciatis odit quisquam nihil sit blanditiis amet dicta nesciunt, quibusdam nisi, quae fugiat repellat aliquam provident.</h5>
  <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, consequatur. Rerum quia architecto exercitationem perspiciatis odit quisquam nihil sit blanditiis amet dicta nesciunt, quibusdam nisi, quae fugiat repellat aliquam provident.</h5>
  <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, consequatur. Rerum quia architecto exercitationem perspiciatis odit quisquam nihil sit blanditiis amet dicta nesciunt, quibusdam nisi, quae fugiat repellat aliquam provident.</h5>
</div>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; position: relative; top: 40%; left: 50%; background-color: white; color: black; border-radius: 10px;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="admin_validation.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="loginavatar.jpeg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="user" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="forgotpassword.php">Forgot password?</a></span>
    </div>
  </form>
</div>

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

</body>
</html>
