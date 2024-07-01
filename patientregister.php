<?php

include "connection.php";
if(isset($_POST['Register'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $confirmpassword =$_POST['cpass'];

    $dublicate = mysqli_query($connect, "SELECT  * FROM doctor WHERE username='$username' OR email='$email'");
    if(mysqli_num_rows($dublicate) > 0){
        echo "<script> alert('user or email alredy taken')</script>";
    }
    else{
        if($password == $confirmpassword){
            $query ="INSERT INTO patient  VALUES('','$name','$username','$email','$password')";
            mysqli_query($connect,$query);

            echo "<script> alert('register successfully')</script>";

           

        }
        else{
            echo "<script> alert('password does not match')</script>";
        }
    }

   

}

?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now</title>
    
<link rel="shortcut icon" type="image/x-icon" href="fevi.png">
</head>
<body style="background-image:url(patient.jpg);background-repeat:no-repeat;background-size:cover">
<?php
include "header.php";

?>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 my-3 jumbotron">
                <h5 class="text-center"style="font-size:30px;color:blue">Register Now!!!</h5>

                <div>
                   
                </div>

                <form method="post" class="card" style="text-align:center; background:pink;">
                    <div class="form-group">
                        <label>NAME</label>
                        <input type="text" name="name" id="name" class="form-control" autocomplete="off">

                    </div>
                    <div class="form-group">
                        <label >USER NAME</label>
                        <input type="text" name="username" id="username" class="form-control" autocomplete="off">

                    </div>
                   
                    <div class="form-group">
                        <label>EMAIL</label>
                        <input type="text" name="email" id="email" class="form-control" autocomplete="off">

                    </div>
                   
                    
                    
                    <div class="form-group">
                        <label>PASSWORD</label>
                        <input type="password" name="pass" id="pass" class="form-control" autocomplete="off">

                    </div>
                    <div class="form-group">
                        <label>CONFIRMPASSWORD</label>
                        <input type="password" name="cpass" id="pass" class="form-control" autocomplete="off">

                    </div>
                    
                    
                    <input type="submit" name="Register" value="Register" class="btn btn-success">
                    <p> I already have an account<a href="patientlogin.php">Login</a></p>
                
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>

    </div>

    

</div>

    
















<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" ></script>
</body>
</html>