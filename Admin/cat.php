<?php require_once('connection.php');?>
<?php


if(isset($_POST['submit'])){


        $cat = $_POST['cat'];

        $query = "insert into category(catname) values('$cat')";

        $run = mysqli_query($connection, $query);

        if($run){ 
             echo "Submitted Successfully";
         }else{
            echo "Error";
        }

}

?>
