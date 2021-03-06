<?php require_once('connection.php');
  session_start();
  require_once('insert.php');
  require_once('delete.php');
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
    <link rel="stylesheet" href="cart.css">
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
         <a href=""><img src="Photos/logo.png" width="60px" height="60px"></a>
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

 <!-- Cart -->
 <section class="cart">
    <div class="container cart-page">
      <h1 class="shop-cart">SHOPPING CART</h1>
        <table class="mt-5">
            <tr>
                <th>Product</th>
               <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tbody>

            <?php 
                    $subtotal = 0;
                    $total = 0;

                      if(isset($_SESSION['cid'])){

                      $cid = $_SESSION['cid'];

                      $query = "SELECT * FROM cart inner join products on cart.PID = products.PID WHERE CID = $cid ";
                      $result = mysqli_query($connection,$query);

                      if(mysqli_num_rows($result) > 0){

                      while($row = mysqli_fetch_array($result)){

                        $filenames = explode(",", $row['image']);
                    ?>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="Admin/imageup/server/uploads/<?php echo $filenames[0];?>">
                        <div>
                            <p><?php echo $row['pname'];?></p>
                        <form action="" method="post">
                        <input type="hidden" name="productid" value="<?php echo $row['PID']; ?>">
                        <input type="hidden" name="cusid" value="<?php echo $row['CID']; ?>">
                        <a href=""><button type="submit" class="align-items-center" name="delete">Remove
                        </button></a>
                        </form>
                            
                        </div>
                    </div>
                </td>
                <td>LKR <?php echo $row['price'];?></td>
                <td><div class="counter">
                            <form action="" method="post">
                                <input type="hidden" name="proid" value="<?php echo $row['PID']; ?>">
                                <input type="hidden" name="cusid" value="<?php echo $cid; ?>">
                                <input class="input-number" type="number" name="qty" value="<?php echo $row['qty']; ?>"min="0"max="10">
                                <button name="updateqty" class="qty-update-btn"><i class="fas fa-pen-square" style="color: #851889;"></i></button>
                            </form>
                                  </div></td>
                <td><?php echo ($row['price'] * $row['qty']); ?>
                <?php $subtotal = $subtotal + ($row['price'] * $row['qty']); ?>
                                <?php $total = $total + ($row['price'] * $row['qty']); ?></td>
            </tr>
           
  

                

                <?php }}else{ ?>
                        <tr>
                            <td colspan="4" class="text-center"><h3>No Items Added to Cart.</h3></td>
                        </tr>
                  <?php  }
                } else{ ?>
                         <tr>
                            <td colspan="4" class="text-center"><h3>Please Login to View Your Cart.</h3></td>
                        </tr>
                     
                  <?php  } ?>

                  </tbody>
            </table>
   
        </div>
        <!-- <a href="checkout.php" class="proceed-btn">Checkout</a> -->
    </div>
    </section>        

    <div class="col-lg-4 offset-lg-4">
        <div class="checkout">
            <ul>
                <li class="subtotal">SubTotal
                    <span>LKR:<?php echo $subtotal; ?></span>
                </li>

                

                

                <li class="cart-total">Total
                <span>LKR:<?php echo $total; ?></span></li>

                
            </ul>
            <a href="checkout.php"class="proceed-btn">Proceed to Checkout</a>
            <a href="mymenu.php"class="proceed-btn  mt-3 mb-5">Continue Shopping</a>
        </div>
    </div>

 


 <!-- End of Cart -->



























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
              <a href="Faqs.html" style="  text-decoration: none;">FAQ's</a>
              <!-- <a href="#">Career</a> -->
              <a href="returns.php" style="  text-decoration: none;">Returns</a>
              <a href="delivery.php" style="  text-decoration: none;">Delivery</a>
              <a href="#" style="  text-decoration: none;">Size Guide</a>
         </div>
         <div class="footer-center">
           <h3  style="font-weight: bold;">CONTACT US</h3>
           <a name="Contact" href="#"  class="fas fa-phone mt-5" style="  text-decoration: none;"> 0767685774</a>
           <a name="Contact" href="#"  class="fas fa-paper-plane mt-4" style="  text-decoration: none;">sandufashion40@gmail.com</a>
  
  
   
  
           </div>
           </div>
         </div>
        </div>
    
  
  </footer>
  </section>
  <!-- end of footer -->
  
  <!-- copyright -->
  <div class="navbar navbar-inverse navbar-fixed-bottom">
    ????????????<div class="container">
    ????????????????<p class="navbar-text">Copyright ?? 2021 Sandu-Fashion.Online Shoppining.All Rights Reserved.</p>
    ????????????</div>
    ????????</div>
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