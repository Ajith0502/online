<?php
session_start();
include "connection.php";

if(isset($_POST['login'])){




    $username=$_POST['uname'];
    $password=$_POST['pass'];

    $error = array();
    if (empty($username)){
        $error['admin'] ="Enter username";
    }
    elseif (empty($password)){
        $error['admin'] ="Enter password";
    }

    if(count($error)==0){
        $query ="SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $result =mysqli_query($connect,$query);

        if (mysqli_num_rows($result)== 1){
            echo "<script> alert('you have login as an admin')</script>";

            $_SESSION['admin'] = $username;

            header("Location:adminindex.php");
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
    
<link rel="shortcut icon" type="image/x-icon" href="fevi.png">
    <title>Admin Login Page</title>
</head>
<style>
    .ad{
        width: 250px;
        height:100px;
        margin-top:-20px;
       
    }
   
</style>
<?php
include "header.php"

?>
<body style="background-image:url(adminback.jpg);background-repeat:no-repeat;background-size:cover">

<div style="margin-top:60px">
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 ">
                <img src="adminlog.jpg" class="ad">
                <form method="post" >

                      <div class="alert alert-danger">
                        <?php
                        if(isset($error['admin'])){
                            $show = $error['admin'];
                           
                         
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

                </form>
            </div>
            <div class="col-md-3"></div>

        </div>

    </div>
</div>
    
</body>
</html>