<?php 

if(isset($_POST["resetsubmit"])){
   
   $selector = $_POST["selector"];
   $validator = $_POST["validator"];
   $password = $_POST["newpassword"];
   $passwordRepeat = $_POST["againpassword"];

   if(empty($password) || empty($validator)){
      header("Location:/fadts/home/reset?error=psssword_or_validator_empty");
      exit();
   }else if($password != $passwordRepeat){
      header("Location:/fadts/home/reset?error=two_fields_arent_matching");
      exit();
   }

   $currentDate = date("U");
   

   require 'connection.php';

   $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >=?";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      header('Location:/fadts/home/forgot?error=reset_db_conn_err');
      exit();   
   }
   else{
      mysqli_stmt_bind_param($stmt,"ss",$selector,$currentDate);
      mysqli_stmt_execute($stmt);

      $result = mysqli_stmt_get_result($stmt);
      if(!$row = mysqli_fetch_assoc($result)){
         header('Location:/fadts/home/forgot?error=resubmit1');
         exit();  
      }else{
         $tokenBin = hex2bin($validator);
         $tokenCheck = password_verify($tokenBin,$row["pwdResetToken"]);

         if($tokenCheck==false){
            header('Location:/fadts/home/forgot?error=resubmit2');
            exit(); 
         }elseif($tokenCheck==true){
            $tokenEmail = $row['pwdResetEmail'];
            
            $sql = "SELECT * FROM user WHERE email=?";
            $stmt = mysqli_stmt_init($con);

            if(!mysqli_stmt_prepare($stmt,$sql)){
               header('Location:/fadts/home/forgot?error=reset_db_conn_err');
               exit();
            }else{
               mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
               mysqli_stmt_execute($stmt);
               $result = mysqli_stmt_get_result($stmt);
               
               if(!$row = mysqli_fetch_assoc($result)){
                  header('Location:/fadts/home/forgot?error=reset_db_conn_err');
                  exit();  
               }else{
                  $sql = "UPDATE user SET password=? WHERE email=?";
                  $stmt = mysqli_stmt_init($con);
                  if(!mysqli_stmt_prepare($stmt,$sql)){
                     header('Location:/fadts/home/forgot?error=reset_db_conn_err');
                     exit();    
                  }
                  else{
                     $newPwdHash = password_hash($password,PASSWORD_DEFAULT); 
                     mysqli_stmt_bind_param($stmt,"ss",$newPwdHash,$tokenEmail);
                     mysqli_stmt_execute($stmt);


                     $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
                     $stmt = mysqli_stmt_init($con);
                     if(!mysqli_stmt_prepare($stmt,$sql)){
                        header('Location:/fadts/home/forgot?error=reset_db_conn_err');
                        exit();   
                     }
                     else{
                        mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
                        mysqli_stmt_execute($stmt);
                        header("Location:/fadts/home/index?error=new_pwd_updated");
                        exit();
                     }
                  }
               }
            }
         }
      }
   }
}else{
   header('Location:/fadts/home/index');
   exit();
}