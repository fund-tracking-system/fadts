<?php
session_start();

if(isset($_GET['pid'])){

require 'connection.php';

$personId = $_GET['pid'];
$view = $_GET['view'];

personDetails($con,$personId,$view);

}
else{
   header("Location:/fadts/includes/index");
   exit();
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
