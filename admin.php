
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

    <link rel="shortcut icon" type="image/x-icon" href="fevi.png">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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


<div cl="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div cl="col-md-2">
            <?php
include "sidenav.php";
include "connection.php";

?>
                
                 
            </div>
            <div class="col-md-10">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <h5 class="text-center"style="font-size:28px;color:orange">ALL ADMIN</h5>
                    <?php
                    $ad =$_SESSION['admin'];
                    $query= "SELECT *FROM admin WHERE username !='$ad'";
                    $res = mysqli_query($connect,$query);
                    $output ="<table class='table table-bordered'>
                    <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th style='width:10%;'>Action</th>
                    <tr>
                    
                    ";
                    if (mysqli_num_rows($res) < 1){
                      $output .="<tr><td colspan='3' class='text-center'>No New Admin</td></tr>";

                    }
                    while($row = mysqli_fetch_array($res)){
                      $id = $row ['id'];
                      $username= $row ['username'];
                      $output .="
                      <tr>
                      <td>$id</td>
                       <td>$username</td>
                        <td>
                       <a href='admin.php?id=$id'> <button id='$id' class='btn btn-danger remove'>Remove</button></a>
                        </td>
                      ";
                    }

                    $output .="
                      
                      </tr>

                    </table>";

                    echo $output;

                    if(isset($_GET['id'])){
                      $id= $_GET['id'];
                      $query = "DELETE FROM admin WHERE id='$id'";
                      mysqli_query($connect,$query);

                    }





                    ?>






                   
                    

                  </div>
                  <div class="col-md-6">
                    <?php
                    if(isset($_POST['add'])){

                      $uname =$_POST['uname'];
                      $pass =$_POST['pass'];
                     

                      $error = array();
                      if(empty($uname)){
                        $error['u'] ="Enter Admin Username";
                      }
                      else if (empty($pass)){
                        $error ['u'] = "Enter Admin Password";
                      }
                   

                      if(count($error) ==0){
                        $q ="INSERT INTO admin(username,password)VALUES ('$uname','$pass')";
                        $result = mysqli_query($connect,$q);

                      

                      }

                    }

                    if(isset($error['u'])){
                      $er =$error['u'];
                      $show = "<h5 class='text-center alert alert-danger'>$er</h5>";
                    }
                    else{
                      $show ="";
                    }


                   ?>
                  <h5 class="text-center"style="font-size:28px;color:orange">ADD ADMIN</h5>
                  <form method="post" enctype="multipart/form-data">
                    <div>
                      <?php echo  $show; ?>
                    </div>
                    <div class="form-group">
                      <label>User Name</label>
                      <input type="text" name="uname" class="form-control" autocomplete="off">

                    </div>
                    <div class="form-group">
                      <label>PassWord</label>
                      <input type="password" name="pass" class="form-control" >


                    </div>
                    <br>
                  <input type="submit" name="add" value="Add New Admin" class="btn btn-success">




                  </form>

                  </div>

                </div>

              </div>

            </div>

        </div>

    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" ></script>   
</body>
</html>