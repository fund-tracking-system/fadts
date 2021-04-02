<?php 
session_start();

$email = $_SESSION['email'];

if(isset($_POST['submit'])){

   require 'connection.php';   // database connection file calling

   $currentpwd = $_POST['currentpwd'];
   $newpwd = $_POST['newpassword'];
   $againpwd = $_POST['againpassword'];


   $sql = "SELECT * FROM user WHERE email=?";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location:/fadts/includes/userProfile?error=db_conn_err");
      exit();     
   }
   else{
      mysqli_stmt_bind_param($stmt,"s",$email);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if($row = mysqli_fetch_assoc($result)){

         if(!password_verify($currentpwd, $row['password'])){
            header("Location:/fadts/includes/userProfile?error=wrong_crrpwd");
            exit();  
         }
         else{
            
            if($newpwd != $againpwd){
               header("Location:/fadts/includes/userProfile?error=new_again_notsame");
               exit();
            }

            $sql = "UPDATE user SET password = ? WHERE email=?";
            $stmt = mysqli_stmt_init($con);

            if(!mysqli_stmt_prepare($stmt,$sql)){
               header("Location:/fadts/includes/userProfile?error=db_conn_err");
               exit();     
            }
            else{
               $newpwdhashed = password_hash($newpwd,PASSWORD_DEFAULT);

               mysqli_stmt_bind_param($stmt,"ss",$newpwdhashed,$email);

               if(mysqli_stmt_execute($stmt)){
                  header("Location:/fadts/includes/userProfile?error=success");
                  exit();
               }else{
                  header("Location:/fadts/includes/userProfile?error=update_error");
                  exit();
               }
            }
         }

      }
      else{
         header("Location:/fadts/includes/userProfile?error=wrong_crrpwd");
         exit();
      }
   }
   mysqli_stmt_close($stmt);
   mysqli_close($con);
}
else{
   header("Location:/fadts/includes/userProfile?error=direct_access");
   exit();
}