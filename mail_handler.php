<?php
if(isset($_POST['submit'])){
  $name=$POST['name'];
  $email=$POST['email'];
  $phone=$POST['phone'];
  $message=$POST['msg'];

$to='chitakilin@gmail.com';
/*the mailID is ozaromediatech@gmail.com"*/
$subject ='Form Submission';
$message = "Name: ".$name."\n","Phone: ".$phone."\n"."Wrote the following:"."\n\n".$msg;
$headers = "From:".$email;// Sender's Email

if(mail($to, $subject, $message, $headers){
echo "<h1>Your mail has been sent successfuly ! Thank you for your feedback"." ".$name"</h1>";
}
else{
  echo "Something went wrong";
}
}
?>
