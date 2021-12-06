<?php require_once('connection.php');
  session_start();
  require_once('insert.php');
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






    <link rel="stylesheet" href="privacy.css">
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
                       <a href="#" class="nav-link">Contact Us</a>
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


<!-- Privacy -->
<section class="privacy">
    <div class="container" style="width: 50%;">
        <h1 class="text-center mt-5">Privacy Policy</h1>
        <hr class="policy">
        <h5><b> OVERVIEW</b></h5>
        <p class="terms-p">
       
This website is operated by Sandu Fashion. Throughout the site, the terms “we”, “us” and “our” refer to Sandu Fashion. Sandu Fashion offers this website, 
including all information, tools and services available from this site to you, the user, conditioned upon your acceptance of all terms, conditions, policies and
 notices stated here. By visiting our site and/or purchasing something from us, you engage in our “Service” and agree to be bound by the following terms and conditions
  (“Terms of Service”, “Terms”), including those additional terms and conditions and policies referenced herein and/or available by hyperlink. These Terms of Service apply 
  to all users of the site. Please read these Terms of Service carefully before accessing or using our website. By accessing or using any part of the site, you agree to be 
  bound by these Terms of Service. If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any services. Any new 
  features or tools that are added to the current store shall also be subject to the Terms of Service. You can review the most current version of the Terms of Service at
   any time on this page. We reserve the right to update, change or replace any part of these Terms of Service by posting updates and/or changes to our website.
    It is your responsibility to check this page periodically for changes. Your continued use of or access to the website following the posting of any changes 
    constitutes acceptance of those changes.



        </p>

        <p class="terms-p">
       <b> SECTION 1 – ONLINE STORE TERMS</b><br>
By agreeing to these Terms of Service, you represent that you are at least or are the age of majority in Sri Lanka and you have given us your consent to 
allow any of your minor dependents to use this site. You may not use our products for any illegal or unauthorized purpose nor may you, in the use of the Service, 
violate any laws in your jurisdiction (including but not limited to copyright laws). You must not transmit any worms or viruses or any code of a destructive nature. 
A breach or violation of any of the Terms will result in an immediate termination of your Services.
        </p>

        <p class="terms-p">
        <b>SECTION 2 – GENERAL CONDITIONS</b><br>
We reserve the right to refuse service to anyone for any reason at any time. You understand that your content (not including credit card information),
 may be transferred unencrypted and involve (a) transmissions over various networks; and (b) changes to conform and adapt to technical requirements of 
 connecting networks or devices. Credit card information is always encrypted during transfer over networks. You agree not to reproduce, duplicate, copy,
  sell, resell or exploit any portion of the Service, use of the Service, or access to the Service or any contact on the website through which the service is
   provided, without express written permission by us. The headings used in this agreement are included for convenience only and will not limit or otherwise affect
    these Terms.

        </p>

        <p class="terms-p">
        <b>SECTION 3 – TRADEMARKS</b> <br>
“Sandu Fashion” and its logo are the registered trademarks of Sandu Fashion in Sri Lanka. Any other trademarks appearing on this Website are the trademarks 
of the relevant owners. You must not use any trademarks that appear on this Website without the written consent of the trademark owner.

        </p>

        <p class="terms-p">
        <b>SECTION 4 – MODIFICATIONS TO THE SERVICE AND PRICES</b><br>
Prices for our products are subject to change without notice. We reserve the right at any time to modify or discontinue the Service (or any part or content thereof) 
without notice at any time. <br>
* We shall not be liable to you or to any third-party for any modification, price change, suspension or discontinuance of the Services.



        </p>

        <p class="terms-p">

        <b>SECTION 5 – PRODUCTS AND SERVICES</b> <br>
Certain products and services may be available exclusively online through the website. These products or services may have limited quantities and are subject 
to return or exchange only according to our Return Policy.
We have made every effort to display as accurately as possible the colors and images of our products that appear at the store. We cannot guarantee that your
 computer monitor’s display of any color will be accurate. We reserve the right, but are not obligated, to limit the sales of our products or Services to 
 any person, geographic region or jurisdiction. We may exercise this right on a case-by-case basis. We reserve the right to limit the quantities of any 
 products or services that we offer. All descriptions of products or product pricing are subject to change at any time without notice, 
 at the sole discretion of us. We reserve the right to discontinue any product at any time. Any offer for any product or service made on 
 this site is void where prohibited.
          
        </p>

        <p class="terms-p">

       <b> SECTION 6 – DELIVERY </b> <br>
Delivery will be made to the address specified by you. Delivery of our products is at this time only island wide. Our courier partner will make all
 deliveries to you and we do our best to secure delivery within 1 – 3 Working Days Island-wide. During the Sundays and Mercantile holidays, we do not do any 
 deliveries. On delivery you will be required to sign a proof of delivery, which shall be conclusive evidence that you have received your order. If you are unable
  to accept the delivery on the particular day, please contact us to arrange another delivery; however, you may be charged an additional fee. Please review our
   Delivery Policy for more details.


        </p>

        <p class="terms-p mb-5">
        <b>SECTION 7 – COPYRIGHT</b> <br>
All content made available on or via the Site is protected by copyright, trademark and other intellectual property rights and is
 the property of Sandu Fashion. Copying or reproducing any intellectual property on the Site is prohibited and unlawful and may be subject
  to criminal charges and/or fines.

        </p>

                         
    </div>

</section>






   <!-- end of privacy -->
  






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
             <!-- <a href="#">Company Information</a> -->
             <!-- <a href="#">Career</a> -->
             <a href="terms.php" style="text-decoration: none;">Terms and Conditions</a>
             <a href="privacy.php" style="text-decoration: none;">Privacy Policy</a>
          </div>
  
          <div class="footer-center">
              <h3  style="font-weight: bold;">LET US HELP YOU</h3>
              <a href="Faqs.php" style="text-decoration: none;">FAQ's</a>
              <a href="returns.php" style="text-decoration: none;">Returns</a>
              <a href="delivery.php" style="text-decoration: none;">Delivery</a>
              <a href="#" style="text-decoration: none;">Size Guide</a>
         </div>
         <div class="footer-center">
           <h3  style="font-weight: bold;">CONTACT US</h3>
           <a name="Contact" href="#"  class="fas fa-phone mt-5" style="text-decoration: none;">&nbsp; 0767685774</a>
           <a name="Contact" href="#"  class="fas fa-paper-plane mt-4" style="text-decoration: none;">&nbsp; sandufashion40@gmail.com</a> 
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
  </body>
</html>
<?php mysqli_close($connection);?>