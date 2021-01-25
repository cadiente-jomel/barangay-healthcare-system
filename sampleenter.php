<?php include "navigation.php"; ?>
<link rel="stylesheet" href="css/material-dashboard.css">

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

    
    <?php
    $mysqli = new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
    //pre_r($result);
    ?>

    <?php
    function pre_r($array){
         echo '<pre>';
         print_r($array);
         echo '</pre>';
        }
    ?>
<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Check Up Record</h4>
                  <p class="card-category">Citizen current health status</p>
                </div>
                <div class="card-body">
                <form class="form" action="process.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" name="name" value="<?php echo $name; ?>" placeholder ="Enter name " class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Age</label>
                          <input type="text" name="age" value="<?php echo $age; ?>" placeholder ="Enter age " class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Weight</label>
                          <input type="text" name="bday" value="<?php echo $weight; ?>" placeholder="Enter weight " class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Blood Presure</label>
                          <input type="text" name="bp" value="<?php echo $bp; ?>" placeholder="Enter blood preasure" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Temperature</label>
                          <input type="text" name="temp" value="<?php echo $temp; ?>" placeholder ="Enter temperature " class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Pulse rate</label>
                          <input type="text" name="palse" value="<?php echo $palse; ?>" placeholder ="Enter pulse rate " class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">History</label>
                          <input type="text" name="history" value="<?php echo $history; ?>" placeholder ="Enter history " class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">PE</label>
                          <input type="text" name="pe" value="<?php echo $pe; ?>" placeholder="Enter physical examination " class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Treatment</label>
                          <input type="text" name="treat" value="<?php echo $treat ?>" placeholder="Enter physical examination " class="form-control">
                        </div>
                      </div>
                    </div>

</div>

    <div class="form-group">
        <?php 
        if ($update == true):
        ?>
            <button type="submit" class="btn btn-info" name="update">Update</button>
        <?php else:?>
            <button type="submit" class="btn btn-success" name="save">Save</button>
        <?php endif;?>
 </div> 
 
</form>
</div>
</div>

</body>




















