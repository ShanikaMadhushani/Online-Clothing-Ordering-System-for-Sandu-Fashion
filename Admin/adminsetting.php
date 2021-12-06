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
    <link rel="stylesheet" href="adminsetting.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
   </head>
  <body>
      <!-- navbar -->
      <nav class="navbar">
          <h4 class="dash">Dashboard</h4>
          <div class="profile">
               
          
              <img class="profile-image" src="Photos/reg2.jpg">
              <p class="profile-name mt-2"><a class="name" href="adminsetting.php">Sanduni Raveena</a></p>
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
           
              <div class="card detail" style="width:70%;margin-left:190px; height:500px;">
              <div class="detail-header">
                  <h3 class="orders" style="color: #851b85; margin-left:250px"><li  class="fa fa-gear">&nbsp &nbsp ACCOUNT SETTINGS</li></h3>

                  
              </div>

              <div style="margin-left:80px;">
              <form action="" method="post">
                            <input type="email" placeholder="Current Password" name="oldpass" class="form-control my-3 p-3" style="border-color: #851889; width:90%;">
                            <input type="password" placeholder="New Password"name="newpass" class="form-control my-3 " style="border-color: #851889; width:90%;">
                
                            <input type="password" placeholder="Confirm Password"name="confirmpass" class="form-control my-3 " style="border-color: #851889; width:90%;">

                            <button type="submit" name="update" class="edit">Update</button><br>
                            <button type="submit" name="cancel" class="cancel">Cancel</button><br>
                            <button type="submit" name="back" class="back">Back</button><br>
              </form>

              </div>
            
              

              
             
                  
         

          
      </main>



         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>