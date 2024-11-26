<?php
include 'php/config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql= "DELETE FROM pdf  where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Delete sucess";
        header('location:index.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>