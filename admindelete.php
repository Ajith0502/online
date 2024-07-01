<?php
include "connection.php";
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $sql ="DELETE from `booking` where id=$id";
    $connect->query($sql);

}
header('location:/online/bookshow.php');
exit;

?>