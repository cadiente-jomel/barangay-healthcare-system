<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <title>Log In</title>
    <link rel="stylesheet" href="loginstyle.css">

  </head>
  <body>

     <section class="form my-5 mx-5">
         <div class="container no-gutters">
             <div class="row g-0">
                 <div class="col-lg-5">
                    <div class="card pb-5 border-dark">
                        <img src="img/images.png" class="card-img-top" alt="...">
                        <div class="card-body mx-5">
                            <h5 class="card-title pb-3"><strong>Barangay Healthcare System</strong></h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted pb-5">Developed by Team Hupplepuff</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="fw-bold pb-5">Log in</h1>
                    <h5>Sign in to your account.</h5>


                    <form action="loginprocess.php" method="POST" >

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" name="username" placeholder="Enter username" class="form-control my-4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="password" placeholder="Enter password" class="form-control my-4">
                            </div>
                        </div>

                        <?php if(isset($_GET['error'])) { ?>
                        <small class="error text-warning"><?php echo $_GET['error']; ?></small>
                    <?php } ?>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="btn1 mt-3 mb-5">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
             </div>
        </div>
     </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
