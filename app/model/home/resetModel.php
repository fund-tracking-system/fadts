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
      echo "There was an error!";
      exit();   
   }
   else{
      mysqli_stmt_bind_param($stmt,"s",$selector);
      mysqli_stmt_execute($stmt);

      $result = mysqli_stmt_get_result($stmt);
      if(!$row = mysqli_fetch_assoc($result)){
         echo "You need to re-submit your reset request!";
         exit();  
      }else{
         $tokenBin = hex2bin($validator);
         $tokenCheck = password_verify($tokenBin,$row["pwdResetToken"]);

         if($tokenCheck==false){
            echo "You need to re-submit your reset request!";
            exit( ); 
         }elseif($tokenCheck==false){
            $tokenEmail = $row['pwdResetEmail'];
            
            $sql = "SELECT * FROM user WHERE email=?";
            $stmt = mysqli_stmt_init($con);

            if(!mysqli_stmt_init($stmt,$sql)){
               echo "There was an error!";
               exit();
            }else{
               mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
               mysqli_stmt_execute($stmt);
               $result = mysqli_stmt_get_result($stmt);
               
               if(!$row = mysqli_fetch_assoc($result)){
                  echo "There was an error!";
                  exit();  
               }else{

                  $sql = "UPDATE user SET password=? WHERE email=?";
                  $stmt = mysqli_stmt_init($con);
                  if(!mysqli_stmt_prepare($stmt,$sql)){
                     echo "There was an error!";
                     exit();   
                  }
                  else{
                     $newPwd = password_hash($password,PASSWORD_DEFAULT); 
                     mysqli_stmt_bind_param($stmt,"ss",$selector);
                     mysqli_stmt_execute($stmt);


                     $sql = "DELETE FROM pwdReset WHERE email=?";
                     $stmt = mysqli_stmt_init($con);
                     if(!mysqli_stmt_prepare($stmt,$sql)){
                        echo "There was an error!";
                        exit();   
                     }
                     else{
                        mysqli_stmt_bind_param($stmt,"ss",$selector);
                        mysqli_stmt_execute($stmt);
                        header("Location:/fadts/home/index?error=new_pwd_updated");
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