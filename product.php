<?php require_once('connection.php');?>
<?php require_once('ireviews.php');?>
<?php require_once('addcart.php');?>
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
    <link rel="stylesheet" href="product.css">
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
 <!-- End Of Nav --

<!-- get product id from get method -->
<?php 
  $pid = $_GET['pid'];
  $query = "SELECT * FROM products where PID = '$pid'";
  $result = mysqli_query($connection,$query);
  
  $row = mysqli_fetch_assoc($result);

?>

<!-- end of get method -->

 <!-- product -->
 <section class="item">
 <div class="container mt-3 mb-3" style="background-color:#f5f0f6;">
   <div class="row">
     <div class="col-md-5">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

          <?php 
           $filenames = explode(",", $row['image']);
          foreach($filenames as $i =>$key){ ?>

          <div class="carousel-item <?php if($i==0){ echo 'active'; } ?>">
            <img class="d-block " src="Admin/imageup/server/uploads/<?php echo trim($filenames[$i]);?>" alt="First slide" style="margin-top: 80px; margin-left: 20px;" width="370" height="550">
          </div>

          <?php }?>
        </div>
        <?php if($i>0){?>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <!-- <span class="sr-only">Previous</span> -->
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <!-- <span class="sr-only">Next</span> -->
        </a>
        <?php }?>
      </div>

     </div>
     <div class="col-md-7">
       <!-- <p class="newarrival text-center mt-2">NEW</p> -->
       <h2 class="mt-4"><?php echo $row['pname']; ?></h2>
       <p class="details" style="font-size: 20px;font-weight: bold;"><?php echo $row['itemCode']; ?></p>
       
       <!-- <h3 class="text-warning">
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i></h3> -->

        <!-- stars -->
        <!-- <h2 class="text-center">Star Rating</h2> -->
        <!-- <ul class="text">
          <li class="star"><i class="fas fa-star"></i></li>
          <li class="star"><i class="fas fa-star"></i></li>
          <li class="star"><i class="fas fa-star"></i></li>
          <li class="star"><i class="fas fa-star"></i></li>
          <li class="star"><i class="fas fa-star"></i></li>
        </ul>

        <div class="rating mt-2" style="color: #851889;">Rated</div> -->
        
        <!-- end of stars -->




        <p class="price-lkr">LKR <?php echo $row['price']; ?> .00</p>
        <p class="details"><b>Availability &nbsp; : &nbsp;</b>In Stock </p>
        <!-- <p class="details"><b>Categories &nbsp;: &nbsp;</b><?php echo $row['catname']; ?> </p> -->
        <p class="details"><b>Brand &nbsp;: &nbsp;</b>SF Garments</p>

        <p class="details"><b>Sizes:</b> &nbsp;
          <?php 
          $sizes = explode(",", $row['size']);
          $catid = $row ['CatID'];
          foreach($sizes as $i =>$key){ ?>

          <!-- <button type="button" class="btn-s" ><?php echo trim($sizes[$i]);?></button> -->
          <label class="size-lable" for="<?php echo trim($sizes[$i]);?>">
            <input type="radio" id="<?php echo trim($sizes[$i]);?>" class="size-radio" name="size" value="<?php echo trim($sizes[$i]);?>">
            <span class="select-size"><?php echo trim($sizes[$i]);?></span>
          </label>
          

          <?php } ?>
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;


          <button type="button" class="size-guide">
                 <!-- popup -->
                 
          <div class="modal fade" id="myModal">
            <div class="modal-dialog " style="width: 500px;">
              <!-- <div class="modal-content modal-xl"> -->
                <!-- <div class="modal-header">
                  <h1>title</h1>
                </div> -->
                <div class="modal-body">
                  <img src="Photos/sizeChart.jpg" >
                </div>
                <!-- <div class="modal-footer">
                  <input class="btn btn-default" value="close">
                </div> -->
              </div>
            <!-- </div> -->
          </div>
          <a href="#" data-toggle="modal" data-target="#myModal" style="color: #fff;">Size Guide</a>

          <!-- end of popup -->

          </button>
         </p>


        <p class="details"><b>Colors:</b> &nbsp; &nbsp; 

          <?php 
          $colors = explode(",", $row['color']);
          foreach($colors as $i =>$key){ ?>
          <!-- <button type="button" class="btn-c1" style="background-color: <?php echo trim($colors[$i]);?>; border-color:<?php echo trim($colors[$i]);?>;" ></button> -->

          <label class="color-lable" for="<?php echo trim($colors[$i]);?>">
            <input type="radio" id="<?php echo trim($colors[$i]);?>" class="color-radio" name="color" value="<?php echo trim($colors[$i]);?>">
            <span class="select-color" style="background-color: <?php echo trim($colors[$i]);?>;"></span>
          </label>

          <?php } ?>
 
         </p>
        <form action="" method="POST">
          <div class="quantity">
              <label class="mr-3" style="font-size: 16px;font-weight: bold;color:#851889">Quantity</label>
              <button class="btn-qty minus-btn" disabled type="button">-</button>
              <input type="number" name="qty" id="quantity" value="1" min="1" max="<?php echo $row['stock'];?>">
              <button class="btn-qty plus-btn" type="button">+</button>
          </div>
            <p class="total-price">
            <span><i>LKR</i></span>
           <span id="price"><?php echo $row['price']; ?></span>
             </p>
     
        

            <input type="hidden" name="pid" value="<?php echo $row['PID']; ?>">
            <button type="submit" class="btn btn-default cart mt-1" name="submit_to_cart">
              Add to Cart
            </button>
            
            <button type="submit" class="btn btn-default wishlist mt-1" name="submit_to_wishlist">
              Add to Wishlist
              </button>
          <br><br>
          </form>
          <label class="details"><b>Description:</b></label><br>
          <ul class="details">
            <li><?php echo $row['description']; ?></li>

          
          </ul>
       
       

     </div>

   </div>

 </div>
