<?php 

if(isset($_POST['logsubmit'])){

   require 'connection.php';   // database connection file calling

   //include CONN."connection.php";

   $username = $_POST['username'];
   $password = $_POST['password'];


   $sql = "SELECT * FROM user WHERE username=?";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location:/fadts/home/index?error=db_conn_err");
      exit();     
   }
   else{
      mysqli_stmt_bind_param($stmt,"s",$username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if($row = mysqli_fetch_assoc($result)){

         if($password != $row['password']){
            header("Location:/fadts/home/index?error=wrong_user_or_pass");
            exit();  
         }
         else{
            session_start();
            $_SESSION['userid'] = $row['userid'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['userrole'] = $row['userrole'];

            if($_SESSION['userrole']=='villageofficer'){ $controller ='village'; }
            if($_SESSION['userrole']=='divisionalsec'){ $controller ='divisional'; }
            if($_SESSION['userrole']=='ministry'){ $controller ='ministry'; }
            if($_SESSION['userrole']=='auditor'){ $controller ='audit'; }
            
            header("Location:/fadts/$controller/index");
            exit();

         }

      }
      else{
         header("Location:/fadts/home/index?error=wrong_user_or_pass");
         exit();
      }
   }
   mysqli_stmt_close($stmt);
   mysqli_close($con);
}
else{
   header("Location:/fadts/home/index?error=direct_access");
   exit();
}