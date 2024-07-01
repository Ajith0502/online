<?php
session_start();
include "connection.php";

if(isset($_POST['login'])){




    $username=$_POST['uname'];
    $password=$_POST['pass'];

    $error = array();
    if (empty($username)){
        $error['patient'] ="Enter username";
    }
    elseif (empty($password)){
        $error['patient'] ="Enter password";
    }

    if(count($error)==0){
        $query ="SELECT * FROM patient WHERE username='$username' AND password='$password'";
        $result =mysqli_query($connect,$query);

        if (mysqli_num_rows($result)== 1){
            echo "<script> alert('you have login as an PATIENT')</script>";

            $_SESSION['patient'] = $username;

            header("Location:patient.php");
            exit();
        }
        else{
            echo "<script>alert('Invalid username or password')</script>";
        }
        
    }
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login Page</title>
</head>
<style>
    .ad{
        width: 200px;
        height:100px;
        margin-top:-20px;
       
    }
   
</style>
<?php
include "header.php"

?>
<body style="background-image:url(pp.jpg);background-repeat:no-repeat;background-size:cover">

<div style="margin-top:60px">
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 ">
                <p class="text-center"style="font-size:35px;color:blue;font-family:fantacy;">PATIENT LOGIN</p>
                <form method="post" >

                      <div class="alert alert-danger">
                        <?php
                        if(isset($error['patient'])){
                            $show = $error['patient'];
                           
                         
                        }
                        else{
                            $show ="";
                        }
                       echo $show;
                        ?>


                      </div>
                    <div class="form-group">
                        <label>USER NAME</label>
                        <input type="text"name="uname" class="form-control"autocomplete="off" placeholder="enter user name">

                    </div><br>
                    <div class="form-group">
                        <label>PASS WORD</label>
                        <input type="password"name="pass" class="form-control">

                    </div><br>
                    <input type="submit" name="login" class="btn btn-success">

                    <p> I dont have an account<a href="patientregister.php">Register</a></p>

                </form>
            </div>
            <div class="col-md-3"></div>

        </div>

    </div>
</div>
    
</body>
</html>