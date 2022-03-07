<?php
include('includes/importants.php');
$msg="";
if(isset($_POST['submit'])){
    //getting the inputs from the user.
    $name1=get_safe_input($conn,$_POST['name']);
    $email1=get_safe_input($conn,$_POST['email']);
    $msg1=get_safe_input($conn,$_POST['msg']);
    //sanitising to make it secure.
$name=filter_var($name1,FILTER_SANITIZE_STRING);
$email=filter_var($email1,FILTER_VALIDATE_EMAIL);
$year=date("Y");
$md=date("m-d");
$future_year=$year+10 .$md;
$sql="INSERT INTO message(uname,email,msg,c_year,future_year) VALUES('$name','$email','$msg1','$year','$future_year')";
mysqli_query($conn,$sql);
$msg="Thanks for using our service";
$to      = 'nobody@example.com';
$subject = 'the subject';
$message = 'Dear'.$name. "Thanks for using 10 years service to email future yourself. I hope you will smile looking at that mail one day!";
$headers = 'From: webmaster@example.com'       . "\r\n" .
             'Reply-To: webmaster@example.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/style.css">
    <title>10 years mail</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <img src="assets/logo.png" alt="">
        </div>
        <div class="links">
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="about.php">FAQ</a></li>
            </ul>
        </div>
    </div>
   