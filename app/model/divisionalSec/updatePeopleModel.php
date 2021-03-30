<?php 
session_start();

if(isset($_POST['submit'])){

   require 'connection.php';   // database connection file calling


   $name = $_POST['name'];
   $address = $_POST['address'];
   $validRegion = $_POST['validRegion'];
   $region = $_POST['region'];
   $trustee = $_POST['trustee'];
   $phone = $_POST['phone'];
   $phone_two = $_POST['phone_two'];
   $civilStatus = $_POST['civilStatus'];
   $jobType = $_POST['jobType'];
   $nid = $_POST['nid'];
   

   

   $sql = "UPDATE person SET name=?,address=?,validRegion=?,region=?,trustee=?,phone=?,phone_two=?,civilStatus=?,job=? WHERE nid=?";


   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location:/fadts/divisional/updatePeople?error=db_conn_err");
      exit();     
   }
   else{
      mysqli_stmt_bind_param($stmt,"ssssssssss",$name,$address,$validRegion,$region,$trustee,$phone,$phone_two,$civilStatus,$jobType,$nid);
      
      if(mysqli_stmt_execute($stmt)){
         mysqli_close($con);
         header("Location:/fadts/divisional/updatePeople?error=update_success");
         exit();  
      }
      else{
         mysqli_close($con);
         header("Location:/fadts/divisional/updatePeople?error=db_conn_err");
         exit();
      }     
   }
   mysqli_stmt_close($stmt);
   mysqli_close($con);
}
else{
   header("Location:/fadts/divisional/updatePeople?error=direct_access");
   exit();
}