<?php


$mysqli = new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$name = '';
$age = '';
$weight = '';
$bp = '';
$temp = '';
$palse = '';
$history = '';
$pe = '';
$treat = '';

if (isset($_POST['save'])){
    $name =$_POST['name'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $bp = $_POST['bp'];
    $temp = $_POST['temp'];
    $palse = $_POST['palse'];
    $history = $_POST['history'];
    $pe = $_POST['pe'];
    $treat = $_POST['treat'];

    $mysqli->query("INSERT INTO data (name,age,weight,bp,temp,palse,history,pe,treat)
     VALUES ('$name','$age','$weight','$bp','$temp','$palse','$history','$pe','$treat') ") 
    or die($mysqli->error);
        
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: sampleenter.php");
}
if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());

    $_SESSION['message']="Record has been deleted!";
    $_SESSION['msg_type']="danger";
   
    header("location: sampleview.php");
}
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());
    if (count((array)$result)){
        $row = $result->fetch_array();
        $name = $row['name'];
        $age = $row['age'];
        $weight = $row['weight'];
        $bp = $row['bp'];
        $temp = $row['temp'];
        $palse = $row['palse'];
        $history = $row['history'];
        $treat = $row['treat'];
    }
}
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name =$_POST['name'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $bp = $_POST['bp'];
    $temp = $_POST['temp'];
    $palse = $_POST['palse'];
    $history = $_POST['history'];
    $pe = $_POST['pe'];
    $treat = $_POST['treat'];

  $mysqli->query("UPDATE data SET name='$name', age='$age',weight='$weight', bp='$bp', temp='$temp',palse='$palse', history='$history', pe='$pe', treat='$treat'
   WHERE id=$id") 
    or die($mysqli->error());

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "success";

    header('location: sampleview.php');
}