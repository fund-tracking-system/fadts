<?php 
session_start();

if(isset($_GET['entryId'])){

   require 'connection.php';   // database connection file calling

   $entryId = $_GET['entryId'];
   
   $sql = "UPDATE recipient SET deliveryStatus = 1,deliveryTime = NOW() WHERE entryId = $entryId";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      mysqli_close($con);
      header("Location:/fadts/divisional/fundRelease?error=db_conn_err");
      exit();     
   }else{

      if(mysqli_stmt_execute($stmt)) {
         mysqli_close($con);
         header("Location:/fadts/divisional/fundRelease?error=release_success");
         exit();
      }else{
         mysqli_close($con);
         header("Location:/fadts/divisional/fundRelease?error=release_error");
         exit();
      }

   }  
}
else{
   header("Location:/fadts/divisional/fundRelease?error=direct_access");
   exit();
}