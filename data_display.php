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
  <body>

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
              <li class="nav-item active">
                  <a class="nav-link" href="admin_logout.php">Logout</a>
              </li>
          </ul>
      </div>
  </nav>
  
  <div class="container more-info">
  <table class="table">
      <thead>
          <tr>
              <th>Department</th>
              <th>Number Of Doctors Available</th>
              <th>Time Slot</th>
          </tr>
      </thead>
      <?php
      session_start();
          $con = mysqli_connect('localhost','root','','userregistration');

          $query = "SELECT * FROM `data`";
          $query_run = mysqli_query($con,$query);

          while($row = mysqli_fetch_array($query_run))
          {
              ?>
              <tr>
              <td> <?php echo $row['department'] ?></td>
              <td> <?php echo $row['doctorsavailable'] ?></td>
              <td> <select name="time" id="timeslot" required>
              <option value="---Choose a timing---"></option>
              <option value="10am to 11am">10am to 11am</option>
              <option value="11am to 12noon">11am to 12noon</option>
              <option value="12noon to 1pm">12noon to 1pm</option>
              <option value="1pm to 2pm">1pm to 2pm</option>
              <option value="6pm to 7pm">6pm to 7pm</option>
              <option value="7pm to 8pm">7pm to 8pm</option>
              <option value="8pm to 9pm">8pm to 9pm</option>
              </select> </td>
              </tr>              
              <?php
          }
      ?>
  </table>
  </div>

   <footer style="margin-top: 250px;">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>