</section>







 
 <!-- End of Product -->

 <!-- related products -->
<?php if(($catid != "") || ($catid != 0)) {?>
 <section class="product-section bg-img py-3">
  <div class="container">

    <div class="row justify-content-center pb-5">
      <div class="col-md-7 heading-section text-center">
        <h2 class="font-weight-bold text-color glow">
          RELATED PRODUCTS
        </h2>
      </div>
    </div>


    <div class="row">

                    <?php 
                     
                     $query = "SELECT * FROM products where CatID = '$catid' AND PID != '$pid'";
                     $result = mysqli_query($connection,$query);
                  
                     while($row = mysqli_fetch_array($result)){
                       
                     $filenames = explode(",", $row['image']);
                     ?>
     <div class="col-md-3 d-flex">
     <div class="product glow">
       <div class="img d-flex align-items-center justify-content-center"
       style="background-image: url(Admin/imageup/server/uploads/<?php echo $filenames[0];?>);">
       <div class="icons">
         <p class="icon-block d-flex">
           <a href="#" class="d-flex align-items-center justify-content-center">
             <i class="fas fa-shopping-cart"></i>
           </a>

           <a href="#" class="d-flex align-items-center justify-content-center">
             <i class="fas fa-heart"></i>
           </a>

           <a href="product.php" class="d-flex align-items-center justify-content-center">
             <i class="fas fa-eye"></i>
           </a>

         </p>

       </div>

       </div>
       <div class="text text-center">
       <span class="out" style="font-size: 18px;">NEW</span><br>
       <span class="code"><?php echo $row['itemCode'];?></span><br>
       <span class="category font-weight-bold"><?php echo $row['pname'];?></span><br>
       <span class="price">LKR:<?php echo $row['price'];?></span>
     </div>
     </div>
   </div>
   <?php }?>



   </div>
<!--  -->

</section>
<?php }?>
  <!-- end of related products -->
<!-- rating -->

<section id="form-section" style="background: #f5f0f6; ">
          <div class="customer-reviews-box">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="heading-title text-center">
                    <h2 class="font-weight-bold text-color glow">Reviews</h2>
                    <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p> -->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 mr-auto ml-auto text-center">
                  <div id="reviews" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner mt-4">

                    <?php 
                      $no = 0;
                    	$query = "SELECT * FROM review inner join customer on review.CID = customer.CID";
                      $result = mysqli_query($connection,$query);
                      while($row = mysqli_fetch_array($result)){
                      $no++;
                    ?>
                      <div class="carousel-item text-center <?php if($no==1){ echo 'active'; }?>">
                   
                        <h5 class="mt-4 mb-0"><strong class="text-warning text-capitalize-each-word"><?php echo $row['fname']." ".$row['lname'];?></strong></h5>
                        <!-- <h6 class="text-dark m-0">Web Developer</h6> -->
                        <p class="m-0 pt-3"><?php echo $row['comment']; ?></p>
                      </div>
                     
                  <?php }?>

                    </div>
                    <a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
                      <i class="fa fa-angle-left" aria-hidden="true"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
                      <i class="fa fa-angle-right" aria-hidden="true"></i>
                      <span class="sr-only">Next</span>
                    </a>
                            </div>
                </div>
              </div>
            </div>
          </div>

	

    <!-- end of rating -->
  

    <!-- reviews form -->

    <!-- reviews -->
   
           <h2 class="h2-tag">Post Your Own Review</h2>
           <form action="" method="post" class="form-content-section" style="width: 50%; margin-top: 3%; margin-left: 25%;">
            <div class="form-group" style="  margin-left: 10px; margin-right: 10px;">
              <input type="hidden" class="form-control" name="pid" placeholder="" value="<?php echo $pid; ?>" style="text-align: left;" required>
            </div>
         
            <div class="form-group" style="  margin-left: 10px; margin-right: 10px;">
            <!-- <label for="exampleInputEmail1"><b>Type your Comment here</b></label> -->
              <textarea class="form-control" name="comment" rows="3" style="background: #fff;" required></textarea>
            </div>
      
            <button type="submit" name="submit" class="btn2 mb-5" style="width: 20%; height: 40px;">Post Comment</button>
          </form>

<!-- end of reviews -->



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
       <script src="stars.js"></script>
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
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
        var valueCount
        var price = document.getElementById("price").innerText;
        var maxValue = '<?php echo $row['stock'];?>';
        function priceTotal(){
          var total = valueCount * price;
          document.getElementById("price").innerText = total
        }
        document.querySelector(".plus-btn").addEventListener("click", function(){
          valueCount = document.getElementById("quantity").value;
          valueCount++;
          document.getElementById("quantity").value=valueCount

          if (valueCount > 1){
             document.querySelector(".minus-btn").removeAttribute("disabled")
             document.querySelector(".minus-btn").classList.remove("disabled")
           }

           if(valueCount == maxValue){
            document.querySelector(".plus-btn").setAttribute("disabled", "disabled")
           }
           priceTotal()
        })

          document.querySelector(".minus-btn").addEventListener("click", function(){
          valueCount = document.getElementById("quantity").value;
          valueCount--;
          document.getElementById("quantity").value=valueCount

           if (valueCount == 1){
             document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
             document.querySelector(".plus-btn").removeAttribute("disabled");
             document.querySelector(".plus-btn").classList.remove("disabled");
           }
           priceTotal()
        })

      </script>
    </body>
  </html>
  
  