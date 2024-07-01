<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    
<link rel="shortcut icon" type="image/x-icon" href="fevi.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .view {
            text-align: center;
            color: blue;
            margin: 20px 0;
        }
        table thead th {
            color: blue !important;
            padding: 20px;
            text-align: center;
            font-size: 18px;
        }
        table {
            margin: 20px auto;
            width: 90%;
            border-collapse: collapse;
        }
        table td {
            color: orange !important;
            padding: 10px;
            text-align: center;
        }
        .ram{
            color:blue!important;
            font-size:15px;
            font-weight:800;
        }
       
    </style>
</head>
<body>
    <section>
        <div>
            <h1 class="view">PATIENT BOOKING APPOINTMENT VIEW</h1>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Number</th>
                     <th>Native</th>
                    <th>Specialist</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Issue</th>
                    <th>Token</th>
                    <th>Doctor Name</th>        
                </tr>
            </thead>
            <tbody>
                <?php
                include "connection.php";

                $sql = "SELECT * FROM booking";
                $result = $connect->query($sql);

                if (!$result) {
                    die("Invalid query: " . $connect->error);
                }

                while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['number']}</td>
                         <td>{$row['native']}</td>
                        <td>{$row['specelist']}</td>
                        <td>{$row['appdate']}</td>
                        <td>{$row['apptime']}</td>
                        <td>{$row['issue']}</td>
                        <td>{$row['token']}</td>
                        <td class='ram'>{$row['docname']}</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
</body>
</html>
