<?php
include 'php/config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql= "DELETE FROM examresult  where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        ?>
        <script>
            alert("Delete sucess")
            window.location.href="index.php";
        </script>
        <?php
    }else{
        die(mysqli_error($conn));
    }
}
?>