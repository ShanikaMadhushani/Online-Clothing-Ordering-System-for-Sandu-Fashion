<?php

$connection = mysqli_connect('localhost', 'root', '', 'project');

if(mysqli_connect_errno()){
    die('database connection failed' .mysqli_connect_error());
}
else{
    // echo "connection successful";
}
?>