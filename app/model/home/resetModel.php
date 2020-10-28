<?php 

if(isset($_POST["resetsubmit"])){
   
   $selector = $_POST["selector"];
   $validator = $_POST["validator"];
   $password = $_POST["password"];
   $passwordRepeat = $_POST["againpassword"];

   if(empty($password) || empty($validator)){
      header("Location:/fadts/home/reset?newpwd=empty");
      exit();
   }else if($password != $passwordRepeat){
      header("Location:/fadts/home/reset?newpwd=pwdnotsame");
   }

   $currentDate = date("U");

   require 'connection.php';

   $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >=?";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      //header('Location:/fadts/home/forgot');
      echo "There was an error!";
      exit();   
   }
   else{
      mysqli_stmt_bind_param($stmt,"s",$selector);
      mysqli_stmt_execute($stmt);

      $result = mysqli_stmt_get_result($stmt);
      if(!$row = mysqli_fetch_assoc($result)){
           
      }
   }

}
else{
   header('Location:/fadts/home/index');
   exit();
}