<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal information</title>
    <link rel="stylesheet" href="css/info.css">
</head>
<body>
   
    <div class="main" id="main">
        <div class="topic">
            <div class="title">
                <p>STUDENT DETAILS</p>
               <button onclick="closeframes()">&times;</button>
            </div>
            <div class="bar">
                    <a href="#" data-filter="details">DETAILS</a>
                    <a href="#" data-filter="parent">PARENT INFO</a>
                    <a href="#" data-filter="address">ADDRESS</a>
            </div>
        </div>
        
    <form  action="php/addstudent.php" method="POST" enctype="multipart/form-data">
        <div class="box">
            <div class="info">
                <p>Personal Profile</p>
                <input type="file" class="profileimg" name="image">
                <label>Email</label>
                <input type="text" name="semail" required>
                <label>Mobile No.</label>
                <input type="text" name="mobile1" id="mobile1" name="mobile1" required>
                <!-- <?php
       // }
   // }
    ?> -->
            </div>
            <div class="sidepage">
<!-- details info -->
                <div class="details section" id="details">
                    <div class="first row">
                        <label class="nam">Name</label>
                        <label class="rege">Reg no.</label>
                    </div>
                    <div class="second row">
                        <input type="text" class="t1" name="name"  id="name" required>
                        <input type="text" class="t2" name="reg"  id="reg" required>
                    </div>
                    <div class="third row">
                        <label class="gen">Gender</label>
                        <label class="ages">Dob</label>
                        <label class="clas">Class</label>
                    </div>
                    <div class="four row">
                        <select class="t3" id="gender" name="gender" required>
                            <option value="None">-None-</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <input type="date" class="t4" id="dob" name="dob" required>
                        <input type="text" class="t5" id="class" name="class" required>
                    </div>
                    <div class="five row">
                        <label class="batch">Batch</label>
                        <label class="blood">Blood group</label>
                        <label class="number2">Mobile no.</label>
                    </diV>
                    <div class="six row">
                        <input type="text" class="t6" id="batch" name="batch" required>
                        <input type="text" class="t7" id="blood" name="blood" required>
                        <input type="text" class="t8" id="mobile2" name="mobile2">
                    </div>
                   
                </div>
<!-- parent info -->
                <div class="parent section hidden" id="parent">
                    <div class="seven row">
                        <label class="l1">Parent Name</label>
                        <label class="l2">Relationship</label>
                    </div>
                    <div>
                        <input type="type" class="i1" id="parent1" name="parent1" required >
                        <input type="type" class="i2" id="relation1" name="relation1" required>
                    </div>
                    <div class="eight row">
                        <label class="l3">Occupation</label>
                    </div>
                    <div>
                        <input type="type" class="i3"  id="occupation1" name="occupation1" required>
                    </div>
                    <div class="nine">
                        <label class="l4">Parent Name</label>
                        <label class="l5">Relationship</label>
                    </div>
                    <div>
                        <input type="type" class="i4" id="parent2" name="parent2">
                        <input type="type" class="i5" id="relation2" name="relation2">
                    </div>
                    <div class="ten">
                        <label class="l6">Occupation</label>
                    </div>
                    <div>
                        <input type="type" class="i6" id="occupation2" name="occupation2" >
                    </div>
                    <div class="eleven">
                        <label class="l7">Phone no</label>
                        <label class="l8">Phone no</label>
                        <label class="l9">Email</label>
                    </div>
                    <div>
                        <input type="type" class="i7" id="pmobile1" name="pmobile1" required>
                        <input type="type" class="i8"  id="pmobile2" name="pmobile2" >
                        <input type="type" class="i9" id="pemail" name="pemail">
                    </div>
                   
                </div>
<!-- Address info -->
                <div class="address section hidden" id="address">
                    <div class="twevel">
                        <label class="l10">Address</label>
                    </div>
                    <div>
                        <textarea class="i10" id="address" name="address" required></textarea>
                    </div>
                    <div class="thirteen">
                        <label class="l11">Country</label>
                        <label class="l12">District</label>
                    </div>
                    <div>
                        <input type="type" class="i11" id="country" name="country" required>
                        <input type="type" class="i12" id="district" name="district" required>
                    </div>
                    <div class="fourteen">
                        <label class="l13">State</label>
                        <label class="l14">Village</label>
                    </div>
                    <div>
                        <input type="type" class="i13"  id="state" name="state" required>
                        <input type="type" class="i14" id="village" name="village" required >
                    </div>
                     <div class="updatebutton3">
                        <input type="submit" name="submit"  value="submit"  id="edit">
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</form>
    <script src="js/popup.js"></script>
    <script src="js/update.js"></script>
</body>
</html>
