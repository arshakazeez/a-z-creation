<?php
 $fname = $_REQUEST['fname'];
 $lname = $_REQUEST['lname'];
 $email = $_REQUEST['email'];
 $subject = $_REQUEST['subject'];
 $message = $_REQUEST['message'];

 if(empty($fname) || empty($lname) || empty($email) || empty($subject) || empty($message))
 {
     echo "PLEASE ENTER ALL FIELDS";
 }
 else {
     mail("azcreationpvt@gmail.com","website message",$message,"from: $fname < $lname < $email >");
     echo " <script type='text/javascript'>alert('YOUR MESSAGE SENT SUCCESSFULL'); 
           window.history.log(-1);
     </script>";
 }
 ?>