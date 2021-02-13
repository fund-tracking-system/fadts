<?php
session_start();

require 'connection.php';
getIncomeTypes($con);
getFundList($con);

function getIncomeTypes($con){
   $sql = "SELECT * FROM incometype";
   $result = mysqli_query($con, $sql);
   $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
   $_SESSION['incomeTypes']=$result;

}
function getFundList($con){
   $sql = "SELECT * FROM predefinedfund";
   $result = mysqli_query($con, $sql);
   $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
   $_SESSION['fundList']=$result;
}

mysqli_close($con);
header("Location:/fadts/village/searchPeople");
exit();