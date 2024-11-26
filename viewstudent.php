<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/viewstudents.css">
</head>
<body>
<?php
    include 'php/config.php';

        $id = $_GET['id'];
        $sql = "SELECT * FROM addstudent where id = '$id'";
        $run = mysqli_query($conn,$sql);    
        $row = mysqli_fetch_assoc($run);
?>
            <div class="box">
                    <div class="first row">
                        <label class="nam">Name</label>
                        <label class="rege">Reg no.</label>
                        <label class="clas">Class</label>
                    </div>
                    <div class="second row">
                        <input type="text" class="t1"  name="name" value="<?php echo $row['name'] ?>">
                        <input type="text" class="t2" name="reg" value="<?php echo $row['reg'] ?>">
                        <input type="text" class="t5" value="<?php echo $row['class'] ?>">
                    </div>
                    <div class="third row">
                        <label class="batch">Batch</label>
                        <label class="number1">Mobile no.</label>
                        <label class="semail">Student Email</label>
                    </diV>
                    <div class="four row">
                        <input type="text" class="t6" value="<?php echo $row['batch'] ?>">
                        <input type="text" class="t8" value="<?php echo $row['mobile1'];?>">
                        <input type="email" class="t10" value="<?php echo $row['semail'] ?>">
                    </div>
                    <div class="five">
                        <label class="state">State</label>
                    </div>
                    <div>
                        <input type="type" class="i13" value="<?php echo $row['state'] ?>">
                    </div>
            </div>
</body>
</html>