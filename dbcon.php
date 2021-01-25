<?php
    $name = "localhost";
    $username = "root";
    $password = "";
    $db_name = "bhcs";

    $conn = mysqli_connect($name, $username, $password, $db_name);

    if(!$conn){
        echo "connection failed";
    }

?>