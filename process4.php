<?php

// Create connection
$con = new mysqli("localhost","root","","budget_calculator");

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$total = 0;
$total1 = 0;
$total2 = 0;
$update = false;
$id=0;
$name = '';
$amount = '';
$name1 = '';
$amount1 = '';

    if(isset($_POST['save'])){
       
        $budget = $_POST['budget'];
        $amount = $_POST['amount'];

        $query = mysqli_query($con, "INSERT INTO budget (name, amount) VALUE ('$budget', '$amount')"); 
        
        $_SESSION['massage'] = "Recode has been saved !";
        $_SESSION['msg_type'] = "primary";

        header("location:  expenses.php?result=true");
        

    }
    

    //calculate Total budget
    $result = mysqli_query($con, "SELECT * FROM budget");
    while($row = $result->fetch_assoc()){
        $total = $total + $row['amount'];
    }
    //calculate total money
    $result = mysqli_query($con, "SELECT * FROM budget");
    while($row = $result->fetch_assoc()){
        $total1 = $total1 + $row['amount'];
        
    }

    $result = mysqli_query($con, "SELECT * FROM budget");
    while($row = $result->fetch_assoc()){
        $total2 = $total2 + $row['amount']-$row['amount'];
        
    }

    //delete data

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $query = mysqli_query($con, "DELETE FROM budget WHERE id=$id");
        $_SESSION['massage'] = "Recode has been Delete !";
        $_SESSION['msg_type'] = "danger";

        header("location:  expenses.php");

    }

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = mysqli_query($con, "SELECT * FROM budget WHERE id=$id");

      
        if( mysqli_num_rows($result) == 1){
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $amount = $row['amount'];
        }
    
    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $budget = $_POST['budget'];
        $amount = $_POST['amount'];

        $query = mysqli_query($con, "UPDATE budget SET name='$budget', amount='$amount' WHERE id='$id'");
        $_SESSION['massage'] = "Recode has been Update !";
        $_SESSION['msg_type'] = "success";
        header("location: expenses.php");
    }


?>

