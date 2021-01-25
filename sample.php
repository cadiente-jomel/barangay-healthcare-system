<!DOCTYPE html>
<html >
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.js">
    <title>CHECK UP RECORDS</title>
</head>
<body>
    <?php require_once 'process.php';?>

    <?php

        if(isset($_SESSION['message'])): ?>

        <div class="alert alert-<?=$_SESSION['msg_type'];?>">

            <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div> 
        <?php endif ?>

    <div class="container">
    <?php
    $mysqli = new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
    //pre_r($result);
    ?>
    <div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr colspan="10">
                    <th>Name</th>
                    <th>Age</th>
                    <th>Weight</th>
                    <th>Blood Preasure</th>
                    <th>Temperature</th>
                    <th>Palse Rate</th>
                    <th>History</th>
                    <th>Physical Examination</th>
                    <th>Treatment</th>
                    <th>Action</th>
                <tr>
            </thead>
            <?php
                while($row = $result->fetch_assoc()):?>
                <tr colspan="10">
                    <td ><?php echo $row['name'];?></td>
                    <td><?php echo $row['age'];?></td>
                    <td><?php echo $row['weight'];?></td>
                    <td><?php echo $row['bp'];?></td>
                    <td><?php echo $row['temp'];?></td>
                    <td><?php echo $row['palse'];?></td>
                    <td><?php echo $row['history'];?></td>
                    <td><?php echo $row['pe'];?></td>
                    <td><?php echo $row['treat'];?></td>
                    <td>
                        <a href="sample.php?edit=<?php echo $row['id'];?>"
                            class="btn btn-info">Edit</a>
                        <a href="process.php?delete=<?php echo $row['id'];?>"
                            class="btn btn-danger">Delete</a>
                    </td>                </tr>
<?php endwhile; ?>
        </table>
    </div>

    <?php
    function pre_r($array){
         echo '<pre>';
         print_r($array);
         echo '</pre>';
        }
    ?>
<div class="row justify-content-center">
    <form action ="process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id;?>">
    <div class="form-group">
    <label> Name</lable>
    <input type ="text" name ="name" class="form-control" 
           value ="<?php echo $name;?>" placeholder ="Enter name "> 
    </div> 

    <div class="form-group">
    <label> Age </lable>
    <input type ="text" name ="age" class="form-control" 
            value="<?php echo $age;?>" placeholder ="Enter age "> 
    </div>

    <div class="form-group">
    <label> Weight</lable>
    <input type ="text" name ="weight" class="form-control" 
            value="<?php echo $weight;?>" placeholder="Enter weight "> 
    </div>

    <div class="form-group">
    <label> Blood Preasure </lable>
    <input type ="text" name ="bp" class="form-control" 
            value="<?php echo $bp;?>" placeholder="Enter blood preasure"> 
    </div>

    <div class="form-group">
    <label> Temperature </lable>
    <input type ="text" name ="temp" class="form-control" 
            value="<?php echo $temp;?>" placeholder ="Enter temperature "> 
    </div>

    <div class="form-group">
    <label> Palse Rate </lable>
    <input type ="text" name ="palse" class="form-control" 
            value="<?php echo $palse;?>" placeholder ="Enter palse rate "> 
     </div>

    <div class="form-group">
    <label> History </lable>
    <input type ="text" name ="history" class="form-control" 
            value="<?php echo $history;?>" placeholder ="Enter history "> 
    </div>

    <div class="form-group">
    <label> Physical Examination </lable>
    <input type ="text" name ="pe" class="form-control" 
            value="<?php echo $pe;?>" placeholder="Enter physical examination "> 
    </div>

    <div class="form-group">
    <label> Treatment</lable>
    <input type ="text" name ="treat" class="form-control" 
            value="<?php echo $treat;?>" placeholder="Enter physical examination "> 
    </div>

    <div class="form-group">
        <?php 
        if ($update == true):
        ?>
            <button type="submit" class="btn btn-info" name="update">Update</button>
        <?php else:?>
            <button type="submit" class="btn btn-primary" name="save">Save</button>
        <?php endif;?>
 </div> 
 
</form>
</div>
</div>
</body>
</html>