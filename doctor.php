
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCTOR</title>
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
          <a class="nav-link" href="adminlogin.php">DOCTOR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="doctorlogin.php">LOGOUT</a>
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
                    <h5 class="text-center"style="font-size:28px;color:orange">ALL DOCTOR</h5>
                    <?php
                    $ad =$_SESSION['doctor'];
                    $query= "SELECT *FROM docdash WHERE name !='$ad'";
                    $res = mysqli_query($connect,$query);
                    $output ="<table class='table table-bordered'>
                    <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>phone</th>
                     <th>role</th>
                    <th style='width:10%;'>Action</th>
                    <tr>
                    
                    ";
                    if (mysqli_num_rows($res) < 1){
                      $output .="<tr><td colspan='3' class='text-center'>No New doctor</td></tr>";

                    }
                    while($row = mysqli_fetch_array($res)){
                      $id = $row ['id'];
                      $name= $row ['name'];
                      $phone =$row['phone'];
                      $role =$row['role'];
                      $output .="
                      <tr>
                      <td>$id</td>
                       <td>$name</td>
                       <td>$phone</td>
                        <td>$role</td>
                        <td>
                       <a href='doctor.php?id=$id'> <button id='$id' class='btn btn-danger remove'>Remove</button></a>
                        </td>
                      ";
                    }

                    $output .="
                      
                      </tr>

                    </table>";

                    echo $output;

                    if(isset($_GET['id'])){
                      $id= $_GET['id'];
                      $query = "DELETE FROM docdash WHERE id='$id'";
                      mysqli_query($connect,$query);

                    }





                    ?>






                   
                    

                  </div>
                  <div class="col-md-6">
                    <?php
                    if(isset($_POST['add'])){

                      $name =$_POST['name'];
                      $phone =$_POST['phone'];
                      $role =$_POST['role'];
                     

                      $error = array();
                      if(empty($name)){
                        $error['u'] ="Enter doctor Username";
                      }
                      else if (empty($phone)){
                        $error ['u'] = "Enter doctor Phonenumber";
                      }
                      else if (empty($role)){
                        $error ['u'] = "Enter doctor role";
                      }
                   

                      if(count($error) ==0){
                        $q ="INSERT INTO docdash(name,phone,role)VALUES ('$name','$phone','$role')";
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
                  <h5 class="text-center" style="font-size:28px;color:orange">ADD DOCTOR</h5>
                  <form method="post" enctype="multipart/form-data">
                    <div>
                      <?php echo  $show; ?>
                    </div>
                    
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" autocomplete="off">

                    </div>
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="text" name="phone" class="form-control" >


                    </div>
                    <div class="form-group">
                      <label>Role</label>
                      <input type="text" name="role" class="form-control" >


                    </div>
                    <br>
                  <input type="submit" name="add" value="Add New doctor" class="btn btn-success">




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