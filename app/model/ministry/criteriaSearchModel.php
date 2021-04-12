<<<<<<< HEAD
<?php

session_start();

if(isset($_POST['submit'])){
   require 'connection.php';  //link to mysql connection   

   //  set flag
   //  $_SESSION['flag'] = 14;

   $ageStart = $_POST['ageStart']; 
   $ageEnd = $_POST['ageEnd']; 
   $disorder = $_POST['disorder'];
   $civilStatus = $_POST['civilStatus'];
   $regions= $_SESSION['fund_region'];
    
   echo $regions[0];
   

   if(isset($_POST['incomeType'])) $incomeType = $_POST['incomeType'];
   else $incomeType = "";

   $incomeStart = $_POST['incomeStart'];
   $incomeEnd = $_POST['incomeEnd']; 

   if(isset($_POST['funds'])) $funds = $_POST['funds'];
   else $funds="";

   

      $sql = queryGenerate($ageStart, $ageEnd, $disorder, $civilStatus, $incomeType, $incomeStart, $incomeEnd, $funds,$regions);
      // echo $sql;
      // exit();
      

//  SD (monthlyIncome BETWEEN 0 AND 1000000) AND(  (divisionregion=3 or provincial=3 or district=3 ) )

   

   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt, $sql)) {
      mysqli_close($con);
      header("Location:/fadts/ministry/searchRecipientView?searcherror2=db_conn_err1");
      exit();
   }
   else {
      if(mysqli_stmt_execute($stmt)) {
         $result = mysqli_stmt_get_result($stmt);
         $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
         $_SESSION['personList']=$result;
         mysqli_close($con);
         header("Location:/fadts/ministry/searchRecipientView");
         exit();
      }
      else {
         mysqli_close($con);
         header("Location:/fadts/ministry/searchRecipientView?searcherror2=db_conn_err2");
         exit();
      }
   }
}
else {
   header("Location:/fadts/ministry/searchRecipientView?error=direct_access_prohibited");
   exit();
} 

function queryGenerate($ageStart, $ageEnd, $disorder, $civilStatus, $incomeType, $incomeStart, $incomeEnd, $funds,$region) {
   $region=$_SESSION['region'];
   $count=0; 
   // echo $region;
   // exit();

   if(!empty($funds)) {
      $fundsCondiion = setFunds($funds);
      $query = "SELECT person.personId, nid, name, address, phone FROM person INNER JOIN eligibility ON person.personId = eligibility.personId WHERE (";
      
      $query = $query." ".$fundsCondiion;
      // $count++;
   }
   else {
      $query = "SELECT person.personId, nid, name, address, phone FROM person WHERE (";
   }

   if($ageStart!="" && $ageEnd!="") {
      $ageCondition = setAge($ageStart, $ageEnd);

      if ($count) {
         $query = $query." AND ".$ageCondition;
         $count++;
      }
      else {
         $query = $query." ".$ageCondition;
         $count++;
      }      
   }

   if($disorder!="") {
      $disorderCondition = "(disordered = $disorder)";
      
      if ($count) {
         $query = $query." AND ".$disorderCondition;
         $count++;
      }
      else {
         $query = $query." ".$disorderCondition;
         $count++;
      }  
   }

   if($civilStatus!="") {
      $civilStatusCondition = "(civilStatus = $civilStatus)";

      if ($count) {
         $query = $query." AND ".$civilStatusCondition;
         $count++;
      }
      else {
         $query = $query." ".$civilStatusCondition;
         $count++;
      } 
   }

   if(!empty($incomeType)) {
      $incomeTypeCondition = setIncomeType($incomeType);

      if ($count) {
         $query = $query." AND ".$incomeTypeCondition;
         $count++;
      }
      else {
         $query = $query." ".$incomeTypeCondition;
         $count++;
      } 
   }
   $regions= $_SESSION['fund_region'];
   
   if($regions[0]!=1){
      $regionCondition=setRegion($regions);
      if ($count) {
         $query = $query." AND ".$regionCondition;
         $count++;
      }
      else {
         $query = $query." ".$regionCondition;
         $count++;
      } 
   }
   

   

   if($incomeStart!="" && $incomeEnd!="") {
      $incomeValueCondition = setIncomeValue($incomeStart, $incomeEnd);

      if ($count) {
         $query = $query." AND ".$incomeValueCondition;
      }
      else {
         $query = $query." ".$incomeValueCondition;
      } 
   }
   



   $query = $query.")";  
   return $query;   
}


