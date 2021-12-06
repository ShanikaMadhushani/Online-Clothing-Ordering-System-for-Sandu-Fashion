<?php require_once('connection.php');
session_start();?>

<?php require_once('cat.php');?>
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

          <h4 class="dash" style="margin-right: 1000px;">Dashboard</h4>
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
      
      <div class="container">
        <div class="search">
            <input class="srch" type="search" placeholder="Search">
            <a href="#"><button class="btn4">Search</button></a>
         </div>
        <div class="jumbotron" style="background: #f5ecfc ;">
            
            <div class="card">
                
                <div class="card-header">
                    MANAGE CATEGORY
                   
                </div>
                   

                <form action="" method="post">
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-8 text-right">
                          
                          <input type="text" name="cat" placeholder="Add new category" style=" border: 1px solid #851889;">
                            <button class="btn-adding" name="submit">Add</button>

                        </div>
                        
                    </div>

                    <div class="row mt-4">
                    <div class="col-md-8 text-right">

                    <?php 
                    	$query = "SELECT * FROM category";
                      $result = mysqli_query($connection,$query); ?>
                  
                    <textarea name="categories" id="cat" cols="30" rows="10">
                    <?php while($row = mysqli_fetch_array($result)){ 
                      echo $row['catname']; ?>

                    <?php }?>
                   
                    </textarea>

                    </div>

                    
                    </div>
               
                    
                    <a href="dashboard.php"> <button class="btn-adding">Back</button></a>
                   
                   </form> 
     

                  

      
                        

                  
       



         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>