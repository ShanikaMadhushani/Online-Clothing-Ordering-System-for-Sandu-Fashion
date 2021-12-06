 <?php require_once('connection.php');?>
<?php

$error = "";

// register

if(isset($_POST['submit'])){

    if(!empty($_POST['fname']) || !empty($_POST['lname']) || !empty($_POST['houseNo']) || !empty($_POST['city']) ||
     !empty($_POST['streetAddress']) || !empty($_POST['pCode']) || !empty($_POST['phone']) || !empty($_POST['email'])){

        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $houseNo= $_POST['houseNo'];
        $city= $_POST['city'];
        $streetAddress= $_POST['streetAddress'];
        $pCode= $_POST['pCode'];
        $phone= $_POST['phone'];
        $email= $_POST['email'];
        $password= $_POST['password'];
        $cpassword= $_POST['cpassword'];

        if($password == $cpassword){



        $query = "insert into customer(fname, lname, houseNo, city, streetAddress, pCode, phone, email) values('$fname', '$lname',
        '$houseNo', '$city', '$streetAddress', '$pCode', '$phone', '$email')";

        $query2 = "insert into login(email, password, utype) values('$email', '$password', 'customer')";

        $run = mysqli_query($connection, $query);
        $run2 = mysqli_query($connection, $query2);

        if($run && $run2){

            echo "submitted successfully";
        }
        else{

            echo "Not Submitted";
        }
     }
     else{

        $error = "Password not match";
     }
}
else{
    echo "Fields are empty";
}
}
else{
    $error = "";
}

// end of register

// login

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connection,$query);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_assoc($result);

        $_SESSION['email'] = $row['email'];

        $query2 = "SELECT * FROM customer WHERE email = '$email'";
        $result2 = mysqli_query($connection,$query2);

        $row2 = mysqli_fetch_assoc($result2);

        $_SESSION ['cid'] = $row2['CID'];
        $_SESSION ['fname'] = $row2['fname'];
        $_SESSION ['lname'] = $row2['lname'];
     
        


        echo "<script>window.open('index.php','_self')</script>";
    }
    else{

      
        
        echo "<script>alert('Invalid Details!')</script>";

    }

}

// end og login

// update password

if(isset($_POST['update'])){

    $email =  $_SESSION['email'];

    $password = $_POST['password'];
    $npasswrd = $_POST['npassword'];
    $cpassword = $_POST['cpassword'];

    if($npasswrd == $cpassword){

        $query = "UPDATE login SET password='$npasswrd' WHERE email = '$email'";
        $run = mysqli_query($connection, $query);

        if($run){
            echo "Successfully Updated";
        }
        else{
            echo "Error";
        }
    }
}

if(isset($_POST['updateqty'])){

    $cid = $_POST['cusid'];
    $pid = $_POST['proid'];
    $qty = $_POST['qty'];

    $query = "UPDATE cart SET qty='$qty' WHERE CID = '$cid' AND PID = '$pid' ";
    $run = mysqli_query($connection, $query);
    
    if($run){ 
        echo"<script>window.open('cart.php','_self')</script>";
    }else{
       echo "Error";
    }

}



?>



