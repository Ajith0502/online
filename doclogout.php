<?php
session_start();

if(isset($_SESSION['docdash'])){
    unset($_SESSION['docdash']);

    header("location:../doctorlogin.php");
    
}




?>