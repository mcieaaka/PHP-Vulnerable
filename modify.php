<?php 
    include('config.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $uri = $_SERVER['REQUEST_URI'];
        $uri = parse_url($uri);
        parse_str($uri['query'], $params);
        $regno = $params['reg'];
        $query = "Select* from MARKS WHERE REGNO='$regno'";
        $ins = mysqli_query($con,$query);
        $row = $ins->fetch_assoc();
        
    ?>
    <form method="post" action="modifypost.php">  
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $row['NAME'];?>"><br><br>
                <label>Registration No.</label>
                <input type="text" name="regno" value="<?php echo $row['REGNO'];?>"><br><br>
                <label>CAT 1</label>
                <input type="text" name="cat1" value="<?php echo $row['CAT1'];?>"><br><br>
                <label>CAT 2</label>
                <input type="text" name="cat2" value="<?php echo $row['CAT2'];?>"><br><br>
                <label>FAT</label>
                <input type="text" name="fat" value="<?php echo $row['FAT'];?>"><br><br>
                <input type="submit">
    </form>
    <div><a href="./main.php">Home</a></div>
</body>
</html>
