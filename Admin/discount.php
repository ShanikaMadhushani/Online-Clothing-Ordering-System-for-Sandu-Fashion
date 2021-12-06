<?php require_once('connection.php');
session_start();?>
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
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
   </head>
  <body>
      <!-- navbar -->
      <nav class="navbar">
          <div></div>
          <h4 class="dash" style="margin-right: 1000px;">Dashboard</h4>
          <div class="profile">
               
          
              <img class="profile-image" src="Photos/reg2.jpg">
              <p class="profile-name mt-2"><a class="name" href="#" style="text-decoration: none;"><?php echo $_SESSION['admin_email'];?></a></p>
          </div>
      </nav>
      <!-- sidebar -->
      <input type="checkbox" id="toggle">
      <label class="side-toggle" for="toggle">
          <span class="fas fa-bars"></span>

      </label>

      <div class="sidebar">
        <div class="sidebar-menu">
          <span class="fas fa-home"></span>
          <a href="index.php" style="text-decoration: none;"> <p class="text-color">Home</p></a>
          
      </div>

        <div class="sidebar-menu">
          <span class="fas fa-shopping-bag"></span>
          <a href="product.php" style="text-decoration: none;"> <p class="text-color">Products</p></a>
          
      </div>
      <div class="sidebar-menu">
          <span class="fas fa-list"></span>
          <a href="category.php" style="text-decoration: none;"><p class="text-color">Categories</p></a>
      </div>

      <div class="sidebar-menu">
              <span class="fas fa-truck"></span>
              <a href="index.php" style="text-decoration: none;"><p class="text-color">Orders</p></a>
          </div>
   
      <div class="sidebar-menu">
        <span class="fa fa-credit-card"></span>
       <a href="payments.php" style="text-decoration: none;"><p  class="text-color">Payments</p></a> 
      </div>
      <div class="sidebar-menu">
        <span class="fas fa-file"></span>
        <a href="reports.php" style="text-decoration: none;"><p  class="text-color">Reports</p></a> 
      </div>
      <div class="sidebar-menu">
        <span class="fa fa-star"></span>
        
        <a href="reviews.php" style="text-decoration: none;"><p  class="text-color">Reviews</p></a>
      </div>
      <div class="sidebar-menu">
        <span class="fa fa-sign-out"></span>
        
        <a href="#" style="text-decoration: none;"><p  class="text-color">Logout</p></a>
      </div>
      </div>
      <!-- main dashboard -->
      
      <!--product table -->
   
      <div class="container">
        <div class="search">
            <input class="srch" type="search" placeholder="Search">
            <a href="#"><button class="btn4">Search</button></a>
         </div>
        <div class="jumbotron" style="background: #f5ecfc ;">
            
            <div class="card">
                
            <div class="row" style="margin-top: 10px;">
                <div class=" col-md-6">

                  <h3 style="margin-left: 10px;"> DISCOUNTED PRODUCTS</h3>
                  </div>
                   <div  class=" col-md-6">
                   <form action="">
                  <label for="from">From:</label>
                  <input type="date" id="from" name="birthday">
                  <label for="to">To:</label>
                  <input type="date" id="to" name="birthday">
                </form>
                </div>
                </div>  
           

                <div class="card-body">
                    <!-- <h5 class="card-title">Manage Products</h5> -->

                   
                   
                    <table class="table">
                          <thead>
                              <tr  class="table-head">
                                  
                                  <th scope="col">Product ID</th>
                                  <th scope="col">Product</th>
                                  <th scope="col">Old Price</th>
                                  <th scope="col">Discount</th>
                                  <th scope="col">New Price</th>
                                 
                              </tr>
                          </thead>
                          <tbody>

                          <?php 
                          $query = "SELECT * FROM discount INNER JOIN products on discount.PID = products.PID";
                          $result = mysqli_query($connection,$query);
                          while($row = mysqli_fetch_array($result)){
                            ?>
                              <tr class="table-data">
                                 
                                   <td><?php echo $row['PID']; ?></td>
                                   <td><?php echo $row['pname']; ?></td>
                                   <td>LKR <?php echo $row['price']; ?></td>
                                   <td><?php echo $row['disPrice']; ?>%</td>
                                   <td>LKR <?php echo $row['price'] - (($row['price']*$row['disPrice'])/100); ?></td>
                                  
            
                              </tr>
                          <?php }?>

                          </tbody>
                        
                    </table>
                
                </div>
              
            </div>
        
   
    </div>
    <a href="product.php"> <button class="btn-adding">Back</button></a>
    <!-- <a href="product.php"> <button class="btn-adding" style="margin-left:800px; width:150px;">Ready to Print</button></a> -->
    
    
   
    </div>



    <!-- end of product table -->



         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>