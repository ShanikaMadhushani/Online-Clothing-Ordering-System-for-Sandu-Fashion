<?php


if(isset($_POST['submit'])){

    if(isset($_SESSION['cid'])){

        $cid = $_SESSION['cid'];
       
        $pid = implode(", ", $_POST['pid']);
        $qty = implode(", ", $_POST['qty']);
        $total =  $_POST['amount'];
        $color = implode(',', $_POST['color']);
        $size = implode(',', $_POST['size']);
 
        if(isset($_POST['pay-method']) && ($_POST['pay-method'] == 1)){
            $method = "online";
        }elseif(isset($_POST['pay-method']) && ($_POST['pay-method'] == 2)){
            $method = "cash";  
        }
       
        $dt1=date("Y-m-d");
        $dt2=date("H:i:s");

        if(!empty($_POST['address2'])){
            
            $address2 = $_POST['address2'];
            $city2 = $_POST['city2'];
            $state2 = $_POST['state2'];

            $queryupdate = "UPDATE customer SET delivery_houseNo = '$address2', delivery_city='$city2', delivery_streetAddress ='$state2' WHERE CID = $cid";
            $runupdate = mysqli_query($connection, $queryupdate);
        }

        $query = "insert into orders(PID, CID, color, size, date, time, qty, total, status) values('$pid','$cid', '$color', '$size' ,'$dt1', '$dt2', '$qty', '$total', 'pending')";      
        $run = mysqli_query($connection, $query) ;
     
        $order_id = $connection->insert_id;

        $query2 = "insert into payment(OID, total, method, status, date, time) values('$order_id', '$total', '$method', 'Pending', '$dt1', '$dt2')";
        $run2 = mysqli_query($connection, $query2) ;

        $query3 = "DELETE FROM cart WHERE CID = '$cid' ";
        $run3 = mysqli_query($connection, $query3);

        if(isset($_POST['pay-method']) && ($_POST['pay-method'] == 2)){

            echo"<script>window.open('success.php?order_id=$order_id','_self')</script>";    

        }else{
        
        
        $payHere['merchant_id']     =   $_POST['merchant_id'];
        $payHere['return_url']      =   $_POST['return_url'];
        $payHere['cancel_url']      =   $_POST['cancel_url'];
        $payHere['notify_url']      =   $_POST['notify_url'];
        $payHere['first_name']      =   $_POST['first_name'];
        $payHere['last_name']       =   $_POST['last_name'];
        $payHere['email']           =   $_POST['email'];
        $payHere['phone']           =   $_POST['phone'];
        $payHere['address']         =   $_POST['address'];
        $payHere['city']            =   $_POST['city'];
        $payHere['country']         =   $_POST['country'];
        $payHere['order_id']        =   $order_id;
        $payHere['items']           =   $_POST['items'];
        $payHere['currency']        =   $_POST['currency'];
        $payHere['amount']          =   $_POST['amount'];

        $url = 'https://sandbox.payhere.lk/pay/checkout';
        
        echo "<html>\n";

        echo "<body onLoad=\"document.forms['payHere_form'].submit();\">\n";

        echo "<form method=\"post\" name=\"payHere_form\" ";
        echo "action=\"".$url."\">\n";
        
        foreach ($payHere as $name => $value) {
        echo "<input type=\"hidden\" name=\"$name\" value=\"$value\"/>\n<br>";
        }
        echo "</form>\n";
        echo "</body></html>\n";

    }
}
}

?>