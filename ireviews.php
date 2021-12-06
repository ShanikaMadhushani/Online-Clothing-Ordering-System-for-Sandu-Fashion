<?php require_once('connection.php');?>

<?php
session_start();

if(isset($_POST['submit'])){

    if(isset($_SESSION['cid'])){

    $cus_id = $_SESSION['cid'];

    if(!empty($_POST['comment'])){

        $pid = $_POST['pid'];
        $cid = $cus_id;
        $comment = $_POST['comment'];
        $dt1=date("Y-m-d");
        $dt2=date("H:i:s");

        $query = "insert into review(PID, CID, comment, date, time) values('$pid', '$cid', '$comment', '$dt1', '$dt2')";
        
        $run = mysqli_query($connection, $query) or die(mysqli_error());


        if($run){ 
             echo "Submitted Successfully";
         }else{
            echo "Error";
        }
    }
    else{
        echo "All Fields Required";
        }
    }else{
        echo "Please Login";
    }
}

?>