<?php
$db_server='localhost';
$db_user='root';
$db_password='';
$db_name='product_database';
$db=mysqli_connect($db_server,$db_user,$db_password,$db_name);

function begin(){
    mysqli_query($GLOBALS['db'],  "BEGIN");
}

function commit(){
    mysqli_query($GLOBALS['db'], "COMMIT");
}

function rollback(){
    mysqli_query($GLOBALS['db'], "ROLLBACK");
}

?>