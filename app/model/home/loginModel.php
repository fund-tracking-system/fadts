<?php 

function function_alert($message) { 
   echo '<script type="text/javascript">alert("' . $message . '")</script>';
} 

if(isset($_POST['logsubmit'])){

   require ('../../conn/connection.php');   // database connection file calling

   $username = $_POST['username'];
   $password    = $_POST['password'];

   echo '<script type="text/javascript">alert("' . $message . '")</script>';

   $sql = "SELECT * FROM user WHERE username=?";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      function_alert("Database Connection Error! \n Please Try Again.");
      header('Location:/fadts/home/index');
      exit();     
   }
   else{
      mysqli_stmt_bind_param($stmt,"s",$username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if($row = mysqli_fetch_assoc($result)){

         if($password != $row['password']){
            function_alert("Wrong User name or Password! \n Please Try Again.");
            header('Location:/fadts/home/index');
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
         function_alert("Wrong User name or Password! \n Please Try Again.");
         header('Location:/fadts/home/index');
         exit();
      }
   }
   mysqli_stmt_close($stmt);
   mysqli_close($con);
}
else{
   function_alert("Direct Access Not Aallowed!");
   header('Location:/fadts/home/index');
   exit();
}