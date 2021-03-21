<?php 

if(isset($_POST['logsubmit'])){

   require 'connection.php';   // database connection file calling

   $email = $_POST['email'];
   $password = $_POST['password'];


   $sql = "SELECT * FROM user WHERE email=?";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      mysqli_close($con);
      header("Location:/fadts/home/index?error=db_conn_err");
      exit();     
   }
   else{
      mysqli_stmt_bind_param($stmt,"s",$email);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if($row = mysqli_fetch_assoc($result)){

         if(!password_verify($password, $row['password'])){
            mysqli_close($con);
            header("Location:/fadts/home/index?error=wrong_user_or_pass");
            exit();  
         }
         else{
            session_start();
            $_SESSION['userid'] = $row['userid'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['usernid'] = $row['usernid'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['userrole'] = $row['userrole'];
            $_SESSION['region'] = $row['region'];

            // this is for get user's region name to a session variale ////////////
            $regionId = $row['region'];
            $sql = "SELECT name From region WHERE regionId=$regionId";
            $stmt = mysqli_stmt_init($con);
            mysqli_stmt_prepare($stmt,$sql);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($result);
            $_SESSION['regionName'] = $row['name'];
            ///////////////////////////////////////////////////////////////////////


            if($_SESSION['userrole']=='villageofficer'){ $_SESSION['controller'] ='village'; $_SESSION['roleName'] = 'Village Officer'; }
            if($_SESSION['userrole']=='divisionalsec'){ $_SESSION['controller'] ='divisional'; $_SESSION['roleName'] = 'Divisional Secretary'; }
            if($_SESSION['userrole']=='ministry'){ $_SESSION['controller'] ='ministry'; $_SESSION['roleName'] = 'The Ministry';}
            if($_SESSION['userrole']=='auditor'){ $_SESSION['controller'] ='audit'; $_SESSION['roleName'] = 'Auditor'; }

            mysqli_close($con);
            header("Location:/fadts/includes/index");  
            exit();

         }
 
      }
      else{
         mysqli_close($con);
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