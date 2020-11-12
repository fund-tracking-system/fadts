<?php 
session_start();

$view = $_GET['view'];

if(isset($_POST['submit']) && isset($view)){
 

   require 'connection.php';   // database connection file calling

   $userRegion = $_SESSION['region'];
   $nic = $_POST['nic'];

   $sql = "SELECT personId,name,region FROM person WHERE nid=?";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      mysqli_close($con);
      header("Location:/fadts/divisional/$view?error=db_conn_err");
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
            header("Location:/fadts/divisional/$view?error=db_conn_err");
            exit(); 
         }else{
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result)==1){
 
               $row = mysqli_fetch_array($result);
               $superRegion = $row['superRegion'];

               if($superRegion==$userRegion){

                  switch ($view){
                     case "fundRelease":
                        fundRelease($con,$personId,$view);
                        break;
                     case "updatePeople":
                        updatePeople($con,$personId,$view);
                        break;

               }
               }else{
                  mysqli_close($con);
                  header("Location:/fadts/divisional/$view?error=wrong_region");
                  exit();
               }
            }
         }
      }
      else{
         mysqli_close($con);
         header("Location:/fadts/divisional/$view?error=wrong_nid");
         exit();
      }
   }
   mysqli_stmt_close($stmt);
   mysqli_close($con);
}
else{
   header("Location:/fadts/divisional/$view?error=direct_access");
   exit();
}




function fundRelease($con,$personId,$view){

   $sql = "SELECT recipient.entryId,fund.name,fund.amountPerPerson FROM recipient INNER JOIN fund ON recipient.fundId = fund.fundId WHERE recipient.personId=$personId AND deliveryStatus = 0";

                 
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      mysqli_close($con);
      header("Location:/fadts/divisional/$view?error=db_conn_err");
      exit();
   }else{
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if($result){
         $_SESSION['results'] =mysqli_fetch_all($result);

         mysqli_close($con);
         header("Location:/fadts/divisional/$view?error=succsess");
         exit();
      }else{
         mysqli_close($con);
         header("Location:/fadts/divisional/$view?error=no_records");
         exit();
      }
                     
   }  
}

function updatePeople($con,$personId,$view){

   $sql = "SELECT * FROM person WHERE personId = $personId";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      mysqli_close($con);
      header("Location:/fadts/divisional/$view?error=db_conn_err");
      exit();
   }else{
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if($result){
         $_SESSION['updateResults'] = mysqli_fetch_assoc($result);

         $personRegion = $_SESSION['updateResults']['region'];

         $sql = "SELECT name FROM region WHERE regionId = $personRegion";
         $stmt = mysqli_stmt_init($con);
         mysqli_stmt_prepare($stmt,$sql);
         mysqli_stmt_execute($stmt);
         $result = mysqli_stmt_get_result($stmt);
         $_SESSION['personRegion'] = mysqli_fetch_assoc($result);

         mysqli_close($con);
         header("Location:/fadts/divisional/$view?error=succsess");
         exit();
      }else{
         mysqli_close($con);
         header("Location:/fadts/divisional/$view?error=no_records");
         exit();
      }
                     
   }

}