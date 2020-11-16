<?php 
session_start();

if(isset($_POST['submit'])){

   require 'connection.php';   // database connection file calling

   $address = $_POST['address'];
   $headOfFamily = $_POST['headOfFamily'];
   $monthlyIncome = $_POST['monthlyIncome'];
   $disordered = $_POST['disordered'];
   $civilStatus = $_POST['civilStatus'];
   $job = $_POST['job'];
   $dead = $_POST['dead'];
   $nid = $_POST['nid'];
   

   $sql = "UPDATE person SET address=?,headOfFamily=?,monthlyIncome=?,disordered=?,civilStatus=?,job=?,dead=? WHERE nid=?";


   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location:/fadts/village/updatePeople?error=db_conn_err");
      exit();     
   }
   else{
      mysqli_stmt_bind_param($stmt,"ssssssss",$address,$headOfFamily,$monthlyIncome,$disordered,$civilStatus,$job,$dead,$nid);
      
      if(mysqli_stmt_execute($stmt)){
         mysqli_close($con);
         header("Location:/fadts/village/updatePeople?error=update_success");
         exit();  
      }
      else{
         mysqli_close($con);
         header("Location:/fadts/village/updatePeople?error=db_conn_err");
         exit();
      }     
   }
   mysqli_stmt_close($stmt);
   mysqli_close($con);
}
else{
   header("Location:/fadts/village/updatePeople?error=direct_access");
   exit();
}