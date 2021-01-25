<?php include "navigation.php"; ?>
<link rel="stylesheet" href="css/material-dashboard.css">
<body>

        <?php require_once 'process2.php'; ?>

<?php
    if (isset($_SESSION['message'])): ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
            echo $_SESSION['message'];
            unset ($_SESSION['message']);
        ?>
    </div>
    <?php endif ?>
<?php

    $mysqli = new mysqli('localhost','root', '','bhcs') or die(mysqli_error('$mysqli'));
    $result = $mysqli->query("SELECT * from data") or die($mysqli->error);
    //pre_r($result);
    //pre_r($result->fetch_assoc());

?>
          
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Citizen Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                <form class="form" action="process2.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Juan Dela Cruz" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Age</label>
                          <input type="number" name="age" value="<?php echo $age; ?>" placeholder="00" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Birthdate</label>
                          <input type="date" name="bday" value="<?php echo $bday; ?>" placeholder="Day/Month/Year" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sex</label>
                          <input type="text" name="Sex" value="<?php echo $Sex; ?>" placeholder="F/M" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" name="address" value="<?php echo $address; ?>" placeholder="Barangay/Municipality/Province" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="email" value="<?php echo $email; ?>" placeholder="example@email.com" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact Number</label>
                          <input type="text" name="number" value="<?php echo $number; ?>" placeholder="09123456789" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Latest Check up</label>
                          <input type="Date" name="record" value="<?php echo $record; ?>" placeholder="Barangay/Municipality/Province" class="form-control">
                        </div>
                      </div>
                    </div>
                    <?php if($update == true): ?>
                        <button type="submit" class="btn btn-info" name="update">Update</button>
                    <?php else: ?>
                        <button type="submit" class="btn btn-success" name="save">Save</button>
                    <?php endif; ?>
                  </form>
                </div>
              </div>
            </div>
     
          
</body>