<?php
$con = mysqli_connect('localhost', 'root', '', 'product_database');

    if($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    } else  {  
    echo 'Connecting successful';
    }

?>