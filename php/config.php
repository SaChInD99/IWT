<?php
$servername= "127.0.0.1";
$username= "root";
$password= "";
$dbname= "weddingplaning";
//The connection
$conn= new mysqli($servername,$username,$password,$dbname);
//check connection
    if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
    }
    echo "connected successfully";
?>