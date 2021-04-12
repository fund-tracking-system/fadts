<?php
     // store results in session varibles 
session_start();

if(isset($_POST['submit'])){
  require 'connection.php';      //link to mysql connection

  $userId = $_SESSION['userid'];
  
  $name = $_POST['name'];
  $type = $_POST['type'];
  $date = $_POST['date'];
  $region = $_POST['region'];
  $description = $_POST['description'];

 
  $sql = "INSERT INTO disaster (name,type,date,description,creator) VALUES (?,?,?,?,?)";
  $stmt = mysqli_stmt_init($con);

  if(!mysqli_stmt_prepare($stmt,$sql)){
    mysqli_close($con);
    header("Location:/fadts/divisional/addDisaster?error=db_conn_err");
    exit();
  }else{
    mysqli_stmt_bind_param($stmt,"sssss",$name,$type,$date,$description,$userId);

    if(mysqli_stmt_execute($stmt)){
      $disasterId = mysqli_insert_id($con);

      foreach($region as $regionId) { 
        $sql = "INSERT INTO disasterregion (regionId,disasterId) VALUES ($regionId,$disasterId)";

        if(!mysqli_query($con,$sql)){
          mysqli_close($con);
          header("Location:/fadts/divisional/addDisaster?error=db_conn_err");
          exit();
        }
      }
      mysqli_close($con);
      header("Location:/fadts/divisional/addDisaster?error=success");
      exit();

    }else{
      mysqli_close($con);
      header("Location:/fadts/divisional/addDisaster?error=db_conn_err");
      exit();
    }
   

  }



}else{

}
     

    

     











    