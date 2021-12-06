<?php require_once('connection.php');
  session_start();
  // require_once('insert.php');
  require_once('confirmorder.php');
?>
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
    <link rel="stylesheet" href="checkout.css">
    <link rel="stylesheet" href="profiledropdown.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
   </head>
  <body>
<!-- sign -->
    <section>
      <div class="cover">
          <div class="container">
              <div class="row">
                          <div class="col-md-12 reg">
                          <a href="registration.php" class="ml-5 mb-0" style="text-decoration: none;">Sign-Up /</a>
                          <a href="login.php" style="text-decoration: none;">Sign-In</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
<!-- end of sign -->
    <!--Nav-->
     <!-- Nav -->
     <nav class="navbar navbar-expand-lg main-navbar bg-color main-navbar-color"
     id="main-navbar">
     <div class="container-fluid">
         <a href="index.php"><img src="Photos/logo.png" width="60px" height="60px"></a>
         <div class="order-lg-last btn-group">
         <a href="cart.php" class="fas fa-shopping-cart fa-2x" style="text-decoration: none;"></a>
           <a href="wishlist.php" class="fas fa-heart fa-2x" style="text-decoration: none;"></a>
      
           
                 </div>
                 <div class="search">
                    <input class="srch" type="search" placeholder="Search">
                    <a href="#"><button class="btn4">Search</button></a>
                 </div>

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav" aria-controls="nav" 
         aria-expanded="false" aria-label="Toggle navigation">
         <i class="fas fa-bars"></i></button>

         <div class="collapse navbar-collapse" id="myNav">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item">
                     <a href="index.php" class="nav-link">Home</a>
                 </li>

                 <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" >
                      Shop Now</a>

                    
                     <!-- category add into the dropdown -->
                     <?php 
                          $no=0;
                          $query = "SELECT * FROM category";
                          $result = mysqli_query($connection,$query);
                          while($row = mysqli_fetch_array($result)){
                          $no++;
                          ?>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                       <a class="dropdown-item" href="mididress.php?cat=<?php echo $row['CatID']; ?>"><?php echo $row['catname']; ?></a>
                       <?php }?>
                  <!-- end category adding -->
                
                     </div>
                </li>

                 <li class="nav-item">
                     <a href="newarrivals.php" class="nav-link">New Arrivals</a>
                 </li>

                 <li class="nav-item">
                    <a href="promotions.php" class="nav-link">Promotions</a>
                </li>

                 <li class="nav-item">
                     <a href="aboutus.php" class="nav-link">About Us</a>
                 </li>

                 <li class="nav-item">
                     <a href="#Contact" class="nav-link">Contact Us</a>
                 </li>
                 <li>
                    <!-- profile -->
                    <div class="action">
                        <div class="profile" onclick="menuToggle();">
                        <i class="fas fa-user" style="color:#851889; font-size:30px;margin-top:5px;"></i>
                        </div>
                        <div class="menu">
                          <?php if (isset($_SESSION['email'])) {?>
                            <h3>My Profile<br><span><?php echo $_SESSION ['fname']." ".$_SESSION['lname'];?></span></h3><?php }?>
                            <ul style="color:#851889">
                                <li  class="fas fa-box"><a href="myorders.php">&nbsp &nbsp My Orders</a></li>
                                <li class="fas fa-shopping-cart" ><a href="cart.php">&nbsp &nbsp My Cart</a></li>
                                <li class="fas fa-heart"><a href="wishlist.php">&nbsp &nbsp My Wishlist</a></li>
                                <li  class="fa fa-gear"><a href="cprofile.php">&nbsp &nbsp Settings</a></li>
                                <li  class="fa fa-sign-out"><a href="logout.php">&nbsp &nbsp Sign Out</a></li>
                            
                            </ul>

                            
                        </div>
                    </div>
                    <!-- end of profile -->
                 </li>

             </ul>
         </div>
     </div>
 </nav>
 <!-- End Of Nav -->

 <!-- checkout -->

 
 <section class="checkouts">

