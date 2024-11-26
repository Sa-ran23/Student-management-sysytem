<?php
	session_start();
	if(!isset($_SESSION['unique_id'])){
		header("location: loginpage.php");
		exit;
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Navil</title>
		<link rel="stylesheet" href="css/Navigation bar.css">
		<link rel="stylesheet" href="css/info.css">
		<link rel="stylesheet" href="css/pdf file.css">
		<link rel="stylesheet" href="css/emailsend.css">
		<link rel="stylesheet" href="css/examresult.css">
		<link rel="stylesheet" href="css/home.css">
	</head>
	<body class="Light">
		<nav class="sidebar close">
			<header>
				<?php
					include_once "php/config.php";
					$sql = mysqli_query($conn, "SELECT * FROM  users WHERE unique_id = {$_SESSION['unique_id']}");
					if(mysqli_num_rows($sql) > 0){
						$row = mysqli_fetch_assoc($sql);
					}
				?>
				
				<div class="image-text">
					<span class="image">
						<img src="images/logo1.png" alt="logo">
					</span>
					
					<div class="text header-text">
						<span class="name"><?php echo $row['username']?></span>
						<span class="profession">Created by Student</span>
					</div>
				</div>
				
				<i><img src="images/arrow1.png" class='bx bx-chevron-right toggle'></i>
			</header>
			
			<div class="menu-bar">
				<div class="menu">
					<ul class="menu-links">
						<li class="nav-link">
							<a href="#" data-filter="homes">
								<i ><img src="images/icon1.png" class='bx bx-home-alt icon' width="10px"></i>
								<span class="text nav-text">Home</span>
							</a>
						</li>
						<li class="nav-link">
							<a href="#" data-filter="users">
								<i ><img src="images/icon2.png" class='bx bx-bar-chart-alt-2 icon' width="10px"></i>
								<span class="text nav-text">Student information</span>
							</a>
						</li>
						<li class="nav-link">
							<a href="#" data-filter="pdf-file">
								<i ><img src="images/icon4.png" class='bx bx-bell icon' width="10px"></i>
								<span class="text nav-text">DOC Store</span>
							</a>
						</li>
						<li class="nav-link">
							<a href="#" data-filter="emailsender">
								<i ><img src="images/icon5.png" class='bx bx-pie-chart-alt icon' width="10px"></i>
								<span class="text nav-text">Email Sender</span>
							</a>
						</li>
						<li class="nav-link">
							<a href="#" data-filter="result">
								<i ><img src="images/icon0.png" class='bx bx-pie-chart-alt icon'  width="10px"></i>
								<span class="text nav-text">Results Manage</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="bottom-content">
					<li class="">
							<a href="loginpage.php">
								<i ><img src="images/icon7.png" class='iconm-logout' width="10px"></i>
								<span class="text nav-text-logout">Logout</span>
							</a>
						</li>
				</div>
			</div>
		</nav>
<!-- home -->
<section class="homes section " id="homes">
	<div class="htopic">STAFF MULTIPURPOSE MANAGEMENT SYSTEM</div>
	<?php
	include 'php/config.php';

	$sqql = "SELECT COUNT(*) as total_students FROM addstudent";
	$results = $conn->query($sqql);
	if($results->num_rows > 0){
		while($row = $results->fetch_assoc()){
		$total_students = $row["total_students"];
	}
}else{
		$total_students = 0;
	}
	$boys_sql = "SELECT COUNT(*) as total_boys FROM addstudent WHERE gender = 'male'";
	$boys_results = $conn->query($boys_sql);
	if($boys_results->num_rows > 0){
		while($row = $boys_results->fetch_assoc()){
		$total_boys = $row["total_boys"];
	}
}else{
		$total_boys = 0;
	}
	$girls_sql = "SELECT COUNT(*) as total_girls FROM addstudent WHERE gender = 'female'";
	$girls_results = $conn->query($girls_sql);
	if($girls_results->num_rows > 0){
		while($row = $girls_results->fetch_assoc()){
		$total_girls = $row["total_girls"];
	}
}else{
		$total_girls = 0;
	}
	?>
		<div class="numboxs">
			<div class="numbox1">
				<div class="lab1">Total Students</div>
				<div class="num1"><?php echo $total_students; ?></div>
			</div>
			<div class="numbox2">
				<div class="gentat">
					<div class="boy">Boys</div>
					<div class="girl">Girls</div>
				</div>
				<div class="gentotal">
					<div class="boys"><?php echo $total_boys; ?></div>
					<div class="girls"><?php echo $total_girls; ?></div>
				</div>
			</div>
		</div>
		<div class="num2box">
	<div class="rebatch">
		<div class="tch">Batch</div>
		<input type="text" class="bth">
		<input type="submit" class="bbth">
	</div>
	<div class="resultbox">
	<div class="numbox">
    <div class="lab">1st Rank Student</div>
    <div class="num">
        <?php
		include 'php/config.php';
        
		$query = "SELECT reg, (semI + semII + semIII + semIV + semV + semVI) AS total_marks FROM examresult  ORDER BY total_marks DESC LIMIT 3";
        $result = mysqli_query($conn, $query);

        // Fetch and display the results in the respective boxes
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo $row['reg'];
        } else {
            echo "No students found.";
        }

       ?>
    </div>
