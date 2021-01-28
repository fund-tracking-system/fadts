<?php
     // store results in session varibles 
session_start();

if(isset($_POST['submit'])){

  require 'connection.php';      //link to mysql connection

  $ageStart = $_POST['ageStart'];
  $ageEnd = $_SESSION['ageEnd']; 
  $disorder = $_POST['disorder'];
  $civilStatus = $_POST['civilStatus'];
  $incomeType = $_POST['incomeType'];
  $incomeStart = $_POST['incomeStart'];
  $incomeEnd = $_SESSION['incomeEnd']; 
  $funds = $_POST['funds'];

  
  

  $sql = "SELECT * FROM ";
  $stmt = mysqli_stmt_init($con);

  if(!mysqli_stmt_prepare($stmt,$sql)){
    mysqli_close($con);
    header("Location:/fadts/village/victimSelect?error=db_conn_err1");
    exit();
  }else{
    mysqli_stmt_bind_param($stmt,"ssssss",$disasterId,$personId,$totalDamage,$location,$description,$userId);

    if(mysqli_stmt_execute($stmt)){
      //$disasterId = mysqli_insert_id($con); this will help you to get newly added column id
      mysqli_close($con);
      header("Location:/fadts/village/victimSelect?error=success&disasterId=$disasterId");
      exit();

    }else{
      mysqli_close($con);
      header("Location:/fadts/village/victimSelect?error=db_conn_err2");
      exit();
    }
   

  }

}else{
    header("Location:/fadts/fadts/village/victimSelect?error=direct_access_prohibited");
    exit();
}
     

function setAge($ageStart,$ageEnd){
   
   if($ageStart>$ageEnd){              //If user enters values like 60 to 30 
      $ageEnd = $ageStart + $ageEnd;
      $ageStart = $ageEnd - $ageStart;
      $ageEnd = $ageEnd - $ageStart;
   }

   if($ageStart=="") $ageStart = 18;
   if($ageEnd=="") $ageEnd = 100;

   $year = date('Y');
   $monthDay = date('m-d');
   $start = $year - $ageEnd;
   $end = $year - $ageStart;
   $birthDate = array("start"=>$start."-". $monthDay, "end"=>$end."-". $monthDay);

   return $birthDate;
}

function setDisorder(){

}
function setCivilStatus(){

}
function setIncomeType(){

}
function setIncome(){

}
function setFunds(){

}


 











    