//(  (divisionregion=3 or provincial=3 or district=3 )AND(divisionregion=6 or provincial=6 or district=6) )

function setRegion($regions){
   print_r ($regions);

   $string = "(";

   $regions = new ArrayIterator($regions);
   $regions = new CachingIterator($regions);

   foreach($regions as $region){
      $string = $string."(division=$region OR province=$region OR district=$region )";
      if($regions->hasNext()) {
         $string = $string." OR ";
      }
      else {
         $string = $string.")";
      }
   }

   return $string;


}



function setAge($ageStart, $ageEnd) {   
   if($ageStart>$ageEnd){  //If user enters values like 60 to 30 
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

function setIncomeType($incomeType) {   
   $string = "(";

   $incomeType = new ArrayIterator($incomeType);
   $incomeType = new CachingIterator($incomeType);

   foreach ($incomeType as $value) {      
      $string = $string." job = '".$value."'";  
      if($incomeType->hasNext()) {
         $string = $string." OR ";
      }else{
         $string = $string.")";
      }
   }
   return $string;
}

function setIncomeValue($incomeStart, $incomeEnd) {
   $incomeValueCondition = "";

   if($incomeStart>$incomeEnd) {  //If user enters values like 60000 to 30000 
      $incomeEnd = $incomeStart + $incomeEnd;
      $incomeStart = $incomeEnd - $incomeStart;
      $incomeEnd = $incomeEnd - $incomeStart;
   }

   //(monthlyIncome BETWEEN 4000 AND 60000)
   if($incomeStart=="") {
      $incomeValueCondition = "(monthlyIncome < $incomeEnd)";    
   }
   else if($incomeEnd=="") {
      $incomeValueCondition = "(monthlyIncome > $incomeStart)";
   }
   else {
      $incomeValueCondition = "(monthlyIncome BETWEEN $incomeStart AND $incomeEnd)";
   }

   return $incomeValueCondition;
}

function setFunds($funds) {
   $string = "(";

   $funds = new ArrayIterator($funds);
   $funds = new CachingIterator($funds);

   foreach ($funds as $value) {      
      $string = $string." predefinedFundId = ".$value; 
      if($funds->hasNext()) {
         $string = $string." OR ";
      }
      else {
         $string = $string.")";
      }
   }
   return $string;
}


 











=======
<?php

session_start();

if(isset($_POST['submit'])){
   require 'connection.php';  //link to mysql connection 

   $ageStart = $_POST['ageStart']; 
   $ageEnd = $_POST['ageEnd']; 
   $disorder = $_POST['disorder'];
   $civilStatus = $_POST['civilStatus'];
   $regions= $_SESSION['fund_region'];
    
   echo $regions[0];
   

   if(isset($_POST['incomeType'])) $incomeType = $_POST['incomeType'];
   else $incomeType = "";

   $incomeStart = $_POST['incomeStart'];
   $incomeEnd = $_POST['incomeEnd']; 

   if(isset($_POST['funds'])) $funds = $_POST['funds'];
   else $funds="";

   

      $sql = queryGenerate($ageStart, $ageEnd, $disorder, $civilStatus, $incomeType, $incomeStart, $incomeEnd, $funds,$regions);
      // echo $sql;
      // exit();
      

//  SD (monthlyIncome BETWEEN 0 AND 1000000) AND(  (divisionregion=3 or provincial=3 or district=3 ) )

   

   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt, $sql)) {
      mysqli_close($con);
      header("Location:/fadts/ministry/searchRecipientView?searcherror2=db_conn_err1");
      exit();
   }
   else {
      if(mysqli_stmt_execute($stmt)) {
         $result = mysqli_stmt_get_result($stmt);
         $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
         $_SESSION['personList']=$result;
         mysqli_close($con);
         header("Location:/fadts/ministry/searchRecipientView");
         exit();
      }
      else {
         mysqli_close($con);
         header("Location:/fadts/ministry/searchRecipientView?searcherror2=db_conn_err2");
         exit();
      }
   }
}
else {
   header("Location:/fadts/ministry/searchRecipientView?error=direct_access_prohibited");
   exit();
} 