</div>

<div class="numbox">
    <div class="lab">2nd Rank Student</div>
    <div class="num">
        <?php
        // Assuming you have already established a database connection

        // Fetch and display the results in the respective boxes
        if(mysqli_num_rows($result) > 1) {
            $row = mysqli_fetch_assoc($result);
            echo $row['reg'];
        } else {
            echo "No students found.";
        }

     ?>
    </div>
</div>

<div class="numbox">
    <div class="lab">3rd Rank Student</div>
    <div class="num">
        <?php
        // Assuming you have already established a database connection

        // Fetch and display the results in the respective boxes
        if(mysqli_num_rows($result) > 2) {
            $row = mysqli_fetch_assoc($result);
            echo $row['reg'];
        } else {
            echo "No students found.";
        }

        mysqli_close($conn);
        ?>
    </div>
	</div>
</div>
</section>

<!--add student-->
<section class="users section hidden" id="users">
    <div class="userss">
        <div class="head">
            <p>Student Information</p>
            <a class="add-a" href="javascript:void(0)" onclick="togglepopups()">+ Add Students</a>
        </div>
        <div id="popups" class="popup-containers">
            <iframe src="add student.php" height="704px" width="1155px"></iframe>
        </div>
		<input type="text" id="searchInput" onkeyup="searchStudents()" placeholder="Search for students..." class="searchstd">
        <?php
        include 'php/config.php';

        $sql = mysqli_query($conn, "SELECT * FROM  addstudent");
        while ($row = mysqli_fetch_assoc($sql)) {
            $id = $row['id'];
        ?>
            <div id="popup" class="popup-container">
                <iframe src="viewstudent.php?id=<?php echo $row['id']; ?>" height="704px" width="1155px"></iframe>
            </div>
        <?php
        }
        ?>
        <!-- student list -->
        <div class="users-list">
            <?php

            $sql = mysqli_query($conn, "SELECT * FROM  addstudent");

            if (mysqli_num_rows($sql) == 0) {
                echo  '<div class="no-result">No Result Found</div>';
            } elseif (mysqli_num_rows($sql) > 0) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $reg = $row['reg'];
                    $id = $row['id'];
                    $img = $row['img'];
                    echo '
                        <div class="list" id="student-'.$id.'">
                            <img src="php/profile/' . $row['img'] . '" alt="profile">
                            <div class="reg">' . $row['reg'] . '</div>
                            <div class="link">
                                <a href="javascript:void(0)" onclick="togglepopup()">View</a>
                                <a href="update.php?id=' . $id . '">Update</a>
                                <a href="delete.php?id=' . $id . '">Delete</a>
                            </div>
                        </div>';
                }
            }
            ?>
        </div>
    </div>
