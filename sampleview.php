<?php include "navigation.php"; ?>

<body>

</body>
</html>


      <div class="content">
        <div class="container-fluid">
            <div class="row">
            <?php require_once 'process3.php';?>

<?php

    if(isset($_SESSION['message'])): ?>

    <div class="alert alert-<?=$_SESSION['msg_type'];?>">

        <?php 
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div> 
    <?php endif ?>

    
<?php
function pre_r($array){
     echo '<pre>';
     print_r($array);
     echo '</pre>';
    }
?>

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
                <th>Pulse Rate</th>
                <th>History</th>
                <th>Physical Examination</th>
                <th>Treatment</th>
                <th>Action</th>
            <tr>
        </thead>
        <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-info">
                  <h4 class="card-title ">Check up history</h4>
                  <p class="card-category"> Citizens who undergo check ups</p>
                </div>
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
                <a href="sampleenter.php?edit=<?php echo $row['id'] ?>"
                    class="btn btn-info">Check Up</a>
                    
                </td>                </tr>
<?php endwhile; ?>
    </table>
</div>


</form>


</div>
</div>
</div>

</body>




















