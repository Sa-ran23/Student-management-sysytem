<?php
    $conn = mysqli_connect("localhost","root","","signup");
    if(!$conn){
        echo " Database connected" .mysqli_connect_error();
    }

?>