</section>

<script>
    function searchStudents() {
        let input, filter, list, item, reg, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        list = document.getElementsByClassName("list");
        for (i = 0; i < list.length; i++) {
            item = list[i];
            reg = item.getElementsByClassName("reg")[0];
            txtValue = reg.textContent || reg.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                item.style.display = "";
            } else {
                item.style.display = "none";
            }
        }
    }
</script>

<!-- pdf file -->

<section class="pdf-file section hidden" id="pdf-file">
	<?php
	include 'php/pdf.php';
	
	if (isset($_POST['button'])) {
		$name = $_POST['name'];
	
		if (isset($_FILES['file'])) {
			$type = $_POST['type'];
	
			$allowed_types = array('pdf', 'docx', 'txt','jpeg','jpg','png','img','webp','pptx','zip','wps','mp3','amg','mpeg','flv','avi','wav','acc','rtf','rar','tar','iso','7z','xlsx','xml','mkv','mp4'); // Add more file types as needed
	
			if (in_array($type, $allowed_types)) {
				$img = $type . '_' . $_FILES['file']['name'];
				move_uploaded_file($_FILES['file']['tmp_name'], 'pdf files/' . $img);
			} else {
				// header('Location: index.php');
				 return false;
			}
		}
	
		if (!empty($name)) {
			pdf::insert($name, $img,$type);
			// header('Location: index.php');
        exit();
		} else {
			pdf::$alerts[] = '';
		}
	}
	
	// Rest of your code remains unchanged
	?>
	
	<?php
	if(count(pdf::$alerts)>0){
		$alert=pdf::$alerts;
		foreach($alert as $value){
			echo $value;
		}
	}else{
	}
	
	?>
	<div class="files">
		<div class="uploadtext">Upload Files</div>
			<form action="" method="post" enctype="multipart/form-data">
				<input type="text" name="name" placeholder="Name" class="namebox" required>
				<select name="type" required class="typebox">
                            <option value="none">-File Type-</option>
                            <option value="pdf">.pdf</option>
                            <option value="docx" value="doc">.docx</option>
							<option value="img">.img</option>
							<option value="jpeg"value="jpg">.jpeg</option>
							<option value="png">.png</option>
							<option value="webp">.webp</option>
							<option value="pptx">.pptx</option>
							<option value="xlsx">.xlsx</option>
							<option value="xml">.xml</option>
							<option value="txt"value="rtf"value="wps">text(.txt,.wps,.rtf)</option>
							<option value="zip" value="rar"value="tar"value="iso"value="7z">compress(.zip,.rar,.tar,.iso,.7z)</option>
							<option value="mp3"value="wav"value="acc">Audio(.mp3,.wav,.acc)</option>
							<option value="mp4"value="amg"value="mpeg"value="flv" value="avi" value="mkv">video(.mkv,.mp4,.amg,.mpeg,.flv,.avi)</option>


                        </select><br>
						<div class="image-container">
  							<input type="file" name="file" id="fileInput" style="display: none;" onchange="displayImagePreview(event)">
							<img src="images/upload.png" alt="Upload Files" id="imagePreview">
						</div>
						<input type="submit" value="UPLOAD" name="button" class="filebutton">
				
			</form>
	</div>
	<div class="content">
		<div class="dtitle">PDF FILES</div>
		<div class="file-span">
			<?php
			if(count(pdf::select())>0){
				$fetch=pdf::select();
				foreach($fetch as $value){
					?>
					<span class="docfiles">
						<img src="images/1.png" alt="file image" class="fileimg">
						<a href="pdf files/<?php echo $value['img']; ?>" download="<?php echo $value['img'];?>" class="dlink"><?php echo $value['name'].'.'.$value['type']; ?></a>
						<a href="pdf delete.php?id=<?php echo $value['id']; ?>" class="ddelete">Delete</a>
					</span>
					<?php
				}
			}
			?>
			</div>
		</div>
	</div>
