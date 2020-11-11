<?php 
session_start();

$email = $_SESSION['email'];

if(isset($_POST['submit'])){

   require 'connection.php';   // database connection file calling

   //include CONN."connection.php";

   $name = $_POST['name'];
   $address = $_POST['address'];
   $birthDate = $_POST['birthDate'];
   $birthCertificateNo = $_POST['birthCertificateNo'];
   $region = $_POST['region'];
   $trustee = $_POST['trustee'];
   $phone = $_POST['phone'];
   $phone_two = $_POST['phone_two'];
   $civilStatus = $_POST['civilStatus'];
   $jobType = $_POST['jobType'];
   

   $sql = "UPDATE person WHERE password=? and email=?";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location:/fadts/includes/userProfile?error=db_conn_err");
      exit();     
   }
   else{
      mysqli_stmt_bind_param($stmt,"ss",$currentpwd,$email);
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

            $sql = "UPDATE user SET password = ? WHERE password=? and email=?";
            $stmt = mysqli_stmt_init($con);

            if(!mysqli_stmt_prepare($stmt,$sql)){
               header("Location:/fadts/includes/userProfile?error=db_conn_err");
               exit();     
            }
            else{
               mysqli_stmt_bind_param($stmt,"sss",$newpwd,$currentpwd,$email);

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