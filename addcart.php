<?php


if(isset($_POST['submit_to_cart'])){

    if(!isset($_SESSION['cid'])){
        echo "Please Login to Add items into the cart";
    }else{

        $cid =  $_SESSION['cid'];
        $pid = $_POST['pid'];
        $qty = $_POST['qty'];
        // $total = $_POST['total'];

        $query2 = "SELECT * FROM cart WHERE PID ='$pid' AND CID = '$cid' ";
	    $result2 = mysqli_query($connection,$query2);

        if(mysqli_num_rows($result2) > 0){
            echo "Already Added this Item.";
        }else{

            $query = "insert into cart(PID, CID, qty) values('$pid', '$cid', '$qty')";

            $run = mysqli_query($connection, $query);
    
            if($run){ 
                 echo "Successfully Added to the cart";
             }else{
                echo "Error";
            }

        }

    }
}


// wishlist


if(isset($_POST['submit_to_wishlist'])){

    if(!isset($_SESSION['cid'])){
        echo "Please Login to Add items into the wishlist";
    }else{

        $cid =  $_SESSION['cid'];
        $pid = $_POST['pid'];
        $qty = $_POST['qty'];
        // $total = $_POST['total'];

        $query2 = "SELECT * FROM wishlist WHERE PID ='$pid' AND CID = '$cid' ";
	    $result2 = mysqli_query($connection,$query2);

        if(mysqli_num_rows($result2) > 0){
            echo "Already Added this Item.";
        }else{

            $query = "insert into wishlist(PID, CID, qty) values('$pid', '$cid', '$qty')";
             $run = mysqli_query($connection, $query);

            //  $query3 = "DELETE FROM cart WHERE CID = '$cid' ";
            //  $run3 = mysqli_query($connection, $query3);
    
            if($run){ 
                 echo "Successfully Added to the wishlist";
             }else{
                echo "Error";
            }

        }

    }
}

// wishlist

?>