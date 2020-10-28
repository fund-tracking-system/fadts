<?php 
session_start();

$username = $_SESSION['username'];

if(isset($_POST['submit'])){

   require 'connection.php';   // database connection file calling

   //include CONN."connection.php";

   $currentpwd = $_POST['currentpwd'];
   $newpwd = $_POST['newpwd'];
   $againpwd = $_POST['againpwd'];


   $sql = "SELECT * FROM user WHERE password=? and username=?";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location:/fadts/includes/userProfile?error=db_conn_err");
      exit();     
   }
   else{
      mysqli_stmt_bind_param($stmt,"ss",$currentpwd,$username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if($row = mysqli_fetch_assoc($result)){

         if($currentpwd != $row['password']){
            header("Location:/fadts/includes/userProfile?error=wrong_crrpwd");
            exit();  
         }
         else{
            
            if($newpwd != $againpwd){
               header("Location:/fadts/includes/userProfile?error=new_again_notsame");
               exit();
            }

            $sql = "UPDATE user SET password = ? WHERE password=? and username=?";
            $stmt = mysqli_stmt_init($con);

            if(!mysqli_stmt_prepare($stmt,$sql)){
               header("Location:/fadts/includes/userProfile?error=db_conn_err");
               exit();     
            }
            else{
               mysqli_stmt_bind_param($stmt,"sss",$newpwd,$currentpwd,$username);

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