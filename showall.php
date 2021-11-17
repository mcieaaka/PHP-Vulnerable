<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <div><a href="./main.php">Home</a></div>


</body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD']=='GET'){
        
        $query = "Select* from MARKS";
        $ins = mysqli_query($con,$query);
        if ($ins->num_rows > 0) {
            echo "<table border='1px solid black'>
                    <tr>
                        <th>S.NO</th>
                        <th>Registration Number</th>
                        <th>Name</th>
                        <th>CAT 1</th>
                        <th>CAT 1</th>
                        <th>FAT</th>
                    </tr>";
            // output data of each row
            $sn=1;
            while($row = $ins->fetch_assoc()) {
            echo "<tr>
                        <td>".$sn++."</td>
                        <td>".$row['REGNO']."</td>
                        <td>".$row['NAME']."</td>
                        <td>".$row['CAT1']."</td>
                        <td>".$row['CAT2']."</td>
                        <td>".$row['FAT']."</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        
    }
?>
