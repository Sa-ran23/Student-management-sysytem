<?php

include("config.php");
if(isset($_POST['submit'])){
    $id=$_POST['id'];


     $sql1 =  "UPDATE examresult SET name = '$_POST[name]',reg = '$_POST[reg]',batch = '$_POST[batch]',semI  = '$_POST[semI]',semII  = '$_POST[semII]',semIII  = '$_POST[semIII]',
     semIV  = '$_POST[semIV]',semV  = '$_POST[semV]',semVI  = '$_POST[semVI]',percentage  = '$_POST[percentage]' WHERE id='$_POST[id]'";
     
                        if(mysqli_query($conn,$sql1)){
                            echo "hhh";
                            }
                        }
        


?>
