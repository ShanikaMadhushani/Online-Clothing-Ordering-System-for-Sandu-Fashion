<?php require_once('connection.php');?>
<?php 
session_start();

require_once('insertAdmin.php');?>
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






    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
   </head>
  <body>


   <!-- --Login-- -->
   <section class="form">
       <div class="container">
           <div class="row no-gutters mt-5" style="background: #f5f0f6; border-radius: 30px; box-shadow: 12px 12px 22px grey;">
               <div class="col-lg-5">
                   <img src="Photos/login.jpg" class="img-fluid" style="border-top-left-radius: 30px; border-bottom-left-radius: 30px;">
               </div>
               <div class="col-lg-7 px-5 pt-2">
                   <img src="Photos/logo.png" width="80" height="80" class="img">
                  <h4 class="log">LOGIN</h4>
                   <form action="" method="post">
                       <div class="form-row">
                           <div class="col-lg-7">
                               <input type="email" name="email" placeholder="Username" class="form-control my-1 p-4" style="border-color: #851889;" required>
                           </div>
                        </div>

                       <div class="form-row">
                          <div class="col-lg-7">
                             <input type="password" name="password" placeholder="Password" class="form-control my-3 p-4" style="border-color: #851889;" required>
                             <a href="#" style="color:#A1045A ;">Forgot password?</a>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-7">
                           <button type="submit" class="logbtn mt-3 mb-5" name="login">Sign In</button>
                        </div>
                    </div>

                   
                    <!-- <p style="color: #230324;">New Customer? <a href="registration.html" style="color: #A1045A;">Sign Up Here</a></p> -->

                   </form>

                  

               </div>
               
           </div>
          
       </div>
       <h1 class="b-name">SANDU FASHION</h1>
   </section>







   <!-- --End of Login-- -->

  
  
  










         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>