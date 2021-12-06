<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <title>Sandu Fashion</title>






    <link rel="stylesheet" href="updateForm.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
   </head>
  <body>
   
      
      <div class="container" style="background: #f9f5fc; width: 700px;">
        <img src="Photos/logo.png" alt="" width="100" height="95">
      <font style="color: #851b85; font-weight: bold; font-size: 35px;margin-left: 100px;">Update Details</font>
        <!-- <h3>Update Product Details</h3> -->
        <hr style="color: #851b85;">
        <br>
       
        
        <form>
                    
            <label for="name">Product Name :</label><br>
            <input type="text" id="name">
            <br><br>

            <label for="code">Item Code :</label><br>
            <input type="text" id="code">
            <br><br>

            <label for="size">Sizes :</label><br>
           <font style="font-size: 16px;color: #851b85;">UK-6</font> <input type="checkbox" id="size" style="width: 15px;height: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <font style="font-size: 16px;color: #851b85;">UK-8</font> <input type="checkbox" id="size" style="width: 15px;height: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <font style="font-size: 16px;color: #851b85;">UK-10</font> <input type="checkbox" id="size" style="width: 15px;height: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <font style="font-size: 16px;color: #851b85;">UK-14</font> <input type="checkbox" id="size" style="width: 15px;height: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <font style="font-size: 16px;color: #851b85;">UK-16</font> <input type="checkbox" id="size" style="width: 15px;height: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <font style="font-size: 16px;color: #851b85;">UK-18</font> <input type="checkbox" id="size" style="width: 15px;height: 15px;">
            <br><br>

            <label for="price">Price :</label><br>
            <input type="text" id="price">
            <br><br>

            <label for="color">Colors :</label><br>
            <input type="text" id="color">
            <br><br>

            <label for="qty">Quantity :</label><br>
            <input type="text" id="qty">
            <br><br>

            <label for="cat">Category :</label><br>
            <select name="cat" id="cat" style="background: #f7e5f7; color: #851b85; width: 100%;border-color:#f7e5f7 ;height: 30px;">
                <option>Frock</option>
                <option>Linen Pants</option>
            </select>
            <br><br>

            <label for="description">Description :</label><br>
            <input type="text" id="description" style="height: 100px;">
            <br><br>

            <button>UPDATE</button>
            
            <button style="margin-top: 10px;"><a href="product.html">BACK</a></button>
        </form>
      </div>
   



         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
