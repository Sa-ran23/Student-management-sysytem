<?php
    session_start();
    include_once "config.php";
    $emailid = mysqli_real_escape_string($conn, $_POST['emailid']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if(!empty($emailid) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE emailid = '{$emailid}' AND password = '{$password}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['unique_id'] = $row['unique_id'];
            echo "success";
        }else{
            echo "Email or Password incorrect!";
        }
    }else{
        echo "All input field are required!";
    }
?>