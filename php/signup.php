<?php
   session_start();
   include_once "config.php";
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $emailid = mysqli_real_escape_string($conn, $_POST['emailid']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);
   $repassword = mysqli_real_escape_string($conn, $_POST['repassword']);

   if(!empty($username) && !empty($emailid) && !empty($password) && !empty($repassword)){

      if(filter_var($emailid, FILTER_VALIDATE_EMAIL)){
         $sql = mysqli_query($conn, "SELECT emailid FROM users WHERE emailid = '{$emailid}'");
         if(mysqli_num_rows($sql) > 0){
            echo "User already exist!";
         }else{
            if($password != $repassword){
               echo "password not matched!";
            }else{
                 $random_id = rand(time(),10000000);

                 $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id,username,emailid,password,repassword)
                                      VALUES ({$random_id}, '{$username}',  '{$emailid}',  '{$password}',  '{$repassword}')");
               if($sql2){
                  $sql3 = mysqli_query($conn,"SELECT * FROM users WHERE emailid = '{$emailid}'");
                  if(mysqli_num_rows($sql3) > 0){
                     $row = mysqli_fetch_assoc($sql3);
                     $_SESSION['unique_id'] = $row['unique_id'];
                     echo "success";
                  }
                  }else{
                     echo "Something went wrrong!";
                   }
            }
         }
      }else{
         echo "$emailid - This is not a valid email!";
      }
   }else{
      echo "All input field are required !";
}
?>