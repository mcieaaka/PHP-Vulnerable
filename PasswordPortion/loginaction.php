<?php
    $con = mysqli_connect("localhost:3308","root","","isaa");
    if($con->connect_error){
        die("Failed:".$con->connect_error);
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $u = $_POST['username'];
        $p = md5($_POST['password']);
        $query = "SELECT * FROM USERS WHERE username ='$u'";
        $ins = mysqli_query($con,$query);
        if($ins->num_rows>0){
            while($row = $ins->fetch_assoc()){
                if($row['password']==$p){
                    session_start();
                    $_SESSION["Username"] = $row['username'];
                    $_SESSION["Auth"]=true;
                    echo "Login Successful!";
                }else{
                    echo "Wrong Credentials";
                }
            }
        }else{
            echo "Wrong Credentials";
        }
    }
?>