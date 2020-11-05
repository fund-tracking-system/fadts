<?php 
session_start();

if(isset($_POST['nicSubmit'])){

   

   require 'connection.php';   // database connection file calling

   $userRegion = $_SESSION['region'];
   $nic = $_POST['nic'];
   

   $sql = "SELECT personId,name,region FROM person WHERE nid=?";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      mysqli_close($con);
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
            mysqli_close($con);
            header("Location:/fadts/divisional/fundRelease?error=db_conn_err");
            exit(); 
         }else{
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result)==1){
 
               $row = mysqli_fetch_array($result);
               $superRegion = $row['superRegion'];

               if($superRegion==$userRegion){

                  $sql = "SELECT recipient.entryId,fund.name,fund.amountPerPerson FROM recipient INNER JOIN fund ON recipient.fundId = fund.fundId WHERE recipient.personId=$personId AND deliveryStatus = 0";

                 
                  $stmt = mysqli_stmt_init($con);

                  if(!mysqli_stmt_prepare($stmt,$sql)){
                     mysqli_close($con);
                     header("Location:/fadts/divisional/fundRelease?error=db_conn_err");
                     exit();
                  }else{
                     mysqli_stmt_execute($stmt);
                     $result = mysqli_stmt_get_result($stmt);

                     if($result){
                        $_SESSION['results'] =mysqli_fetch_all($result);

                        mysqli_close($con);
                        header("Location:/fadts/divisional/fundRelease?error=succsess");
                        exit();
                     }else{
                        mysqli_close($con);
                        header("Location:/fadts/divisional/fundRelease?error=no_records");
                        exit();
                     }
                     
                  }

               }else{
                  mysqli_close($con);
                  header("Location:/fadts/divisional/fundRelease?error=wrong_region");
                  exit();
               }

            }

         }

      }
      else{
         mysqli_close($con);
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