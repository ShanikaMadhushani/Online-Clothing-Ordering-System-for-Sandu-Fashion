<?php require_once('connection.php');

if(isset($_POST['delete'])){

$pid = $_POST['productid'];
$cid = $_POST['cusid']; // get id through query string

$query = "DELETE FROM cart WHERE PID = '$pid' AND CID= '$cid'";
$run = mysqli_query($connection, $query);

    if($run){ 
        echo "Deleted Successfully";

        

    }else{
        echo "Error";
    }
}

if(isset($_POST['delete_wishlist'])){

    $pid = $_POST['productid'];
    $cid = $_POST['cusid']; // get id through query string
    
    $query = "DELETE FROM wishlist WHERE PID = '$pid' AND CID= '$cid'";
    $run = mysqli_query($connection, $query);
    
        if($run){ 
            echo "Deleted Successfully";
    
            
    
        }else{
            echo "Error";
        }
    }

?>