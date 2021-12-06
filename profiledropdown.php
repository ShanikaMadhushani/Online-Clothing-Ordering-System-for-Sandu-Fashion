<?php require_once('connection.php');?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <title>Sandu Fashion</title>
    <link rel="stylesheet" href="profiledropdown.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
   </head>
  <body>
      <!-- profile -->
      <div class="action">
          <div class="profile" onclick="menuToggle();">
          <i class="fas fa-user" style="color:#851889; font-size:30px;margin-top:5px;"></i>
          </div>
          <div class="menu">
              <h3>My Profile<br><span>Shanika Madhushani</span></h3>
              <ul style="color:#851889">
                  <li  class="fas fa-box"><a href="#">&nbsp &nbsp My Orders</a></li>
                  <li class="fas fa-shopping-cart" ><a href="#">&nbsp &nbsp My Cart</a></li>
                  <li class="fas fa-heart"><a href="#">&nbsp &nbsp My Wishlist</a></li>
                  <li  class="fa fa-gear"><a href="#">&nbsp &nbsp Settings</a></li>
                  <li  class="fa fa-sign-out"><a href="#">&nbsp &nbsp Sign Out</a></li>
               
              </ul>
          </div>
      </div>
      <script>
          function menuToggle(){
              const toggleMenu = document.querySelector('.menu');
              toggleMenu.classList.toggle('active')
          }
      </script>
      <!-- end of profile -->
   
              







       <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
  </html>
  <?php mysqli_close($connection);?>