</section>

<!-- Email sender -->
<section class="emailsender section hidden" id="emailsender">
    <form class="" action="emailsend.php" method="POST" enctype="multipart/form-data">
		<div class="ehead">
			<div>SEND THE MSG TO EMAIL</div>
		</div>
	<!-- hidden start -->
		<div class="stemail">
			<label for="email">To:</label>
        	<input type="text" name="email" value=""><br>
		</div>
	<!-- hidden end -->
		<div class="emailfill1">
			<label class="eml1" for="batch">Batch:</label>
			<label class="eml2" for="subject">Subject:</label>
		</div>
		<div class="emailfill2">
			<input type="text" name="batch"  class="emi1">
			<input type="text"  name="subject"  class="emi2" value="" required><br>
		</div>
		<div class="emailfill3">
			<label  class="eml3" for="message">Message:</label>
		</div>
		<div class="emailfill4">
			<textarea type="text"  class="emi3" name="message" value="" required></textarea><br>
		</div>
        <button type="submit" name="send"  class="embutton" >Send Mail</button>
    </form>
</section>


<!-- result -->
<section class="result section hidden" id="result">
	<div>
		<div class="resulthead">
			<div class="resulttext">Student MarkList</div>
			<div class="stright">
			<div>
				<label class="bat" >Batch</label>
			</div>
			<form id="batchForm" action="" method="GET">
           		<input type="text" name="batch" class="inbat">
            	<input type="button" value="Submit" onclick="submitForm()" class="bubat">
        	</form>
		</div>
		</div>
		<div class="tablehead">
			<table>
				<tr>
					<th class="tname">NAME</th>
					<th class="treg">REG NO</th>
					<th class="tbat">BATCH</th>
					<th>SEM I</th>
					<th>SEM II</th>
					<th>SEM III</th>
					<th>SEM IV</th>
					<th>SEM V</th>
					<th>SEM VI</th>
					<th>PERCENTAGE</th>
					<th>EDIT</th>
					<th>DELETE</th>
				</tr>
		</div>
		<div id="batchResult">
        <!-- Batch data will be displayed here -->
    </div>
		<div>
		<?php
	  	  if(isset($_GET['batch'])) {
			$batch = $_GET['batch'];
			$sql = mysqli_query($conn, "SELECT * FROM examresult WHERE batch='$batch'");
			while($row = mysqli_fetch_assoc($sql)){
				$id = $row['id'];
				// Calculate percentage
				$total_marks = (int)$row['semI'] + (int)$row['semII'] + (int)$row['semIII'] + (int)$row['semIV'] + (int)$row['semV'] + (int)$row['semVI'];
				$percentage = (String)($total_marks / 600) * 100; // Assuming total marks for all semesters is 600
			  
					echo '
					<tr>
						<td>'.$row['name'].'</td>
						<td>'. $row['reg'].'</td>
						<td>'. $row['batch'].'</td>
						<td>'. $row['semI'].'</td>
						<td>'. $row['semII'].'</td>
						<td>'. $row['semIII'].'</td>
						<td>'. $row['semIV'].'</td>
						<td>'. $row['semV'].'</td>
						<td>'. $row['semIV'].'</td>
						<td>'.$percentage.'</td>
						<td><a class="" href="markenter.php?id='.$id.'"><img src="images/edit.png" alt="edit"></a></td>
						<td><a class="" href="resultdelete.php?id='.$id.'"><img src="images/delete.png" alt="delete" class="tdeleteimg"></a></td>
					</tr>
		';
				}
			}
		?>
		</table>
		</div>
	</div>
	<script>
    function submitForm() {
        document.getElementById("batchForm").submit();
    }
</script>
</section>


		<script src="js/Navigation bar.js"></script>
		<script src="js/popup.js"></script>
		<script src="js/inpu.js"></script>
		<script src="js/emailsend.js"></script>
		<script src="js/index option.js"></script>
	</body>
</html>