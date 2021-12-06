<?php require_once('connection.php');?>
<?php

if(isset($_POST['submit'])){

  

        $PID= $_POST['PID'];
        $CID= $_POST['CID'];
        $comment= $_POST['comment'];
        $dt1=date("Y-m-d");
        $dt2=date("H:i:s");
       
   
        $query = "insert into review(PID, CID, comment, date, time) values('$PID', '$CID', '$comment', '$dt1', '$dt2')";

        $run = mysqli_query($connection, $query) or die (mysqli_error());
       

        if($run){

            echo "submitted successfully";
        }
        else{

            echo "Not Submitted";
        }

}
?>
<?php mysqli_close($connection);?>