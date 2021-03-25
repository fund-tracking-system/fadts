<?php

if(isset($_POST['otpRequest']) && isset($_GET['entryId'])){

   require_once('../notify/autoload.php');

   $api_instance = new NotifyLk\Api\SmsApi();
   $user_id = "13127"; 
   $api_key = "qCaJfO73WWJfh9FHBXYd"; 
   $message = "message_example_new"; 
   $to = "94768612036";
   $sender_id = "NotifyDEMO"; 
   $contact_fname = "thisara"; 
   $contact_lname = "madushan"; 
   $contact_email = "hactive001@gmail.com"; 
   try {
      $api_instance->sendSMS($user_id, $api_key, $message, $to, $sender_id, $contact_fname,  $contact_lname, $contact_email);
   } catch (Exception $e) {
      echo 'Exception when calling SmsApi->sendSMS: ', $e->getMessage(), PHP_EOL;
   }

}elseif(isset($_POST['confirm']) && isset($_GET['entryId'])){

}else{
   header("Location:/fadts/village/fundRelease");
   exit();
}
