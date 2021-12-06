<?php require_once('connection.php');
session_start();

if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}

?>
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






    <link rel="stylesheet" href="dashboard.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
   </head>
  <body>
      <!-- navbar -->
      <nav class="navbar">
          <h4 class="dash">Dashboard</h4>
          <div class="profile">
               
          <?php if(isset($_SESSION['admin_email'])) {?>
              <img class="profile-image" src="Photos/reg2.jpg">
              <p class="profile-name mt-2"><a class="name" href="adminsetting.php" style="text-decoration: none;"><?php echo $_SESSION['admin_email'];?></a></p>
              <?php }?>
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
      <main>
          <div class="dashboard-container">
              <!--4 cards top  -->
              <div class="card total1">
                  <div class="info">
                      <div class="info-detail">
                          <h3 class="heading">Products</h3>
                          
                          <h2>150</h2>
                         </span>
                      </div>
                      <div class="info-image">
                          <i class="fas fa-shopping-bag" style="  color: #49144b;
                          font-size: 50px;"></i>
                      </div>
                  
                  </div>
              </div>
              <div class="card total2">
                <div class="info">
                    <div class="info-detail">
                        <h3 class="heading">Customers</h3>
                        
                        <h2>105</h2>
                       </span>
                    </div>
                    <div class="info-image">
                        <i class="fas fa-user-friends" style="  color: #49144b;
                        font-size: 50px;"></i>
                    </div>
                
                </div>
            </div>
            <div class="card total3">
                <div class="info">
                    <div class="info-detail">
                        <h3 class="heading">Daily Orders</h3>
                        
                        <h2>105</h2>
                       </span>
                    </div>
                    <div class="info-image">
                        <i class="fas fa-shipping-fast" style="  color: #49144b;
                        font-size: 50px;"></i>
                    </div>
                
                </div>
            </div>
            <div class="card total4">
                <div class="info">
                    <div class="info-detail">
                        <h3 class="heading">Stock</h3>
                        
                        <h2>105</h2>
                       </span>
                    </div>
                    <div class="info-image">
                        <i class="fas fa-box" style="  color: #49144b;
                        font-size: 50px;"></i>
                    </div>
                
                </div>
            </div>
                     <div class="card total3">
                <div class="info">
                    <div class="info-detail">
                        <h3 class="heading">Daily Orders</h3>
                        
                        <h2>105</h2>
                       </span>
                    </div>
                    <div class="info-image">
                        <i class="fas fa-shipping-fast" style="  color: #49144b;
                        font-size: 50px;"></i>
                    </div>
                
                </div>
            </div>
            <div class="card total4">
                <div class="info">
                    <div class="info-detail">
                        <h3 class="heading">Stock</h3>
                        
                        <h2>105</h2>
                       </span>
                    </div>
                    <div class="info-image">
                        <i class="fas fa-box" style="  color: #49144b;
                        font-size: 50px;"></i>
                    </div>
                
                </div>
            </div>
                 <div class="card total3">
                <div class="info">
                    <div class="info-detail">
                        <h3 class="heading">Daily Orders</h3>
                        
                        <h2>105</h2>
                       </span>
                    </div>
                    <div class="info-image">
                        <i class="fas fa-shipping-fast" style="  color: #49144b;
                        font-size: 50px;"></i>
                    </div>
                
                </div>
            </div>
            <div class="card total4">
                <div class="info">
                    <div class="info-detail">
                        <h3 class="heading">Stock</h3>
                        
                        <h2>105</h2>
                       </span>
                    </div>
                    <div class="info-image">
                        <i class="fas fa-box" style="  color: #49144b;
                        font-size: 50px;"></i>
                    </div>
                
                </div>
            </div>

                <!-- 2 cards bottom -->
              <div class="card detail">
              <div class="detail-header">
                  <h2 class="orders" style="color: #851b85;">ALL ORDERS</h2>
                  
              </div>
            
              <!-- <div class="container">
                <div class="row">
                  <div class="col-lg-12"> -->
                   <table>
                  <tr>
                      <th class="table-head" style="color:#851b85 ;font-weight: bold; font-size: 16px;">Order ID</th>
                      <th class="table-head"  style="color:#851b85 ;font-weight: bold; font-size: 16px;">Customer Name</th>
                      <th class="table-head"  style="color:#851b85 ;font-weight: bold; font-size: 16px;">Total</th>
                      <th class="table-head"  style="color:#851b85 ;font-weight: bold; font-size: 16px;">Order Date</th>
                      <th class="table-head"  style="color:#851b85 ;font-weight: bold; font-size: 16px;">Payment Method</th>
                      <th class="table-head"  style="color:#851b85 ;font-weight: bold; font-size: 16px;">Payment Status</th>
                      <th class="table-head"  style="color:#851b85 ;font-weight: bold; font-size: 16px;">Status</th>
                      <th class="table-head" style="color:#851b85 ;font-weight: bold;font-size: 16px;">Action</th>
                  </tr>
                  <tr>
                    <tbody>
                      <?php 
                          $query = "SELECT orders.*, payment.*, customer.*, products.* FROM (((orders INNER JOIN payment ON orders.OID = payment.OID)
                          INNER JOIN customer ON orders.CID = customer.CID) INNER JOIN products ON orders.PID = products.PID) ORDER BY orders.OID DESC";
                          $result = mysqli_query($connection,$query);
                          while($row = mysqli_fetch_array($result)){
                            ?>
                      
                      
                      <td class="table-text">
                          <!-- popup -->
                                            
          <div class="modal fade" id="myModal<?php echo $row['OID'];?>">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                
                <div class="modal-header">
                    <h5 style="font-weight: bold; font-size: 24px;"><?php echo $row['pname'];?></h5>
                   
                  </div>




                  <div class="modal-body">
                   <table border="2px" style="border-color: #851b85; background: #f9f5fc;">
                    <tr>
                        <td class="table-topic" style="font-weight: bold; font-size: 15px;">Order ID</td>
                        <td class="table-font"><?php echo $row['OID'];?></td>
                    </tr>
                    
                       <tr>
                           <td class="table-topic" style="font-weight: bold; font-size: 15px;">Product Code</td>
                           <td class="table-font"><?php echo $row['itemCode'];?></td>
                       </tr>
                       
                       <tr>
                        <td class="table-topic"style="font-weight: bold; font-size: 15px;">Colors</td>
                        <td class="table-font"><?php echo $row['color'];?></td>
                       </tr>

                       <tr>
                           <td class="table-topic"style="font-weight: bold; font-size: 15px;">Size</td>
                           <td class="table-font"><?php echo $row['size'];?></td>
                       </tr>

                       <tr>
                        <td class="table-topic"style="font-weight: bold; font-size: 15px;">Quantity</td>
                        <td class="table-font"><?php echo $row['qty'];?></td>
                    </tr>

                    <tr>
                        <td class="table-topic"style="font-weight: bold; font-size: 15px;">Total</td>
                        <td class="table-font"><?php echo $row['total'];?></td>
                    </tr>

                    <tr>
                        <td class="table-topic"style="font-weight: bold; font-size: 15px;">Date</td>
                        <td class="table-font"><?php echo $row['date'];?></td>
                    </tr>
                    <tr>
                        <td class="table-topic"style="font-weight: bold; font-size: 15px;">Time</td>
                        <td class="table-font"><?php echo $row['time'];?></td>
                    </tr>
                   </table>
                  </div>
              
              </div>
            </div>
          </div>
          <a href="#" data-toggle="modal" data-target="#myModal<?php echo $row['OID'];?>"><?php echo $row['OID'];?></a>
          <!-- end of popup -->
                        

                      <td class="table-text">
                                             <!-- popup -->
                                            
          
         <div class="modal fade" id="myModal2<?php echo $row['CID'];?>">
            <div class="modal-dialog modal-m">
              <div class="modal-content">
                
                <div class="modal-header">
                    <h5 style="font-weight: bold; font-size: 24px;"><?php echo $row ['fname']." ".$row['lname'];?></h5>
                   
                  </div>
                  <div class="modal-body">
                   <table border="2px" style="border-color: #851b85; background: #f9f5fc;">

                    <tr>
                        <td class="table-topic"style="font-weight: bold; font-size: 15px;">Email</td>
                        <td class="table-font"><?php echo $row['email'];?></td>
                    </tr>

                    <tr>
                        <td class="table-topic"style="font-weight: bold; font-size: 15px;">Address</td>
                        <td class="table-font"><?php echo $row['houseNo'].", ".$row['streetAddress'].", ".$row['city']; ?></td>
                    </tr>

                    <tr>
                        <td class="table-topic"style="font-weight: bold; font-size: 15px;">Delivery Address</td>
                        <td class="table-font"><?php echo $row['delivery_houseNo'].", ".$row['delivery_streetAddress'].", ".$row['delivery_city']; ?></td>
                    </tr>

                    <tr>
                        <td class="table-topic"style="font-weight: bold; font-size: 15px;">Phone</td>
                        <td class="table-font"><?php echo $row['phone'];?></td>
                    </tr>
                   </table>
                  </div>
              
              </div>
            </div>
          </div>
          <a href="#" data-toggle="modal" data-target="#myModal2<?php echo $row['CID'];?>"><?php echo $row ['fname']." ".$row['lname'];?></a>
          <!-- end of popup -->
                          </td>
                      <td class="table-text">LKR <?php echo $row['total'];?></td>
                       <td class="table-text"><?php echo $row['date'];?></td>
                       <td class="table-text"><?php echo $row['method'];?></td>
                       <td class="table-text"><?php echo $row['status'];?></td>
                       <td class="table-text"><span class="status onprogress"><i class="fas fa-circle"></i>
                        ONPROGRESS 
                     </span></td>
                       <td>
                       <form action="" method="post">
                        <input type="hidden" name="oid" value="<?php echo $row['OID']; ?>">
                        <button class="btn-confirm fas fa-check-circle" name="order_confirm"></button>
                        <button class="btn-cancel fas fa-ban"></button>
                        <button class="btn-cancel fas fa-check" style="background: #AA336A;" name="order_success"></button>
                        </form>
                    </td>
                  </tr>
                  <?php }?>
                
   
                  </tbody>
         
              </table>
         

          
      </main>



         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>