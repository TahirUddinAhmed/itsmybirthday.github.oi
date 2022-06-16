<?php
 define('DB_HOST', 'localhost');
 define('DB_USER', 'tahir');
 define('DB_PASS', '123456');
 define('DB_NAME', 'birthday');

 // create connection
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

 // check connection
 if(!$conn){
    die("Connection failed" . mysqli_connnect_error());
 }



?>

