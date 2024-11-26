<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

include "php/config.php";

if(isset($_POST["send"])){
        $batch = $_POST['batch'];
    
        // Add a batch filter to the SQL query
        $sql = "SELECT semail FROM addstudent WHERE batch = '$batch'";
        $result = $conn->query($sql);

if($result->num_rows > 0){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'bca80800@gmail.com';
    $mail->Password   = 'iusp qpmy jaxr vtkc';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Recipient
    $mail->setFrom('bca80800@gmail.com');
    // Content
    $mail->isHTML(true);
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];

    while($row = $result->fetch_assoc()){
        $recipient = $row["semail"];
        $mail->clearAddresses();
        $mail->addAddress($recipient);

        try{
            $mail->send();
            echo "
            <script>
                alert('Message has been sent sucessfully!');
                document.location.href = 'index.php';
            </script>
            ";

        }catch(Exception $e){
            echo"
            <script>
                alert('Message had an Error,please contact the developer black !');
                document.location.href = 'index.php';
            </script>
            ";
        }
    }
 
}else{
    echo"
    <script>
    alert('No Email Founded, Please Add the student list first !');
    document.location.href = 'index.php';
</script>
";
}
$conn->close();
}
?>