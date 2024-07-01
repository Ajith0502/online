<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link rel="stylesheet" type="text/css" href="doc.css">


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
<link rel="shortcut icon" type="image/x-icon" href="fevi.png">
    <script src="https://kit.fontawesome.com/0091837376.js" crossorigin="anonymous"></script>
   
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-dark"id="navbar">
  <div class="container-fluid">
   
    <a class="navbar-brand" href="#">GURU <span><img  class="logo"src="hl.jpg"></span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"  aria-expanded="false" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
       <li class="nav-item">
          <a class="nav-link" href="adminlogin.php">ADMIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminlogin.php">LOGOUT</a>
        </li>
        </ul>
     
     
</div>
  
</nav>
<?php
include "connection.php";

?>

<div class="container-fluid">
    <div class="col-md-12" style="margin-left:-30px">
      <?php
include "sidenav.php"
      ?>
            </div>
            <div class="col-md-10" >
              <h4 class="my-2">Admin Dashboard</h4>
              <div class="col-md-12 my-1">
                <div class="row">
                  <div class="col-md-3 bg-success mx-2"style="height:120px">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-8">
                          <?php
                          $ad =mysqli_query($connect,"SELECT * FROM admin");
                          $num =mysqli_num_rows($ad);

                                   ?>
                          <h5 class="my-2 text-white text-center" style="font-size:28px"><?php echo $num; ?></h5>
                          <h5 class="text-white text-center">Total</h5>
                          <h5 class="text-white text-center">Admin</h5> 

                        </div>
                        <div class="col-md-4">
                       <a href="admin.php"> <i class="fa fa-users-cog fa-2x my-3"style="color:white"></i></a>

                        </div>

                      </div>

                    </div>

                  </div>
                  <div class="col-md-3 bg-primary mx-2"style="height:120px">
                  <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-8">
                        <?php
                          $ad =mysqli_query($connect,"SELECT * FROM docdash");
                          $num =mysqli_num_rows($ad);

                                   ?>
                          <h5 class="my-2 text-white text-center" style="font-size:28px"><?php echo $num; ?></h5>
                          <h5 class="text-white text-center">Total</h5>
                          <h5 class="text-white text-center">Doctors</h5> 

                        </div>
                        <div class="col-md-4">
                        <a href="doctor.php"><i class="fa-solid fa-user-doctor fa-2x my-3"style="color:white"></i></a>

                        </div>

                      </div>

                    </div>
                    

                  </div>
                  <div class="col-md-3 bg-warning mx-2"style="height:120px">
                  <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-8">
                        <?php
                          $ad =mysqli_query($connect,"SELECT * FROM patient");
                          $num =mysqli_num_rows($ad);

                                   ?>
                          <h5 class="my-2 text-white text-center" style="font-size:28px"><?php echo $num; ?></h5>
                          <h5 class="text-white text-center">Total</h5>
                          <h5 class="text-white text-center">Patient</h5> 

                        </div>
                        <div class="col-md-4">
                        <a href="patient.php"><i class="fa-solid fa-bed fa-2x my-3" style="color:white"></i></a>

                        </div>

                      </div>

                    </div>

                  </div>
                  <div class="col-md-3 bg-info mx-2 my-2"style="height:130px">
                  <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-8">
                        <?php
                          $ad =mysqli_query($connect,"SELECT * FROM booking");
                          $num =mysqli_num_rows($ad);

                                   ?>
                          <h5 class="my-2 text-white text-center" style="font-size:24px"><?php echo $num; ?></h5>
                          <h5 class="text-white text-center">Total</h5>
                          <h5 class="text-white text-center">Booking Appoinment</h5> 

                        </div>
                        <div class="col-md-4">
                        <a href="bookshow.php"><i class="fa-regular fa-flag fa-2x my-3" style="color:white"></i></a>

                        </div>

                      </div>

                    </div>


</div>

<!-- <div class="col-md-3 bg-warning mx-2 my-2"style="height:130px">
<div class="col-md-12">
                      <div class="row">
                        <div class="col-md-8">
                          <h5 class="my-2 text-white text-center" style="font-size:28px">0</h5>
                          <h5 class="text-white text-center">Total</h5>
                          <h5 class="text-white text-center">Approved Request</h5> 

                        </div>
                        <div class="col-md-4">
                        <i class="fa-solid fa-book fa-2x my-3" style="color:white"></i>

                        </div>

                      </div>

                    </div>



</div> -->

<!-- <div class="col-md-3 bg-success mx-2 my-2"style="height:120px">
<div class="col-md-12">
                      <div class="row">
                        <div class="col-md-8">
                          <h5 class="my-2 text-white text-center" style="font-size:28px">0</h5>
                          <h5 class="text-white text-center">Total</h5>
                          <h5 class="text-white text-center">Income</h5> 

                        </div>
                        <div class="col-md-4">
                        <i class="fa-solid fa-money-bill fa-2x my-3" style="color:white"></i>

                        </div>

                      </div>

                    </div>


 

</div> -->


                </div>

              </div>
            </div>

        </div>

    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" ></script>
</body>