<div class="container">
    <!-- <div class="col-lg-7 px-5 pt-5"> -->
        
        <h4 style="color: #851889;"><b>Checkout</b></h4>
        <form action="" method="POST">

        <input type="hidden" name="merchant_id" value="1219309">    <!-- Replace your Merchant ID -->
        <input type="hidden" name="return_url" value="http://localhost/Project/success.php">
        <input type="hidden" name="cancel_url" value="http://localhost/Project/checkout.php">
        <input type="hidden" name="notify_url" value="http://localhost/Project/notify.php"> 
            <div class="row">
                <div class="col-sm-6">

                <!-- filling address -->

                <?php if(isset($_SESSION['email'])){
                            $email = $_SESSION['email'];
                            $query = "SELECT * FROM customer WHERE email = '$email'";
                            $result = mysqli_query($connection,$query);
                            $row = mysqli_fetch_array($result);
                            ?>

                       
                    <div>
                    <input type="text" placeholder="First Name" class="form-control mt-4" name="first_name" value="<?php  echo $row['fname'];?>">
                </div>
                 <div>
                    <input type="text" placeholder="Last Name" class="form-control my-3 p-3" name="last_name" value="<?php  echo $row['lname'];?>">
                </div>
                
               
                <input type="text" placeholder="House No:" class="form-control my-3"  name="address" value="<?php  echo $row['houseNo'];?>">
                <input type="text" placeholder="Street Address" class="form-control my-3" value="<?php  echo $row['streetAddress'];?>">
                <input type="text" placeholder="City" class="form-control my-3" name="city" value="<?php  echo $row['city'];?>">

                <label for="district" style="color:#851889;">Choose Your District</label>
                <select name="" id="select-district"  style="width: 539px;border-color:#851889 ;color:#851889;">
                  <option value="" selected>Select District</option>
                  <option value="Others">Ampara</option>
                  <option value="Others">Anuradhapura</option>
                  <option value="Others">Badulla</option>
                  <option value="Others">Batticaloa</option>
                  <option value="Colombo">Colombo</option>
                  <option value="Others">Galle</option>
                  <option value="Gampaha">Gampaha</option>
                  <option value="Others">Hambanthota</option>
                  <option value="Others">Jaffna</option>
                  <option value="Others">Kalutara</option>
                  <option value="Others">Kandy</option>
                  <option value="Others">Kegalle</option>
                  <option value="Others">Kilinochchi</option>
                  <option value="Others">Kurunegala</option>
                  <option value="Others">Mannar</option>
                  <option value="Others">Matale</option>
                  <option value="Others">Matara</option>
                  <option value="Others">Monaragala</option>
                  <option value="Others">Mullaitivu</option>
                  <option value="Others">Nuwara Eliya</option>
                  <option value="Others">Polonnaruwa</option>
                  <option value="Others">Puttalam</option>
                  <option value="Others">Ratnapura</option>
                  <option value="Others">Trincomalee</option>
                  <option value="Others">Vavuniya</option>
                </select>
    
                <input type="text" placeholder="Post Code" class="form-control my-3" name="pcode" value="<?php  echo $row['pCode'];?>">
                <input type="text" placeholder="Phone No" class="form-control my-3" name="phone" value="<?php  echo $row['phone'];?>">
                
                <input type="email" placeholder="Email" class="form-control my-3" name="email" value="<?php  echo $row['email'];?>">

                <?php }?>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" data-toggle="collapse" data-target="#address" checked="checked">
                    <label for="add">Delivery address same as billing</label>
                    
                </div>
                

                    <!-- delivery Address -->

              

               
                    <div class="collapse" id="address">
                    <div class="card card-body">

                    <div class="row">
                <div class="col-sm-12">

                <!-- filling address -->
 
               
                <input type="text" name="address2" placeholder="House No:" class="form-control my-3" >
                <input type="text" name="state2" placeholder="Street Address" class="form-control my-3" >
                <input type="text" name="city2" placeholder="City" class="form-control my-3" >

              

             

                </div>
  </div>     

  </div>
