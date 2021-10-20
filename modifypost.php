<?php
    include('config.php');
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $regno = $_POST['regno'];
        $name = $_POST['name'];
        $cat1 = $_POST['cat1'];
        $cat2 = $_POST['cat2'];
        $fat = $_POST['fat'];
    
        $query = "UPDATE MARKS SET NAME='$name', CAT1='$cat1', CAT2='$cat2', FAT='$fat' where REGNO='$regno'";
        $ins = mysqli_query($con,$query);
        if(!$ins){
            echo mysqli_error($con);
        }else{
            echo "<br>Successfull Updation in DB<br><a href='./'>HOME</a>";
        }
    }
?>