<?php
include('connection.inc.php');
$date=date('Y');
$sql="SELECT * FROM message WHERE c_year='$date'";
$res=mysqli_query($conn,$sql);
//fetch the corresponding data from the database to send the email to the user.
while($rows=mysqli_fetch_assoc($res)){
   $name=$rows['uname'];
   $email=$rows['email'];
   $msg=$rows['msg'];
}
// Note: The below mail function in php doesnt work on local server and you need to host it to actually make use of it.
$to      = $name;
$subject = 'My message from 10 years ago';
$message = $msg;
mail($to, $subject, $message);
//or you can use the php mailer from  https://github.com/PHPMailer/PHPMailer .

//CRON JOB
// You need to schedule the cron job every day using the following line of code in the hosting
// crontab -e
// 00 00 * * *  in the format of(min,hour,day,month,day);
?>