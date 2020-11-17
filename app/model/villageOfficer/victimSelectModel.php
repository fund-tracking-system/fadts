<?php
     // store results in session varibles 
session_start();

if(isset($_POST['submit'])){
  require 'connection.php';      //link to mysql connection



  $disasterId = $_POST['disasterId'];
  $userId = $_SESSION['userid']; 
  $personId = $_POST['personId'];
  $totalDamage = $_POST['totalDamage'];
  $location = $_POST['location'];
  $description = $_POST['description'];

  
  

  $sql = "INSERT INTO victim (disasterId,personId,totalDamage,location,description,userId) VALUES (?,?,?,?,?,?)";
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
     

    

     











    