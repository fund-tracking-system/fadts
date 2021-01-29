<?php
     // store results in session varibles 
session_start();

if(isset($_POST['submit'])){

  require 'connection.php';      //link to mysql connection

  $ageStart = $_POST['ageStart'];
  $ageEnd = $_POST['ageEnd']; 
  $disorder = $_POST['disorder'];
  $civilStatus = $_POST['civilStatus'];
  $incomeType = $_POST['incomeType'];
  $incomeStart = $_POST['incomeStart'];
  $incomeEnd = $_POST['incomeEnd']; 
  $funds = $_POST['funds'];

  
  $sql = queryGenerate($ageStart,$ageEnd,$disorder,$civilStatus,$incomeType,$incomeStart,          $incomeEnd,$funds);

  $sql = "SELECT nid,name,address,phone FROM person INNER JOIN eligibility ON person.personId = eligibility.personId WHERE ((birthDate BETWEEN '1940-01-01' AND '1980-01-01') AND (disordered = 'yes') AND (civilStatus = 1) AND (job = 'government' OR job = 'retired') AND (monthlyIncome BETWEEN 4000 AND 60000) AND (predefinedFundId = 10 OR predefinedFundId = 6))";
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
 

function queryGenerate($ageStart,$ageEnd,$disorder,$civilStatus,$incomeType,$incomeStart,          $incomeEnd,$funds)
{
   $count=0;
   if($ageStart!="" && $ageEnd!=""){
      $ageCondition = setAge($ageStart,$ageEnd);
      $count++;
   }
   if($disorder!=""){
      $disorderCondition = "(disordered = $disorder)";
      $count++;
   }
   if($civilStatus!=""){
      $civilStatusCondition = "(civilStatus = $civilStatus)";
      $count++;
   }
   if(!empty($incomeType)){
      $incomeTypeCondition = setIncomeType($incomeType);
      $count++;
   }
   if($incomeStart!="" && $incomeEnd!=""){
      setIncomeValue($incomeStart,$incomeEnd);
      $count++;
   }
   if(!empty($funds)){
      setAge($ageStart,$ageEnd);
      $count++;
   }
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

   $ageCondition = "( birthDate BETWEEN $start-$monthDay AND $end-$monthDay )";

   return $ageCondition;
}


function setIncomeType($incomeType){
   
   $string = "(";
   foreach ($incomeType as $value){
      
      $string = $string." job = '".$value."'";  
      if($incomeType->hasNext()) {
         $string = $string." OR ";
      }else{
         $string = $string.")";
      }
  }
  return $string;

}

function setIncomeValue($incomeStart,$incomeEnd){

   $incomeValueCondition = "";
   if($incomeStart>$incomeEnd){              //If user enters values like 60000 to 30000 
      $incomeEnd = $incomeStart + $incomeEnd;
      $incomeStart = $incomeEnd - $incomeStart;
      $incomeEnd = $incomeEnd - $incomeStart;
   }

   //(monthlyIncome BETWEEN 4000 AND 60000)

   if($incomeStart==""){
      $incomeValueCondition = "(monthlyIncome < $incomeEnd)";    
   }
   else if($incomeEnd==""){
      $incomeValueCondition = "(monthlyIncome > $incomeStart)";
   }
   else{
      $incomeValueCondition = "(monthlyIncome BETWEEN $incomeStart AND $incomeEnd)";
   }

   return $incomeValueCondition;
}
function setFunds(){

}


 











    