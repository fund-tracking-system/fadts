<?php 

if(isset($_POST['fogsubmit'])){

   require ('../../conn/connection.php');   // database connection file calling

   $username = $_POST['username'];
   $email    = $_POST['email'];

   $sql = "SELECT * FROM user WHERE (username=?) AND (email=?)";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      header('Location:/fadts/home/forgot');
      exit();   
   }
   else{
      mysqli_stmt_bind_param($stmt,"ss",$username,$email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultcheck = mysqli_stmt_num_rows($stmt);

      if($resultcheck == 1){
         echo "user found";
         header('Location: /fadts/home/index');
      }
      else{
         echo "results not found";
         header('Location:/fadts/home/index');
         exit();
      }
   }
   mysqli_stmt_close($stmt);
   mysqli_close($con);
}
else{
   header('Location:/fadts/home/index?error=direct_access_not_allowed');
   exit();
}