</div>

              <?php 
                $count= 0;
                $total = 0;
                $cusid = $_SESSION['cid'];
                $query = "SELECT * FROM cart inner join products on cart.PID = products.PID WHERE cart.CID = '$cusid' ";
                $result = mysqli_query($connection,$query);

                while($row = mysqli_fetch_array($result)){
                $count++;
                $total = $total + ($row['price'] * $row['qty']);
              ?>

                <input type="hidden" name="pid[]" value="<?php echo $row['PID']; ?>">
                <input type="hidden" name="qty[]" value="<?php echo $row['qty']; ?>">
                <input type="hidden" name="color[]" value="<?php echo $row['color']; ?>">
                <input type="hidden" name="size[]" value="<?php echo $row['size']; ?>">

                <?php } ?>

                <input type="hidden" name="items" value="<?php echo $count; ?> Items"><br>
                <input type="hidden" name="currency" value="LKR">
                <input type="hidden" name="amount" id="total-form" value="<?php echo $total; ?>">
                <input type="hidden" name="country" value="Sri Lanka">

                <!-- end of delivery address -->
                <div class="col-lg-7 mt-2">
                    <button type="submit" class="btn-place-order mb-4" name="submit" value="confirm order">Place Order</button>
                </div>

                <div class="col-lg-7 mb-3 ml-2 ">
                <a href="cart.php" style="margin-left: 185px; color:#851889; ">Back to Cart</a>
                   
                </div>
                
            </div>
            


         
        </form>

                <!-- <div class="col-lg-7 px-5 pt-5"> -->
                    <div class="col-sm-6 mt-4">

                    <?php 
                    $query2 = "SELECT * FROM cart inner join products on cart.PID = products.PID WHERE cart.CID = '$cusid' ";
                    $result2 = mysqli_query($connection,$query2);
                    while($row2 = mysqli_fetch_array($result2)){
                      $filenames = explode(",", $row2['image']);
                    ?>
                                              
                        <p class="price ml-5"><img src="Admin/imageup/server/uploads/<?php echo $filenames[0];?>" width="80" height="100">&nbsp; <?php echo $row2['itemCode'];?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <?php echo number_format($row2['price'], 2);?></p>
                        <hr style="width: 300px;" class="line ml-5">
                        <?php }?>

                        <p class="price ml-5">Delivery Fee &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                
                        Rs.<span id="delivery-fee"></span></p>

                        

                        <hr style="width: 300px;" class="line ml-5">

                        <p class="price ml-5">Total &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          
                            Rs.<span id="total"><?php echo number_format($total, 2); ?></span></p>
                             <hr style="width: 300px;" class="line ml-5 mt-3">
                             
                            <br><br>
                <input style="margin-left:50px;" id="check-card" class="btn btn-primary" name="pay-method" value="1" type="radio"  
                data-toggle="collapse" data-target="#card" aria-expanded="false" aria-controls="collapseExample">
                <label for="check-card" style="color: #851889; font-weight:bold;">Online Payment</label> 
                <input style="margin-left:50px;" id="check-cash" class="btn btn-primary" name="pay-method" value="2" type="radio" 
                 data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
                <label for="check-cash" style="color: #851889; font-weight:bold;">Cash on Delivery</label>


               
                            
                           
                             

                </div>

            </div>
       
            </div> 
    



</div>




</section>








<!-- end of checkout -->
















 <!-- follow us -->

