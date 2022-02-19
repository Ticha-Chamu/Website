<?php

if (isset($_POST['Submit'])) {
   $name= $_POST['Name'];
   $subject= $_POST['Subject'];
   $mailFrom=$_POST['Email'];
   $message=$_POST['Message'];


   $mailTo="tichachamu12@gmail.com";
   $headers= "From: ".$mailFrom;
   $txt="You have received an email from".$name.".\n\n".$message;
   
   mail($mailTo, $subject,$txt,$headers);
   header("Location: index.php?mailsend");
}
?>