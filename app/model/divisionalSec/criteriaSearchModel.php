<?php

session_start();
ob_start();

if(isset($_POST['submit'])){
   require 'connection.php';  //link to mysql connection

   $ageStart = $_POST['ageStart'];
   $ageEnd = $_POST['ageEnd']; 
   $disorder = $_POST['disorder'];
   $civilStatus = $_POST['civilStatus'];
   $region = $_POST['region']; 

   if(isset($_POST['incomeType'])) {
      // $incomeType = $_POST['incomeType'];
      if($_POST['incomeType']==1){
         $incomeType="Goverment";
      }
      else if($_POST['incomeType']==2){
         $incomeType="Private";
      }
      else if($_POST['incomeType']==3){
         $incomeType="Retired";
      }
      else if($_POST['incomeType']==4){
         $incomeType="Business ";
      }
      else if($_POST['incomeType']==5){
         $incomeType="SelfEmployee";
      }
      else if($_POST['incomeType']==6){
         $incomeType="Unemployed";
      }
   }
   else{ 
      $incomeType = "";
   }

   $incomeStart = $_POST['incomeStart'];
   $incomeEnd = $_POST['incomeEnd']; 



   if(isset($_POST['funds'])) $funds = $_POST['funds'];
   else $funds="";

   $sql = queryGenerate($ageStart, $ageEnd, $disorder, $civilStatus, $incomeType, $incomeStart, $incomeEnd, $funds,$region);
//    echo $sql;
//    exit();

   $stmt = mysqli_stmt_init($con);
   echo $sql;

   if(!mysqli_stmt_prepare($stmt, $sql)) {
      mysqli_close($con);
      header("Location:/fadts/divisional/criteriaResultView?searcherror2=db_conn_err1");
      exit();
   }
   else {
      if(mysqli_stmt_execute($stmt)) {
         $result = mysqli_stmt_get_result($stmt);
         $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
         $_SESSION['personList']=$result;
         var_dump($result);
        //  exit();
         mysqli_close($con);
         header("Location:/fadts/divisional/criteriaResultView");
         exit();
      }
      else {
         mysqli_close($con);
         header("Location:/fadts/divisional/criteriaResultView?searcherror2=db_conn_err2");
         exit();
      }
   }
}
else {
   header("Location:/fadts/divisional/criteriaResultView?error=direct_access_prohibited");
   exit();
} 

ob_end_flush();
function queryGenerate($ageStart, $ageEnd, $disorder, $civilStatus, $incomeType, $incomeStart, $incomeEnd, $funds,$region) {
   $count=0; 

   if(!empty($funds)) {
      $fundsCondiion = setFunds($funds);
      $query = "SELECT person.personId, nid, person.name, address, phone FROM person INNER JOIN eligibility ON person.personId = eligibility.personId INNER JOIN region ON person.region=region.regionId  WHERE (((person.region = $region) OR (region.superRegion=$region)) AND";
      
      $query = $query." ".$fundsCondiion;
      $count++;
   }
   else {
      $query = "SELECT person.personId, nid, person.name, address, phone FROM person INNER JOIN region ON person.region=region.regionId  WHERE (((person.region = $region) OR (region.superRegion=$region)) ";
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
 
 
  

 











    