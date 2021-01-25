<?php

    session_start();
    include "dbcon.php";

    if(isset($_POST['username']) && isset($_POST['password'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $username = validate($_POST['username']);
        $password = validate($_POST['password']);

        if(empty($username)){
            header("location: navigation.php?error=Username is Required");
            exit();
        }
        else if(empty($password)){
            header("location: navigation.php?error=Password is Required");
            exit();
        }
        else{
            $sql = "SELECT * FROM security WHERE username='$username' AND password='$password'";
            
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['username'] === $username && $row['password'] === $password){
                    header("location: home.php");
                    exit();
                }
                else{
                    header("location: navigation.php?error=Invalid log in Information");
                    exit();
                }
            }else{
                header("location: navigation.php?error=Invalid log in Information");
                exit();
            }
        }
    }

    else{
        header("location: navigation.php");
        exit();
    }
?>