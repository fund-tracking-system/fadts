<?php 
session_start();

if(isset($_POST['nicSubmit'])){

   

   require 'connection.php';   // database connection file calling

   $userRegion = $_SESSION['region'];
   $nic = $_POST['nic'];
   

   $sql = "SELECT personId,name,region FROM person WHERE nid=?";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location:/fadts/divisional/fundRelease?error=db_conn_err");
      exit();     
   }
   else{
      mysqli_stmt_bind_param($stmt,"s",$nic);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if($row = mysqli_fetch_assoc($result)){

         $personRegion = $row['region'];
         $personName = $row['name'];
         $personId = $row['personId'];

         $sql = "SELECT superRegion FROM region WHERE regionId=$personRegion";
         $stmt = mysqli_stmt_init($con);

         if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:/fadts/divisional/fundRelease?error=db_conn_err");
            exit(); 
         }else{
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result)==1){

               $superRegion = $result; 

               if($superRegion==$userRegion){

                  $sql = "SELECT * FROM recipient WHERE personId=$personId";
                  $stmt = mysqli_stmt_init($con);

                  if(!mysqli_stmt_prepare($stmt,$sql)){
                     header("Location:/fadts/divisional/fundRelease?error=db_conn_err");
                     exit();
                  }else{
                     mysqli_stmt_execute($stmt);
                     $result = mysqli_stmt_get_result($stmt);                     
                     header("Location:/fadts/divisional/fundRelease?result=$result");
                     exit();
                  }

               }else{
                  header("Location:/fadts/divisional/fundRelease?error=wrong_region");
                  exit();
               }

            }

         }

      }
      else{
         header("Location:/fadts/divisional/fundRelease?error=wrong_nid");
         exit();
      }
   }
   mysqli_stmt_close($stmt);
   mysqli_close($con);
}
else{
   header("Location:/fadts/divisional/fundRelease?error=direct_access");
   exit();
}