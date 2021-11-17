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
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label>Registration No.</label>
        <input type="text" name="regno">
        <input type="submit">
    </form>

    <div><a href="./main.php">Home</a></div>


</body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD']=='GET'){
        if(!empty($_GET["regno"])){
            $regno = $_GET['regno'];
            $query = "Select* from MARKS WHERE REGNO='$regno'";
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
                            <th>Action</th>
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
                            <td><a href='./modify.php?reg=".$row['REGNO']."'>Modify</a></td>
                        </tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
        }
    }
?>