function queryGenerate($ageStart, $ageEnd, $disorder, $civilStatus, $incomeType, $incomeStart, $incomeEnd, $funds,$region) {
   $region=$_SESSION['region'];
   $count=0; 
   // echo $region;
   // exit();

   if(!empty($funds)) {
      $fundsCondiion = setFunds($funds);
      $query = "SELECT person.personId, nid, name, address, phone FROM person INNER JOIN eligibility ON person.personId = eligibility.personId WHERE (";
      
      $query = $query." ".$fundsCondiion;
      // $count++;
   }
   else {
      $query = "SELECT person.personId, nid, name, address, phone FROM person WHERE (";
   }

   if($ageStart!="" && $ageEnd!="") {
      $ageCondition = setAge($ageStart, $ageEnd);

      if ($count) {
         $query = $query." AND ".$ageCondition;
         $count++;
      }
      else {
         $query = $query." ".$ageCondition;
         $count++;
      }      
   }

   if($disorder!="") {
      $disorderCondition = "(disordered = $disorder)";
      
      if ($count) {
         $query = $query." AND ".$disorderCondition;
         $count++;
      }
      else {
         $query = $query." ".$disorderCondition;
         $count++;
      }  
   }

   if($civilStatus!="") {
      $civilStatusCondition = "(civilStatus = $civilStatus)";

      if ($count) {
         $query = $query." AND ".$civilStatusCondition;
         $count++;
      }
      else {
         $query = $query." ".$civilStatusCondition;
         $count++;
      } 
   }

   if(!empty($incomeType)) {
      $incomeTypeCondition = setIncomeType($incomeType);

      if ($count) {
         $query = $query." AND ".$incomeTypeCondition;
         $count++;
      }
      else {
         $query = $query." ".$incomeTypeCondition;
         $count++;
      } 
   }
   $regions= $_SESSION['fund_region'];
   
   if($regions[0]!=1){
      $regionCondition=setRegion($regions);
      if ($count) {
         $query = $query." AND ".$regionCondition;
         $count++;
      }
      else {
         $query = $query." ".$regionCondition;
         $count++;
      } 
   }
   

   

   if($incomeStart!="" && $incomeEnd!="") {
      $incomeValueCondition = setIncomeValue($incomeStart, $incomeEnd);

      if ($count) {
         $query = $query." AND ".$incomeValueCondition;
      }
      else {
         $query = $query." ".$incomeValueCondition;
      } 
   }
   



   $query = $query.")";  
   return $query;   
}


//(  (divisionregion=3 or provincial=3 or district=3 )AND(divisionregion=6 or provincial=6 or district=6) )

function setRegion($regions){
   print_r ($regions);

   $string = "(";

   $regions = new ArrayIterator($regions);
   $regions = new CachingIterator($regions);

   foreach($regions as $region){
      $string = $string."(division=$region OR province=$region OR district=$region )";
      if($regions->hasNext()) {
         $string = $string." OR ";
      }
      else {
         $string = $string.")";
      }
   }

   return $string;


}



function setAge($ageStart, $ageEnd) {   
   if($ageStart>$ageEnd){  //If user enters values like 60 to 30 
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

function setIncomeType($incomeType) {   
   $string = "(";

   $incomeType = new ArrayIterator($incomeType);
   $incomeType = new CachingIterator($incomeType);

   foreach ($incomeType as $value) {      
      $string = $string." job = '".$value."'";  
      if($incomeType->hasNext()) {
         $string = $string." OR ";
      }else{
         $string = $string.")";
      }
   }
   return $string;
}

function setIncomeValue($incomeStart, $incomeEnd) {
   $incomeValueCondition = "";

   if($incomeStart>$incomeEnd) {  //If user enters values like 60000 to 30000 
      $incomeEnd = $incomeStart + $incomeEnd;
      $incomeStart = $incomeEnd - $incomeStart;
      $incomeEnd = $incomeEnd - $incomeStart;
   }

   //(monthlyIncome BETWEEN 4000 AND 60000)
   if($incomeStart=="") {
      $incomeValueCondition = "(monthlyIncome < $incomeEnd)";    
   }
   else if($incomeEnd=="") {
      $incomeValueCondition = "(monthlyIncome > $incomeStart)";
   }
   else {
      $incomeValueCondition = "(monthlyIncome BETWEEN $incomeStart AND $incomeEnd)";
   }

   return $incomeValueCondition;
}

function setFunds($funds) {
   $string = "(";

   $funds = new ArrayIterator($funds);
   $funds = new CachingIterator($funds);

   foreach ($funds as $value) {      
      $string = $string." predefinedFundId = ".$value; 
      if($funds->hasNext()) {
         $string = $string." OR ";
      }
      else {
         $string = $string.")";
      }
   }
   return $string;
}


 











>>>>>>> cb3f905dd30fbd12a7aa0a8cf2a9591e4dea3ebd
    