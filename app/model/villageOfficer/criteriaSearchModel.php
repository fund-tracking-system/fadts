<?php

session_start();

if(isset($_POST['submit'])){

  require 'connection.php';      //link to mysql connection

  $ageStart = $_POST['ageStart'];
  $ageEnd = $_POST['ageEnd']; 
  $disorder = $_POST['disorder'];
  $civilStatus = $_POST['civilStatus'];

  if(isset($_POST['incomeType'])) $incomeType = $_POST['incomeType'];
  else $incomeType = "";

  $incomeStart = $_POST['incomeStart'];
  $incomeEnd = $_POST['incomeEnd']; 

  if(isset($_POST['funds'])) $funds = $_POST['funds'];
  else $funds="";

  $sql = queryGenerate($ageStart,$ageEnd,$disorder,$civilStatus,$incomeType,$incomeStart, $incomeEnd,$funds);

  $stmt = mysqli_stmt_init($con);

  if(!mysqli_stmt_prepare($stmt,$sql)){
    mysqli_close($con);
    header("Location:/fadts/village/searchpPeople?searcherror2=db_conn_err1");
    exit();
  }else{

    if(mysqli_stmt_execute($stmt)){

      $result = mysqli_stmt_get_result($stmt);
      $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
      // print_r($result);
      // exit();
      $_SESSION['personList']=$result;
      mysqli_close($con);
      header("Location:/fadts/village/criteriaResult");
      exit();

    }else{
      mysqli_close($con);
      header("Location:/fadts/village/searchpPeople?searcherror2=db_conn_err2");
      exit();
    }
  }

}else{
    header("Location:/fadts/fadts/village/victimSelect?error=direct_access_prohibited");
    exit();
}
 

function queryGenerate($ageStart,$ageEnd,$disorder,$civilStatus,$incomeType,$incomeStart,$incomeEnd,$funds)
{

   $region=$_SESSION['region'];

   if(!empty($funds)){
      $fundsCondiion = setFunds($funds);
      $query = "SELECT person.personId,nid,name,address,phone FROM person INNER JOIN eligibility ON person.personId = eligibility.personId WHERE ((region = $region)";
      
      $query = $query." AND ".$fundsCondiion;

   }else{
      $query = "SELECT person.personId,nid,name,address,phone FROM person WHERE ((region = $region)";
   }

   if($ageStart!="" && $ageEnd!=""){
      $ageCondition = setAge($ageStart,$ageEnd);

      $query = $query." AND ".$ageCondition;
   }
   if($disorder!=""){
      $disorderCondition = "(disordered = $disorder)";

      $query = $query." AND ".$disorderCondition;
   }
   if($civilStatus!=""){
      $civilStatusCondition = "(civilStatus = $civilStatus)";

      $query = $query." AND ".$civilStatusCondition;
   }
   if(!empty($incomeType)){
      $incomeTypeCondition = setIncomeType($incomeType);

      $query = $query." AND ".$incomeTypeCondition;
   }
   if($incomeStart!="" && $incomeEnd!=""){
      $incomeValueCondition = setIncomeValue($incomeStart,$incomeEnd);

      $query = $query." AND ".$incomeValueCondition;
   }

   $query = $query.")";  
   return $query;
   
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

   $ageCondition = "(birthDate BETWEEN '$start-$monthDay' AND '$end-$monthDay')";

   return $ageCondition;
}


function setIncomeType($incomeType){
   
   $string = "(";

   $incomeType = new ArrayIterator($incomeType);
   $incomeType = new CachingIterator($incomeType);

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
function setFunds($funds){

   $string = "(";

   $funds = new ArrayIterator($funds);
   $funds = new CachingIterator($funds);

   foreach ($funds as $value){
      
      $string = $string." predefinedFundId = ".$value;  
      if($funds->hasNext()) {
         $string = $string." OR ";
      }else{
         $string = $string.")";
      }
  }
  return $string;
}


 











    