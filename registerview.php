<?php include "navigation.php"; ?>
<link rel="stylesheet" href="material-dashboard.css">
<body>
<div class="main-panel">
      <div class="content">
        <div class="container-fluid">
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
  <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Registered Citizen</h2>
                            <p>This is the current records of barangay house's citizens' profile</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                     <th>Name</th>
                                     <th>Age</th>
                                     <th>Birthdate</th>
                                     <th>Sex</th>
                                     <th>Address</th>
                                     <th>Email</th>
                                     <th>Contact Number</th>
                                     <th>Last Check Up</th>
                                      <th colspan="2"> Actions</th>
                                    </tr>
                                </thead>
                                
            <?php
                while($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['bday']; ?></td>
                <td><?php echo $row['Sex']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['number']; ?></td>
                <td><?php echo $row['record']; ?></td>
                <td>
                  
                    <a href="process2.php?delete=<?php echo $row['id'] ?>"
                    class="btn btn-danger">Delete</a>
                </td>
            </tr>
                <?php endwhile; ?>

                                <tfoot>
                                    <?php 
                                        $date = date('F d, Y');
                                    ?>
                                    <strong class="text-secondary">Records as of <u class="text-danger"><?php echo $date; ?></u></strong>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

    function pre_r($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

?>


</div>
</div>

</body>