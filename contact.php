
<?php

if(isset($_POST['submit'])){

    $name = trim($_POST['name']);
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $myMail = "rafayzia10@yahoo.com"
    $header = "From" . $email
    $message2 = "You have recieved a message from" . $name . "." . "\n \n" . $message;

    mail($myMail,$subject,$message2,$header);
    header("Location : index.php ?mail sent!");
}


?>

 