<section class="follow">
    <div class="container">
      <div class="row justify-content pb-5">
        <div class="col-md-12 heading-section text-center">
          <h2 class="font-weight-bold texts-color glow mt-5">
            FOLLOW US ON
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 d-flex justify-content-md-end">
          <div class="social-icon mr-4">
          <p class="mb-5 d-flex">
            <a href="#" class="d-flex align-items-center justify-content-center" style="text-decoration: none;">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="d-flex align-items-center justify-content-center" style="text-decoration: none;">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="d-flex align-items-center justify-content-center" style="text-decoration: none;">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="#" class="d-flex align-items-center justify-content-center" style="text-decoration: none;">
              <i class="fab fa-facebook-messenger"></i>
            </a>
            <a href="#" class="d-flex align-items-center justify-content-center" style="text-decoration: none;">
              <i class="fab fa-tiktok"></i>
            </a>
          </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of follow us -->
  
  
  <!-- footer -->
  <section>
  <footer id="footer" class="section footer">
    <div class="container-fluid">
      <div class="footer-container">
        <div class="footer-center">
         
             
                 <img src="Photos/logo.png"  width="290" height="270"><br>
         
                  
         </div>
          <div class="footer-center">
             <h3 style="font-weight: bold;">ABOUT US</h3>
             
            
            <a href="terms.php" style="  text-decoration: none;">Terms and Conditions</a>
            <a href="privacy.php" style="  text-decoration: none;">Privacy Policy</a>
          </div>
  
          <div class="footer-center">
              <h3  style="font-weight: bold;">LET US HELP YOU</h3>
              <a href="Faqs.php" style="  text-decoration: none;">FAQ's</a>
              <!-- <a href="#">Career</a> -->
              <a href="returns.php" style="  text-decoration: none;">Returns</a>
              <a href="delivery.php" style="  text-decoration: none;">Delivery</a>
              <a href="#" style="  text-decoration: none;">Size Guide</a>
         </div>
         <div class="footer-center">
           <h3  style="font-weight: bold;">CONTACT US</h3>
           <a name="Contact" href="#"  class="fas fa-phone mt-5" style="  text-decoration: none;">&nbsp; 0767685774</a>
           <a name="Contact" href="#"  class="fas fa-paper-plane mt-4" style="  text-decoration: none;">&nbsp; sandufashion40@gmail.com</a>
           <a name="Contact" href="#"  class="fas fa-paper-plane mt-4" style="  text-decoration: none;">&nbsp; No.222, Maimbula, Nittambuwa</a></a>

  
  
   
  
           </div>
           </div>
         </div>
        </div>
    
  
  </footer>
  </section>
  <!-- end of footer -->
  
  <!-- copyright -->
  <div class="navbar navbar-inverse navbar-fixed-bottom">
          <div class="container">
            <p class="navbar-text">Copyright © 2021 Sandu-Fashion.Online Shoppining.All Rights Reserved.</p>
          </div>
        </div>
    <!-- end of copyright -->

    <!-- checkout -->


  
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- profile dropdown -->
<script>
      function menuToggle(){
          const toggleMenu = document.querySelector('.menu');
          toggleMenu.classList.toggle('active')
      }
</script>

<script>
  $('#select-district').on('change', function() {

      var total = "<?php echo $total; ?>";

      var district = $('#select-district').find(":selected").val();
      if(district == "Colombo"){
          $("#delivery-fee").text("250"); 
          var dfee = 250;
          var newtotal = (total+dfee);
          $("#total").text(parseFloat(newtotal).toFixed(2)); 
          $("#total-form").val(newtotal);

      }else if(district == "Gampaha"){
          $("#delivery-fee").text("200"); 
          var dfee = 200;
          var newtotal = (total+dfee);
          $("#total").text(parseFloat(newtotal).toFixed(2)); 
          $("#total-form").val(newtotal);

      }else{
          $("#delivery-fee").text("300");
          var dfee = 300;
          var newtotal = (total+dfee);
          $("#total").text(parseFloat(newtotal).toFixed(2)); 
          $("#total-form").val(newtotal);

      }

  });
</script>


    </body>
  </html>
  <?php mysqli_close($connection);?>