<?php 
session_start();
 
if(isset($_GET['view'])) $view = $_GET['view'];

if(isset($_POST['submit']) && isset($view)){

   require 'connection.php';   // database connection file calling

   $userRegion = $_SESSION['region'];
   $nic = $_POST['nic'];

   $sql = "SELECT personId,name,region,validRegion,phone,phone_two,trustee FROM person WHERE nid=? AND dead='no'";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      mysqli_close($con);
      header("Location:/fadts/village/$view?searcherror=db_conn_err");
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
         $validRegion = $row['validRegion'];
         $trustee = $row['trustee'];
         $phones['phone1'] = $row['phone'];
         $phones['phone2'] = $row['phone_two'];


         switch($view){
            case "fundRelease":
               if($personRegion==$userRegion && $validRegion=="yes"){
                  fundRelease($con,$nic,$personId,$view,$trustee,$phones);
               }else{
                  mysqli_close($con);
                  header("Location:/fadts/village/$view?searcherror=wrong_region");
                  exit();
               }
               break;

            case "updatePeople":
               if($personRegion==$userRegion && $validRegion=="yes"){      
                  updatePeople($con,$personId,$view);         
               }else{
                  mysqli_close($con);
                  header("Location:/fadts/village/$view?searcherror=wrong_region");
                  exit();
               }
               break;

            case "victimSelect":
               if($personRegion==$userRegion && $validRegion=="yes"){ 
                        
                  $result = array("personName"=>"$personName","personId"=>"$personId","nic"=>"$nic","disasterId"=>$_GET['disasterId']);

                  $_SESSION['results'] = $result;    
                  mysqli_close($con);
                  header("Location:/fadts/village/$view");
                  exit();         
               }else{
                  mysqli_close($con);
                  header("Location:/fadts/village/$view?searcherror=wrong_region");
                  exit();
               }
               break;
                  
            case "searchPeople":
               if($personRegion==$userRegion && $validRegion=="yes"){ 
                  personDetails($con,$personId,$view); 
               }else{
                  mysqli_close($con);
                  header("Location:/fadts/village/$view?searcherror=wrong_region");
                  exit();
               }
               break;
         
               }
      }
      else{
         mysqli_close($con);
         header("Location:/fadts/village/$view?searcherror=wrong_nid_or_dead");
         exit();
      }
   }
   mysqli_stmt_close($stmt);
   mysqli_close($con);
}
else{
   header("Location:/fadts/village/$view?searcherror=direct_access");
   exit();
}




function fundRelease($con,$nic,$personId,$view,$trustee,$phones){

   $sql = "SELECT phone,phone_two FROM person WHERE personId=? AND dead='no'";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      mysqli_close($con);
      header("Location:/fadts/village/$view?searcherror=db_conn_err");
      exit();     
   }
   else{
      mysqli_stmt_bind_param($stmt,"s",$trustee);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if($row = mysqli_fetch_assoc($result)){

         $phones['trusteephone1'] = $row['phone'];
         $phones['trusteephone2'] = $row['phone_two'];
      }
      // else{
      //    mysqli_close($con);
      //    header("Location:/fadts/village/$view?searcherror=wrong_nid_or_dead_trustee");
      //    exit();
      // } 
   }  

   $sql = "SELECT recipient.entryId,fund.name,fund.amountPerPerson FROM recipient INNER JOIN fund ON recipient.fundId = fund.fundId WHERE recipient.personId=$personId AND deliveryStatus = 0";

                 
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      mysqli_close($con);
      header("Location:/fadts/village/$view?searcherror=db_conn_err");
      exit();
   }else{
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if($result){
         $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
         var_dump($result);
         $_SESSION['result'] =$result;
         $_SESSION['phones'] =$phones;
         mysqli_close($con);
         header("Location:/fadts/village/$view?searcherror=succsess&nic=$nic");
         exit();
      }else{
         mysqli_close($con);
         header("Location:/fadts/village/$view?searcherror=no_records");
         exit();
      }
                     
   }  
}

function updatePeople($con,$personId,$view){

   $sql = "SELECT * FROM person WHERE personId = $personId";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      mysqli_close($con);
      header("Location:/fadts/village/$view?searcherror=db_conn_err");
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
         header("Location:/fadts/village/$view?searcherror=succsess");
         exit();
      }else{
         mysqli_close($con);
         header("Location:/fadts/village/$view?searcherror=no_records");
         exit();
      }
                     
   }

}

function personDetails($con,$personId,$view){

   $sql = "SELECT * FROM person WHERE personId = $personId";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      mysqli_close($con);
      header("Location:/fadts/village/$view?searcherror=db_conn_err");
      exit();
   }else{
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if($result){
         $_SESSION['personDetails'] = mysqli_fetch_assoc($result);

         $sql = "SELECT predefinedfund.name FROM predefinedfund INNER JOIN eligibility WHERE predefinedfund.id = eligibility.predefinedFundId AND eligibility.personId = $personId";
         $stmt = mysqli_stmt_init($con);
         mysqli_stmt_prepare($stmt,$sql);
         mysqli_stmt_execute($stmt);
         $result = mysqli_stmt_get_result($stmt);

         if($result){
            $_SESSION['majorFund'] = mysqli_fetch_assoc($result);
         }else{
            $_SESSION['majorFund'] = "No Major Funds";
         }

         $sql = "SELECT fund.name,fund.amountPerPerson,recipient.deliveryStatus FROM recipient INNER JOIN fund WHERE recipient.fundId=fund.fundId AND recipient.personid = $personId";
         $stmt = mysqli_stmt_init($con);
         mysqli_stmt_prepare($stmt,$sql);
         mysqli_stmt_execute($stmt);
         $result = mysqli_stmt_get_result($stmt);

         if($result){
            $_SESSION['otherFund'] = mysqli_fetch_assoc($result);
         }
         
         mysqli_close($con);
         header("Location:/fadts/village/personDetails?searcherror=succsess");
         exit();
      }else{
         mysqli_close($con);
         header("Location:/fadts/village/$view?searcherror=no_records");
         exit();
      }
   }
}
