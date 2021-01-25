<?php



$mysqli = new mysqli('localhost','root', '','bhcs') or die(mysqli_error('$mysqli'));

$id=0;
$update = false;
$name='';
$age='';
$bday='';
$Sex='';
$address='';
$email='';
$number='';
$record='';

if(isset($_POST['save'])){
    $id = $_POST['id'];
    $name =$_POST['name'];
    $age = $_POST['age'];
    $bday = $_POST['bday'];
    $Sex = $_POST['Sex'];
    $address =$_POST['address'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $record =$_POST['record'];

    $mysqli->query("INSERT INTO data (name, age, bday, Sex, address, email, number, record) VALUES('$name','$age','$bday','$Sex','$address','$email','$number','$record')") or
        die($mysqli->error);

    
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: registerenter.php");
    
    }

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: registerview.php");
    
    }

    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM data WHERE id = $id") or die($mysqli->error());
        if (count((array)$result)){
            $row = $result-> fetch_array();
            $name = $row['name'];
            $age = $row['age'];
            $bday = $row['bday'];
            $Sex = $row['Sex'];
            $address = $row['address'];
            $email = $row['email'];
            $number = $row['number'];
            $record = $row['record'];
        }

    }
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name =$_POST['name'];
        $age = $_POST['age'];
        $bday = $_POST['bday'];
        $Sex = $_POST['Sex'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $record = $_POST['record'];

        $mysqli->query("UPDATE data SET name = '$name', age = '$age', bday = '$bday', Sex = '$Sex' , address = '$address', email='$email',number='$number',record='$record' WHERE id = $id") or die($mysqli->error());
 
    $_SESSION['message'] = "Record has been Updated!";
    $_SESSION['msg_type'] = "success";

    header("location: registerenter.php");
    }
?>