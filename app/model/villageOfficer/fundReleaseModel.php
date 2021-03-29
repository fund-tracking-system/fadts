<?php

session_start();

if(isset($_POST['otpRequest']) && isset($_GET['entryId']) && isset($_POST['phone'])){
   
   $nic=$_GET['nic'];
   $entryId = $_GET['entryId'];

   $contact = $_POST['phone'];
   $contact = "94".substr($contact, -9);

   $otp = rand(100000,999999);
   // $otpHashed = password_hash($otp,PASSWORD_DEFAULT);

   date_default_timezone_set('Asia/Colombo');
   $sendedTime = date('d-m-Y H:i:s');

   $text = "Your requested OTP is $otp on $sendedTime. Please hand this OTP code to your village officer amount in order to collect the due fund amount.";


   require_once('notify/autoload.php');

   $api_instance = new NotifyLk\Api\SmsApi();
   $user_id = "13127"; 
   $api_key = "qCaJfO73WWJfh9FHBXYd"; 
   $message = $text; 
   $to = $contact;
   $sender_id = "NotifyDEMO"; 
    
   try {
      $api_instance->sendSMS($user_id, $api_key, $message, $to, $sender_id);
      $_SESSION['otp']=$otp;
      header("Location:/fadts/village/nicSearchModel?view=fundRelease&entryId=$entryId&nic=$nic"); 
      exit();
      //require 'connection.php';

      // $sql = "SELECT * FROM otprequest WHERE entryId=?";
      // $stmt = mysqli_stmt_init($con);

      // if(!mysqli_stmt_prepare($stmt,$sql)){
      //    mysqli_close($con);
      //    header("Location:/fadts/village/$view?searcherror=db_conn_err");
      //    exit();
      // }else{
      //    mysqli_stmt_bind_param($stmt,"s",$entryId);
      //    mysqli_stmt_execute($stmt);
      //    header("Location:/fadts/village/fundRelease?entryId=$entryId&time=$sendedTime"); 
      //    exit();
      // }


      // $sql = "INSERT INTO otprequest (otp,entryId) VALUES(?,?)";
      // $stmt = mysqli_stmt_init($con);

      // if(!mysqli_stmt_prepare($stmt,$sql)){
      //    mysqli_close($con);
      //    header("Location:/fadts/village/$view?searcherror=db_conn_err");
      //    exit();
      // }else{
      //    mysqli_stmt_bind_param($stmt,"si",$otpHashed,$entryId);
      //    mysqli_stmt_execute($stmt);
      //    header("Location:/fadts/village/fundRelease?entryId=$entryId&time=$sendedTime"); 
      //    exit();
      // }
      
   }catch(Exception $e){
      // echo 'Exception when calling SmsApi->sendSMS: ', $e->getMessage(), PHP_EOL;
      header("Location:/fadts/village/fundRelease?otp=otp_resend&entryId=$entryId"); 
      exit();
   }

    

}elseif(isset($_POST['confirm']) && isset($_POST['otp']) && isset($_GET['entryId'])){

   $otp = $_POST['otp'];
   $entryId = $_GET['entryId'];
      

   if($otp==$_SESSION['otp']){
      require 'connection.php';

      $sql = "UPDATE recipient SET deliveryStatus = 1,deliveryTime = NOW() WHERE entryId = $entryId";
      $stmt = mysqli_stmt_init($con);

      if(!mysqli_stmt_prepare($stmt,$sql)){
         mysqli_close($con);
         header("Location:/fadts/divisional/fundRelease?error=db_conn_err");
         exit();     
      }else{

         if(mysqli_stmt_execute($stmt)) {
            mysqli_close($con);
            header("Location:/fadts/divisional/fundRelease?searcherror=release_success");
            exit();
         }else{
            mysqli_close($con);
            header("Location:/fadts/divisional/fundRelease?searcherror=release_error");
            exit();
         }
      }
   }else{
      header("Location:/fadts/village/nicSearchModel?view=fundRelease&entryId=$entryId&nic=$nic"); 
      exit();
   }

}else{
   header("Location:/fadts/village/fundRelease");
   exit();
}