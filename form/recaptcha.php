<?php
if(!empty($_POST['g-recaptcha-response']))
{
      $secret = '6LdfVB8dAAAAAKLqCbDvckd-i-MG4r2AEuGZLtF6';
      $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
      $responseData = json_decode($verifyResponse);
      if($responseData->success){
          $message = "g-recaptcha verify successfully";
      } 
      else{
          $message = "Some error in verifying g-recaptcha";
      }
     echo $message;
 }
