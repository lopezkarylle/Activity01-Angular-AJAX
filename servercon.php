<?php
$dbconnect = mysqli_connect("localhost", "pc20userr", "123", "pdc20");
if(mysqli_connect_error()){
    echo "Failed to connect to MySQL" . mysqli_connect_error();
    die();
}
?>