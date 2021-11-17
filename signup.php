<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p>USERNAME:<input type="text" name="username"></p>
        <p>PASSWORD:<input type="password" name="password"></p>
        <input type="submit">
    </form>
</body>
</html>
<?php
    $con = mysqli_connect("localhost:3308","root","","isaa");
    if($con->connect_error){
        die("Failed:".$con->connect_error);
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $u = $_POST['username'];
        $p = md5($_POST['password']);
        $query = "INSERT INTO USERS (USERNAME,PASSWORD) VALUES('$u','$p')";
        $ins = mysqli_query($con,$query);
        if(!$ins){
            echo mysqli_error($con);
        }else{
            echo "<br><a href='./login.php'>Go Login!</a>";
        }
    }
?>