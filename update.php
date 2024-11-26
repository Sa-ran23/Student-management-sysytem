<?php
include 'php/config.php';
$id = $_GET['id'];

if(isset($_POST['submit'])){

    $sql = "UPDATE addstudent SET name='$_POST[name]',reg='$_POST[reg]',gender='$_POST[gender]',dob='$_POST[dob]',class='$_POST[class]',
    batch='$_POST[batch]',blood='$_POST[blood]',mobile1='$_POST[mobile1]',mobile2='$_POST[mobile2]',parent1='$_POST[parent1]',
    relation1='$_POST[relation1]',occupation1='$_POST[occupation1]',parent2='$_POST[parent2]',relation2='$_POST[relation2]',
    occupation2='$_POST[occupation2]',pmobile1='$_POST[pmobile1]',pmobile2='$_POST[pmobile2]',pemail='$_POST[pemail]',
    address='$_POST[address]',country='$_POST[country]',district='$_POST[district]',state='$_POST[state]',
    village='$_POST[village]' WHERE id='$_GET[id]'";

    $results=mysqli_query($conn,$sql);

    if($results){
        echo "sucess";
    }else{
        echo"Failed".mysqli_error($conn);
    }
}
$result = mysqli_query($conn,"SELECT * FROM addstudent WHERE id='".$_GET['id']."'");
    $row = mysqli_fetch_array($result);
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/update.css" >
</head>
<body>
    <form action="#" method="POST">
        <div class="details" data-section="details">
                <div>
                <!-- <button onclick="closeframes()">&times;</button> -->
                    <div class="sinfo">STUDENT INFO </div>
                </div>
                    <div class="first row">
                        <label class="nam">Name</label>
                        <label class="rege">Reg no.</label>
                        <label class="gen">Gender</label>
                        <label class="ages">Dob</label>
                        <label class="clas">Class</label>
                    </div>
                    <div class="second row">
                        <input type="text" class="t1"  name="name" value="<?php echo $row["name"];?>">
                        <input type="text" class="t2" name="reg" value="<?php echo $row["reg"];?>">
                        <select class="t3"  value="<?php echo $row['gender'];?>">
                            <option value="none">-None-</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <input type="date" class="t4" value="<?php echo $row["dob"];?>">
                        <input type="text" class="t5" value="<?php echo $row["class"];?>">
                    </div>
                    <div class="third row">
                        <label class="batch">Batch</label>
                        <label class="blood">Blood Group</label>
                        <label class="number1">Mobile no1.</label>
                        <label class="number2">Mobile no2</label>
                        <label class="semail">Student Email</label>
                    </diV>
                    <div class="six row">
                        <input type="text" class="t6" value="<?php echo $row["batch"];?>">
                        <input type="text" class="t7" value="<?php echo $row["blood"];?>">
                        <input type="text" class="t8" value="<?php echo $row["mobile1"];?>">
                        <input type="text" class="t9" value="<?php echo $row["mobile2"];?>" >
                        <input type="email" class="t10" value="<?php echo $row["semail"];?>">
                    </div>
<!-- parent info -->
                <div class="parent">
                    <div class="pinfo">PARENT INFO</div>
                    <div class="four row">
                        <label class="l1">Parent Name</label>
                        <label class="l2">Relationship</label>
                        <label class="l3">Occupation</label>
                    </div>
                    <div >
                        <input type="type" class="i1" value="<?php echo $row["parent1"];?>">
                        <input type="type" class="i2" value="<?php echo $row["relation1"];?>">
                        <input type="type" class="i3" value="<?php echo $row["occupation1"];?>">
                    </div>
                    <div class="five">
                        <label class="l4">Parent Name</label>
                        <label class="l5">Relationship</label>
                        <label class="l6">Occupation</label>
                    </div>
                    <div>
                        <input type="type" class="i4" value="<?php echo $row["parent2"];?>">
                        <input type="type" class="i5" value="<?php echo $row["relation2"];?>">
                        <input type="type" class="i6" value="<?php echo $row["occupation2"];?>">
                    </div>
                    <div class="seven">
                        <label class="l7">Phone no1</label>
                        <label class="l8">Phone no2</label>
                        <label class="l9"> Parent Email</label>
                    </div>
                    <div>
                        <input type="type" class="i7" value="<?php echo $row["pmobile1"];?>">
                        <input type="type" class="i8" value="<?php echo $row["pmobile2"];?>">
                        <input type="type" class="i9" value="<?php echo $row["pemail"];?>">
                    </div>
                </div>
<!-- Address info -->
                <div class="address">
                    <div class="ainfo">ADDRESS INFO</div>
                    <div class="twevel">
                        <label class="l10">Address</label>
                    </div>
                    <div class="e1">
                    <div class="e2">
                        <input type="text" class="i10" value="<?php echo $row["address"];?>">
                    </div>
                    <div class="e3">
                        <div>
                            <label class="l11">Country</label>
                            <label class="l12">District</label>
                        </div>
                    <div>
                        <input type="type" class="i11" value="<?php echo $row["country"];?>">
                        <input type="type" class="i12" value="<?php echo $row["district"];?>">
                    </div>
                    <div class="r2">
                        <label class="l13">State</label>
                        <label class="l14">Village</label>
                    </div>
                    <div>
                        <input type="type" class="i13" value="<?php echo $row["state"];?>">
                        <input type="type" class="i14" value="<?php echo $row["village"];?>">
                    </div>
                    </div>
                    </div>
                    <div class="update">
                    <div class="updatebutton">
                        <a href="index.php" class="back"> BACK</a>
                        <input type="submit" value="submit" name="submit"  class="submit" id="submit">
                        </div>
                        
                    </div>
        </div>
    </form>
    <script src="js/popup.js"></script>
    <script src="js/update.js"></script>
</body>
</html>