<?php
     // store results in session varibles 
session_start();

if(isset($_POST['submit'])){
  require 'connection.php';      //link to mysql connection

  $userId = $_SESSION['userid'];
  
  $type = $_POST['type'];
  $name = $_POST['name'];
  $date = $_POST['date'];
  $region = $_POST['region'];
  $description = $_POST['description'];

  $sql = "INSERT INTO disaster (name,type,date,description,creator) VALUES (?,?,?,?,?)";
  $stmt = mysqli_stmt_init($con);

  if(!mysqli_stmt_prepare($stmt,$sql)){
    mysqli_close($con);
    header("Location:/fadts/home/index?error=db_conn_err");
    exit();
  }else{

  }



}else{

}
     

    

     











    