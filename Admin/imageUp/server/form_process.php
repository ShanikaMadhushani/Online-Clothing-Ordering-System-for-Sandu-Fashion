<?php require_once('../connection.php');?>
<?php


if(isset($_POST['submit'])){


    if(!empty($_POST['files']) || !empty($_POST['name']) || !empty($_POST['code']) || !empty($POST['size']) || !empty($POST['price']) || !empty($_POST['discount']) ||
    !empty($_POST['color']) || !empty($_POST['qty'])  || !empty($_POST['cat']) || !empty($_POST['dis'])){

        // $files = $_POST['files'];

        $name = $_POST['name'];
        $code = $_POST['code'];
        $size = implode(',', $_POST['size']);
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $color = implode(',', $_POST['color']);
        $qty = $_POST['qty'];
        $cat = $_POST['cat'];
        $dis = $_POST['dis'];

        // $pid =  $_SESSION['PID'];
       

        $images = implode(", ", $_POST['uploaded_image_name']);

        $query = "insert into products(CatID, pname, itemCode, price, size, color, stock, description, image) values('$cat', '$name', '$code', '$price', '$size', '$color', '$qty', '$dis', '$images')";
        $run = mysqli_query($connection, $query);

        if($discount != ""){
            $query2 = "insert into discount(PID, disPrice) values('$code', '$discount')";
            $run2 = mysqli_query($connection, $query2);
        }


        if($run){ 
             echo"<script>window.open('../addProduct.php','_self')</script>";

         }else{
            echo "Error";
        }
}
    else{
        echo "All Fields Required";
    }
}

?>
<?php mysqli_close($connection);?>