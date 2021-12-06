<?php require_once('connection.php');

if(isset($_POST['delete'])){

$pid = $_POST['productid']; // get id through query string

$query = "DELETE FROM products WHERE PID = '$pid'";
$run = mysqli_query($connection, $query);

    if($run){ 
        echo "Deleted Successfully";

        

    }else{
        echo "Error";
    }
}
?>