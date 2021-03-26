<?php

if(isset($_POST['otpRequest']) && isset($_GET['entryId'])){

   $entryId = $_GET['entryId'];
   $otp = rand(100000,999999);
   date_default_timezone_set('Asia/Colombo');
   $sendedTime = date('d-m-Y H:i:s');
   $text = "Your requested OTP is $otp on $sendedTime. Please hand this OTP code to your village officer amount in order to collect the due fund amount.";


   require_once('../notify/autoload.php');

   $api_instance = new NotifyLk\Api\SmsApi();
   $user_id = "13127"; 
   $api_key = "qCaJfO73WWJfh9FHBXYd"; 
   $message = $text; 
   $to = "94768612036";
   $sender_id = "NotifyDEMO"; 
   
   try {
      $api_instance->sendSMS($user_id, $api_key, $message, $to, $sender_id);
      $sql = "INSERT INTO otprequest otp,entryId,date VALUES(?,?,?)";
      $stmt = mysqli_stmt_init($con);

      if(!mysqli_stmt_prepare($stmt,$sql)){
         mysqli_close($con);
         header("Location:/fadts/village/$view?searcherror=db_conn_err");
         exit();
      }else{
         mysqli_stmt_bind_param($stmt,"sss",$otp,$entryId,$sendedTime);
         mysqli_stmt_execute($stmt);
         $result = mysqli_stmt_get_result($stmt);
      }
      
   } catch (Exception $e) {
      // echo 'Exception when calling SmsApi->sendSMS: ', $e->getMessage(), PHP_EOL;
      header("Location:/fadts/village/fundRelease"); ////////////?????
      exit();
   }

   

}elseif(isset($_POST['confirm']) && isset($_GET['entryId'])){

}else{
   header("Location:/fadts/village/fundRelease");
   exit();
}
