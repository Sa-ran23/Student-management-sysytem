<?php

session_start();
include("config.php");

$name = $_POST['name'];
$reg = $_POST['reg'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$class = $_POST['class'];
$batch = $_POST['batch'];
$blood = $_POST['blood'];
$mobile1 = $_POST['mobile1'];
$mobile2 = $_POST['mobile2'];
$parent1 = $_POST['parent1'];
$relation1 = $_POST['relation1'];
$occupation1 = $_POST['occupation1'];
$parent2 = $_POST['parent2'];
$relation2 = $_POST['relation2'];
$occupation2 = $_POST['occupation2'];
$pmobile1 = $_POST['pmobile1'];
$pmobile2 = $_POST['pmobile2'];
$pemail = $_POST['pemail'];
$address = $_POST['address'];
$country = $_POST['country'];
$district = $_POST['district'];
$state = $_POST['state'];
$village = $_POST['village'];
$semail = $_POST['semail'];



if(!empty($name) && !empty($reg) && !empty($class)){
    if(mysqli_connect_error()){
        die('Connect Error ('.mysqli_connect_error(). ')'.mysqli_connect_error());

    }else{
        $sql1= "SELECT * FROM addstudent WHERE reg = '$reg'";
    $result = $conn->query($sql1);

    if($result->num_rows > 0){
        ?>
        <script>
                alert("Registration number- <?php echo $reg ?> -already exists.please choose a different one .");
        </script>'
        <?php
    }else{

        if(isset($_FILES['image'])){
          $file_name = $_FILES['image']['name'];
          $tempname = $_FILES['image']['tmp_name'];
          $folder = 'profile/'.$file_name;


                    $sql1 =  "INSERT INTO addstudent(name,reg,gender,dob,class,batch,blood,mobile1,mobile2,parent1,relation1,occupation1,parent2,relation2,occupation2,pmobile1,pmobile2,pemail,address,country,district,state,village,semail,img)
                            VALUES('$name','$reg','$gender','$dob','$class','$batch','$blood','$mobile1','$mobile2','$parent1','$relation1','$occupation1','$parent2','$relation2','$occupation2','$pmobile1','$pmobile2','$pemail','$address','$country','$district','$state','$village','$semail','$file_name')";

                     $sql2 =  "INSERT INTO examresult (name,reg,batch)
                             VALUES('$name','$reg','$batch')";

                        if(mysqli_query($conn,$sql1)){
                             if(mysqli_query($conn,$sql2)){
                            
                             }
                            }
                        if(move_uploaded_file($tempname,$folder)){
                            echo "";
                        }else{
                            echo"";
                        }
                           
                
                $conn->close();
            }
    }
}}

?>
