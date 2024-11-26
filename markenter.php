
<?php

include("php/config.php");
$id=$_GET['id'];
if(isset($_POST['submit'])){

   
     $sql1 =  "UPDATE examresult SET name='$_POST[name]',reg='$_POST[reg]',batch='$_POST[batch]',semI='$_POST[semI]',semII='$_POST[semII]',semIII='$_POST[semIII]',
     semIV='$_POST[semIV]',semV='$_POST[semV]',semVI='$_POST[semVI]',percentage='$_POST[percentage]' WHERE id='$_GET[id]'";
     
    $query=mysqli_query($conn,$sql1);
    
    if($query){

        ?>
        <script>
            alert("success");
            window.location.href="index.php";
        </script>

        <?php
    }else{
        ?>
        <script>
            alert("fail");
            window.location.href="index.php";
        </script>
        <?php

    }

                            }
                        
    $result = mysqli_query($conn,"SELECT * FROM examresult WHERE id='".$_GET['id']."'");
    $row = mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name"  value="<?php echo $row["name"];?>">
        <input type="text" name="reg" value="<?php echo $row["reg"];?>">
        <input type="text" name="batch" value="<?php echo $row["batch"];?>">
        <input type="text" name="semI" value="<?php echo $row["semI"];?>">
		<input type="text" name="semII" value="<?php echo $row["semII"];?>">
		<input type="text" name="semIII" value="<?php echo $row["semIII"];?>">
		<input type="text" name="semIV" value="<?php echo $row["semIV"];?>">
		<input type="text" name="semV" value="<?php echo $row["semV"];?>">
		<input type="text" name="semVI" value="<?php echo $row["semVI"];?>">
        <input type="submit" name="submit" value="submit" id="submit">
    </form>
</body>
</html> 