<?php
include 'connect.php';

if(isset($_GET['deleteId'])){
    $id = $_GET['deleteId'];
    $user = $_GET['user'];

    $sql = "delete from `{$user}` where id = $id ";
    $result = mysqli_query($con,$sql);

    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error());
    }

}


?>