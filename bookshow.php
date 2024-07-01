








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
    
<link rel="shortcut icon" type="image/x-icon" href="fevi.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    *{
    margin: 0;
    padding: 0;
   
}
.view{
    text-align: center;
    color: blue;
}
table th{
    
    color: green;
    padding: 20px;
    align-items: center;
    font-size: 18px;
}
table{
    margin-left: 20px;
}
table td{
    
    color:orange;
    padding: 10px;
}
.upp{
    background: green;
    width: 50px;
    color:white;
}
.del{
    background-color: red;
    color: white;
}
</style>
<?php


?>
  <section>
    <div> <h1 class="view">PATIENT BOOKING APPOINMENT VIEW</h1></div>
    <table class="table-bordered">
    <tr >
        <th>id</th>
        <th>NAME</th>
        <th>NUMBER</th>
        <th>EMAIL</th>
        <th>NATIVE</th>
        <th>SPECELIST</th>
        <th>APPDATE</th>
        <th>APPTIME</th>
        <th>ISSUE</th>
        <th>TOKEN</th>
        <th>ACTION</th>
        
    </tr>
   <tbody>
    <?php include "connection.php";
    $sql="select * from booking";
    $result =$connect->query($sql);
    if(!$result){
        die("invalid query");
    }
        while($row=$result->fetch_assoc())
    {
echo "
        <tr>
        
        
         <th> $row[id]</th>
        <td> $row[name] </td>
        <td>  $row[number]</td>
        <td>  $row[email]</td>
        <td> $row[native]</td>
        <td> $row[specelist]</td>
        <td>$row[appdate]</td>
        <td> $row[apptime]</td>
        <td> $row[issue]</td>
        <td><$row[token]</td>
        <td><a href='bookedit.php?id= $row[id]'><button class='upp' >edit</button></a>
        <a href='admindelete.php?id= $row[id]'><button class='del' >delete</button></a></td>
        

</tr>
";
        

    }



?>
  
</table>

</section>
  
    
    
    
</body>
</html>