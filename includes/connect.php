<?php

$con = new mysqli('localhost', 'root', '', 'onlineshop' );

if($con){
    echo 'Connecting successfully';
} else  {  
    echo 'Connecting unsuccessful';
    }






?>