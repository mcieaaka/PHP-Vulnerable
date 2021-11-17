<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Styles/main.css">
    <title>ISA&A</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label>Name</label>
        <input type="text" name="name"><br><br>
        <label>Registration No.</label>
        <input type="text" name="regno"><br><br>
        <label>CAT 1</label>
        <input type="text" name="cat1"><br><br>
        <label>CAT 2</label>
        <input type="text" name="cat2"><br><br>
        <label>FAT</label>
        <input type="text" name="fat"><br><br>
        <input class="btn success" type="submit">
    </form>

    <div><a href="./main.php">Home</a></div>
<?php
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $regno = $_POST['regno'];
        $name = $_POST['name'];
        $cat1 = $_POST['cat1'];
        $cat2 = $_POST['cat2'];
        $fat = $_POST['fat'];
    
        $query = "INSERT INTO MARKS VALUES('$regno','$name','$cat1','$cat2','$fat')";
        $ins = mysqli_query($con,$query);
        if(!$ins){
            echo mysqli_error($con);
        }else{
            echo "<br>Successfull Insertion in DB";
        }
    }
?>


</body>
</html>