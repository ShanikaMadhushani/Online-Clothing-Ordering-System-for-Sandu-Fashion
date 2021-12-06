<?php require_once('connection.php');
session_start();?>
<?php require_once('insertAdmin.php');?>
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
              <p class="profile-name mt-2"><a class="name" href="adminsetting.php" style="text-decoration: none;"><?php echo $_SESSION['admin_email'];?></a></p>
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
        
        <a href="logout2.php" style="text-decoration: none;"><p  class="text-color">Logout</p></a>
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
                
                <div class="card-header">
                   REVIEWS
                   
                </div>
           

                <div class="card-body">
                    <!-- <h5 class="card-title">Manage Products</h5> -->

                    <!-- <div class="row">
                        <div class="col-md-12 text-right">
                          <a href="imageUp/addProduct.php"><button class="btn-adding">Add</button></a>
                        </div>
                    </div> -->
                   
                    <table class="table">
                          <thead>
                              <tr  class="table-head">
                                  
                                 
                                  <th scope="col">Product ID</th>
                                  <th scope="col">Customer ID</th>
                                  <th scope="col">Comment</th>
          
                                  <th scope="col">Date</th>
                                  <th scope="col">Time</th>
                              </tr>
                          </thead>

                          <?php 
                                                    
                          $query = "SELECT review.*, customer.*, products.* FROM review INNER JOIN customer ON review.CID = customer.CID
                          INNER JOIN products ON review.PID = products.PID";
                          $result = mysqli_query($connection, $query);

                          while($row = mysqli_fetch_array($result)){
                            $filenames = explode(",", $row['image']);
                            ?>
                              <tr>
                                <td>
                              <!-- popup -->
                                                                  
                                <div class="modal fade" id="myModal<?php echo $row['itemCode']; ?>">
                                  <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                      
                                      <div class="modal-header">
                                          <h5 style="font-weight: bold;"><?php echo $row['pname']; ?></h5>
                                        
                                        </div>
                                        <div class="modal-body">
                                        <table border="2px" style="border-color: #851b85; background: #f9f5fc;">
                                          <tr>
                                              <td colspan="2"><img src="imageup/server/uploads/<?php echo $filenames[0];?>" width="110" height="150">
                                                <font style="font-size: 20px; font-weight: bold;"> <?php echo $row['itemCode']; ?></font>
                                              
                                              </td>
                                          </tr>
                        
                                            <tr> 

                                                <td class="table-topic">Sizes</td>

                                                <td class="table-font"><?php echo $row['size']; ?></td>

                                            </tr>
                                            <tr>
                                                <td class="table-topic">Price</td>
                                                <td class="table-font">LKR <?php echo $row['price']; ?></td>
                                                
                                            </tr>
                                            
                                            <tr>
                                              <td class="table-topic">Colors</td>
                                              <td class="table-font"><?php echo $row['color']; ?></td>
                                            </tr>

                                            <tr>
                                                <td class="table-topic">Description</td>
                                                <td class="table-topic"><?php echo $row['description']; ?></td>
                                                
                                            </tr>
                                        </table>
                                        </div>
                                    
                                    </div>
                                  </div>
                                </div>
                             <!-- end of popup -->
                             <a href="#" data-toggle="modal" data-target="#myModal<?php echo $row['itemCode']; ?>" class="btn-detail"><?php echo $row['itemCode']; ?></a>
                                </td>

                                <!-- popup -->
                                     
                           <div class="modal fade" id="myModal<?php echo $row['CID'];?>">
                                <div class="modal-dialog modal-l">
                                <div class="modal-content">
                                    
                                  <div class="modal-header">
                                    <h5 style="font-weight: bold;"><?php echo $row['fname']." ".$row['lname'];?></h5>
                                   
                                  </div>
                                  <div class="modal-body">
                                   <table>
                                    
                                        <tr>
                                          <td class="table-topic">Email</td>
                                          <td class="table-font"><?php echo $row['email'];?></td>
                                      </tr>
                                       <tr>
                                           <td class="table-topic">Address</td>
                                           <td class="table-font"><?php echo $row['houseNo'].", ".$row['streetAddress'].", ".$row['city']; ?></td>
                                       </tr>
                                       <tr>
                                           <td class="table-topic">Phone Number</td>
                                           <td class="table-font"><?php echo $row['phone'];?></td>
                                       </tr>
                                   </table>
                                  </div>
                                
                                </div>
                                </div>
                            </div>
                          <a href="#"  data-toggle="modal" data-target="#myModal<?php echo $row['CID'];?>"><?php echo $row['fname']." ".$row['lname'];?></a>
                        </td>
                         <!-- end of popup -->

                                <td>
                                  <span><?php echo $row['comment']; ?></span>
                                </td>
                                <td>
                                  <span><?php echo $row['date']; ?></span>
                                </td>  
                                <td>
                                  <span><?php echo $row['time']; ?></span>
                                </td>  
                               
                              </tr>

                              <?php }?>        
                      
                    </table>
                </div>
            </div>

    </div>
    <a href="index.php"> <button class="btn-adding">Back</button></a>
   
    </div>



    <!-- end of product table -->



         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

